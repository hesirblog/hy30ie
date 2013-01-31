<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_collection_program`;");
E_C("CREATE TABLE `v9_collection_program` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `nodeid` int(10) unsigned NOT NULL DEFAULT '0',
  `modelid` mediumint(6) unsigned NOT NULL DEFAULT '0',
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `siteid` (`siteid`),
  KEY `nodeid` (`nodeid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `v9_collection_program` values('1','1','1','1','11','array (\n  ''add_introduce'' => ''1'',\n  ''auto_thumb'' => ''1'',\n  ''introcude_length'' => ''200'',\n  ''auto_thumb_no'' => ''1'',\n  ''content_status'' => ''99'',\n  ''map'' => \n  array (\n    ''title'' => ''title'',\n    ''updatetime'' => ''time'',\n    ''content'' => ''content'',\n    ''inputtime'' => ''time'',\n  ),\n)');");

require("../../inc/footer.php");
?>