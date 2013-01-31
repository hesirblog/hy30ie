<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_plugin`;");
E_C("CREATE TABLE `v9_plugin` (
  `pluginid` smallint(6) unsigned NOT NULL auto_increment,
  `appid` int(10) default NULL,
  `name` varchar(40) NOT NULL default '',
  `identification` varchar(40) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `datatables` varchar(255) NOT NULL default '',
  `dir` varchar(100) NOT NULL default '',
  `copyright` varchar(100) NOT NULL default '',
  `setting` text NOT NULL,
  `iframe` text NOT NULL,
  `version` varchar(20) NOT NULL default '',
  `listorder` tinyint(3) NOT NULL default '0',
  `disable` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`pluginid`),
  UNIQUE KEY `identification` (`identification`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>