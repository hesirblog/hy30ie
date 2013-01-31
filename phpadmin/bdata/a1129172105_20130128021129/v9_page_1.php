<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_page`;");
E_C("CREATE TABLE `v9_page` (
  `catid` smallint(5) unsigned NOT NULL default '0',
  `title` varchar(160) NOT NULL,
  `style` varchar(24) NOT NULL,
  `keywords` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `template` varchar(30) NOT NULL,
  `updatetime` int(10) unsigned NOT NULL default '0',
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `v9_page` values('2','双昌公司简介',';','双昌公司简介','<table bgcolor=\"#ffffff\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\" width=\"100%\">\r\n<tbody>\r\n	<tr>\r\n	<td class=\"W12\">\r\n	<p style=\"width:470px;margin-left:10px;*margin-left:5px\">重 庆谦复科技有限公司（圣矢网络重庆公司）自成立以来，始终致力于在信息技术领域发展。秉承&quot;创新、求实、诚信、拼搏&quot;的企业精神，致力为企业提供全面的网 络宣传与技术应用整体策划方案，真正实现企业互联网信息智能化，提高企业在网络科技时代的市场竞争力。以客户为中心，以技术为基础，以质量求生存，以诚信 求发展，优秀的我们，为客户提供一个无懈可击的展示空间。圣矢网络在全国设立多个办事处，分布在东莞、深圳,上海,重庆。总部设在广州市。与国际及国内众 多著名IT企业等建立了长期的战略合作关系。并与全国各地重点IT公司建立了和谐、共赢的合作关系。<br />\r\n	目前圣矢网络为国内、外超过数万家的企业提供了域名、邮件服务、虚拟主机、网站托管服务，同时为近千家的企业设计开发了基于互联网的各类商务应用和管理软 件，是国内具影响力的互联网应用服务商之一。公司将坚持客户导向、应用为本的策略，继续专注于在信息技术领域开拓发展成为企业、政府、家庭信息化的推动者 和服务者。正道将秉承&quot;和谐、参与、激情&quot;的文化，与客户和合作伙伴齐心协力一起成长，共同发展。保证为每位客户提供360度的服务质量，我们将不断提高 公司的运作效率。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n	<p style=\"width:470px;margin-left:10px;*margin-left:5px\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 公司自创立以来，积极进取，不断创新，凭借良好的企业信誉，独特的经营风格及较强的市场开拓能力，取得了一个又一个的骄人业绩。数年来，互诺科技快速稳健的发展，离不开业内极其优秀的合作伙伴。</p>\r\n	</td>\r\n	</tr>\r\n	<tr>\r\n	<td class=\"T14\" style=\"text-align: center\"><img alt=\"\" height=\"251\" src=\"http://www.30ie.com/uploads/allimg/110702/1_110702224524_1.jpg\" width=\"680\" /></td>\r\n	</tr>\r\n	<tr>\r\n	<td class=\"T14\" style=\"text-align: center\"><img alt=\"\" height=\"314\" src=\"http://www.30ie.com/uploads/allimg/110702/1_110702224439_1.jpg\" width=\"610\" /></td>\r\n	</tr>\r\n</tbody>\r\n</table>\r\n','','0');");
E_D("replace into `v9_page` values('17','服务团队',';','服务团队','<p><span style=\"color: #8b4513\"><strong>诚信-以诚为本，以信为道:</strong></span><br />\r\n诚实守信是圣矢网络的企业品格，是圣矢网络在商业活动中对合作伙伴和客户许下的庄严承诺。</p>\r\n<p><span style=\"color: #8b4513\"><strong>专注-我们专业，因为我们更专注:</strong></span><br />\r\n圣矢网络倡导专心注意、精神贯注；把全部的精力放在一件事情上做好、做深、做精。</p>\r\n<p><span style=\"color: #8b4513\"><strong>高效-行事果断，追求高效:</strong></span><br />\r\n圣矢网络以迅捷高效为企业风格，不仅追求做事的速度，也讲究做事方法，强调以高效为原则，以结果为导向。</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #8b4513\"><strong>创新-起于零点，锐意创新:</strong></span><br />\r\n圣矢网络坚信唯一不变的便是变化本身，创新是延续企业生命的唯一途径。创新成就圣矢网络面临复杂、多元、多变的互联网格局时，能够安稳如山、从容自如。</p>\r\n','','0');");
E_D("replace into `v9_page` values('5','招贤纳士',';','招贤纳士','<p style=\"text-align: center\"><span style=\"color: #ff6600\"><span style=\"font-size: large\">电话销售精英&nbsp; </span></span></p>\r\n<p>&nbsp;</p>\r\n<dl id=\"comJobContent\">\r\n	<dt style=\"text-align: left\">\r\n		岗位职责</dt>\r\n</dl>\r\n<dl id=\"comJobContent\" style=\"text-align: left\">\r\n	<dd>\r\n		职位描述：<br />\r\n		1、客户前期电话开发，约访跟进<br />\r\n		2、发掘潜在客户，为客户提供优质的咨询服务<br />\r\n		3、完成协议的签订，客户资料的整理，老客户的回访等</dd>\r\n</dl>\r\n<dl id=\"comJobOtherNeed\">\r\n	<dt style=\"text-align: left\">\r\n		岗位要求</dt>\r\n</dl>\r\n<dl id=\"comJobOtherNeed\" style=\"text-align: left\">\r\n	<dd>\r\n		岗位要求 其他要求：<br />\r\n		1、形象气质佳，有吃苦耐劳的精神。<br />\r\n		2、声音甜美，能熟练操作计算机办公软件 。<br />\r\n		3、性格开朗大方，积极向上，有较强的语言组织、表达能力和应变能力 。<br />\r\n		4、有一年以上电话营销或客服工作经历者优先 。</dd>\r\n</dl>\r\n<p>&nbsp;</p>\r\n<div class=\"con_cent_text\">\r\n<dl>\r\n	<dt style=\"text-align: center\">\r\n		<span style=\"color: #ff0000\"><span style=\"font-size: large\">商务代表</span></span></dt>\r\n	<dt>\r\n		岗位职责</dt>\r\n	<dd>\r\n		搜索意向客户进行拜访积累，跟进签单<br />\r\n		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 寻找客户资源，跟进客户，促成签单<br />\r\n		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 按时完成公司规定业绩<br />\r\n		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 维护老客户，挖掘新客户<br />\r\n		<p>&nbsp;</p>\r\n		<dl id=\"comJobOtherNeed\">\r\n			<dt>\r\n				岗位要求</dt>\r\n			<dd>\r\n				对互联网有一定的了解；有团队合作精神；善于给自己设定目标并坚决完成；<br />\r\n				性格开朗有行动力；勤奋务实；人品好；工作态度认真负责；善于处理人际关系；<br />\r\n				沟通能力强；有野心，肯吃苦，有挑战高薪提升自我的强烈动机；有互联网销售经<br />\r\n				对网站建设，网络优化推广知识比较的了解<br />\r\n				<br />\r\n				计算机专业优先</dd>\r\n		</dl>\r\n		<p>薪资情况 ：一经正式录用公司将采用：底薪+提成+生活补助+电话补助+保险 (约3000元---8000元)</p>\r\n		<p>应聘联系电话：</p>\r\n		<p>联系人：彭先生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 电话：15802326188</p>\r\n	</dd>\r\n</dl>\r\n</div>\r\n','','0');");
E_D("replace into `v9_page` values('3','联系我们',';','联系我们','<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\">&nbsp;</p>\r\n<p class=\"p0\" style=\"text-align: left; margin-top: 0pt; margin-bottom: 0pt\"><span style=\"font-size: large\"><span style=\"font-family: 黑体\"><strong>&nbsp; </strong></span></span></p>\r\n<div>\r\n<div><span style=\"font-size: large\"><span style=\"font-family: 黑体\"><strong><strong>重庆双昌企业营销策划有限公司（圣矢网络）</strong></strong></span></span></div>\r\n</div>\r\n<p class=\"p0\" style=\"text-align: left; margin-top: 0pt; margin-bottom: 0pt\">&nbsp;</p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\"><span style=\"font-family: ''宋体''; font-size: 12pt; mso-spacerun: ''yes''\"><o:p></o:p></span></p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\">&nbsp;</p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\"><span style=\"font-family: ''宋体''; font-size: 12pt; mso-spacerun: ''yes''\"><strong><span style=\"font-family: ''宋体''\">&nbsp;全国统一服务热线</span><span style=\"font-family: ''宋体''\">：</span></strong><span style=\"font-family: ''宋体''; font-size: 12pt; mso-spacerun: ''yes''\"><o:p></o:p></span><span style=\"font-size: x-large\"><strong><span style=\"font-family: Arial; color: #b92822; font-size: 20px\">400－600－5209</span></strong><span style=\"font-family: 黑体\">&nbsp;</span></span><span style=\"font-family: ''宋体''; font-size: 12pt; mso-spacerun: ''yes''\"><o:p></o:p></span></span></p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\">&nbsp;</p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\"><span style=\"font-size: larger\"><strong><span style=\"font-family: ''宋体''\">&nbsp;业务咨询:</span></strong></span><span style=\"font-family: ''宋体''; font-size: 12pt; mso-spacerun: ''yes''\"> </span><span style=\"font-size: large\"><strong><span style=\"font-family: ''Times New Roman''; color: rgb(185,40,34)\">023</span></strong></span><span style=\"font-family: ''Times New Roman''; font-size: 12pt; mso-spacerun: ''yes''\">-</span><strong><span style=\"font-family: ''Times New Roman''; font-size: 12pt\"><strong>61224830</strong></span><span style=\"font-family: ''Times New Roman''; margin-left: 30px; font-size: 12pt\"><strong>81988543</strong></span></strong></p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\"><span style=\"margin-left: 80px; font-size: large\"><strong><span style=\"font-family: ''Times New Roman''; color: rgb(185,40,34)\">023</span></strong></span><span style=\"font-family: ''Times New Roman''; font-size: 12pt; mso-spacerun: ''yes''\">-</span><strong><span style=\"font-family: ''Times New Roman''; font-size: 12pt\"><strong>81957041</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>81957043</strong></span></strong><br />\r\n&nbsp;</p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\">&nbsp;</p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\"><strong><span style=\"font-family: ''宋体''; font-size: 12pt\">&nbsp;24<font face=\"宋体\">小时服务热线：</font></span></strong></p>\r\n<p><strong><span style=\"font-family: ''宋体''; margin-left: 80px; font-size: 12pt\"><font face=\"Times New Roman\">13983656990&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>18983920730</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>13752891587</strong></font></span><font face=\"Times New Roman\"><span style=\"font-family: ''Times New Roman''; margin-left: 40px; font-size: 12pt\">&nbsp;</span></font></strong><span style=\"font-family: ''宋体''; font-size: 12pt; mso-spacerun: ''yes''\"><o:p></o:p></span></p>\r\n<p><strong><span style=\"font-family: ''宋体''; font-size: 12pt\"><span style=\"font-family: ''宋体''; font-size: 12pt; mso-spacerun: ''yes''\">&nbsp;投诉建议<font face=\"Times New Roman\">:</font></span> </span></strong></p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\"><strong><span style=\"font-family: ''宋体''; margin-left: 80px; font-size: 12pt\"><font face=\"Times New Roman\">15802326188</font></span><font face=\"Times New Roman\"><span style=\"font-family: ''Times New Roman''; margin-left: 40px; font-size: 12pt\">13983360554&nbsp;&nbsp;&nbsp; </span></font></strong></p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\">&nbsp;</p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\"><span style=\"font-family: ''Times New Roman''; font-size: 12pt; mso-spacerun: ''yes''\"><o:p></o:p></span></p>\r\n<p class=\"p0\" style=\"margin-top: 0pt; margin-bottom: 0pt\"><strong><span style=\"font-family: ''宋体''; font-size: 12pt\">&nbsp;建站咨询<font face=\"Times New Roman\">QQ</font><font face=\"宋体\">：</font></span></strong><span style=\"font-family: ''宋体''; font-size: 12pt; mso-spacerun: ''yes''\"><o:p></o:p></span></p>\r\n<p style=\"text-align: center\"><a href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=1164802271&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img alt=\"点击这里给我发消息\" border=\"0\" src=\"http://wpa.qq.com/pa?p=2:1164802271:41\" title=\"点击这里给我发消息\" /></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=1634331925&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img alt=\"点击这里给我发消息\" border=\"0\" src=\"http://wpa.qq.com/pa?p=2:1634331925:41\" title=\"点击这里给我发消息\" /></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=1721659503&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img alt=\"点击这里给我发消息\" border=\"0\" src=\"http://wpa.qq.com/pa?p=2:1721659503:41\" title=\"点击这里给我发消息\" /></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=1164802271&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img alt=\"点击这里给我发消息\" border=\"0\" src=\"http://wpa.qq.com/pa?p=2:1164802271:41\" title=\"点击这里给我发消息\" /></a></p>\r\n<span style=\"font-size: 14px\"><strong><span style=\"font-size: 16px\">公司地址：</span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>重庆石桥铺新亚家具广场三楼高新区IT园A108</strong></strong></span><br />\r\n&nbsp;','','0');");
E_D("replace into `v9_page` values('19','付款方式',';','付款方式','<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"23\" width=\"96%\">\r\n<tbody>\r\n	<tr>\r\n	<td height=\"20\">\r\n	<p align=\"center\"><font color=\"#000000\"><font class=\"fred\"><font style=\"font-size: 14px\"><font style=\"font-size: 12px\"><font color=\"#ff0000\"><strong>敬告:</strong>请按照以下公布的支付方式支付.如客户不是汇款到我司指定帐号而导致的经济纠纷,我司不负任何责任。</font></font></font></font></font></p>\r\n	</td>\r\n	</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<table align=\"center\" bgcolor=\"#cccccc\" border=\"0\" cellpadding=\"6\" cellspacing=\"1\" height=\"23\" width=\"96%\">\r\n<tbody>\r\n	<tr>\r\n	<td bgcolor=\"#e2e2e2\"><strong><font style=\"font-size: 16px\">★ 网上支付 [实时自动入款.推荐使用]</font></strong></td>\r\n	</tr>\r\n	<tr>\r\n	<td bgcolor=\"#fafafa\">\r\n	<table bgcolor=\"#fafafa\" border=\"0\" cellpadding=\"8\" cellspacing=\"0\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n		<td class=\"clear\" colspan=\"2\">\r\n		<p>目前网上支付支持&ldquo;<span class=\"STYLE1 fred\"><strong><font color=\"#ff0000\">支付宝</font></strong>&rdquo;</span>和&ldquo;<font color=\"#ff0000\"><strong>网上银行</strong></font>&rdquo;两种网上支付方式，支持国内各种银行账户，只要开通了网银业务都可使用,在支付时请根据自己要求进行选择！</p>\r\n		<p>&nbsp;支付宝帐户：<a href=\"mailto:shuangchang@scqyyx.com\">shuangchang@scqyyx.com</a>&nbsp;（罗芳）</p>\r\n		</td>\r\n		<td class=\"clear\" rowspan=\"3\" valign=\"top\" width=\"28%\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n	</table>\r\n	</td>\r\n	</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<table align=\"center\" bgcolor=\"#cccccc\" border=\"0\" cellpadding=\"8\" cellspacing=\"1\" height=\"23\" width=\"96%\">\r\n<tbody>\r\n	<tr>\r\n	<td bgcolor=\"#e2e2e2\" colspan=\"3\"><span class=\"fred\"><strong style=\"font-size: 14px\"><font style=\"font-size: 16px\">★ 银行转帐</font></strong></span></td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"center\" bgcolor=\"#fafafa\" height=\"23\">开 户 银 行</td>\r\n	<td align=\"center\" bgcolor=\"#fafafa\" height=\"23\">帐 号</td>\r\n	<td align=\"center\" bgcolor=\"#fafafa\" height=\"23\">开 户 名 称 (收 款 人)</td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\">中国建设银行重庆石桥铺分理处</div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\"><strong>6227 0037 6185 0072 643</strong></div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<p align=\"center\"><strong>罗 芳</strong></p>\r\n	</td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\">中国农业银行重庆高新区支行泰兴分理处</div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\"><strong>6228 4804 7093 4052 817</strong></div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<p align=\"center\"><strong><strong>罗 芳</strong></strong></p>\r\n	</td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\">中国银行重庆石桥铺支行</div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\"><strong>6216 6132 0000 9349 730</strong></div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<p align=\"center\"><strong><strong>罗 芳</strong></strong></p>\r\n	</td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\">中国工商银行重庆高科技支行营业部</div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\"><strong><strong>6222 0231 0006 6045 498</strong></strong></div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<p align=\"center\"><strong><strong>罗 芳</strong></strong></p>\r\n	</td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\">中国邮政储蓄重庆市开县支行</div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<div align=\"center\"><strong>6221 8865 3008 9853 304</strong></div>\r\n	</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">\r\n	<p align=\"center\"><strong><strong>罗 芳</strong></strong></p>\r\n	</td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"left\" bgcolor=\"#ffffff\" colspan=\"3\">注：银行电汇底单须有银行加盖的转讫章。<br />\r\n	<br />\r\n	<font color=\"#ff0000\"><strong>我司不接受10元以下的汇款，每次汇款请汇10元以上，否则我司不予处理</strong></font></td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"left\" bgcolor=\"#ffffff\" class=\"fred\" colspan=\"3\"><strong>&nbsp;公司帐户(不接受个人汇款)</strong></td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"center\" bgcolor=\"#fafafa\" height=\"23\">开户银行</td>\r\n	<td align=\"center\" bgcolor=\"#fafafa\" height=\"23\">帐号</td>\r\n	<td align=\"center\" bgcolor=\"#fafafa\" height=\"23\">开户名称(收款人)</td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\">中国银行重庆二郎支行</td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\"><strong><font face=\"宋体\">111612199205</font></strong></td>\r\n	<td align=\"center\" bgcolor=\"#ffffff\" height=\"23\"><strong><font face=\"宋体\">重庆谦复科技有限公司</font></strong></td>\r\n	</tr>\r\n	<tr>\r\n	<td align=\"left\" bgcolor=\"#ffffff\" class=\"clear\" colspan=\"3\"><span style=\"color: #cc0000\">注：1. 银行对收款人书写非常严格，开户名称一定要写完整&nbsp;&nbsp; <strong><font color=\"#000000\"><strong><font face=\"宋体\">重庆谦复科技有限公司 </font></strong></font></strong>，否则无法到账.<br />\r\n	&nbsp;&nbsp;&nbsp; 2. 由于公司账户到账比较慢,您最好通过在线网上支付或个人账户给我们入款</span></td>\r\n	</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<table align=\"center\" bgcolor=\"#cccccc\" border=\"0\" cellpadding=\"8\" cellspacing=\"1\" height=\"23\" width=\"96%\">\r\n<tbody>\r\n	<tr>\r\n	<td bgcolor=\"#e2e2e2\" class=\"fred\" colspan=\"2\" style=\"font-size: 14px\"><strong><font style=\"font-size: 16px\">★ 上门交费</font></strong></td>\r\n	</tr>\r\n	<tr>\r\n	<td bgcolor=\"#f3f3f3\"><strong>地址</strong></td>\r\n	<td bgcolor=\"#fafafa\"><strong>重庆市九龙坡区石桥铺石杨路17号附77-1号重庆创新创业基地&middot;IT微企孵化园A108</strong></td>\r\n	</tr>\r\n	<tr>\r\n	<td bgcolor=\"#f3f3f3\"><strong>收款人</strong></td>\r\n	<td bgcolor=\"#fafafa\"><strong>彭先生</strong></td>\r\n	</tr>\r\n	<tr>\r\n	<td bgcolor=\"#f3f3f3\"><strong>电话</strong></td>\r\n	<td bgcolor=\"#fafafa\"><strong>&nbsp;023-89120977&nbsp;&nbsp;&nbsp;&nbsp; 89129975 </strong></td>\r\n	</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n','','0');");
E_D("replace into `v9_page` values('4','双昌荣誉',';','双昌荣誉','双昌荣誉双昌荣誉双昌荣誉双昌荣誉双昌荣誉','','0');");
E_D("replace into `v9_page` values('18','发展历程',';','发展历程','发展历程发展历程发展历程发展历程发展历程发展历程发展历程','','0');");
E_D("replace into `v9_page` values('1','关于双昌',';','关于 双昌','<table bgcolor=\"#ffffff\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\" width=\"100%\">\r\n<tbody>\r\n	<tr>\r\n	<td class=\"W12\">\r\n	<p style=\"width:470px;margin-left:10px;*margin-left:5px\">重 庆谦复科技有限公司（圣矢网络重庆公司）自成立以来，始终致力于在信息技术领域发展。秉承&quot;创新、求实、诚信、拼搏&quot;的企业精神，致力为企业提供全面的网 络宣传与技术应用整体策划方案，真正实现企业互联网信息智能化，提高企业在网络科技时代的市场竞争力。以客户为中心，以技术为基础，以质量求生存，以诚信 求发展，优秀的我们，为客户提供一个无懈可击的展示空间。圣矢网络在全国设立多个办事处，分布在东莞、深圳,上海,重庆。总部设在广州市。与国际及国内众 多著名IT企业等建立了长期的战略合作关系。并与全国各地重点IT公司建立了和谐、共赢的合作关系。<br />\r\n	目前圣矢网络为国内、外超过数万家的企业提供了域名、邮件服务、虚拟主机、网站托管服务，同时为近千家的企业设计开发了基于互联网的各类商务应用和管理软 件，是国内具影响力的互联网应用服务商之一。公司将坚持客户导向、应用为本的策略，继续专注于在信息技术领域开拓发展成为企业、政府、家庭信息化的推动者 和服务者。正道将秉承&quot;和谐、参与、激情&quot;的文化，与客户和合作伙伴齐心协力一起成长，共同发展。保证为每位客户提供360度的服务质量，我们将不断提高 公司的运作效率。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n	<p style=\"width:470px;margin-left:10px;*margin-left:5px\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 公司自创立以来，积极进取，不断创新，凭借良好的企业信誉，独特的经营风格及较强的市场开拓能力，取得了一个又一个的骄人业绩。数年来，互诺科技快速稳健的发展，离不开业内极其优秀的合作伙伴。</p>\r\n	</td>\r\n	</tr>\r\n	<tr>\r\n	<td class=\"T14\" style=\"text-align: center\"><img alt=\"\" height=\"251\" src=\"http://www.30ie.com/uploads/allimg/110702/1_110702224524_1.jpg\" width=\"680\" /></td>\r\n	</tr>\r\n	<tr>\r\n	<td class=\"T14\" style=\"text-align: center\"><img alt=\"\" height=\"314\" src=\"http://www.30ie.com/uploads/allimg/110702/1_110702224439_1.jpg\" width=\"610\" /></td>\r\n	</tr>\r\n</tbody>\r\n</table>\r\n','','0');");

require("../../inc/footer.php");
?>