<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_wap_type`;");
E_C("CREATE TABLE `v9_wap_type` (
  `typeid` smallint(5) NOT NULL auto_increment,
  `cat` smallint(5) NOT NULL,
  `parentid` smallint(5) NOT NULL,
  `typename` varchar(30) NOT NULL,
  `siteid` smallint(5) NOT NULL,
  `listorder` smallint(5) default '0',
  PRIMARY KEY  (`typeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>