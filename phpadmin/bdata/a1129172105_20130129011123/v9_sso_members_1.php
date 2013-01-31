<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_sso_members`;");
E_C("CREATE TABLE `v9_sso_members` (
  `uid` int(10) unsigned NOT NULL auto_increment,
  `username` char(20) NOT NULL default '',
  `password` char(32) NOT NULL default '',
  `random` char(8) NOT NULL default '',
  `email` char(32) NOT NULL default '',
  `regip` char(15) NOT NULL default '',
  `regdate` int(10) unsigned NOT NULL default '0',
  `lastip` char(15) NOT NULL default '0',
  `lastdate` int(10) unsigned NOT NULL default '0',
  `appname` char(15) NOT NULL,
  `type` enum('app','connect') default NULL,
  `avatar` tinyint(1) NOT NULL default '0',
  `ucuserid` mediumint(8) unsigned default '0',
  PRIMARY KEY  (`uid`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `ucuserid` (`ucuserid`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=utf8");
E_D("replace into `v9_sso_members` values('1','test','3e5c58a2c3df76e7b4895e74d7c26190','RK2qer','1145712456@qq.com','127.0.0.1','1352512324','58.64.187.141','1359364474','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('2','test2','8fa83d1802039d53c02979222ed98ba4','256ns7','test2@qq.com','127.0.0.1','1352543769','127.0.0.1','1353741881','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('3','30iemanager','5333bcf7580bc821c365214b35dc049a','CHJka8','12345678@qq.com','127.0.0.1','1353986457','0','1353986457','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('4','hongfengxiaofang','3099ae28c3ae7f3c988ba7d62ee04009','P1ijzB','1721659503@qq.com','111.10.7.108','1357440471','0','1357440471','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('5','hongfeng','15ff09cd078516982e6efb0ab1036654','8SGGyI','1721659505@qq.com','111.10.7.108','1357440614','0','1357440614','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('6','hongfeng3','612fd197723401626f4d2365b4e9a8bb','zdW1pH','1721659508@qq.com','111.10.7.108','1357440692','0','1357440692','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('7','chuangneng','1c7e9f4aceff47d7e198ac5506051c90','8c9yug','1721759503@qq.com','111.10.7.108','1357440784','0','1357440784','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('8','modelliyi','f7869012eb1c3ee324c92e09b960979d','rqhgnZ','1721679505@qq.com','111.10.7.108','1357440871','0','1357440871','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('9','cqtongdai','2d882ca324e4f082789e82ee8742c392','bmjXTW','1721659803@qq.com','111.10.7.108','1357440944','0','1357440944','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('10','yanjiangkoucai','69a5285ea452d0dfa31690a0911e76bb','LGAaaF','1721659903@qq.com','111.10.7.108','1357440996','0','1357440996','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('11','xianghe','fa7efc5c35b0aa887488d686a0ba1fac','MdIcii','1721659583@qq.com','111.10.7.108','1357441096','0','1357441096','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('12','yuhuabaowen','c2cbe9b1ce50edc3fb2c557360b53f41','jKnbke','1721759523@qq.com','111.10.7.108','1357441185','58.64.187.141','1357441219','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('13','huizhuodiping','df1315fe2ce908d38f131f6bceafbac6','z4WPEh','1751659505@qq.com','111.10.7.108','1357441267','0','1357441267','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('14','li69lipin','b2478087c2557f327742c6a4b670d3c4','azEjTz','1721659509@qq.com','111.10.7.108','1357441346','0','1357441346','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('15','cqwugong','1415df0cb5e937bbefdceaea815b18f8','yQ4TPJ','1711659509@qq.com','111.10.7.108','1357443917','0','1357443917','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('16','chuangneng4D','112e288a366a3e4487fd1649264ec823','6XRD9P','1721659533@qq.com','111.10.7.108','1357444269','0','1357444269','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('17','cqjiazheng','17e38f2d6e442a552562f936cfc5669b','piKrRU','1711659569@qq.com','111.10.7.108','1357444513','0','1357444513','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('18','cqgangjiaoxian','760029bb80386021f8c9610caf1e2f7e','tQkFMg','1721559503@qq.com','111.10.7.108','1357444604','0','1357444604','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('19','shishanchang','4dc3bc8bb20a2140a66af799def752dc','c5CcrI','1711659599@qq.com','111.10.7.108','1357444669','0','1357444669','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('20','tianyu','105cc90459d451597e72932dbeb49bf3','yXzlvh','1711658569@qq.com','111.10.7.108','1357444802','58.64.187.141','1358924018','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('21','cqjjdq','7afeabd9b957c99f4367532543ddb029','EEAQLx','cqjjdq@126.com','111.10.7.108','1357452855','0','1357452855','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('22','hua888','fc42b09543e52b3dc7cc19b3782778cf','vQ4Q6u','huafa@163.com','111.10.7.108','1357452987','0','1357452987','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('23','hehekj','8f9406a6c609a0308af690becc75a8a2','qs5b4f','824410730@qq.com','111.10.7.108','1357453485','0','1357453485','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('24','rrdkj','3dfd6726a66c29518fc4503a6f14129d','WdZIcN','1164802271@qq.com','111.10.7.108','1357453657','0','1357453657','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('25','cqtnjd','be3751e16d5bfd06f4654c2e59bd2b43','DRwk1y','cqjuneng@126.com','111.10.7.108','1357453918','0','1357453918','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('26','yingyuanscl','bb23be696c77cbba870f50f0d079b676','j8DF9V','13635467833@qq.com','111.10.7.108','1357454067','0','1357454067','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('27','cqhwbw','bf51c2a94e4d0e2a5c3f87a12d87af8c','ruCjQN','yangwenjie365@163.com','111.10.7.108','1357454430','0','1357454430','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('28','cdtnjd','34fe920cb168ca4ab5213dff30b111d1','NNnD39','401544294@qq.com','111.10.7.108','1357454987','0','1357454987','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('29','cqdy88','e09638da246cd1bca94075471c8b6413','7MAFXP','4654566@qq.com','111.10.7.108','1357455181','0','1357455181','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('30','cqtongying','e32f41e3a77e917a4867668326e0fbab','Qy3ehy','tongying@163.com','111.10.7.108','1357455829','0','1357455829','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('31','cqyufan','f7b950cf70c33ada52f814a9a5a6c3c3','gx9blb','1723377203@qq.com','111.10.7.108','1357459077','0','1357459077','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('32','lidawx','bf2c5e9eed60110d8f0b625eb9ce020e','kWF2JJ','531112443@qq.com','111.10.7.108','1357459289','0','1357459289','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('33','cqapl','73612327e8444d06cc1f90742defd4d5','7aYhPE','779186118@qq.com','111.10.7.108','1357459602','0','1357459602','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('34','cqyinyuanshui','4132696f20156f59e37f5ccdf414935c','GYuYf4','304473072@qq.com','111.10.7.108','1357459936','0','1357459936','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('35','cqtrun','941f5e50a8d7ac293c60f1b874459317','C6slQb','598987773@qq.com','111.10.7.108','1357460156','0','1357460156','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('36','pjhdtw','179bd447808d153ccb53ed7285809c85','daIKHm','dsdsds@qq.com','111.10.7.108','1357460480','0','1357460480','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('37','laotuguo','360388f6dfc4090fbc6321a38cb4504f','iiIHnv','470179064@qq.com','111.10.7.108','1357460802','0','1357460802','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('38','cqyuncheng','1911d2a3bf7b7a09171773f32b25386f','RwfN8q','yudsx@qq.com','111.10.7.108','1357460879','0','1357460879','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('39','cqdingchuang','e8b9e292fc317b9a03df0da48f6f4725','eDaWWW','cqdingchuang@qq.com','111.10.7.108','1357460997','58.64.187.141','1357466520','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('40','cqxwxfdb','7b7bc38b399218885065d7ec50bb70ad','18sUhx','cqxwxfdb@qq.com','111.10.7.108','1357461120','0','1357461120','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('41','1024sy','a8699e77ec81fc10ad5e4f5880fe64fc','whsfBI','55670024@qq.com','111.10.7.108','1357461201','0','1357461201','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('42','yjesd','e0f5ce51f0cf56822a19550ff1063309','N7MUH2','1932266390@qq.com','111.10.7.108','1357461397','0','1357461397','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('43','cqtld','d041fd1d40eb4e87d06bfa3c0fb7adc3','dIhcUy','cqtld@qq.com','111.10.7.108','1357461539','0','1357461539','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('44','lidadkaz','21f463e3c526f91c87ddcf0c3c4a9984','cu8gVg','lidadkaz@qq.com','111.10.7.108','1357461816','0','1357461816','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('45','cqtirone','513cd5144a4d15f0076964a49b5463b5','7w7KRm','258261091@qq.com','111.10.7.108','1357461996','0','1357461996','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('46','cqzysb','2b4261b4c7afcdcc8fbc7087d64e6fb0','kmnrtZ','417841682@qq.com','111.10.7.108','1357462240','0','1357462240','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('47','cqkdqz','390bbe405c67046c6d904e333784842b','XWpAD6','cqkdqz@qq.com','111.10.7.108','1357462424','0','1357462424','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('48','cqzkfb','c2fdd27d5f3570b4c2401e75fc63de2d','H5fcZg','cqzkfb@qq.com','111.10.7.108','1357462496','0','1357462496','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('49','cqhfxf','00b58e444d046f919ad4677920a1a74b','2i9Q2d','cqhfxf@cqhfxf.com','111.10.7.108','1357465312','58.64.187.141','1357466446','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('50','kigobrand','56702ea9bf873e9fb9a36cc95691ff75','9NRWgC','kigobrand@kigobrand.com','111.10.7.108','1357465387','58.64.187.141','1357466485','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('51','cqyjcw999','cd7e24c0db9400fecb90c275599a5006','bTAj1g','cqyjcw999@cqyjcw999.com','111.10.7.108','1357465444','0','1357465444','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('52','cqxdjgs','691ec638491a78c8b8895881ebe573f9','874KuP','cqxdjgs@cqxdjgs.com','111.10.7.108','1357465488','58.64.187.141','1357465543','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('53','vlsc3d','73e5377488a82fd175515d2e5ebc0bdf','rkPIk9','vlsc3d@vlsc3d.com','111.10.7.108','1357465620','0','1357465620','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('54','xjnantong','5810385c56bc484ec943a7ed97aaa244','2kMk4v','xjnantong@xjnantong.com','111.10.7.108','1357465693','0','1357465693','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('55','cqhaiduan','30e038a6caa9f8b42e290e2932b1981b','He1NjY','cqhaiduan@cqhaiduan.com','111.10.7.108','1357465748','0','1357465748','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('56','dgjiacai88','ad1da10382ebe802e8cb760040c5c343','LWFh7C','dgjiacai88@dgjiacai88.com','111.10.7.108','1357465806','0','1357465806','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('57','cqgfxf','d88473ccad8611ce24760d48a3304d6b','hyWwAJ','cqgfxf@cqgfxf.com','111.10.7.108','1357465862','0','1357465862','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('58','51wanzhuan','42a6a53bbfe25a08db75ec3aab902463','4uvj5W','51wanzhuan@51wanzhuan.com','111.10.7.108','1357465899','0','1357465899','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('59','cqkelong','79285fb2b159c3ec09995ea129aee059','remQaK','cqkelong@cqkelong.com','111.10.7.108','1357465947','0','1357465947','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('60','cqhuanghong','5122a6b12fb551b15739ab47d5ae3266','bCmuyv','cqhuanghong@cqhuanghong.com','111.10.7.108','1357465986','0','1357465986','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('61','haojintrade','5e6cfa57960cf7508a449b56dd256e69','6xAzfC','haojintrade@haojintrade.com','111.10.7.108','1357466107','0','1357466107','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('62','qizhou2012','6e4c60d9e09ff9a5c2c64b12f58c33d1','diyynV','qizhou2012@qizhou2012.com','111.10.7.108','1357466162','0','1357466162','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('63','hfxf','94120bf708ead4c71d841a06e2c79630','Wjsjtu','hfxf@hfxf.com','111.10.7.108','1357466247','0','1357466247','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('64','hunterlawyer','d937e0ee068ed55da8a8f37203acac47','zrkyj6','hunterlawyer@hunterlawyer.com','111.10.7.108','1357466291','0','1357466291','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('65','cqyunsen','30ee5e16bbc4260c1a6f179538c12e5e','vupZIj','cqyunsen@cqyunsen.com','111.10.7.108','1357466337','0','1357466337','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('66','che1234','20b67d73b656f5ce25912ff37c2745a9','S8AJFg','che1234@che1234.com','111.10.7.108','1357466407','0','1357466407','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('67','cqgelikt','9a65ab6d8dabd8000546261d7fcd801e','mgl4AJ','cqgelikt@cqgelikt.com','221.178.47.194','1357520671','0','1357520671','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('68','cqwugong02','8a5a9e76ba248d6b3c06af7c8551c675','UY8qln','cqwugong@cqwugong.com','221.178.47.194','1357520791','0','1357520791','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('69','sxldz','0c00ac43f780debb9874e307005462ef','jfZz7t','sxldz@sxldz.com','221.178.47.194','1357520843','0','1357520843','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('70','023ts','b2417b8f864e805312ebe06e065c1265','ZcMSpe','023ts@023ts.om','221.178.47.194','1357520883','0','1357520883','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('71','cqshgs','2d6eaae4f2c03471fdd3aff6b8ac9af9','G2fHit','cqshgs@cqshgs.com','221.178.47.194','1357520927','0','1357520927','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('72','cqaokesi','7f9294bf43a67a4f3a3f4643281b142d','Tp7C9z','cqaokesi@cqaokesi.com','221.178.47.194','1357520973','0','1357520973','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('73','cq4dm','66695fbad85653ee7fa4a18e41709e5e','F7k2gv','cq4dm@cq4dm.com','221.178.47.194','1357521031','0','1357521031','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('74','cqtsdl','f8b0d2353e66be7752e196c92ad90bb7','cqV8Zu','cqtsdl@cqtsdl.com','221.178.47.194','1357521076','0','1357521076','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('75','dgly888','cdc1ed0876162b469ae104a443da94e9','rVSykC','dgly888@dgly888.com','221.178.47.194','1357521116','0','1357521116','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('76','cqranhao','b7b6d5b03ecc24b8b0904128c57027d1','1MnMuN','cqranhao@cqranhao.com','221.178.47.194','1357521166','0','1357521166','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('77','cqjzw','3667fd480662b1110d77196080bdb853','19wrgw','cqjzw@cqjzw.com','221.178.47.194','1357521215','0','1357521215','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('78','hongfeng1','75a36ecbb2f93330d226a0b0df7f0750','w1RIFw','1710659569@qq.com','221.178.47.194','1357521561','0','1357521561','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('79','qiguogongsi','9c7532ebf18e9261275841062f561c5b','Mr2c3u','1611659569@qq.com','221.178.47.194','1357521639','0','1357521639','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('80','yijicaiwu','0cf01c10491c567d28892dd57706c3d6','YY1HWh','1718659569@qq.com','221.178.47.194','1357521724','0','1357521724','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('81','hongfengqicai','0f059fba2d503565a4beecb46ab082f6','RdvpWR','1771659509@qq.com','221.178.47.194','1357521771','0','1357521771','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('82','chuangnengwenhua','919ff59a848ae459d6a7544ffcc81b02','zwat18','1710559569@qq.com','221.178.47.194','1357521840','0','1357521840','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('83','cqfywz','6f7cfaa07537842677a60e01ab28d008','MRJ7qF','cqfywz@cqfywz.com','221.178.47.194','1357521859','0','1357521859','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('84','cqsssl','1395d63877759e453af5254af693f2ed','tn1Qdz','cqsssl@cqsssl.com','221.178.47.194','1357521899','0','1357521899','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('85','chuannenggongsi','24304cc63ec49ec79d2524180a8e6650','vLgVNh','1710559549@qq.com','221.178.47.194','1357521907','0','1357521907','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('86','cqlgwx','0f87321ed7bf54ecde22c204226650ae','uKVqV2','cqlgw@cqlgwx.com','221.178.47.194','1357521937','0','1357521937','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('87','cqxydoor','28d59e441f903ba18418ef82719dd8f5','7HaBVz','cqxydoor@cqxydoor.com','221.178.47.194','1357521978','0','1357521978','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('88','cqtianyu','1beda2c8e93a015a00942bb9ba515837','RGFbQY','cqtianyu@cqtianyu.com','221.178.47.194','1357522028','0','1357522028','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('89','hongfgs','fc856c652ed5eae82861a8fceedfee31','9rJBTC','1710359569@qq.com','221.178.47.194','1357522049','0','1357522049','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('90','bbdaxing','016ef34683397036500cd0bd142bd0ce','A2v1tr','bbdaxing@bbdaxing.com','221.178.47.194','1357522102','0','1357522102','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('91','jkd99','cbff8f5cc2be7f0d3b80d65c927d33d8','B7d8av','jkd99@jkd99.com','221.178.47.194','1357522142','0','1357522142','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('92','yunsengongsi','851c767edd836dcbe79772b6d4246d99','fB7ISQ','1712359569@qq.com','221.178.47.194','1357522144','0','1357522144','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('93','cqgxf','c83598be6095ccdbdd9d31c918006db8','SaXMPm','cqgxf@cqgxf.com','221.178.47.194','1357522190','0','1357522190','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('94','cqhongfeng','b09082b8e2ed4f5e99b432b1eeb09227','49qCwe','cqhongfeng@cqhongfeng.com','221.178.47.194','1357522237','0','1357522237','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('95','hongfengweibao','dcd6052bb5a72ed7f2f9f6cb9d2e7b40','MawG8U','1710459549@qq.com','221.178.47.194','1357522271','0','1357522271','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('96','hongfengwb','cff98c99898d8aaaa6696c7a46c21a01','af3Aua','hongfengwb@hongfengwb.com','221.178.47.194','1357522278','0','1357522278','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('97','cqdiaozhuang','db8bab07f5aab7a9ddcbf1a287f0506e','hXpQrl','cqdiaozhuang@cqdiaozhuang.com','221.178.47.194','1357522318','0','1357522318','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('98','cqqidong','b548638b958c7608c358b6fc1d6422ce','ui78cn','1710359869@qq.com','221.178.47.194','1357522325','0','1357522325','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('99','30ie','0a1539318fb8dd3b8d57f0c2c7f1f3da','7QAe8s','30ie@30ie.com','221.178.47.194','1357522385','0','1357522385','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('100','cqwl88629590','a29923e6ec8f9b06477bff126876b7d1','W3kbcI','cqwl88629590@cqwl88629590.com','221.178.47.194','1357522429','0','1357522429','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('101','cqdmlg','c2d85be22f21f60cf7fd2558782edaa0','ECKHWV','cqdmlg@cqdmlg.com','221.178.47.194','1357522585','0','1357522585','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('102','shenzhengtv','a9b2a02d40426f7339433ba5c6ba6498','qsRaDP','shenzhengtv@shenzhengtv.com','221.178.47.194','1357522634','0','1357522634','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('103','sztvshow518','4c62a6b7d5027eb1c60d14de2711ee15','sAze2e','sztvshow518@sztvshow518.com','221.178.47.194','1357522679','0','1357522679','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('104','hongfenglg','60cbcaea4fdc6f23b363b6bf971aa923','WHBecN','hongfenglg@hongfenglg.com','221.178.47.194','1357522757','0','1357522757','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('105','cqchinagoogle','4289a400419b69e7b255a70139966e57','cmlc8N','cqchinagoogle@cqchinagoogle.com','221.178.47.194','1357522811','0','1357522811','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('106','hongfengsx','e82759cb5beb65a9f6fc00b92656ab86','4WM7hi','hongfengsx@hongfengsx.com','221.178.47.194','1357522848','0','1357522848','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('107','hongfengsb','09bfc6483fad4a26d0f5ac58a20ce6ff','eZIDp1','hongfengsb@hongfengsb.com','221.178.47.194','1357523225','0','1357523225','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('108','haojin2012','13305c123520bc405cfc239841c88bb3','zbNEjq','haojin2012@haojin2012.com','221.178.47.194','1357523302','0','1357523302','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('109','520bei','5be53a45b719337c68892d1d07ce3411','gvF6ME','520bei@520bei.com','221.178.47.194','1357523385','0','1357523385','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('110','cqweicai','8b069218336d2f72ff52fd96b7424747','Ai7kFg','cqweicai@cqweicai.com','221.178.47.194','1357523437','0','1357523437','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('111','modelliyi01','5270ae820edf44e0ea762fc021e249d6','dDPF5Z','modelliyi@modelliyi.com','221.178.47.194','1357525429','0','1357525429','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('112','cqyfsb','45308a89de88ba8cbf5064a83a5f619f','JFe4y7','cqyfsb@cqyfsb.com','221.178.47.194','1357525476','0','1357525476','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('113','aojian2008','02b007ee1e16a6ae3bdfe0febcb3d434','znerlN','aojian2008@aojian2008.com','221.178.47.194','1357525514','0','1357525514','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('114','cqtongdai01','b33288f983ef4eac4a10609eee716d3b','qu6AEB','cqtongdai@cqtongdai.com','221.178.47.194','1357525559','0','1357525559','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('115','yjkc365','9a0064f508838f963e775ef37c7d2a71','DbvCDb','yjkc365@yjkc365.com','221.178.47.194','1357525599','0','1357525599','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('116','xianghetl','a45ffc2a6a6592b1583b03818c64eb3d','lwF5WS','xianghetl@xianghetl.com','221.178.47.194','1357525649','0','1357525649','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('117','cqyhbw','f4529836b098b594e8d3f2c915fcfb9b','KpDf6C','cqyhbw@cqyhbw.com','221.178.47.194','1357525691','0','1357525691','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('118','cqhuizhuo168','745f29b6989a6b55cad91d6dc45cef8c','Kdv7wj','cqhuizhuo168@cqhuizhuo168.com','221.178.47.194','1357525757','0','1357525757','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('119','cqhaierwx','cd767acbfb053756f01d11dab88956a9','7wARPI','cqhaierwx@cqhaierwx.com','221.178.47.194','1357525802','0','1357525802','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('120','zhanmendoor','b00ac0e3cebe78ce1f982ba1b80cfbed','vVvKff','zhanmendoor@zhanmendoor.com','221.178.47.194','1357525839','0','1357525839','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('121','li69','05318494ff56bd3598de8757871d26fb','6GtXPQ','li69@li69.com','221.178.47.194','1357525891','0','1357525891','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('122','cqwlhq','ac4c3aa4c5e297ddd92ada42ea20bf80','JPYhqz','cqwlhq@cqwlhq.com','221.178.47.194','1357525979','0','1357525979','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('123','wjwx88','39687924a33f0a4e0d0331f98d63f9aa','mtmuhZ','wjwx88@wjwx88.com','221.178.47.194','1357526046','0','1357526046','phpcms v9','app','0','0');");
E_D("replace into `v9_sso_members` values('124','51cp','cecc0ecf2c0516ba2d49dedac6db0bad','8yU3iJ','51cp@51cp.com','221.178.47.194','1357526091','0','1357526091','phpcms v9','app','0','0');");

require("../../inc/footer.php");
?>