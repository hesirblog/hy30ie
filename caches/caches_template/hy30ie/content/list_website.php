<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/global.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/sitedetail.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-1.8.3.min.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-cookie.js" language="javascript" type="text/javascript"></script>
	<script language="javascript" type="text/javascript">
        var a = function (o) { return document.getElementById(o); }
        function showdiv(parm) {
            a('productdetail').style.display = 'none';
            a('successexample').style.display = 'none';
            a('quesion').style.display = 'none';
            a('others').style.display = 'none';
            a(parm).style.display = '';
            for (var i in a('tab_t').getElementsByTagName('LI')) {
                a('tab_t').getElementsByTagName('LI')[i].className = '.tse li';
            }
        }
    </script>
	<script type="text/javascript" language="javascript">
        (function () {
            if (!typeof EffectTools == "undefined") {
                alert("\u9879\u76ee\u4e2d\u591a\u6b21\u51fa\u73b0EffectTools\u811a\u672c\u7c7b\u5e93,\u8bf7\u67e5\u9605\uff01");
                return false
            }
        })();
        var EffectTools = { CutoverTab: function (c, d, a, b) {
            $(c).click(function () {
                $(c).removeClass(d);
                $(this).addClass(d);
                if (b) { b($(a).hide().eq($(this).index())) } $(a).hide().eq($(this).index()).show()
            })
        }, ScrollImg: function (m) {
            if (!m) { return } var p = m.imgClass, i = m.leftBtnClass, o = m.rightBtnClass, f = !m.curLeft ? 0 : m.curLeft; 
            var a = m.moveWidth; 
            var q = $(p + " li").size(); 
            var j = !m.display ? 5 : m.display;
            var l = !m.moveTime ? 1000 : m.moveTime;
            var d = !m.waitTime ? 5000 : m.waitTime;
            var e = m.leftMove; var n = m.rightMove; 
            var b = $(p).html();
            var c = false;
            var k = !m.autoMove ? false : m.autoMove;
            $(i).click(function () {
                if (c) { return } c = true;
                e = true; n = false;
                if (h != null) { clearInterval(h) } g();
                if (k) { h = setInterval(g, d) } 
            });
            $(o).click(function () {
                if (c) { return } c = true;
                e = false; n = true; if (h != null) { clearInterval(h) } g();
                if (k) { h = setInterval(g, d) } 
            });
            var g = function () {
                if (e) { if (-($(p + " li").size() * a - a * j) == $(p).position().left || -($(p + " li").size() * a - a * j) == $(p).position().left - 1) { $(p).append(b) } if ($(p).position().left == -(a * q)) { f = 0; $(p).html(b).css({ left: f + "px" }) } f -= +a; $(p).animate({ left: f + "px" }, l, function () { c = false }) } if (n) {
                    if ($(p).position().left == 0) { $(p).prepend(b); f = -(q * a); $(p).css({ left: f + "px" }) } var r = $(p).position().left;
                    if (r == -((q * a) - (a * j))) { $(p).html(b).css({ left: r + "px" }) } f -= -a; $(p).animate({ left: f + "px" }, l, function () { c = false })
                } 
            };
            var h = null; if (k) { setInterval(g, d) } this.setCurLeft = function (r) { f = r; return this }; 
               this.StartMove = function () { $(p).animate({ left: f + "px" }, l, function () { c = false }) } } };

        $(function () {
            var Packageid = '0';

            var Packageid3 = '0';

            (function () {
                var navItems = $('#bzImgNav'),
                    imgList = $('.filter-2col > img'),
                    curIndex = 0;

                imgList.hide();
                navItems.children('li').each(function (i) {
                    $(this).click(function () {
                        imgList.hide().eq(i).show();
                        navItems.find('a').removeClass('on');
                        $(this).children('a').addClass('on');
                        curIndex = i;
                    })
                });
                navItems.children('li').eq(curIndex).click();
                curIndex++;
                setInterval(function () {
                    if (curIndex > 2) {
                        curIndex = 0;
                    }
                    navItems.children('li').eq(curIndex).click();
                    curIndex++;
                }, 3000);
            })();
        });
