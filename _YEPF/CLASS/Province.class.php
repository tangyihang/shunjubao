<?php
/**
 * @name Province.class.php
 * @desc 省市对照类,兼容空间产品
 * @author 曹晓冬
 * @createtime 2009-04-07 14:41
 * @updatetime 
 * 
 */
class Province
{
	/**
	 * @name getProvinceList
	 * @desc 获得全国省及直辖市列表
	 * @return array
	 */
	public function getProvinceList()
	{
		$location_array = array(
			11 => '北京市',
			12 => '天津市',
			13 => '河北',
			14 => '山西',
			15 => '内蒙古',
			21 => '辽宁',
			22 => '吉林',
			23 => '黑龙江',
			31 => '上海市',
			32 => '江苏',
			33 => '浙江',
			34 => '安徽',
			35 => '福建',
			36 => '江西',
			37 => '山东',
			41 => '河南',
			42 => '湖北',
			43 => '湖南',
			44 => '广东',
			45 => '广西',
			46 => '海南',
			50 => '重庆市',
			51 => '四川',
			52 => '贵州',
			53 => '云南',
			54 => '西藏',
			61 => '陕西',
			62 => '甘肃',
			63 => '青海',
			64 => '宁夏',
			65 => '新疆',
			71 => '台湾',
			81 => '香港',
			82 => '澳门',
			99 => '国外'
		);
		return $location_array;
	}
	/**
	 * @name getCityList
	 * @desc 获得城市列表
	 * @param int $province 返回指定省的城市,默认返回全部
	 * @return array
	 */
	public function getCityList($province = 0)
	{
		$sublocation_array = array(
			1101 => '东城',
			1102 => '西城',
			1103 => '崇文',
			1104 => '宣武',
			1105 => '朝阳',
			1106 => '丰台',
			1107 => '石景山',
			1108 => '海淀',
			1109 => '门头沟',
			1111 => '房山',
			1112 => '通州',
			1113 => '顺义',
			1121 => '昌平',
			1124 => '大兴',
			1126 => '平谷',
			1127 => '怀柔',
			1128 => '密云',
			1129 => '延庆',
			1201 => '和平',
			1202 => '河东',
			1203 => '河西',
			1204 => '南开',
			1205 => '河北',
			1206 => '红桥',
			1207 => '塘沽',
			1208 => '汉沽',
			1209 => '大港',
			1210 => '东丽',
			1211 => '西青',
			1212 => '津南',
			1213 => '北辰',
			1221 => '宁河',
			1222 => '武清',
			1223 => '静海',
			1224 => '宝坻',
			1225 => '蓟县',
			1301 => '石家庄',
			1302 => '唐山',
			1303 => '秦皇岛',
			1304 => '邯郸',
			1305 => '邢台',
			1306 => '保定',
			1307 => '张家口',
			1308 => '承德',
			1309 => '沧州',
			1310 => '廊坊',
			1311 => '衡水',
			1401 => '太原',
			1402 => '大同',
			1403 => '阳泉',
			1404 => '长治',
			1405 => '晋城',
			1406 => '朔州',
			1407 => '晋中',
			1408 => '运城',
			1409 => '忻州',
			1410 => '临汾',
			1411 => '吕梁',
			1501 => '呼和浩特',
			1502 => '包头',
			1503 => '乌海',
			1504 => '赤峰',
			1505 => '通辽',
			1506 => '鄂尔多斯',
			1507 => '呼伦贝尔',
			1508 => '巴彦淖尔',
			1509 => '乌兰察布',
			1510 => '巴彦淖尔盟',
			1511 => '海拉尔',
			1512 => '集宁',
			1513 => '巴彦浩特',
			1514 => '乌兰浩特',
			1515 => '锡林浩特',
			1516 => '临河',
			1517 => '乌兰察布盟',
			1518 => '兴安盟',
			1519 => '锡林郭勒盟',
			1520 => '阿拉善盟',
			1522 => '兴安',
			1525 => '锡林郭勒',
			1529 => '阿拉善',
			2101 => '沈阳',
			2102 => '大连',
			2103 => '鞍山',
			2104 => '抚顺',
			2105 => '本溪',
			2106 => '丹东',
			2107 => '锦州',
			2108 => '营口',
			2109 => '阜新',
			2110 => '辽阳',
			2111 => '盘锦',
			2112 => '铁岭',
			2113 => '朝阳',
			2114 => '葫芦岛',
			2201 => '长春',
			2202 => '吉林',
			2203 => '四平',
			2204 => '辽源',
			2205 => '通化',
			2206 => '白山',
			2207 => '松原',
			2208 => '白城',
			2209 => '梅河口',
			2210 => '珲春',
			2211 => '延吉',
			2224 => '延边',
			2301 => '哈尔滨',
			2302 => '齐齐哈尔',
			2303 => '鸡西',
			2304 => '鹤岗',
			2305 => '双鸭山',
			2306 => '大庆',
			2307 => '伊春',
			2308 => '佳木斯',
			2309 => '七台河',
			2310 => '牡丹江',
			2311 => '黑河',
			2312 => '绥化',
			2313 => '未知',
			2327 => '大兴安岭',
			3101 => '黄浦',
			3102 => '南区',
			3103 => '卢湾',
			3104 => '徐汇',
			3105 => '长宁',
			3106 => '静安',
			3107 => '普陀',
			3108 => '闸北',
			3109 => '虹口',
			3110 => '杨浦',
			3112 => '闵行',
			3113 => '宝山',
			3114 => '嘉定',
			3115 => '浦东新区',
			3116 => '金山',
			3117 => '松江',
			3125 => '南汇',
			3126 => '奉贤',
			3129 => '青浦',
			3130 => '崇明',
			3201 => '南京',
			3202 => '无锡',
			3203 => '徐州',
			3204 => '常州',
			3205 => '苏州',
			3206 => '南通',
			3207 => '连云港',
			3208 => '淮安',
			3209 => '盐城',
			3210 => '扬州',
			3211 => '镇江',
			3212 => '泰州',
			3213 => '宿迁',
			3301 => '杭州',
			3302 => '宁波',
			3303 => '温州',
			3304 => '嘉兴',
			3305 => '湖州',
			3306 => '绍兴',
			3307 => '金华',
			3308 => '衢州',
			3309 => '舟山',
			3310 => '台州',
			3311 => '丽水',
			3401 => '合肥',
			3402 => '芜湖',
			3403 => '蚌埠',
			3404 => '淮南',
			3405 => '马鞍山',
			3406 => '淮北',
			3407 => '铜陵',
			3408 => '安庆',
			3410 => '黄山',
			3411 => '滁州',
			3412 => '阜阳',
			3413 => '宿州',
			3414 => '巢湖',
			3415 => '六安',
			3416 => '亳州',
			3417 => '池州',
			3418 => '宣城',
			3501 => '福州',
			3502 => '厦门',
			3503 => '莆田',
			3504 => '三明',
			3505 => '泉州',
			3506 => '漳州',
			3507 => '南平',
			3508 => '龙岩',
			3509 => '宁德',
			3601 => '南昌',
			3602 => '景德镇',
			3603 => '萍乡',
			3604 => '九江',
			3605 => '新余',
			3606 => '鹰潭',
			3607 => '赣州',
			3608 => '吉安',
			3609 => '宜春',
			3610 => '抚州',
			3611 => '上饶',
			3701 => '济南',
			3702 => '青岛',
			3703 => '淄博',
			3704 => '枣庄',
			3705 => '东营',
			3706 => '烟台',
			3707 => '潍坊',
			3708 => '济宁',
			3709 => '泰安',
			3710 => '威海',
			3711 => '日照',
			3712 => '莱芜',
			3713 => '临沂',
			3714 => '德州',
			3715 => '聊城',
			3716 => '滨州',
			3717 => '菏泽',
			4101 => '郑州',
			4102 => '开封',
			4103 => '洛阳',
			4104 => '平顶山',
			4105 => '安阳',
			4106 => '鹤壁',
			4107 => '新乡',
			4108 => '焦作',
			4109 => '濮阳',
			4110 => '许昌',
			4111 => '漯河',
			4112 => '三门峡',
			4113 => '南阳',
			4114 => '商丘',
			4115 => '信阳',
			4116 => '周口',
			4117 => '驻马店',
			4118 => '潢川',
			4201 => '武汉',
			4202 => '黄石',
			4203 => '十堰',
			4204 => '仙桃',
			4205 => '宜昌',
			4206 => '襄樊',
			4207 => '鄂州',
			4208 => '荆门',
			4209 => '孝感',
			4210 => '荆州',
			4211 => '黄冈',
			4212 => '咸宁',
			4213 => '随州',
			4214 => '江汉',
			4215 => '天门',
			4216 => '潜江',
			4217 => '神农架林区',
			4228 => '恩施',
			4301 => '长沙',
			4302 => '株洲',
			4303 => '湘潭',
			4304 => '衡阳',
			4305 => '邵阳',
			4306 => '岳阳',
			4307 => '常德',
			4308 => '张家界',
			4309 => '益阳',
			4310 => '郴州',
			4311 => '永州',
			4312 => '怀化',
			4313 => '娄底',
			4315 => '吉首',
			4331 => '湘西',
			4401 => '广州',
			4402 => '韶关',
			4403 => '深圳',
			4404 => '珠海',
			4405 => '汕头',
			4406 => '佛山',
			4407 => '江门',
			4408 => '湛江',
			4409 => '茂名',
			4410 => '顺德',
			4411 => '潮阳',
			4412 => '肇庆',
			4413 => '惠州',
			4414 => '梅州',
			4415 => '汕尾',
			4416 => '河源',
			4417 => '阳江',
			4418 => '清远',
			4419 => '东莞',
			4420 => '中山',
			4451 => '潮州',
			4452 => '揭阳',
			4453 => '云浮',
			4501 => '南宁',
			4502 => '柳州',
			4503 => '桂林',
			4504 => '梧州',
			4505 => '北海',
			4506 => '防城港',
			4507 => '钦州',
			4508 => '贵港',
			4509 => '玉林',
			4510 => '百色',
			4511 => '贺州',
			4512 => '河池',
			4513 => '来宾',
			4514 => '崇左',
			4601 => '海口',
			4602 => '三亚',
			4603 => '儋州',
			5001 => '万州',
			5002 => '涪陵',
			5003 => '渝中',
			5004 => '大渡口',
			5005 => '江北',
			5006 => '沙坪坝',
			5007 => '九龙坡',
			5008 => '南岸',
			5009 => '北碚',
			5010 => '万盛',
			5011 => '双桥',
			5012 => '渝北',
			5013 => '巴南',
			5021 => '长寿',
			5022 => '綦江',
			5023 => '潼南',
			5024 => '铜梁',
			5025 => '大足',
			5026 => '荣昌',
			5027 => '璧山',
			5028 => '梁平',
			5029 => '城口',
			5030 => '丰都',
			5031 => '垫江',
			5032 => '武隆',
			5033 => '忠县',
			5034 => '开县',
			5035 => '云阳',
			5036 => '奉节',
			5037 => '巫山',
			5038 => '巫溪',
			5039 => '黔江',
			5040 => '石柱',
			5041 => '秀山',
			5042 => '酉阳',
			5043 => '彭水',
			5081 => '江津',
			5082 => '合川',
			5083 => '永川',
			5084 => '南川',
			5101 => '成都',
			5102 => '达川',
			5103 => '自贡',
			5104 => '攀枝花',
			5105 => '泸州',
			5106 => '德阳',
			5107 => '绵阳',
			5108 => '广元',
			5109 => '遂宁',
			5110 => '内江',
			5111 => '乐山',
			5113 => '南充',
			5114 => '眉山',
			5115 => '宜宾',
			5116 => '广安',
			5117 => '达州',
			5118 => '雅安',
			5119 => '巴中',
			5120 => '资阳',
			5132 => '阿坝',
			5133 => '甘孜',
			5134 => '凉山',
			5201 => '贵阳',
			5202 => '六盘水',
			5203 => '遵义',
			5204 => '安顺',
			5205 => '兴义',
			5206 => '凯里',
			5207 => '都匀',
			5222 => '铜仁',
			5223 => '黔西南',
			5224 => '毕节',
			5226 => '黔东南',
			5227 => '黔南',
			5301 => '昆明',
			5302 => '怒江',
			5303 => '曲靖',
			5304 => '玉溪',
			5305 => '保山',
			5306 => '昭通',
			5307 => '丽江',
			5308 => '思茅',
			5309 => '临沧',
			5310 => '版纳',
			5323 => '楚雄',
			5325 => '红河',
			5326 => '文山',
			5328 => '西双版纳',
			5329 => '大理',
			5331 => '德宏',
			5333 => '怒江傈',
			5334 => '迪庆',
			5401 => '拉萨',
			5421 => '昌都',
			5422 => '山南',
			5423 => '日喀则',
			5424 => '那曲',
			5425 => '阿里',
			5426 => '林芝',
			6101 => '西安',
			6102 => '铜川',
			6103 => '宝鸡',
			6104 => '咸阳',
			6105 => '渭南',
			6106 => '延安',
			6107 => '汉中',
			6108 => '榆林',
			6109 => '安康',
			6110 => '商洛',
			6201 => '兰州',
			6202 => '嘉峪关',
			6203 => '金昌',
			6204 => '白银',
			6205 => '天水',
			6206 => '武威',
			6207 => '张掖',
			6208 => '平凉',
			6209 => '酒泉',
			6210 => '庆阳',
			6211 => '定西',
			6212 => '陇南',
			6229 => '临夏',
			6230 => '甘南',
			6301 => '西宁',
			6302 => '格尔木',
			6321 => '海东',
			6322 => '海北',
			6323 => '黄南',
			6325 => '海南',
			6326 => '果洛',
			6327 => '玉树',
			6328 => '海西',
			6401 => '银川',
			6402 => '石嘴山',
			6403 => '吴忠',
			6404 => '固原',
			6405 => '中卫',
			6501 => '乌鲁木齐',
			6502 => '克拉玛依',
			6503 => '奎屯',
			6521 => '吐鲁番',
			6522 => '哈密',
			6523 => '昌吉',
			6527 => '博尔塔拉',
			6528 => '巴音郭楞',
			6529 => '阿克苏',
			6530 => '克孜勒苏',
			6531 => '喀什',
			6532 => '和田',
			6540 => '伊犁',
			6542 => '塔城',
			6543 => '阿勒泰',
			6544 => '石河子',
			7101 => '台湾',
			8101 => '香港',
			8201 => '澳门',
			9901 => '美国',
			9902 => '澳大利亚',
			9903 => '加拿大',
			9904 => '英国',
			9905 => '日本',
			9906 => '新加坡',
			9907 => '德国',
			9908 => '法国',
			9909 => '韩国',
			9910 => '比利时',
			9911 => '新西兰',
			9912 => '瑞典',
			9913 => '瑞士',
			9914 => '荷兰',
			9915 => '阿联酋',
			9916 => '芬兰',
			9917 => '丹麦',
			9918 => '泰国',
			9919 => '西班牙',
			9921 => '意大利',
			9922 => '挪威',
			9924 => '奥地利',
			9925 => '爱尔兰',
			9926 => '马来西亚',
			9927 => '尼日利亚',
			9928 => '俄罗斯',
			9929 => '巴西',
			9930 => '南非',
			9931 => '葡萄牙',
			9932 => '墨西哥',
			9933 => '印尼',
			9934 => '越南',
			9935 => '以色列',
			9936 => '科威特',
			9937 => '希腊',
			9938 => '匈牙利',
			9999 => '其他',
		);
		if($province == 0)
		{
			return 	$sublocation_array ;
		}
		$tables = array();
		foreach ($sublocation_array as $k => $v)
		{
			if(substr($k, 0, 2) == $province)
			{
				$tables[$k] = $v;
			}
		}
		return $tables;
	}
}
?>