<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_copyfrom`;");
E_C("CREATE TABLE `v9_copyfrom` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sitename` varchar(30) NOT NULL,
  `siteurl` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `v9_copyfrom` values('1','1','凤凰网','http://www.ifeng.com','http://res.img.ifeng.com/8cbe73a7378dafdb/2011/0401/n_12.gif','0');");
E_D("replace into `v9_copyfrom` values('2','1',' 百度新闻','http://news.baidu.com','','0');");
E_D("replace into `v9_copyfrom` values('3','1','新浪新闻','http://news.sina.com.cn','','0');");
E_D("replace into `v9_copyfrom` values('4','1','腾讯新闻','http://news.qq.com','','0');");
E_D("replace into `v9_copyfrom` values('5','1','重庆双昌营销策划有限公司','http://hy.30ie.com','','0');");

require("../../inc/footer.php");
?>