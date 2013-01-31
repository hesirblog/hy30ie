<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_vote_data`;");
E_C("CREATE TABLE `v9_vote_data` (
  `userid` mediumint(8) unsigned default '0',
  `username` char(20) NOT NULL,
  `subjectid` mediumint(8) unsigned NOT NULL default '0',
  `time` int(10) unsigned NOT NULL default '0',
  `ip` char(15) NOT NULL,
  `data` text NOT NULL,
  `userinfo` text NOT NULL,
  KEY `subjectid` (`subjectid`),
  KEY `userid` (`userid`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>