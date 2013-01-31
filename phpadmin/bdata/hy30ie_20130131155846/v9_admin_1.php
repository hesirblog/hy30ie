<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_admin`;");
E_C("CREATE TABLE `v9_admin` (
  `userid` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `roleid` smallint(5) DEFAULT '0',
  `encrypt` varchar(6) DEFAULT NULL,
  `lastloginip` varchar(15) DEFAULT NULL,
  `lastlogintime` int(10) unsigned DEFAULT '0',
  `email` varchar(40) DEFAULT NULL,
  `realname` varchar(50) NOT NULL DEFAULT '',
  `card` varchar(255) NOT NULL,
  `lang` varchar(6) NOT NULL,
  PRIMARY KEY (`userid`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `v9_admin` values('1','admin','3beaec9924684e529d7b743f64495c11','1','NvjrKv','127.0.0.1','1359617953','admin@admin.com','','','');");
E_D("replace into `v9_admin` values('2','30ie','67e0f9f77a9713d1dbd1e66484a067a5','8','GjivEw','127.0.0.1','1354181361','30ie@qq.com','30ie','','');");
E_D("replace into `v9_admin` values('3','seotest','54ea10a102ec6fec4247b5471913e1da','9','q87igi','127.0.0.1','1357347950','seotest@qq.com','seotest','','');");
E_D("replace into `v9_admin` values('4','liubin','44c2518e406d436ad98b94e1fe73a6eb','9','jzykUN','183.228.54.89','1358926299','liubin@qq.com','刘斌','','');");
E_D("replace into `v9_admin` values('5','zhangzhongfu','df33e38695e9fe5678b824e42560576f','9','du9Zu8','183.228.28.241','1358841283','zhangzhongfu@qq.com','张中福','','');");
E_D("replace into `v9_admin` values('6','wangjiaying','7e7da6ddc91d4b34e253caeaa7c66784','9','DXQYgx','183.228.28.241','1358841225','wangjiaying@qq.com','王家英','','');");

require("../../inc/footer.php");
?>