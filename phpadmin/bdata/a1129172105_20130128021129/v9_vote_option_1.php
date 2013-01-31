<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_vote_option`;");
E_C("CREATE TABLE `v9_vote_option` (
  `optionid` mediumint(8) unsigned NOT NULL auto_increment,
  `siteid` smallint(5) unsigned default '0',
  `subjectid` mediumint(8) unsigned NOT NULL default '0',
  `option` varchar(255) NOT NULL,
  `image` varchar(100) default NULL,
  `listorder` tinyint(2) unsigned default '0',
  PRIMARY KEY  (`optionid`),
  KEY `subjectid` (`subjectid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>