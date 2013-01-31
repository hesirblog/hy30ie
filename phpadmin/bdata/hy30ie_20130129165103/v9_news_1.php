<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_news`;");
E_C("CREATE TABLE `v9_news` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` varchar(80) NOT NULL DEFAULT '',
  `style` char(24) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `keywords` char(40) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `posids` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `sysadd` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8");
E_D("replace into `v9_news` values('1','9','0','温家宝：我还有几个月就归隐林泉 希望人们把我忘记','','','温家宝 还有 几个月',' 温家宝20日晚上抵达泰国首都曼谷，展开对泰国正式访问。温家宝离开机场后，直接前往泰国中华总商会与泰国华侨华人代表会面，并发表讲话。...','1','http://localhost.hy30ie.com/html/dynamic/9-1-1.html','0','99','0','0','test','1353579188','1358150458');");
E_D("replace into `v9_news` values('2','9','0','黄奇帆：重庆市政府将于明年元月进行换届','','http://hy.30ie.com/uploadfile/2012/1122/20121122061542254.jpg','黄奇帆 重庆市 政府','黄奇帆原标题：重庆市政府党组学习贯彻党的十八大精神黄奇帆主持并讲话，要求学深学透十八大精神，推动科学发展、富民兴渝华龙网讯（记者商...','1','http://localhost.hy30ie.com/html/dynamic/9-2-1.html','0','99','0','0','test','1353579342','1358150315');");
E_D("replace into `v9_news` values('3','9','0','练洪洋：农妇跪访总理乱了谁的“秩序”','','','洪洋 农妇 总理','在云南彝良地震期间，因跪访视察途中的温家宝总理反映征地问题，涉嫌扰乱公共秩序，11月19日，彝良县发界村村民梁永兰被当地警方行政拘留7...','1','http://localhost.hy30ie.com/html/dynamic/9-3-1.html','0','99','1','0','admin','1353724693','1358150273');");
E_D("replace into `v9_news` values('4','9','0','山西晋中火锅店爆炸燃烧事故致14人死亡47人受伤','','http://hy.30ie.com/uploadfile/2012/1124/20121124104054869.jpg','山西 晋中 火锅店','11月23日19时52分，山西省晋中市寿阳县一家名为喜羊羊的火锅店忽然发生爆炸燃烧事故。目前，现场火势已被扑灭，120急救中心也将受伤人员送...','1','http://localhost.hy30ie.com/html/dynamic/9-4-1.html','0','99','1','0','admin','1353724738','1358150255');");
E_D("replace into `v9_news` values('5','10','0','雷政富视频截图发布至免职63小时 被指被微博秒杀','','http://hy.30ie.com/uploadfile/2012/1124/20121124104156767.jpg','视频 截图 发布','CFP图原标题：不到三天 办掉雷书记一起爆料被证实，它的主角是一位官员被拍摄到一段不雅的视频。11月20日晚疑似重庆市北碚区区委书记雷政...','1','http://localhost.hy30ie.com/html/view/10-5-1.html','0','99','1','0','admin','1353724856','1358150366');");
E_D("replace into `v9_news` values('6','10','0','外交部回应菲越抗议：中国新版护照不针对特定国家','','http://hy.30ie.com/uploadfile/2012/1124/20121124104243749.jpg','外交部 回应 抗议','图：护照里的地图标注了中国在南海的主权范围越南和菲律宾分别就中国新版电子护照中的中国地图、包含南海九段线提出抗议，同时也发生数起中...','1','http://localhost.hy30ie.com/html/view/10-6-1.html','0','99','1','0','admin','1353724919','1358150350');");
E_D("replace into `v9_news` values('7','10','0','最高检约谈李庄被告知“绝不能让重庆检方调查”','','http://hy.30ie.com/uploadfile/2012/1124/20121124104335414.jpg','最高检 约谈 李庄','昨天中午，李庄、王誓华律师、龚刚华、龚云飞（从右至左）在约谈后留影。王誓华律师供图原标题：李庄控告重庆市公安局专案组涉嫌徇私枉法获...','1','http://localhost.hy30ie.com/html/view/10-7-1.html','0','99','1','0','admin','1353724967','1358150334');");
E_D("replace into `v9_news` values('8','11','0','李克强要求官员在座谈会不要念稿','','','李克强 要求 官员','李克强：座谈会不要念稿子央视网消息：经常出席国务院会议的地方领导同志都知道，参加李克强副总理主持的会，仅准备好一份发...','1','http://localhost.hy30ie.com/html/jzzx/11-8-1.html','0','99','1','0','admin','1353725018','1358148620');");
E_D("replace into `v9_news` values('9','11','0','李克强要求推进西部开发开放','','','李克强 要求 推进','李克强要求推进西部开发开放据新华社银川9月13日电 11日至12日，在出席2012中国 （宁夏）国际投资贸易洽谈会暨第三届中阿经贸论...','1','http://localhost.hy30ie.com/html/jzzx/11-9-1.html','0','99','1','0','admin','1353725051','1358148593');");
E_D("replace into `v9_news` values('10','11','0','李克强：开放包容是亚洲健康与可持续发展客观要求','','','李克强 开放 包容','中新网博鳌4月2日电(记者 余湛奕)中国国务院副总理李克强2日上午在海南省博鳌出席博鳌亚洲论坛2012年年会开幕式时表示，秉承开放包容，是...','1','http://localhost.hy30ie.com/html/jzzx/11-10-1.html','0','99','1','0','admin','1353725115','1358148704');");
E_D("replace into `v9_news` values('16','11','0','做地方站运营经验的总结','','','地方 运营 经验',' 很多做互联网的人都有做地方站的想法，但是，各个地区的门户网站都有很多了，而且还有不断的新网站出来，故地方站的做法虽然简单，但发展...','1','http://localhost.hy30ie.com/html/jzzx/11-16-1.html','0','99','1','0','admin','1358151163','1358151392');");
E_D("replace into `v9_news` values('11','12','0','管家A计划','','http://hy.30ie.com/uploadfile/taocan/taocan1.jpg','管家 A 计划','管家A计划1、本计划可让企业在网络上的产品信息覆盖率有效提高，并且信息质量及保有量达到70%以上2、并且增强企业网络品牌知名度3、可给企...','1','http://localhost.hy30ie.com/html/package/12-11-1.html','1','99','1','0','admin','1358144229','1358155156');");
E_D("replace into `v9_news` values('12','12','0','管家B计划','','http://hy.30ie.com/uploadfile/taocan/taocan2.jpg','管家 B 计划','管家B计划1、本计划可让企业在网络上的产品信息覆盖率有效提高，并且信息质量及保有量达到80%以上2、并且增强企业网络品牌知名度3、可给企...','1','http://localhost.hy30ie.com/html/package/12-12-1.html','2','99','1','0','admin','1358144334','1358155133');");
E_D("replace into `v9_news` values('13','12','0','管家C计划','','http://hy.30ie.com/uploadfile/taocan/taocan3.jpg','管家 C 计划','管家C计划1、本计划可让企业在网络上的产品信息覆盖率有效提高，并且信息质量及保有量达到80%以上2、并且增强企业网络品牌知名度3、可给企...','1','http://localhost.hy30ie.com/html/package/12-13-1.html','3','99','1','0','admin','1358144388','1358155110');");
E_D("replace into `v9_news` values('14','12','0','管家黄金计划','','http://hy.30ie.com/uploadfile/taocan/taocan4.jpg','管家 黄金 计划','管家黄金计划-如果您的网站有流量，但是几乎没有订单-所在行业业务关键词比较多，希望能够获得更多潜在客户-想从众多竞争对手中脱颖而出，...','1','http://localhost.hy30ie.com/html/package/12-14-1.html','4','99','1','0','admin','1358144430','1358155083');");
E_D("replace into `v9_news` values('15','12','0','管家白金计划','','http://hy.30ie.com/uploadfile/taocan/taocan5.jpg','管家 白金 计划','管家白金计划-如果您的网站有流量，也有订单，但是订单远远低于同行-所在行业业务关键词比较多，希望能够获得更多潜在客户-想从众多竞争对...','1','http://localhost.hy30ie.com/html/package/12-15-1.html','5','99','1','0','admin','1358144480','1358155056');");
E_D("replace into `v9_news` values('33','20','0','大连蒂姆服装有限公司','','','大连 蒂姆 服装','大连蒂姆服装有限公司','0','http://localhost.hy30ie.com/html/customer/20-33-1.html','0','99','1','0','admin','1358402190','1358402235');");
E_D("replace into `v9_news` values('17','10','0','网站如何留住回头客方法探析','','','网站 如何 留住','有人很关注网站的流量，认为流量高了可以说明、证明很多东西，可能网站刚开始能带来很多流量，可是这些流量很不稳定，时高时低，为什么呢？...','1','http://localhost.hy30ie.com/html/view/10-17-1.html','0','99','1','0','admin','1358151420','1358151471');");
E_D("replace into `v9_news` values('18','10','0','看准网站质量从友情链接四步法做起','','','看准 网站 质量','如果说一个网站的灵魂源于内容，那么能支撑起网站整个生命力的就属友情链接莫属。此话不一点都不夸，友情链接是一个新站上路必经的道路，有...','1','http://localhost.hy30ie.com/html/view/10-18-1.html','0','99','1','0','admin','1358151485','1358151526');");
E_D("replace into `v9_news` values('19','10','0','SEO优化网站中的五大操作要点','','','优化 网站 五大','每位站长都在天天谈论SEO，有的站长可能还挖空心思去学习如何用SEO去优化网站，那么真正的SEO操作要点是什么?到底如何去优化网站?可能很 ...','1','http://localhost.hy30ie.com/html/view/10-19-1.html','0','99','1','0','admin','1358151539','1358151583');");
E_D("replace into `v9_news` values('20','11','0','改善网页设计的10个绝佳SEO建议','','','改善 网页设计 绝佳','一个优秀的网页设计对于任何试图在网上取得成功的业务来说都是很重要的，但是如果一个网站没有机会得到好的搜索排名，那么几乎没有多少人会...','1','http://localhost.hy30ie.com/html/jzzx/11-20-1.html','0','99','1','0','admin','1358151585','1358151613');");
E_D("replace into `v9_news` values('21','11','0','浅谈如何打造一个成功的城市网站','','','浅谈 如何打造 一个','城市网站势头猛，小公司和个人站长也可以分一杯羹　　随着互联网与人民生活的联系日益紧密，各种类型的网站层出不穷，有抢占了某一个或多个...','1','http://localhost.hy30ie.com/html/jzzx/11-21-1.html','0','99','1','0','admin','1358151617','1358151644');");
E_D("replace into `v9_news` values('22','11','0','博客之谈 十般“武艺”','','','博客 之谈',' 1、态度：心态决定行动，也是博客营销的前提博客营销是场持久战，你一定要真正热爱它，只有热爱者才能作为一项事业来看待，用心去做，心...','1','http://localhost.hy30ie.com/html/jzzx/11-22-1.html','0','99','1','0','admin','1358151646','1358151665');");
E_D("replace into `v9_news` values('23','11','0','解读网站维护相关问题','','','解读 网站维护 相关','一个网站的维护要哪些角色？正常情况下，要想保证维护质量一个网站至少要由三种角色进行维护管理：内容编辑，专业美工，页面工程师。如果有...','1','http://localhost.hy30ie.com/html/jzzx/11-23-1.html','0','99','1','0','admin','1358151668','1358151688');");
E_D("replace into `v9_news` values('24','10','0','网络营销做到位 网站维护推广是关键','','','网络营销 到位 网站维护','网络营销要想到到位，网站维护是关键。网一管家教你三招：第一招：建设一个营销型企业网站 建设一个营销型企业网站是网络营销的基础，从大...','1','http://localhost.hy30ie.com/html/view/10-24-1.html','0','99','1','0','admin','1358151691','1358151717');");
E_D("replace into `v9_news` values('25','10','0','网站维护的基本常识','','','网站维护 的 基本常识','1、网站宣传。让更多的人知道你的网站　　（登陆搜索引擎，交换友情链接,BBS论坛发帖子等等）　　2、定时更新网站内容，　　根据客户或者市...','1','http://localhost.hy30ie.com/html/view/10-25-1.html','0','99','1','0','admin','1358151719','1358151740');");
E_D("replace into `v9_news` values('26','10','0','大网站烧钱拼竞争 小站长出路在何方','','','网站 烧钱 竞争',' 最近赶集网投入巨资在电视、公交、网络等各种媒体上进行铺天盖地的广告宣传，不仅引发了关于赶集网为赶驴网做嫁衣裳的SEO话题的激烈讨论...','1','http://localhost.hy30ie.com/html/view/10-26-1.html','0','99','1','0','admin','1358151742','1358151764');");
E_D("replace into `v9_news` values('27','13','0','首创国际城','','http://hy.30ie.com/uploadfile/brands/01.jpg','','首创国际城','1','http://localhost.hy30ie.com/index.php?m=content&c=index&a=show&catid=13&id=27','1','99','1','0','admin','1358157279','1358157798');");
E_D("replace into `v9_news` values('28','13','0','艾诺教育','','http://hy.30ie.com/uploadfile/brands/02.jpg','艾诺 教育','艾诺教育','1','http://localhost.hy30ie.com/index.php?m=content&c=index&a=show&catid=13&id=28','2','99','1','0','admin','1358157319','1358157821');");
E_D("replace into `v9_news` values('29','13','0','丽江留学生客栈','','http://hy.30ie.com/uploadfile/brands/03.jpg','丽江 留学生 客栈','丽江留学生客栈','1','http://localhost.hy30ie.com/index.php?m=content&c=index&a=show&catid=13&id=29','3','99','1','0','admin','1358157418','1358157841');");
E_D("replace into `v9_news` values('30','13','0','西安卓远企业管理咨询有限公司','','http://hy.30ie.com/uploadfile/brands/04.jpg','西安 企业管理 咨询','西安卓远企业管理咨询有限公司','1','http://localhost.hy30ie.com/index.php?m=content&c=index&a=show&catid=13&id=30','4','99','1','0','admin','1358157541','1358157861');");
E_D("replace into `v9_news` values('31','13','0','八零文化传播有限公司','','http://hy.30ie.com/uploadfile/brands/05.jpg','八零 文化传播 有限公司','八零文化传播有限公司','1','http://localhost.hy30ie.com/index.php?m=content&c=index&a=show&catid=13&id=31','5','99','1','0','admin','1358157594','1358157881');");
E_D("replace into `v9_news` values('32','13','0','西安慈爱妇产医院','','http://hy.30ie.com/uploadfile/brands/06.jpg','西安 慈爱 妇产医院','西安慈爱妇产医院','1','http://localhost.hy30ie.com/index.php?m=content&c=index&a=show&catid=13&id=32','6','99','1','0','admin','1358157633','1358157900');");
E_D("replace into `v9_news` values('34','20','0','文安县振华线材厂','','','文安县 振华 线材厂','文安县振华线材厂','0','http://localhost.hy30ie.com/html/customer/20-34-1.html','0','99','1','0','admin','1358402237','1358402248');");
E_D("replace into `v9_news` values('35','20','0','大连旭日达金属软管制造有','','','大连旭日达金属软管制造有','大连旭日达金属软管制造有','0','http://localhost.hy30ie.com/html/customer/20-35-1.html','0','99','1','0','admin','1358402251','1358403263');");
E_D("replace into `v9_news` values('36','20','0','大连日川精密模具部品有限','','','大连 日 川','大连日川精密模具部品有限','0','http://localhost.hy30ie.com/html/customer/20-36-1.html','0','99','1','0','admin','1358403273','1358403289');");
E_D("replace into `v9_news` values('37','20','0','大连黄瑞珠宝回收有限公司','','','大连 珠宝 回收','大连黄瑞珠宝回收有限公司','0','http://localhost.hy30ie.com/html/customer/20-37-1.html','0','99','1','0','admin','1358403291','1358403299');");
E_D("replace into `v9_news` values('38','20','0','盖州市维库绒山羊饲养专业','','','盖州市 维库 绒山羊','盖州市维库绒山羊饲养专业','0','http://localhost.hy30ie.com/html/customer/20-38-1.html','0','99','1','0','admin','1358403302','1358403309');");
E_D("replace into `v9_news` values('39','20','0','大连东远仪表有限公司','','','大连 东 远','大连东远仪表有限公司','0','http://localhost.hy30ie.com/html/customer/20-39-1.html','0','99','1','0','admin','1358403312','1358403318');");
E_D("replace into `v9_news` values('40','20','0','新乡市钢瓶厂','','','新乡市 钢瓶 厂','新乡市钢瓶厂','0','http://localhost.hy30ie.com/html/customer/20-40-1.html','0','99','1','0','admin','1358403320','1358403328');");
E_D("replace into `v9_news` values('41','20','0','临沂恒盛彩虹瓦厂','','','临沂 恒盛 彩虹','临沂恒盛彩虹瓦厂','0','http://localhost.hy30ie.com/html/customer/20-41-1.html','0','99','1','0','admin','1358403331','1358403338');");
E_D("replace into `v9_news` values('42','20','0','温州伟丰钢业有限公司','','','温州 伟 丰','温州伟丰钢业有限公司','0','http://localhost.hy30ie.com/html/customer/20-42-1.html','0','99','1','0','admin','1358403340','1358403347');");
E_D("replace into `v9_news` values('43','20','0','芜湖圣美孚科技有限公司','','','芜湖 美孚 科技','芜湖圣美孚科技有限公司','0','http://localhost.hy30ie.com/html/customer/20-43-1.html','0','99','1','0','admin','1358403350','1358403497');");
E_D("replace into `v9_news` values('44','20','0','石家庄刘氏模具','','','石家庄 刘氏 模具','石家庄刘氏模具','0','http://localhost.hy30ie.com/html/customer/20-44-1.html','0','99','1','0','admin','1358403360','1358403368');");
E_D("replace into `v9_news` values('45','20','0','亿安工程技术有限公司','','','亿 安 工程技术','亿安工程技术有限公司','0','http://localhost.hy30ie.com/html/customer/20-45-1.html','0','99','1','0','admin','1358403371','1358403377');");
E_D("replace into `v9_news` values('46','20','0','石家庄康平防辐射器材有限','','','石家庄 康平 防辐射','石家庄康平防辐射器材有限','0','http://localhost.hy30ie.com/html/customer/20-46-1.html','0','99','1','0','admin','1358403379','1358403388');");
E_D("replace into `v9_news` values('47','20','0','廣東省佛山市歐力西五金有限公司','','','廣 柺 鹕','廣東省佛山市歐力西五金有限公司','0','http://localhost.hy30ie.com/html/customer/20-47-1.html','0','99','1','0','admin','1358403391','1358403407');");
E_D("replace into `v9_news` values('48','20','0','临沂经济开发区鉴金属制品','','','临沂 经济 开发区','临沂经济开发区鉴金属制品','0','http://localhost.hy30ie.com/html/customer/20-48-1.html','0','99','1','0','admin','1358403409','1358403417');");
E_D("replace into `v9_news` values('49','20','0','昆山金谷农庄科技发展有限公司','','','昆山 农庄 科技发展','昆山金谷农庄科技发展有限公司','0','http://localhost.hy30ie.com/html/customer/20-49-1.html','0','99','1','0','admin','1358403420','1358403434');");
E_D("replace into `v9_news` values('50','20','0','中国色谱耗材超市','','','中国 色谱 耗材','中国色谱耗材超市','0','http://localhost.hy30ie.com/html/customer/20-50-1.html','0','99','1','0','admin','1358403436','1358403443');");
E_D("replace into `v9_news` values('51','20','0','大连众兴电子科技有限公司','','','大连 众 兴','大连众兴电子科技有限公司','0','http://localhost.hy30ie.com/html/customer/20-51-1.html','0','99','1','0','admin','1358403445','1358403456');");
E_D("replace into `v9_news` values('52','20','0','大连蒂姆服装有限公司','','','大连 蒂姆 服装','大连蒂姆服装有限公司','0','http://localhost.hy30ie.com/html/customer/20-52-1.html','0','99','1','0','admin','1358403458','1358403465');");
E_D("replace into `v9_news` values('53','21','0','餐饮行业一','','http://hy.30ie.com/uploadfile/Catering/ztCases1.gif','餐饮行业 一','餐饮行业一','0','http://localhost.hy30ie.com/html/Catering/21-53-1.html','0','99','1','0','admin','1358405722','1358405861');");
E_D("replace into `v9_news` values('54','21','0','餐饮行业二','','http://hy.30ie.com/uploadfile/Catering/ztCases2.gif','餐饮行业 二','餐饮行业二','0','http://localhost.hy30ie.com/html/Catering/21-54-1.html','0','99','1','0','admin','1358405864','1358405901');");
E_D("replace into `v9_news` values('55','21','0','餐饮行业三','','http://hy.30ie.com/uploadfile/Catering/ztCases3.gif','餐饮行业三','餐饮行业三','0','http://localhost.hy30ie.com/html/Catering/21-55-1.html','0','99','1','0','admin','1358405904','1358406574');");
E_D("replace into `v9_news` values('56','21','0','餐饮行业四','','http://hy.30ie.com/uploadfile/Catering/ztCases4.gif','餐饮行业 四','餐饮行业四','0','http://localhost.hy30ie.com/html/Catering/21-56-1.html','0','99','1','0','admin','1358405952','1358406600');");
E_D("replace into `v9_news` values('57','21','0','餐饮行业五','','http://hy.30ie.com/uploadfile/Catering/ztCases5.gif','餐饮行业 五','餐饮行业五','0','http://localhost.hy30ie.com/html/Catering/21-57-1.html','0','99','1','0','admin','1358406496','1358406616');");
E_D("replace into `v9_news` values('58','22','0','旅游行业一','','http://hy.30ie.com/uploadfile/Travel/ztCasesly1.gif','旅游行业 一','旅游行业一','0','http://localhost.hy30ie.com/html/Travel/22-58-1.html','0','99','1','0','admin','1358406627','1358406648');");
E_D("replace into `v9_news` values('59','22','0','旅游行业二','','http://hy.30ie.com/uploadfile/Travel/ztCasesly2.gif','旅游行业 二','旅游行业二','0','http://localhost.hy30ie.com/html/Travel/22-59-1.html','0','99','1','0','admin','1358406650','1358406670');");
E_D("replace into `v9_news` values('60','22','0','旅游行业三','','http://hy.30ie.com/uploadfile/Travel/ztCasesly3.gif','旅游行业 三','旅游行业三','0','http://localhost.hy30ie.com/html/Travel/22-60-1.html','0','99','1','0','admin','1358406672','1358406691');");
E_D("replace into `v9_news` values('61','22','0','旅游行业四','','http://hy.30ie.com/uploadfile/Travel/ztCasesly4.gif','旅游行业 四','旅游行业四','0','http://localhost.hy30ie.com/html/Travel/22-61-1.html','0','99','1','0','admin','1358406693','1358406712');");
E_D("replace into `v9_news` values('62','22','0','旅游行业五','','http://hy.30ie.com/uploadfile/Travel/ztCasesly5.gif','旅游行业 五','旅游行业五','0','http://localhost.hy30ie.com/html/Travel/22-62-1.html','0','99','1','0','admin','1358406714','1358406732');");
E_D("replace into `v9_news` values('63','23','0','房地产行业一','','http://hy.30ie.com/uploadfile/RealEstate/ztCasesFdc1.gif','房地产 行业 一','房地产行业一','0','http://localhost.hy30ie.com/html/RealEstate/23-63-1.html','0','99','1','0','admin','1358406740','1358406777');");
E_D("replace into `v9_news` values('64','23','0','房地产行业二','','http://hy.30ie.com/uploadfile/RealEstate/ztCasesFdc2.gif','房地产 行业 二','房地产行业二','0','http://localhost.hy30ie.com/html/RealEstate/23-64-1.html','0','99','1','0','admin','1358406780','1358406797');");
E_D("replace into `v9_news` values('65','23','0','房地产行业三','','http://hy.30ie.com/uploadfile/RealEstate/ztCasesFdc3.gif','房地产 行业 三','房地产行业三','0','http://localhost.hy30ie.com/html/RealEstate/23-65-1.html','0','99','1','0','admin','1358406800','1358406818');");
E_D("replace into `v9_news` values('66','23','0','房地产行业四','','http://hy.30ie.com/uploadfile/RealEstate/ztCasesFdc4.gif','房地产 行业 四','房地产行业四','0','http://localhost.hy30ie.com/html/RealEstate/23-66-1.html','0','99','1','0','admin','1358406820','1358406839');");
E_D("replace into `v9_news` values('67','23','0','房地产行业五','','http://hy.30ie.com/uploadfile/RealEstate/ztCasesFdc5.gif','房地产 行业 五','房地产行业五','0','http://localhost.hy30ie.com/html/RealEstate/23-67-1.html','0','99','1','0','admin','1358406843','1358406868');");
E_D("replace into `v9_news` values('68','23','0','房地产行业六','','http://hy.30ie.com/uploadfile/RealEstate/ztCasesFdc6.gif','房地产 行业 六','房地产行业六','0','http://localhost.hy30ie.com/html/RealEstate/23-68-1.html','0','99','1','0','admin','1358406870','1358406891');");
E_D("replace into `v9_news` values('69','24','0','教育行业一','','http://hy.30ie.com/uploadfile/Train/ztCasesFdc1.gif','教育 行业 一','教育行业一','0','http://localhost.hy30ie.com/html/Train/24-69-1.html','0','99','1','0','admin','1358406902','1358406929');");
E_D("replace into `v9_news` values('70','24','0','教育行业二','','http://hy.30ie.com/uploadfile/Train/ztCasesFdc2.gif','教育 行业 二','教育行业二','0','http://localhost.hy30ie.com/html/Train/24-70-1.html','0','99','1','0','admin','1358406931','1358406948');");
E_D("replace into `v9_news` values('71','24','0','教育行业三','','http://hy.30ie.com/uploadfile/Train/ztCasesFdc3.gif','教育 行业 三','教育行业三','0','http://localhost.hy30ie.com/html/Train/24-71-1.html','0','99','1','0','admin','1358406950','1358406971');");
E_D("replace into `v9_news` values('72','24','0','教育行业四','','http://hy.30ie.com/uploadfile/Train/ztCasesFdc4.gif','教育 行业 四','教育行业四','0','http://localhost.hy30ie.com/html/Train/24-72-1.html','0','99','1','0','admin','1358406973','1358406990');");
E_D("replace into `v9_news` values('73','25','0','汽车行业一','','http://hy.30ie.com/uploadfile/AutoAccessories/ztCasesQc1.gif','汽车行业 一','汽车行业一','0','http://localhost.hy30ie.com/html/Auto/25-73-1.html','0','99','1','0','admin','1358407001','1358407021');");
E_D("replace into `v9_news` values('74','25','0','汽车行业二','','http://hy.30ie.com/uploadfile/AutoAccessories/ztCasesQc2.gif','汽车行业 二','汽车行业二','0','http://localhost.hy30ie.com/html/Auto/25-74-1.html','0','99','1','0','admin','1358407023','1358407039');");
E_D("replace into `v9_news` values('75','25','0','汽车行业三','','http://hy.30ie.com/uploadfile/AutoAccessories/ztCasesQc3.gif','汽车行业 三','汽车行业三','0','http://localhost.hy30ie.com/html/Auto/25-75-1.html','0','99','1','0','admin','1358407042','1358407062');");
E_D("replace into `v9_news` values('76','25','0','汽车行业四','','http://hy.30ie.com/uploadfile/AutoAccessories/ztCasesQc4.gif','汽车行业 四','汽车行业四','0','http://localhost.hy30ie.com/html/Auto/25-76-1.html','0','99','1','0','admin','1358407064','1358407085');");
E_D("replace into `v9_news` values('77','25','0','汽车行业五','','http://hy.30ie.com/uploadfile/AutoAccessories/ztCasesQc5.gif','汽车行业 五','汽车行业五','0','http://localhost.hy30ie.com/html/Auto/25-77-1.html','0','99','1','0','admin','1358407087','1358407107');");
E_D("replace into `v9_news` values('78','26','0','电子产品一','','http://hy.30ie.com/uploadfile/Electronic/ztCasesDz1.gif','电子产品 一','电子产品一','0','http://localhost.hy30ie.com/html/Electronic/26-78-1.html','0','99','1','0','admin','1358407118','1358407143');");
E_D("replace into `v9_news` values('79','26','0','电子产品二','','http://hy.30ie.com/uploadfile/Electronic/ztCasesDz2.gif','电子产品 二','电子产品二','0','http://localhost.hy30ie.com/html/Electronic/26-79-1.html','0','99','1','0','admin','1358407145','1358407163');");
E_D("replace into `v9_news` values('80','26','0','电子产品三','','http://hy.30ie.com/uploadfile/Electronic/ztCasesDz3.gif','电子产品 三','电子产品三','0','http://localhost.hy30ie.com/html/Electronic/26-80-1.html','0','99','1','0','admin','1358407165','1358407182');");
E_D("replace into `v9_news` values('81','26','0','电子产品四','','http://hy.30ie.com/uploadfile/Electronic/ztCasesDz4.gif','电子产品 四','电子产品四','0','http://localhost.hy30ie.com/html/Electronic/26-81-1.html','0','99','1','0','admin','1358407184','1358407202');");
E_D("replace into `v9_news` values('82','26','0','电子产品五','','http://hy.30ie.com/uploadfile/Electronic/ztCasesDz5.gif','电子产品 五','电子产品五','0','http://localhost.hy30ie.com/html/Electronic/26-82-1.html','0','99','1','0','admin','1358407204','1358407222');");
E_D("replace into `v9_news` values('83','26','0','电子产品六','','http://hy.30ie.com/uploadfile/Electronic/ztCasesDz6.gif','电子产品 六','电子产品六','0','http://localhost.hy30ie.com/html/Electronic/26-83-1.html','0','99','1','0','admin','1358407224','1358407242');");
E_D("replace into `v9_news` values('84','27','0','律所行业一','','http://hy.30ie.com/uploadfile/LawFirm/ztCasesLs1.gif','律 所 行业','律所行业一','0','http://localhost.hy30ie.com/html/LawFirm/27-84-1.html','0','99','1','0','admin','1358409261','1358409290');");
E_D("replace into `v9_news` values('85','27','0','律所行业二','','http://hy.30ie.com/uploadfile/LawFirm/ztCasesLs2.gif','律 所 行业','律所行业二','0','http://localhost.hy30ie.com/html/LawFirm/27-85-1.html','0','99','1','0','admin','1358409293','1358409314');");
E_D("replace into `v9_news` values('86','27','0','律所行业三','','http://hy.30ie.com/uploadfile/LawFirm/ztCasesLs3.gif','律 所 行业','律所行业三','0','http://localhost.hy30ie.com/html/LawFirm/27-86-1.html','0','99','1','0','admin','1358409316','1358409334');");
E_D("replace into `v9_news` values('87','27','0','律所行业四','','http://hy.30ie.com/uploadfile/LawFirm/ztCasesLs4.gif','律 所 行业','律所行业四','0','http://localhost.hy30ie.com/html/LawFirm/27-87-1.html','0','99','1','0','admin','1358409336','1358409353');");
E_D("replace into `v9_news` values('88','27','0','律所行业五','','http://hy.30ie.com/uploadfile/LawFirm/ztCasesLs5.gif','律 所 行业','律所行业五','0','http://localhost.hy30ie.com/html/LawFirm/27-88-1.html','0','99','1','0','admin','1358409355','1358409371');");
E_D("replace into `v9_news` values('89','27','0','律所行业六','','http://hy.30ie.com/uploadfile/LawFirm/ztCasesLs6.gif','律 所 行业','律所行业六','0','http://localhost.hy30ie.com/html/LawFirm/27-89-1.html','0','99','1','0','admin','1358409373','1358409392');");
E_D("replace into `v9_news` values('90','28','0','管理咨询一','','http://hy.30ie.com/uploadfile/Management/ztCasesGl1.gif','管理咨询 一','管理咨询一','0','http://localhost.hy30ie.com/html/Management/28-90-1.html','0','99','1','0','admin','1358409400','1358409420');");
E_D("replace into `v9_news` values('91','28','0','管理咨询二','','http://hy.30ie.com/uploadfile/Management/ztCasesGl2.gif','管理咨询 二','管理咨询二','0','http://localhost.hy30ie.com/html/Management/28-91-1.html','0','99','1','0','admin','1358409422','1358409439');");
E_D("replace into `v9_news` values('92','28','0','管理咨询三','','http://hy.30ie.com/uploadfile/Management/ztCasesGl3.gif','管理咨询 三','管理咨询三','0','http://localhost.hy30ie.com/html/Management/28-92-1.html','0','99','1','0','admin','1358409441','1358409457');");
E_D("replace into `v9_news` values('93','28','0','管理咨询四','','http://hy.30ie.com/uploadfile/Management/ztCasesGl4.gif','管理咨询 四','管理咨询四','0','http://localhost.hy30ie.com/html/Management/28-93-1.html','0','99','1','0','admin','1358409459','1358409477');");
E_D("replace into `v9_news` values('94','29','0','服装行业一','','http://hy.30ie.com/uploadfile/Clothing/fzCase1.jpg','服装行业 一','服装行业一','0','http://localhost.hy30ie.com/html/Clothing/29-94-1.html','0','99','1','0','admin','1358409491','1358409515');");
E_D("replace into `v9_news` values('95','29','0','服装行业二','','http://hy.30ie.com/uploadfile/Clothing/fzCase2.jpg','服装行业 二','服装行业二','0','http://localhost.hy30ie.com/html/Clothing/29-95-1.html','0','99','1','0','admin','1358409518','1358409537');");
E_D("replace into `v9_news` values('96','29','0','服装行业三','','http://hy.30ie.com/uploadfile/Clothing/fzCase3.jpg','服装行业 三','服装行业三','0','http://localhost.hy30ie.com/html/Clothing/29-96-1.html','0','99','1','0','admin','1358409539','1358409563');");
E_D("replace into `v9_news` values('97','29','0','服装行业四','','http://hy.30ie.com/uploadfile/Clothing/fzCase4.jpg','服装行业 四','服装行业四','0','http://localhost.hy30ie.com/html/Clothing/29-97-1.html','0','99','1','0','admin','1358409565','1358409582');");
E_D("replace into `v9_news` values('98','29','0','服装行业五','','http://hy.30ie.com/uploadfile/Clothing/fzCase5.jpg','服装行业 五','服装行业五','0','http://localhost.hy30ie.com/html/Clothing/29-98-1.html','0','99','1','0','admin','1358409584','1358409602');");
E_D("replace into `v9_news` values('99','29','0','服装行业六','','http://hy.30ie.com/uploadfile/Clothing/fzCase6.jpg','服装行业 六','服装行业六','0','http://localhost.hy30ie.com/html/Clothing/29-99-1.html','0','99','1','0','admin','1358409604','1358409640');");

require("../../inc/footer.php");
?>