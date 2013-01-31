<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_category_priv`;");
E_C("CREATE TABLE `v9_category_priv` (
  `catid` smallint(5) unsigned NOT NULL default '0',
  `siteid` smallint(5) unsigned NOT NULL default '0',
  `roleid` smallint(5) unsigned NOT NULL default '0',
  `is_admin` tinyint(1) unsigned NOT NULL default '0',
  `action` char(30) NOT NULL,
  KEY `catid` (`catid`,`roleid`,`is_admin`,`action`),
  KEY `siteid` (`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `v9_category_priv` values('6','1','7','0','add');");
E_D("replace into `v9_category_priv` values('6','1','7','0','visit');");
E_D("replace into `v9_category_priv` values('6','1','5','0','add');");
E_D("replace into `v9_category_priv` values('6','1','5','0','visit');");
E_D("replace into `v9_category_priv` values('6','1','4','0','add');");
E_D("replace into `v9_category_priv` values('6','1','4','0','visit');");
E_D("replace into `v9_category_priv` values('6','1','6','0','add');");
E_D("replace into `v9_category_priv` values('6','1','6','0','visit');");
E_D("replace into `v9_category_priv` values('6','1','2','0','add');");
E_D("replace into `v9_category_priv` values('6','1','2','0','visit');");
E_D("replace into `v9_category_priv` values('6','1','8','0','visit');");

require("../../inc/footer.php");
?>