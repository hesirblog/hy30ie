<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_announce`;");
E_C("CREATE TABLE `v9_announce` (
  `aid` smallint(4) unsigned NOT NULL auto_increment,
  `siteid` smallint(5) unsigned NOT NULL default '0',
  `title` char(80) NOT NULL,
  `content` text NOT NULL,
  `starttime` date NOT NULL default '0000-00-00',
  `endtime` date NOT NULL default '0000-00-00',
  `username` varchar(40) NOT NULL,
  `addtime` int(10) unsigned NOT NULL default '0',
  `hits` smallint(5) unsigned NOT NULL default '0',
  `passed` tinyint(1) unsigned NOT NULL default '0',
  `style` char(15) NOT NULL,
  `show_template` char(30) NOT NULL,
  PRIMARY KEY  (`aid`),
  KEY `siteid` (`siteid`,`passed`,`endtime`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `v9_announce` values('1','1','测试公告','测试公告很好很强大','2012-11-28','2012-11-30','admin','1354086025','0','1','default','show');");

require("../../inc/footer.php");
?>