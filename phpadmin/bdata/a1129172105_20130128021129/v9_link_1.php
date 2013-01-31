<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_link`;");
E_C("CREATE TABLE `v9_link` (
  `linkid` smallint(5) unsigned NOT NULL auto_increment,
  `siteid` smallint(5) unsigned default '0',
  `typeid` smallint(5) unsigned NOT NULL default '0',
  `linktype` tinyint(1) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
  `logo` varchar(255) NOT NULL default '',
  `introduce` text NOT NULL,
  `username` varchar(30) NOT NULL default '',
  `listorder` smallint(5) unsigned NOT NULL default '0',
  `elite` tinyint(1) unsigned NOT NULL default '0',
  `passed` tinyint(1) unsigned NOT NULL default '0',
  `addtime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`linkid`),
  KEY `typeid` (`typeid`,`passed`,`listorder`,`linkid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `v9_link` values('1','1','0','1','PHPCMS','http://www.phpcms.cn','http://www.phpcms.cn/images/logo_88_31.gif','','','0','0','1','1352512141');");
E_D("replace into `v9_link` values('2','1','0','1','盛大在线','http://www.sdo.com','http://www.snda.com/cn/logo/comp_logo_sdo.gif','','','0','0','1','1352512141');");

require("../../inc/footer.php");
?>