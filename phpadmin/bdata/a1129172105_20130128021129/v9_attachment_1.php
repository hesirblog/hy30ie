<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_attachment`;");
E_C("CREATE TABLE `v9_attachment` (
  `aid` int(10) unsigned NOT NULL auto_increment,
  `module` char(15) NOT NULL,
  `catid` smallint(5) unsigned NOT NULL default '0',
  `filename` char(50) NOT NULL,
  `filepath` char(200) NOT NULL,
  `filesize` int(10) unsigned NOT NULL default '0',
  `fileext` char(10) NOT NULL,
  `isimage` tinyint(1) unsigned NOT NULL default '0',
  `isthumb` tinyint(1) unsigned NOT NULL default '0',
  `downloads` mediumint(8) unsigned NOT NULL default '0',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `uploadtime` int(10) unsigned NOT NULL default '0',
  `uploadip` char(15) NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  `authcode` char(32) NOT NULL,
  `siteid` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`aid`),
  KEY `authcode` (`authcode`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8");
E_D("replace into `v9_attachment` values('1','content','0','20121122061542254.jpg','2012/1122/20121122061542254.jpg','63808','jpg','1','0','0','0','1353579342','127.0.0.1','1','bf0c2cc38de1a53a8f7c7abe3410f44c','1');");
E_D("replace into `v9_attachment` values('2','content','0','20121124104054869.jpg','2012/1124/20121124104054869.jpg','43268','jpg','1','0','0','0','1353724854','127.0.0.1','1','ad45420886d1a685f21d29e44d0bd5b0','1');");
E_D("replace into `v9_attachment` values('3','content','0','20121124104156767.jpg','2012/1124/20121124104156767.jpg','84541','jpg','1','0','0','0','1353724916','127.0.0.1','1','f13aa39bce80ca64e8b166e4bac1a327','1');");
E_D("replace into `v9_attachment` values('4','content','0','20121124104243749.jpg','2012/1124/20121124104243749.jpg','528773','jpg','1','0','0','0','1353724963','127.0.0.1','1','8956ea40a36a7e388f0c76f35751f456','1');");
E_D("replace into `v9_attachment` values('5','content','0','20121124104335414.jpg','2012/1124/20121124104335414.jpg','84885','jpg','1','0','0','0','1353725015','127.0.0.1','1','e4a3d42527419312e992e0e05ec0b627','1');");
E_D("replace into `v9_attachment` values('6','content','0','IMAG0850.jpg','2012/1230/20121230093735376.jpg','1104993','jpg','1','0','0','1','1356831455','127.0.0.1','0','8ac8c9e0112c35cdfabca087fa6b87ce','1');");
E_D("replace into `v9_attachment` values('7','content','0','20130114021849659.jpg','2013/0114/20130114021849659.jpg','74382','jpg','1','0','0','0','1358144329','127.0.0.1','1','a769c32f159aaf9b098072fcc35888b5','1');");
E_D("replace into `v9_attachment` values('8','content','0','20130114021852162.jpg','2013/0114/20130114021852162.jpg','20022','jpg','1','0','0','0','1358144329','127.0.0.1','1','365f7b8d3fc2ff7ce442a2828568c265','1');");
E_D("replace into `v9_attachment` values('9','content','0','20130114021943808.jpg','2013/0114/20130114021943808.jpg','82158','jpg','1','0','0','0','1358144383','127.0.0.1','1','ef0f43495434c36f4e33a057ac6ef1d4','1');");
E_D("replace into `v9_attachment` values('10','content','0','20130114021945488.jpg','2013/0114/20130114021945488.jpg','20022','jpg','1','0','0','0','1358144383','127.0.0.1','1','12085c55bc98216e89850be0982b4e83','1');");
E_D("replace into `v9_attachment` values('11','content','0','20130114022026597.jpg','2013/0114/20130114022026597.jpg','81391','jpg','1','0','0','0','1358144426','127.0.0.1','1','82e75f2c49ded4a7f227250b2343e8ff','1');");
E_D("replace into `v9_attachment` values('12','content','0','20130114022027605.jpg','2013/0114/20130114022027605.jpg','20022','jpg','1','0','0','0','1358144426','127.0.0.1','1','2da6dca529d47b000b8b820882b3f693','1');");
E_D("replace into `v9_attachment` values('13','content','0','20130114022115858.jpg','2013/0114/20130114022115858.jpg','110073','jpg','1','0','0','0','1358144475','127.0.0.1','1','52e41f42e221ff5b6f38f0afcc654fd2','1');");
E_D("replace into `v9_attachment` values('14','content','0','20130114022117530.jpg','2013/0114/20130114022117530.jpg','20022','jpg','1','0','0','0','1358144475','127.0.0.1','1','ed089afaf9f383502586d29d7998e8e9','1');");
E_D("replace into `v9_attachment` values('15','content','0','20130114022158492.jpg','2013/0114/20130114022158492.jpg','66290','jpg','1','0','0','0','1358144518','127.0.0.1','1','dcdaf2c2aa6622fbbe0fa7db538f3e1b','1');");
E_D("replace into `v9_attachment` values('16','content','0','20130114022200163.jpg','2013/0114/20130114022200163.jpg','20022','jpg','1','0','0','0','1358144518','127.0.0.1','1','a11d052e81c5f8d93e396c13cb4e40df','1');");
E_D("replace into `v9_attachment` values('17','content','0','20130114055511962.jpg','2013/0114/20130114055511962.jpg','58358','jpg','1','0','0','0','1358157311','127.0.0.1','1','b8706628de3111c1237d6287f67606f3','1');");
E_D("replace into `v9_attachment` values('18','content','0','20130114055513166.jpg','2013/0114/20130114055513166.jpg','36945','jpg','1','0','0','0','1358157311','127.0.0.1','1','fa3899cf519a18887b42e445a4094709','1');");
E_D("replace into `v9_attachment` values('19','content','0','20130114055514868.jpg','2013/0114/20130114055514868.jpg','23600','jpg','1','0','0','0','1358157311','127.0.0.1','1','758808fcbbb57a4615d41680dc986b24','1');");
E_D("replace into `v9_attachment` values('20','content','0','20130114055515786.jpg','2013/0114/20130114055515786.jpg','40130','jpg','1','0','0','0','1358157311','127.0.0.1','1','e856c88300998ef8ade9ed3decabb9ed','1');");
E_D("replace into `v9_attachment` values('21','content','0','20130114055516343.jpg','2013/0114/20130114055516343.jpg','35409','jpg','1','0','0','0','1358157311','127.0.0.1','1','b1c2b0021238813142f8e3178709e459','1');");
E_D("replace into `v9_attachment` values('22','content','0','20130114055646752.jpg','2013/0114/20130114055646752.jpg','40291','jpg','1','0','0','0','1358157406','127.0.0.1','1','9b342314017c6ce6702a8e21fdeda7de','1');");
E_D("replace into `v9_attachment` values('23','content','0','20130114055647568.jpg','2013/0114/20130114055647568.jpg','40963','jpg','1','0','0','0','1358157406','127.0.0.1','1','ec72c0e92fe5c28a257f31b878c22074','1');");
E_D("replace into `v9_attachment` values('24','content','0','20130114055648676.jpg','2013/0114/20130114055648676.jpg','38182','jpg','1','0','0','0','1358157406','127.0.0.1','1','e7d61c1185e3e1999e2df2f8cef4d1d4','1');");
E_D("replace into `v9_attachment` values('25','content','0','20130114055650138.jpg','2013/0114/20130114055650138.jpg','32423','jpg','1','0','0','0','1358157406','127.0.0.1','1','667a84eb3d0e18c255ebea9695ce445b','1');");
E_D("replace into `v9_attachment` values('26','content','0','20130114055651154.jpg','2013/0114/20130114055651154.jpg','23185','jpg','1','0','0','0','1358157406','127.0.0.1','1','2e96dad44220011023684f7d1c4a0dfe','1');");
E_D("replace into `v9_attachment` values('27','content','0','20130114055651718.jpg','2013/0114/20130114055651718.jpg','55692','jpg','1','0','0','0','1358157406','127.0.0.1','1','8f5db2ff80b7742cbce43be2bcde51f4','1');");
E_D("replace into `v9_attachment` values('28','content','0','20130114055653179.jpg','2013/0114/20130114055653179.jpg','41350','jpg','1','0','0','0','1358157406','127.0.0.1','1','f9a3525c86f73e0c650cb724bc1f4f96','1');");
E_D("replace into `v9_attachment` values('29','content','0','20130114055654955.jpg','2013/0114/20130114055654955.jpg','28304','jpg','1','0','0','0','1358157406','127.0.0.1','1','e11b3e3335722ece2050f12fe49b9613','1');");
E_D("replace into `v9_attachment` values('30','content','0','20130114055654820.jpg','2013/0114/20130114055654820.jpg','22201','jpg','1','0','0','0','1358157406','127.0.0.1','1','dbaf6e85c43ef9a018a7fa35a505df27','1');");
E_D("replace into `v9_attachment` values('31','content','0','20130114055655929.jpg','2013/0114/20130114055655929.jpg','23319','jpg','1','0','0','0','1358157406','127.0.0.1','1','13cce4b66b5e9527631b53a978dcedca','1');");
E_D("replace into `v9_attachment` values('32','content','0','20130114055853622.jpg','2013/0114/20130114055853622.jpg','45553','jpg','1','0','0','0','1358157533','127.0.0.1','1','58f07f5283ce43f5b1655243706863a8','1');");
E_D("replace into `v9_attachment` values('33','content','0','20130114055854644.jpg','2013/0114/20130114055854644.jpg','21052','jpg','1','0','0','0','1358157533','127.0.0.1','1','c191bf5f39ebf2b37766888009a0a052','1');");
E_D("replace into `v9_attachment` values('34','content','0','20130114055858175.jpg','2013/0114/20130114055858175.jpg','34185','jpg','1','0','0','0','1358157533','127.0.0.1','1','8f65329abb6bafe43ba26fc0ef170f15','1');");
E_D("replace into `v9_attachment` values('35','content','0','20130114055858375.jpg','2013/0114/20130114055858375.jpg','15043','jpg','1','0','0','0','1358157533','127.0.0.1','1','5e5936a249b809472bf8b592d366ce92','1');");
E_D("replace into `v9_attachment` values('36','content','0','20130114055942809.jpg','2013/0114/20130114055942809.jpg','20179','jpg','1','0','0','0','1358157582','127.0.0.1','1','5e55206e906b19caec646a69e13b71a9','1');");
E_D("replace into `v9_attachment` values('37','content','0','20130114055942768.jpg','2013/0114/20130114055942768.jpg','18383','jpg','1','0','0','0','1358157582','127.0.0.1','1','578adcc280328a34160fedd769482a48','1');");
E_D("replace into `v9_attachment` values('38','content','0','20130114055942196.jpg','2013/0114/20130114055942196.jpg','33515','jpg','1','0','0','0','1358157582','127.0.0.1','1','508ac52773231da7ffce9e4065884504','1');");
E_D("replace into `v9_attachment` values('39','content','0','20130114055943208.jpg','2013/0114/20130114055943208.jpg','16129','jpg','1','0','0','0','1358157582','127.0.0.1','1','55f0de86d234b3ef34026ea22da3c7bc','1');");
E_D("replace into `v9_attachment` values('40','content','0','20130114055944795.jpg','2013/0114/20130114055944795.jpg','15201','jpg','1','0','0','0','1358157582','127.0.0.1','1','e4367603ad2b39f83d3af830603c9277','1');");
E_D("replace into `v9_attachment` values('41','content','0','20130114055944630.jpg','2013/0114/20130114055944630.jpg','71980','jpg','1','0','0','0','1358157582','127.0.0.1','1','92792c439455aa664b83ff1418768cb3','1');");
E_D("replace into `v9_attachment` values('42','content','0','20130114055946676.jpg','2013/0114/20130114055946676.jpg','12829','jpg','1','0','0','0','1358157582','127.0.0.1','1','52d60a9c9013075b7e24400e21897e0e','1');");
E_D("replace into `v9_attachment` values('43','content','0','20130114055947455.jpg','2013/0114/20130114055947455.jpg','49457','jpg','1','0','0','0','1358157582','127.0.0.1','1','91796113bec6bba173f5b7ad22f310fb','1');");
E_D("replace into `v9_attachment` values('44','content','0','20130114055951582.jpg','2013/0114/20130114055951582.jpg','28527','jpg','1','0','0','0','1358157582','127.0.0.1','1','6188d7f2102e8b9b41aa32e680b45654','1');");
E_D("replace into `v9_attachment` values('45','content','0','20130114055951440.jpg','2013/0114/20130114055951440.jpg','34065','jpg','1','0','0','0','1358157582','127.0.0.1','1','4d73fb5a914f868fd05262202bb7caf2','1');");
E_D("replace into `v9_attachment` values('46','content','0','20130114060023623.jpg','2013/0114/20130114060023623.jpg','40614','jpg','1','0','0','0','1358157623','127.0.0.1','1','7352ffa130e7af636d55f24f4b2c6ff9','1');");
E_D("replace into `v9_attachment` values('47','content','0','20130114060025607.jpg','2013/0114/20130114060025607.jpg','38648','jpg','1','0','0','0','1358157623','127.0.0.1','1','443e325d002f8e2eba3c7d06df9b695a','1');");
E_D("replace into `v9_attachment` values('48','content','0','20130114060026246.jpg','2013/0114/20130114060026246.jpg','34204','jpg','1','0','0','0','1358157623','127.0.0.1','1','bbceaf1571404f24c568b6b1ee80ac84','1');");
E_D("replace into `v9_attachment` values('49','content','0','20130114060026256.jpg','2013/0114/20130114060026256.jpg','35659','jpg','1','0','0','0','1358157623','127.0.0.1','1','24b0f2d255b0d8da75209eed4e3e3bb1','1');");
E_D("replace into `v9_attachment` values('50','content','0','20130114060028334.jpg','2013/0114/20130114060028334.jpg','35990','jpg','1','0','0','0','1358157623','127.0.0.1','1','9c52aa95f353cbf24d4f343054160a58','1');");
E_D("replace into `v9_attachment` values('51','content','0','20130114060029456.jpg','2013/0114/20130114060029456.jpg','41948','jpg','1','0','0','0','1358157623','127.0.0.1','1','96decfc20f453198723f7b0a137e1db6','1');");
E_D("replace into `v9_attachment` values('52','content','0','20130114060030462.jpg','2013/0114/20130114060030462.jpg','18834','jpg','1','0','0','0','1358157623','127.0.0.1','1','abba999ccb68c9e73f96d537997bd8ee','1');");
E_D("replace into `v9_attachment` values('53','content','0','20130114060113740.jpg','2013/0114/20130114060113740.jpg','25708','jpg','1','0','0','0','1358157673','127.0.0.1','1','e9d66d9a0156ab67ad8c2f3817ddd91e','1');");
E_D("replace into `v9_attachment` values('54','content','0','20130114060118964.jpg','2013/0114/20130114060118964.jpg','26487','jpg','1','0','0','0','1358157673','127.0.0.1','1','34ffc01fb214a4163200e1031d908411','1');");
E_D("replace into `v9_attachment` values('55','content','0','20130114060119612.jpg','2013/0114/20130114060119612.jpg','44242','jpg','1','0','0','0','1358157673','127.0.0.1','1','62ab960ef91568559c0ebb7b9d3fc6cc','1');");
E_D("replace into `v9_attachment` values('56','content','0','20130114060122909.jpg','2013/0114/20130114060122909.jpg','46022','jpg','1','0','0','0','1358157673','127.0.0.1','1','cb9c6ec47df179dc2777dade77f50119','1');");
E_D("replace into `v9_attachment` values('57','content','0','20130114060124224.jpg','2013/0114/20130114060124224.jpg','66762','jpg','1','0','0','0','1358157673','127.0.0.1','1','44f27af5388efe92309da5bfcbd32714','1');");

require("../../inc/footer.php");
?>