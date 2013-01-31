<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_sso_admin`;");
E_C("CREATE TABLE `v9_sso_admin` (
  `id` smallint(6) NOT NULL auto_increment,
  `username` char(20) NOT NULL,
  `password` char(32) NOT NULL,
  `encrypt` char(6) default NULL,
  `issuper` tinyint(1) default '0',
  `lastlogin` int(10) default NULL,
  `ip` char(15) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `v9_sso_admin` values('1','admin','1822c40617143c770a8bdcda5838a02a','1fzd2R','1','1358747131','221.178.37.102');");

require("../../inc/footer.php");
?>