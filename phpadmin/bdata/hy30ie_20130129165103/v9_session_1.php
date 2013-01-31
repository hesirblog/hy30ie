<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_session`;");
E_C("CREATE TABLE `v9_session` (
  `sessionid` char(32) NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL,
  `lastvisit` int(10) unsigned NOT NULL DEFAULT '0',
  `roleid` tinyint(3) unsigned DEFAULT '0',
  `groupid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `m` char(20) NOT NULL,
  `c` char(20) NOT NULL,
  `a` char(20) NOT NULL,
  `data` char(255) NOT NULL,
  PRIMARY KEY (`sessionid`),
  KEY `lastvisit` (`lastvisit`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `v9_session` values('7fb520ee157c25a518e469cca9280e50','1','127.0.0.1','1359449458','1','0','admin','index','public_session_life','code|s:4:\"6vua\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"0o8rlN\";lock_screen|i:0;');");
E_D("replace into `v9_session` values('632baca7c6c410a0b913af6686f657e5','1','127.0.0.1','1359449453','1','0','','','','code|s:4:\"6muv\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"lSFd66\";lock_screen|i:0;');");

require("../../inc/footer.php");
?>