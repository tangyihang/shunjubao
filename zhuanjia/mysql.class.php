<?php
/*
 * System
 * 
 * Copyright (c) 2008-2009 by ddcai, Inc. All rights reserved.
 *
 *  2009-03-06 
*/

class DB
{
	//database connection
	var $con = FALSE;
	
	function __construct($MYSQL_HOST_DB="", $MYSQL_USER_DB="", $MYSQL_PASS_DB="",$MYSQL_DB_DB=""){
		global $MYSQL_HOST,$MYSQL_USER,$MYSQL_PASS,$MYSQL_DB;
		if(empty($MYSQL_HOST_DB)||empty($MYSQL_USER_DB)){
			$MYSQL_HOST_DB = $MYSQL_HOST;
			$MYSQL_USER_DB = $MYSQL_USER;
			$MYSQL_PASS_DB = $MYSQL_PASS;
			$MYSQL_DB_DB   = $MYSQL_DB;
		}
		$this->_DB($MYSQL_HOST_DB,$MYSQL_USER_DB,$MYSQL_PASS_DB,$MYSQL_DB_DB);
	}


	function _DB($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS, $MYSQL_DB){
		$this->con = @mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS) or die("Could not connect to database");

		if ($this->con){
			@mysql_select_db($MYSQL_DB, $this->con) or die ("Could not select database");
		}
		@mysql_query("SET NAMES 'UTF8'",$this->con);
		return $this->con;
	}

	function Query($sql, $tran = false){
		$this->sql = $sql;
		if ($tran){
			$this->result = mysql_query($this->sql,$this->con) OR $this->RollBack();
			return $this->result;
		}else{
		    //mysql_query("SET NAMES 'utf8'",$this->con);
			$this->result = mysql_query($this->sql,$this->con);
			return $this->result;
		}
	}
	
	function RollBack(){
		$this->Query("ROLLBACK;");
		die("MySQL ROLLBACK;");
	}

	function NumRows($result){
		$this->result = $result;
		return mysql_num_rows($this->result);
	}

	function FetchRow($result){
		$this->result = $result;
		return @mysql_fetch_row($this->result);
	}
	
	function FetchAssoc($result){
		$this->result = $result;
		return @mysql_fetch_assoc($this->result);
	}

	function FetchArray($result){
		$this->result = $result;
		return @mysql_fetch_array($this->result, MYSQL_ASSOC);
	}
	function FetchArray2($result){
		$this->result = $result;
		return @mysql_fetch_array($this->result, MYSQL_BOTH);
	}
	
	function FetchObject($result){
		$this->result = $result;
		return @mysql_fetch_object($this->result);
	}

	function FreeResult($result){
		$this->result = $result;
		return @mysql_free_result($this->result);
	}
	
	//影响行数
	function AffectedRows(){
		return @mysql_affected_rows($this->con);
	}
	
	function DataSeek($result){
	//复位记录集指针
		$this->result = $result;
		return mysql_data_seek($this->result,0);
	}
	
	function InsertID(){
		return @mysql_insert_id($this->con);
	}

	function Close(){
		if($this->con){
			@mysql_close($this->con);
		}
	}
	
	function Result($result, $row = 0) {

		$this->result = $result;

		return @mysql_result($this->result, $row);

	}
	
}
?>