</script>
</head>
<body>
	<?php include template("content","header"); ?>
				<div id="nav_inf">
					当前位置：
					<a class="nb" href="/">
					首页
					</a>
					&gt; <?php echo catpos($catid);?> 列表
				</div>
				<div class="filter-context">
				  <h1>
					<span id="product_site_name">
					  标准网站-企业网站建设首选！
					</span>
				  </h1>
				  <div class="filter-2col">
					<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg2.jpg" style="display: none;">
					<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg3.jpg" style="display: none;">
					<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg4.jpg" style="display: inline;">
					<ul class="imgList" id="bzImgNav">
					  <li>
						<a class=" " href="#">
						  1
						</a>
					  </li>
					  <li>
						<a href="#" class=" ">
						  2
						</a>
					  </li>
					  <li>
						<a href="#" class="  on">
						  3
						</a>
					  </li>
					</ul>
				  </div>
				  <div class="filter-2col-2">
					<div class="textBg1">
					</div>
					<div class="version_box">
					  <div style=" display:block" class="version_text1">
						<p>
						  适合初创型企业，网站以产品展示及信息发布为主
						</p>
						<ul>
						  <li>
							• 提供一个首页风格个性化设计
						  </li>
						  <li>
							• 10个栏目页制作（延续主页风格）
						  </li>
						  <li>
							• 10篇文章信息添加
						  </li>
						  <li>
							• 10个商品信息添加
						  </li>
						  <li>
							• 网站BANNER多图效果展示
						  </li>
						  <li>
							• 系统预置功能及操作模块多达300种
						  </li>
						</ul>
					  </div>
					  <div class="version_text1">
						<p>
						  适合成长型企业，网站以产品展示及信息发布为主
						</p>
						<ul>
						  <li>
							• 提供一个首页风格个性化设计
						  </li>
						  <li>
							• 20个栏目页制作（延续主页风格）
						  </li>
						  <li>
							• 20篇文章信息添加
						  </li>
						  <li>
							• 20个商品信息添加
						  </li>
						  <li>
							• 网站BANNER多图效果展示
						  </li>
						  <li>
							• 系统预置功能及操作模块多达300种
						  </li>
						</ul>
					  </div>
					  <div class="version_text1">
						<p>
						  适合中等或较大规模企业，外贸型企业，对网站的设计和功能要求很高
						</p>
						<ul>
						  <li>
							• 提供一个首页风格个性化设计
						  </li>
						  <li>
							• 30个栏目页制作（延续主页风格）
						  </li>
						  <li>
							• 30篇文章信息添加
						  </li>
						  <li>
							• 30个商品信息添加
						  </li>
						  <li>
							• 一个首页banner制作（3张图片轮换或Flash展示（手绘和3D除外））
						  </li>
						  <li>
							• 双语网站（中、英或繁体）
						  </li>
						  <li>
							• 系统预置功能及操作模块多达300种以上
						  </li>
						  <li>
							• 网站会员管理系统
						  </li>
						</ul>
					  </div>
					</div>
					<div class="version-textmoney">
					  <div class="filter-textcon">
						原价：
						<strong class="price_old">
						  4980.00
						</strong>
						元&nbsp;&nbsp;&nbsp;&nbsp;抢先体验价：
						<strong id="resourc_price_count">
						  4980.00
						</strong>
						元
						<p class="faqP1">
						  有疑问?
						  <span>
							<a target="_blank" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=800008390&amp;f=1&amp;ty=1&amp;aty=0&amp;a=&amp;from=6">
							  立即在线咨询
							</a>
						  </span>
						  ，或致电
						  <strong>
							400-023-6181
						  </strong>
						</p>
					  </div>
					  <div class="filter-conbut no-top">
						<a href="#" class="dm_btn5">
						</a>
					  </div>
					</div>
				  </div>
				  <div class="Details_tab">
					<ul id="tab_t" class="tse">
					  <li onclick="showdiv('productdetail');this.className='sd'" class="sd">
						产品详情
					  </li>
					  <li onclick="showdiv('successexample');this.className='sd'">
						成功案例
					  </li>
					  <li onclick="showdiv('quesion');this.className='sd'">
						常见问题
					  </li>
					  <li onclick="showdiv('others');this.className='sd'">
						服务保障
					  </li>
					</ul>
					<ul class="tss" id="productdetail">
					  <div class="cpImgCon">
						<img src="<?php echo TEMPLETS_SKIN;?>/images/bzBanner1.gif">
						<h5>
						  选择企业标准网站的理由
						</h5>
						<ul>
						  <li>
							<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg01.gif">
						  </li>
						  <li>
							<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg07.gif">
						  </li>
						  <li>
							<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg02.gif">
						  </li>
						  <li>
							<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg03.gif">
						  </li>
						  <li>
							<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg04.gif">
						  </li>
						  <li>
							<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg05.gif">
						  </li>
						  <li>
							<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg06.gif">
						  </li>
						  <li>
							<img src="<?php echo TEMPLETS_SKIN;?>/images/bzImg08.gif">
						  </li>
						</ul>
					  </div>
					</ul>
					<ul style="display:none; width:923px;" class="tss" id="successexample">
					  <li class="tailor_case_list">
						<p>
						  <a class="img" href="#">
							<img width="137" height="82" src="/uploadfile/Catering/ztCases1.gif">
						  </a>
						</p>
						<p>
						  iPowerCase---标准型
						</p>
					  </li>
					  <li class="tailor_case_list">
						<p>
						  <a class="img" href="#">
							<img width="137" height="82" src="/uploadfile/Catering/ztCases2.gif">
						  </a>
						</p>
						<p>
						  北京正元祺会展服务有限公司---标准型
						</p>
					  </li>
					  <li class="tailor_case_list">
						<p>
						  <a class="img" href="#">
							<img width="137" height="82" src="/uploadfile/Catering/ztCases3.gif">
						  </a>
						</p>
						<p>
						  ONNA CERAMICHE---标准型
						</p>
					  </li>
					  <li class="tailor_case_list">
						<p>
						  <a class="img" href="#">
							<img width="137" height="82" src="/uploadfile/Catering/ztCases4.gif">
						  </a>
						</p>
						<p>
						  和谐家庭基金---标准型
						</p>
					  </li>
					  <li class="tailor_case_list">
						<p>
						  <a class="img" href="#">
							<img width="137" height="82" src="/uploadfile/Catering/ztCases5.gif">
						  </a>
						</p>
						<p>
						  中广集团文化传播（香港）有限公司---标准型
						</p>
					  </li>
					</ul>
					<ul style="display:none;" class="tss" id="quesion">
					  <li>
						<div class="tailor_faq_list">
						  <ul style="padding:10px;">
							<li>
							  <div class="hot">
								• 问：企业标准网站的售后服务包括哪些内容？
							  </div>
							  <div>
								A、操作手册和视频：企业标准网站有编辑好的网站操作手册，还有根据网站操作录制的指导视频。
								<br>
								B、售后服务电话：400-023-6181为企业标准网站服务专线，您有问题可以拨打这个电话，企业标准网站服务支持人员会即时给您解答。
								<br>
								C、免费升级服务：企业标准网站服务系统每隔半年均有一次较大的功能升级，您不需增加任何费用，不需做任何调整即可在网站管理后台享受到升级的新功能。
							  </div>
							</li>
							<li>
							  <div class="hot">
								• 问：选择企业标准网站服务还需要再购买域名和主机空间和带宽吗？
							  </div>
							  <div>
								企业标准网站建设服务提供一站式解决企业上网解决方案，包含主机空间和带宽服务，同时只要在服务期限内就免费享受技术升级维护。域名需要单独注册。
							  </div>
							</li>
							<li>
							  <div class="hot">
								• 问：我需要制作日文和韩文的网站，企业标准网站服务可否支持？
							  </div>
							  <div>
								企业标准网站服务的功能模块目前原生支持英文、简体中文及繁体中文，如果网站里面只是页面文字及图片是日文、韩文或其它语言，那企业标准建站服务都可以支持。
							  </div>
							</li>
							<li>
							  <div class="hot">
								• 问：我过去的网站经常被病毒和木马困扰，企业标准网站服务的网站是否安全？
							  </div>
							  <div>
								企业标准网站系统是采用SAAS模式，已经脱离了过去网站程序、数据库及网站空间互相独立的模式。现在更拥有负载均衡加服务器集群，软硬件防火墙以保证整体安全性，黑客几乎无法对其进行攻击，所以安全可靠。同时只要在网站使用期限内，都可以享受到免费的系统安全升级服务。
							  </div>
							</li>
							<li>
							  <div class="hot">
								• 问：购买了企业标准网站服务，每年都需要交哪些费用？
							  </div>
							  <div>
								首次购买企业标准网站服务的费用均已经包含了初始的网站设计费及此后的系统服务费（有一年期、三年期优惠、五年期优惠三种规格），在签约时一次付清全款；在首次购买的服务年限结束后，只需要每年进行续费即可。
							  </div>
							</li>
							<li>
							  <div class="hot">
								• 问：公司没有技术人员，如何进行网站维护？
							  </div>
							  <div>
								企业标准网站采用智能网站管理系统，鼠标拖拽式后台管理的方式人人会用。网站制作完成后，我们会安排网站后台使用的培训，并且提供您网站的操作手册和视频，把管理账号和密码发给您，您肯定是可以很好的维护管理您的网站的。
							  </div>
							</li>
							<li>
							  <div class="hot">
								• 问：企业标准网站服务建设一个网站要多长时间？是什么样的流程？
							  </div>
							  <div>
								如果您的资料准备完善并且能够及时配合我们修改和确认，我们完成一个企业标准网站的制作仅需要5个工作日。大致的流程：确认需求-设计首页效果图-搭建网站框架-添加网站内容-网站上线
							  </div>
							</li>
						  </ul>
						</div>
					  </li>
					</ul>
					<ul style="display:none;" class="tss" id="others">
					  <div class="TemplateClass1_service">
						<ul>
						  <li class="ServiceList">
							<div class="ServiceIco">
							  <img src="<?php echo TEMPLETS_SKIN;?>/images/A00402_ICO_01.jpg">
							</div>
							<div class="ServiceCnt">
							  <dl>
								<dt>
								  网站自动升级
								</dt>
								<dd>
								  企业标准网站会定期进行网站bug修复、功能升级，您不需要任何费用，也不需要做任何调整即可在网站管理后台享受到升级的新功能。
								</dd>
							  </dl>
							</div>
						  </li>
						  <li class="ServiceList">
							<div class="ServiceIco">
							  <img src="<?php echo TEMPLETS_SKIN;?>/images/A00402_ICO_03.jpg">
							</div>
							<div class="ServiceCnt">
							  <dl>
								<dt>
								  7*24小时售后服务
								</dt>
								<dd>
								  双昌"最佳客服中心"团队提供7x24小时的客户服务，给您即时准确的问题解答
								</dd>
							  </dl>
							</div>
						  </li>
						  <li style=" border-bottom:0;" class="ServiceList">
							<div class="ServiceIco">
							  <img src="<?php echo TEMPLETS_SKIN;?>/images/A00402_ICO_02.jpg">
							</div>
							<div class="ServiceCnt">
							  <dl>
								<dt>
								  365天保运行
								</dt>
								<dd>
								  双昌运行团队构建365天不间断，高可靠技术的运营保障体系，保障网站安全运行
								</dd>
							  </dl>
							</div>
						  </li>
						</ul>
					  </div>
					</ul>
				  </div>
				</div>
<?php include template("content","footer"); ?>