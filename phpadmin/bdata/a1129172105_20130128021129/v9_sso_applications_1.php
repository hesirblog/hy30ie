<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_sso_applications`;");
E_C("CREATE TABLE `v9_sso_applications` (
  `appid` smallint(6) unsigned NOT NULL auto_increment,
  `type` char(16) NOT NULL default '',
  `name` char(20) NOT NULL default '',
  `url` char(255) NOT NULL default '',
  `authkey` char(255) NOT NULL default '',
  `ip` char(15) NOT NULL default '',
  `apifilename` char(30) NOT NULL default 'phpsso.php',
  `charset` char(8) NOT NULL default '',
  `synlogin` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`appid`),
  KEY `synlogin` (`synlogin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `v9_sso_applications` values('1','phpcms_v9','phpcms v9','http://hy.30ie.com/','h68pj6cnkbiopr5jly8omgaikquqj85h','','api.php?op=phpsso','utf-8','1');");

require("../../inc/footer.php");
?>