<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_position_data`;");
E_C("CREATE TABLE `v9_position_data` (
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `posid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `module` char(20) DEFAULT NULL,
  `modelid` smallint(6) unsigned DEFAULT '0',
  `thumb` tinyint(1) NOT NULL DEFAULT '0',
  `data` mediumtext,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '1',
  `listorder` mediumint(8) DEFAULT '0',
  `expiration` int(10) NOT NULL,
  `extention` char(30) DEFAULT NULL,
  `synedit` tinyint(1) DEFAULT '0',
  KEY `posid` (`posid`),
  KEY `listorder` (`listorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `v9_position_data` values('10','11','2','content','1','0','array (\n  ''title'' => ''李克强：开放包容是亚洲健康与可持续发展客观要求'',\n  ''description'' => ''中新网博鳌4月2日电(记者 余湛奕)中国国务院副总理李克强2日上午在海南省博鳌出席博鳌亚洲论坛2012年年会开幕式时表示，秉承开放包容，是...'',\n  ''inputtime'' => ''1353725115'',\n  ''style'' => '''',\n)','1','10','0',NULL,'0');");
E_D("replace into `v9_position_data` values('9','11','2','content','1','0','array (\n  ''title'' => ''李克强要求推进西部开发开放'',\n  ''description'' => ''李克强要求推进西部开发开放据新华社银川9月13日电 11日至12日，在出席2012中国 （宁夏）国际投资贸易洽谈会暨第三届中阿经贸论...'',\n  ''inputtime'' => ''1353725051'',\n  ''style'' => '''',\n)','1','9','0',NULL,'0');");
E_D("replace into `v9_position_data` values('8','11','2','content','1','0','array (\n  ''title'' => ''李克强要求官员在座谈会不要念稿'',\n  ''description'' => ''李克强：座谈会不要念稿子央视网消息：经常出席国务院会议的地方领导同志都知道，参加李克强副总理主持的会，仅准备好一份发...'',\n  ''inputtime'' => ''1353725018'',\n  ''style'' => '''',\n)','1','8','0',NULL,'0');");
E_D("replace into `v9_position_data` values('4','9','2','content','1','1','array (\n  ''title'' => ''山西晋中火锅店爆炸燃烧事故致14人死亡47人受伤'',\n  ''description'' => ''11月23日19时52分，山西省晋中市寿阳县一家名为喜羊羊的火锅店忽然发生爆炸燃烧事故。目前，现场火势已被扑灭，120急救中心也将受伤人员送...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/2012/1124/20121124104054869.jpg'',\n  ''inputtime'' => ''1353724738'',\n  ''style'' => '''',\n)','1','4','0',NULL,'0');");
E_D("replace into `v9_position_data` values('3','9','2','content','1','0','array (\n  ''title'' => ''练洪洋：农妇跪访总理乱了谁的“秩序”'',\n  ''description'' => ''在云南彝良地震期间，因跪访视察途中的温家宝总理反映征地问题，涉嫌扰乱公共秩序，11月19日，彝良县发界村村民梁永兰被当地警方行政拘留7...'',\n  ''inputtime'' => ''1353724693'',\n  ''style'' => '''',\n)','1','3','0',NULL,'0');");
E_D("replace into `v9_position_data` values('2','9','2','content','1','1','array (\n  ''title'' => ''黄奇帆：重庆市政府将于明年元月进行换届'',\n  ''description'' => ''黄奇帆原标题：重庆市政府党组学习贯彻党的十八大精神黄奇帆主持并讲话，要求学深学透十八大精神，推动科学发展、富民兴渝华龙网讯（记者商...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/2012/1122/20121122061542254.jpg'',\n  ''inputtime'' => ''1353579342'',\n  ''style'' => '''',\n)','1','2','0',NULL,'0');");
E_D("replace into `v9_position_data` values('7','10','2','content','1','1','array (\n  ''title'' => ''最高检约谈李庄被告知“绝不能让重庆检方调查”'',\n  ''description'' => ''昨天中午，李庄、王誓华律师、龚刚华、龚云飞（从右至左）在约谈后留影。王誓华律师供图原标题：李庄控告重庆市公安局专案组涉嫌徇私枉法获...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/2012/1124/20121124104335414.jpg'',\n  ''inputtime'' => ''1353724967'',\n  ''style'' => '''',\n)','1','7','0',NULL,'0');");
E_D("replace into `v9_position_data` values('6','10','2','content','1','1','array (\n  ''title'' => ''外交部回应菲越抗议：中国新版护照不针对特定国家'',\n  ''description'' => ''图：护照里的地图标注了中国在南海的主权范围越南和菲律宾分别就中国新版电子护照中的中国地图、包含南海九段线提出抗议，同时也发生数起中...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/2012/1124/20121124104243749.jpg'',\n  ''inputtime'' => ''1353724919'',\n  ''style'' => '''',\n)','1','6','0',NULL,'0');");
E_D("replace into `v9_position_data` values('5','10','2','content','1','1','array (\n  ''title'' => ''雷政富视频截图发布至免职63小时 被指被微博秒杀'',\n  ''description'' => ''CFP图原标题：不到三天 办掉雷书记一起爆料被证实，它的主角是一位官员被拍摄到一段不雅的视频。11月20日晚疑似重庆市北碚区区委书记雷政...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/2012/1124/20121124104156767.jpg'',\n  ''inputtime'' => ''1353724856'',\n  ''style'' => '''',\n)','1','5','0',NULL,'0');");
E_D("replace into `v9_position_data` values('1','9','2','content','1','0','array (\n  ''title'' => ''温家宝：我还有几个月就归隐林泉 希望人们把我忘记'',\n  ''description'' => '' 温家宝20日晚上抵达泰国首都曼谷，展开对泰国正式访问。温家宝离开机场后，直接前往泰国中华总商会与泰国华侨华人代表会面，并发表讲话。...'',\n  ''inputtime'' => ''1353579188'',\n  ''style'' => '''',\n)','1','1','0',NULL,'0');");
E_D("replace into `v9_position_data` values('16','11','2','content','1','0','array (\n  ''title'' => ''做地方站运营经验的总结'',\n  ''description'' => '' 很多做互联网的人都有做地方站的想法，但是，各个地区的门户网站都有很多了，而且还有不断的新网站出来，故地方站的做法虽然简单，但发展...'',\n  ''inputtime'' => ''1358151163'',\n  ''style'' => '''',\n)','1','16','0',NULL,'0');");
E_D("replace into `v9_position_data` values('17','10','2','content','1','0','array (\n  ''title'' => ''网站如何留住回头客方法探析'',\n  ''description'' => ''有人很关注网站的流量，认为流量高了可以说明、证明很多东西，可能网站刚开始能带来很多流量，可是这些流量很不稳定，时高时低，为什么呢？...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151420'',\n)','1','17','0',NULL,'0');");
E_D("replace into `v9_position_data` values('18','10','2','content','1','0','array (\n  ''title'' => ''看准网站质量从友情链接四步法做起'',\n  ''description'' => ''如果说一个网站的灵魂源于内容，那么能支撑起网站整个生命力的就属友情链接莫属。此话不一点都不夸，友情链接是一个新站上路必经的道路，有...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151485'',\n)','1','18','0',NULL,'0');");
E_D("replace into `v9_position_data` values('19','10','2','content','1','0','array (\n  ''title'' => ''SEO优化网站中的五大操作要点'',\n  ''description'' => ''每位站长都在天天谈论SEO，有的站长可能还挖空心思去学习如何用SEO去优化网站，那么真正的SEO操作要点是什么?到底如何去优化网站?可能很 ...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151539'',\n)','1','19','0',NULL,'0');");
E_D("replace into `v9_position_data` values('20','10','2','content','1','0','array (\n  ''title'' => ''改善网页设计的10个绝佳SEO建议'',\n  ''description'' => ''一个优秀的网页设计对于任何试图在网上取得成功的业务来说都是很重要的，但是如果一个网站没有机会得到好的搜索排名，那么几乎没有多少人会...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151585'',\n)','1','20','0',NULL,'0');");
E_D("replace into `v9_position_data` values('21','10','2','content','1','0','array (\n  ''title'' => ''浅谈如何打造一个成功的城市网站'',\n  ''description'' => ''城市网站势头猛，小公司和个人站长也可以分一杯羹　　随着互联网与人民生活的联系日益紧密，各种类型的网站层出不穷，有抢占了某一个或多个...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151617'',\n)','1','21','0',NULL,'0');");
E_D("replace into `v9_position_data` values('22','10','2','content','1','0','array (\n  ''title'' => ''博客之谈 十般“武艺”'',\n  ''description'' => '' 1、态度：心态决定行动，也是博客营销的前提博客营销是场持久战，你一定要真正热爱它，只有热爱者才能作为一项事业来看待，用心去做，心...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151646'',\n)','1','22','0',NULL,'0');");
E_D("replace into `v9_position_data` values('23','10','2','content','1','0','array (\n  ''title'' => ''解读网站维护相关问题'',\n  ''description'' => ''一个网站的维护要哪些角色？正常情况下，要想保证维护质量一个网站至少要由三种角色进行维护管理：内容编辑，专业美工，页面工程师。如果有...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151668'',\n)','1','23','0',NULL,'0');");
E_D("replace into `v9_position_data` values('24','10','2','content','1','0','array (\n  ''title'' => ''网络营销做到位 网站维护推广是关键'',\n  ''description'' => ''网络营销要想到到位，网站维护是关键。网一管家教你三招：第一招：建设一个营销型企业网站 建设一个营销型企业网站是网络营销的基础，从大...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151691'',\n)','1','24','0',NULL,'0');");
E_D("replace into `v9_position_data` values('25','10','2','content','1','0','array (\n  ''title'' => ''网站维护的基本常识'',\n  ''description'' => ''1、网站宣传。让更多的人知道你的网站　　（登陆搜索引擎，交换友情链接,BBS论坛发帖子等等）　　2、定时更新网站内容，　　根据客户或者市...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151719'',\n)','1','25','0',NULL,'0');");
E_D("replace into `v9_position_data` values('26','10','2','content','1','0','array (\n  ''title'' => ''大网站烧钱拼竞争 小站长出路在何方'',\n  ''description'' => '' 最近赶集网投入巨资在电视、公交、网络等各种媒体上进行铺天盖地的广告宣传，不仅引发了关于赶集网为赶驴网做嫁衣裳的SEO话题的激烈讨论...'',\n  ''thumb'' => '''',\n  ''inputtime'' => ''1358151742'',\n)','1','26','0',NULL,'0');");
E_D("replace into `v9_position_data` values('23','11','2','content','1','0','array (\n  ''title'' => ''解读网站维护相关问题'',\n  ''description'' => ''一个网站的维护要哪些角色？正常情况下，要想保证维护质量一个网站至少要由三种角色进行维护管理：内容编辑，专业美工，页面工程师。如果有...'',\n  ''inputtime'' => ''1358151668'',\n  ''style'' => '''',\n)','1','23','0',NULL,'0');");
E_D("replace into `v9_position_data` values('22','11','2','content','1','0','array (\n  ''title'' => ''博客之谈 十般“武艺”'',\n  ''description'' => '' 1、态度：心态决定行动，也是博客营销的前提博客营销是场持久战，你一定要真正热爱它，只有热爱者才能作为一项事业来看待，用心去做，心...'',\n  ''inputtime'' => ''1358151646'',\n  ''style'' => '''',\n)','1','22','0',NULL,'0');");
E_D("replace into `v9_position_data` values('21','11','2','content','1','0','array (\n  ''title'' => ''浅谈如何打造一个成功的城市网站'',\n  ''description'' => ''城市网站势头猛，小公司和个人站长也可以分一杯羹　　随着互联网与人民生活的联系日益紧密，各种类型的网站层出不穷，有抢占了某一个或多个...'',\n  ''inputtime'' => ''1358151617'',\n  ''style'' => '''',\n)','1','21','0',NULL,'0');");
E_D("replace into `v9_position_data` values('20','11','2','content','1','0','array (\n  ''title'' => ''改善网页设计的10个绝佳SEO建议'',\n  ''description'' => ''一个优秀的网页设计对于任何试图在网上取得成功的业务来说都是很重要的，但是如果一个网站没有机会得到好的搜索排名，那么几乎没有多少人会...'',\n  ''inputtime'' => ''1358151585'',\n  ''style'' => '''',\n)','1','20','0',NULL,'0');");
E_D("replace into `v9_position_data` values('15','12','12','content','1','1','array (\n  ''title'' => ''管家白金计划'',\n  ''description'' => ''管家白金计划-如果您的网站有流量，也有订单，但是订单远远低于同行-所在行业业务关键词比较多，希望能够获得更多潜在客户-想从众多竞争对...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/taocan/taocan5.jpg'',\n  ''inputtime'' => ''1358144480'',\n  ''style'' => '''',\n)','1','15','0',NULL,'0');");
E_D("replace into `v9_position_data` values('14','12','12','content','1','1','array (\n  ''title'' => ''管家黄金计划'',\n  ''description'' => ''管家黄金计划-如果您的网站有流量，但是几乎没有订单-所在行业业务关键词比较多，希望能够获得更多潜在客户-想从众多竞争对手中脱颖而出，...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/taocan/taocan4.jpg'',\n  ''inputtime'' => ''1358144430'',\n  ''style'' => '''',\n)','1','14','0',NULL,'0');");
E_D("replace into `v9_position_data` values('13','12','12','content','1','1','array (\n  ''title'' => ''管家C计划'',\n  ''description'' => ''管家C计划1、本计划可让企业在网络上的产品信息覆盖率有效提高，并且信息质量及保有量达到80%以上2、并且增强企业网络品牌知名度3、可给企...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/taocan/taocan3.jpg'',\n  ''inputtime'' => ''1358144388'',\n  ''style'' => '''',\n)','1','13','0',NULL,'0');");
E_D("replace into `v9_position_data` values('12','12','12','content','1','1','array (\n  ''title'' => ''管家B计划'',\n  ''description'' => ''管家B计划1、本计划可让企业在网络上的产品信息覆盖率有效提高，并且信息质量及保有量达到80%以上2、并且增强企业网络品牌知名度3、可给企...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/taocan/taocan2.jpg'',\n  ''inputtime'' => ''1358144334'',\n  ''style'' => '''',\n)','1','12','0',NULL,'0');");
E_D("replace into `v9_position_data` values('11','12','12','content','1','1','array (\n  ''title'' => ''管家A计划'',\n  ''description'' => ''管家A计划1、本计划可让企业在网络上的产品信息覆盖率有效提高，并且信息质量及保有量达到70%以上2、并且增强企业网络品牌知名度3、可给企...'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/taocan/taocan1.jpg'',\n  ''inputtime'' => ''1358144229'',\n  ''style'' => '''',\n)','1','11','0',NULL,'0');");
E_D("replace into `v9_position_data` values('32','13','2','content','1','1','array (\n  ''title'' => ''西安慈爱妇产医院'',\n  ''description'' => ''西安慈爱妇产医院'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/brands/06.jpg'',\n  ''inputtime'' => ''1358157633'',\n  ''style'' => '''',\n)','1','32','0',NULL,'0');");
E_D("replace into `v9_position_data` values('31','13','2','content','1','1','array (\n  ''title'' => ''八零文化传播有限公司'',\n  ''description'' => ''八零文化传播有限公司'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/brands/05.jpg'',\n  ''inputtime'' => ''1358157594'',\n  ''style'' => '''',\n)','1','31','0',NULL,'0');");
E_D("replace into `v9_position_data` values('30','13','2','content','1','1','array (\n  ''title'' => ''西安卓远企业管理咨询有限公司'',\n  ''description'' => ''西安卓远企业管理咨询有限公司'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/brands/04.jpg'',\n  ''inputtime'' => ''1358157541'',\n  ''style'' => '''',\n)','1','30','0',NULL,'0');");
E_D("replace into `v9_position_data` values('29','13','2','content','1','1','array (\n  ''title'' => ''丽江留学生客栈'',\n  ''description'' => ''丽江留学生客栈'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/brands/03.jpg'',\n  ''inputtime'' => ''1358157418'',\n  ''style'' => '''',\n)','1','29','0',NULL,'0');");
E_D("replace into `v9_position_data` values('28','13','2','content','1','1','array (\n  ''title'' => ''艾诺教育'',\n  ''description'' => ''艾诺教育'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/brands/02.jpg'',\n  ''inputtime'' => ''1358157319'',\n  ''style'' => '''',\n)','1','28','0',NULL,'0');");
E_D("replace into `v9_position_data` values('27','13','2','content','1','1','array (\n  ''title'' => ''首创国际城'',\n  ''description'' => ''首创国际城'',\n  ''thumb'' => ''http://hy.30ie.com/uploadfile/brands/01.jpg'',\n  ''inputtime'' => ''1358157279'',\n  ''style'' => '''',\n)','1','27','0',NULL,'0');");

require("../../inc/footer.php");
?>