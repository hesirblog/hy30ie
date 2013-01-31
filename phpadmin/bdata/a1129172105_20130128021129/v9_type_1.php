<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_type`;");
E_C("CREATE TABLE `v9_type` (
  `typeid` smallint(5) unsigned NOT NULL auto_increment,
  `siteid` smallint(5) unsigned NOT NULL default '0',
  `module` char(15) NOT NULL,
  `modelid` smallint(5) unsigned NOT NULL default '0',
  `name` char(30) NOT NULL,
  `parentid` smallint(5) unsigned NOT NULL default '0',
  `typedir` char(20) NOT NULL,
  `url` char(100) NOT NULL,
  `template` char(30) NOT NULL,
  `listorder` smallint(5) unsigned NOT NULL default '0',
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`typeid`),
  KEY `module` (`module`,`parentid`,`siteid`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8");
E_D("replace into `v9_type` values('52','1','search','0','专题','0','special','','','4','专题');");
E_D("replace into `v9_type` values('1','1','search','1','新闻','0','','','','1','新闻模型搜索');");
E_D("replace into `v9_type` values('2','1','search','2','下载','0','','','','3','下载模型搜索');");
E_D("replace into `v9_type` values('3','1','search','3','图片','0','','','','2','图片模型搜索');");
E_D("replace into `v9_type` values('53','1','content','0','音乐','0','','','','0','');");
E_D("replace into `v9_type` values('55','1','content','0','新闻','0','','','','0','');");
E_D("replace into `v9_type` values('56','1','content','0','图书','0','','','','0','');");
E_D("replace into `v9_type` values('57','1','content','0','MP3','0','','','','0','');");

require("../../inc/footer.php");
?>