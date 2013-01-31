<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_member_detail`;");
E_C("CREATE TABLE `v9_member_detail` (
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `birthday` date DEFAULT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `v9_member_detail` values('1','1987-10-19');");
E_D("replace into `v9_member_detail` values('2','1983-02-16');");
E_D("replace into `v9_member_detail` values('3','1995-02-08');");
E_D("replace into `v9_member_detail` values('4','2013-01-01');");
E_D("replace into `v9_member_detail` values('5','2013-01-02');");
E_D("replace into `v9_member_detail` values('6','2013-01-02');");
E_D("replace into `v9_member_detail` values('7','2013-01-04');");
E_D("replace into `v9_member_detail` values('8','2013-01-08');");
E_D("replace into `v9_member_detail` values('9','2013-01-03');");
E_D("replace into `v9_member_detail` values('10','2013-01-10');");
E_D("replace into `v9_member_detail` values('11','2013-01-04');");
E_D("replace into `v9_member_detail` values('12','2013-01-03');");
E_D("replace into `v9_member_detail` values('13','2013-01-09');");
E_D("replace into `v9_member_detail` values('14','2013-01-10');");
E_D("replace into `v9_member_detail` values('15','2013-01-03');");
E_D("replace into `v9_member_detail` values('16','2013-01-10');");
E_D("replace into `v9_member_detail` values('17','2013-01-10');");
E_D("replace into `v9_member_detail` values('18','2013-01-10');");
E_D("replace into `v9_member_detail` values('19','2013-01-11');");
E_D("replace into `v9_member_detail` values('20','2013-01-11');");
E_D("replace into `v9_member_detail` values('21','0000-00-00');");
E_D("replace into `v9_member_detail` values('22','0000-00-00');");
E_D("replace into `v9_member_detail` values('23','0000-00-00');");
E_D("replace into `v9_member_detail` values('24','0000-00-00');");
E_D("replace into `v9_member_detail` values('25','0000-00-00');");
E_D("replace into `v9_member_detail` values('26','0000-00-00');");
E_D("replace into `v9_member_detail` values('27','0000-00-00');");
E_D("replace into `v9_member_detail` values('28','0000-00-00');");
E_D("replace into `v9_member_detail` values('29','0000-00-00');");
E_D("replace into `v9_member_detail` values('30','0000-00-00');");
E_D("replace into `v9_member_detail` values('31','0000-00-00');");
E_D("replace into `v9_member_detail` values('32','0000-00-00');");
E_D("replace into `v9_member_detail` values('33','0000-00-00');");
E_D("replace into `v9_member_detail` values('34','0000-00-00');");
E_D("replace into `v9_member_detail` values('35','0000-00-00');");
E_D("replace into `v9_member_detail` values('36','0000-00-00');");
E_D("replace into `v9_member_detail` values('37','0000-00-00');");
E_D("replace into `v9_member_detail` values('38','0000-00-00');");
E_D("replace into `v9_member_detail` values('39','0000-00-00');");
E_D("replace into `v9_member_detail` values('40','0000-00-00');");
E_D("replace into `v9_member_detail` values('41','0000-00-00');");
E_D("replace into `v9_member_detail` values('42','0000-00-00');");
E_D("replace into `v9_member_detail` values('43','0000-00-00');");
E_D("replace into `v9_member_detail` values('44','0000-00-00');");
E_D("replace into `v9_member_detail` values('45','0000-00-00');");
E_D("replace into `v9_member_detail` values('46','0000-00-00');");
E_D("replace into `v9_member_detail` values('47','0000-00-00');");
E_D("replace into `v9_member_detail` values('48','0000-00-00');");
E_D("replace into `v9_member_detail` values('49','0000-00-00');");
E_D("replace into `v9_member_detail` values('50','0000-00-00');");
E_D("replace into `v9_member_detail` values('51','0000-00-00');");
E_D("replace into `v9_member_detail` values('52','0000-00-00');");
E_D("replace into `v9_member_detail` values('53','0000-00-00');");
E_D("replace into `v9_member_detail` values('54','0000-00-00');");
E_D("replace into `v9_member_detail` values('55','0000-00-00');");
E_D("replace into `v9_member_detail` values('56','0000-00-00');");
E_D("replace into `v9_member_detail` values('57','0000-00-00');");
E_D("replace into `v9_member_detail` values('58','0000-00-00');");
E_D("replace into `v9_member_detail` values('59','0000-00-00');");
E_D("replace into `v9_member_detail` values('60','0000-00-00');");
E_D("replace into `v9_member_detail` values('61','0000-00-00');");
E_D("replace into `v9_member_detail` values('62','0000-00-00');");
E_D("replace into `v9_member_detail` values('63','0000-00-00');");
E_D("replace into `v9_member_detail` values('64','0000-00-00');");
E_D("replace into `v9_member_detail` values('65','0000-00-00');");
E_D("replace into `v9_member_detail` values('66','0000-00-00');");
E_D("replace into `v9_member_detail` values('67','0000-00-00');");
E_D("replace into `v9_member_detail` values('68','0000-00-00');");
E_D("replace into `v9_member_detail` values('69','0000-00-00');");
E_D("replace into `v9_member_detail` values('70','0000-00-00');");
E_D("replace into `v9_member_detail` values('71','0000-00-00');");
E_D("replace into `v9_member_detail` values('72','0000-00-00');");
E_D("replace into `v9_member_detail` values('73','0000-00-00');");
E_D("replace into `v9_member_detail` values('74','0000-00-00');");
E_D("replace into `v9_member_detail` values('75','0000-00-00');");
E_D("replace into `v9_member_detail` values('76','0000-00-00');");
E_D("replace into `v9_member_detail` values('77','0000-00-00');");
E_D("replace into `v9_member_detail` values('78','2013-01-04');");
E_D("replace into `v9_member_detail` values('79','0000-00-00');");
E_D("replace into `v9_member_detail` values('80','2013-01-17');");
E_D("replace into `v9_member_detail` values('81','2013-01-02');");
E_D("replace into `v9_member_detail` values('82','2013-01-25');");
E_D("replace into `v9_member_detail` values('83','0000-00-00');");
E_D("replace into `v9_member_detail` values('84','0000-00-00');");
E_D("replace into `v9_member_detail` values('85','2013-01-03');");
E_D("replace into `v9_member_detail` values('86','0000-00-00');");
E_D("replace into `v9_member_detail` values('87','0000-00-00');");
E_D("replace into `v9_member_detail` values('88','0000-00-00');");
E_D("replace into `v9_member_detail` values('89','2013-01-04');");
E_D("replace into `v9_member_detail` values('90','0000-00-00');");
E_D("replace into `v9_member_detail` values('91','0000-00-00');");
E_D("replace into `v9_member_detail` values('92','2013-01-02');");
E_D("replace into `v9_member_detail` values('93','0000-00-00');");
E_D("replace into `v9_member_detail` values('94','0000-00-00');");
E_D("replace into `v9_member_detail` values('95','2013-01-10');");
E_D("replace into `v9_member_detail` values('96','0000-00-00');");
E_D("replace into `v9_member_detail` values('97','0000-00-00');");
E_D("replace into `v9_member_detail` values('98','2013-01-01');");
E_D("replace into `v9_member_detail` values('99','0000-00-00');");
E_D("replace into `v9_member_detail` values('100','0000-00-00');");
E_D("replace into `v9_member_detail` values('101','0000-00-00');");
E_D("replace into `v9_member_detail` values('102','0000-00-00');");
E_D("replace into `v9_member_detail` values('103','0000-00-00');");
E_D("replace into `v9_member_detail` values('104','0000-00-00');");
E_D("replace into `v9_member_detail` values('105','0000-00-00');");
E_D("replace into `v9_member_detail` values('106','0000-00-00');");
E_D("replace into `v9_member_detail` values('107','0000-00-00');");
E_D("replace into `v9_member_detail` values('108','0000-00-00');");
E_D("replace into `v9_member_detail` values('109','0000-00-00');");
E_D("replace into `v9_member_detail` values('110','0000-00-00');");
E_D("replace into `v9_member_detail` values('111','0000-00-00');");
E_D("replace into `v9_member_detail` values('112','0000-00-00');");
E_D("replace into `v9_member_detail` values('113','0000-00-00');");
E_D("replace into `v9_member_detail` values('114','0000-00-00');");
E_D("replace into `v9_member_detail` values('115','0000-00-00');");
E_D("replace into `v9_member_detail` values('116','0000-00-00');");
E_D("replace into `v9_member_detail` values('117','0000-00-00');");
E_D("replace into `v9_member_detail` values('118','0000-00-00');");
E_D("replace into `v9_member_detail` values('119','0000-00-00');");
E_D("replace into `v9_member_detail` values('120','0000-00-00');");
E_D("replace into `v9_member_detail` values('121','0000-00-00');");
E_D("replace into `v9_member_detail` values('122','0000-00-00');");
E_D("replace into `v9_member_detail` values('123','0000-00-00');");
E_D("replace into `v9_member_detail` values('124','0000-00-00');");

require("../../inc/footer.php");
?>