<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_template_bak`;");
E_C("CREATE TABLE `v9_template_bak` (
  `id` int(10) NOT NULL auto_increment,
  `creat_at` int(10) unsigned default '0',
  `fileid` char(50) default NULL,
  `userid` mediumint(8) default NULL,
  `username` char(20) default NULL,
  `template` text,
  PRIMARY KEY  (`id`),
  KEY `fileid` (`fileid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>