<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_sso_settings`;");
E_C("CREATE TABLE `v9_sso_settings` (
  `name` varchar(32) NOT NULL default '',
  `data` text NOT NULL,
  PRIMARY KEY  (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `v9_sso_settings` values('denyemail','');");
E_D("replace into `v9_sso_settings` values('denyusername','');");
E_D("replace into `v9_sso_settings` values('creditrate','');");
E_D("replace into `v9_sso_settings` values('sp4','');");
E_D("replace into `v9_sso_settings` values('ucenter','');");

require("../../inc/footer.php");
?>