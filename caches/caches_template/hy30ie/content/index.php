<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
	<meta name="description" content="<?php echo $SEO['description'];?>"/>
	<link rel="stylesheet" href="<?php echo TEMPLETS_SKIN;?>/css/global.css" />
	<link rel="stylesheet" href="<?php echo TEMPLETS_SKIN;?>/css/index.css" />
	<script type="text/javascript" src="<?php echo TEMPLETS_SKIN;?>/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo TEMPLETS_SKIN;?>/js/bxCarousel.js"></script>
	<script type="text/javascript" src="<?php echo TEMPLETS_SKIN;?>/js/jcarousellite.js"></script>
	<script type="text/javascript" src="<?php echo TEMPLETS_SKIN;?>/js/scroll.js"></script>
	<script type="text/javascript" src="<?php echo TEMPLETS_SKIN;?>/js/jqFancyTransitions.1.8.js"></script>
	<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $("#MainM21Roll").bxCarousel({
            display_num: 3,
            move: 1,
            auto: true,
            controls: false,
            auto_hover: true
        });
        var $inp = $("#Text1:text");

        $inp.bind('keydown', function (e) {

            var key = e.which;

            if (key == 13) {
                window.location.href = '/SEO/searchresult?keyword=' + escape($('#Text1').val())
            }

        });

        $("#hd").jqFancyTransitions({
            effect: 'wave', // wave, zipper, curtain
            width: 981,
            height: 416,
            strips: 20, // number of strips
            delay: 5000, // delay between images in ms
            stripDelay: 50, // delay beetwen strips in ms
            titleOpacity: 0.7, // opacity of title
            titleSpeed: 1000, // speed of title appereance in ms
            position: 'alternate', // top, bottom, alternate, curtain
            direction: 'fountainAlternate', // left, right, alternate, random, fountain, fountainAlternate
            navigation: true, // prev and next navigation buttons
            links: false, // show images as links
            data: [
            { img: "<?php echo TEMPLETS_SKIN;?>/sliders/20120911015.jpg", links: "", titles: ""},
            { img: "<?php echo TEMPLETS_SKIN;?>/sliders/20120911115.gif", links: "", titles: ""},
            { img: "<?php echo TEMPLETS_SKIN;?>/sliders/20120911215.gif", links: "", titles: ""}
            ]
        });
    });
</script>
</head>
<?php include template("content","header"); ?>
				<div id="hd" class="ad" style="background-image: url(<?php echo TEMPLETS_SKIN;?>/images/20120911015.jpg); width: 981px; height: 416px; position: relative; background-position: left top;">
				 <div class="price">
					 <ul class="price_ul1"><a title="SEV是Search Engine Visibility的缩写，中文意思是搜索引擎可见性。" href="http://www.sev.cn/">SEV</a>,新一代搜索引擎营销.</ul>
					 <ul class="price_ul2">
						  <li>SEV是Search Engine Visibility的缩写，中文是搜索引擎可见性。</li>
						  <li id="icon_new"></li>
					 </ul>
					 <ul class="price_ul3">
						 <li id="textinput"><input type="text" value="查询关键词每天价格" onfocus="javascript:if(this.value=='查询关键词每天价格'){this.value='';}" onblur="javascript:if(this.value==''){this.value='查询关键词每天价格'}" id="Text1"></li>
						 <li id="btn_search">
							 <input type="button" onmousedown="javascript:window.location.href = '/SEO/searchresult?keyword=' + escape($('#Text1').val())" value="查询价格" id="Button1"></li>
					 </ul>
					 <ul class="price_ul4"></ul>
					 <ul class="price_ul5">
					 <li style=" height:20px; color:White; font-size:16px; font-weight:bold; line-height:20px; padding-top:20px; margin-left:60px;">高效球磨机</li>
					 <li>
						 <ul style=" float:left; display:inline; width:100px; font-size:22px; margin-left:80px; margin-top:11px; color:White;">8.7</ul>
						 <ul style=" float:left; width:310px; margin-top:18px;">
							 <li class="otis">￥<span>13.1</span></li>
							 <li class="otis">￥<span>3.9</span></li>
							 <li class="otis">￥<span>2.6</span></li>
							 <li class="otis">￥<span>1.3</span></li>
						 </ul>
						 <ul style=" float:left; width:310px; ">
							 <li class="tis">8.7</li>
							 <li class="tis">2.6</li>
							 <li class="tis">1.7</li>
							 <li class="tis">0.9</li>
						 </ul>
					 </li>
					 </ul>
					 <ul class="price_ul6">
						   <li class="tip_icon1"></li>
						   <li class="tip_icon2"></li>
						   <li class="tip_text">关键词价格与该词搜索量,商业价值等因素有关。</li>
						   <li class="tip_icon3"></li>
					 </ul>
					 <ul class="price_ul7"></ul>
				 </div>
			   </div>
			   
			   <div class="ad2">
				  <div class="indexHot">
					<a class="hotNews pngFix a" href="#">
						<h3 class="m_title">双昌企业标准型</h3>
						<span class="m_info">按天展示扣费90%稳定性<br/>7*24排名监控</span>
						<span class="m_fee">RMB￥6600/年</span>
					</a>
					<a class="netWork pngFix a" href="#">
						<h3 class="m_title">营销站点建设</h3>
						<span class="m_info">专家制定，终身升级<br/>7专业型搜索营销站点</span>
						<span class="m_fee">RMB ￥5000/年</span>
					</a>
					<a class="hotpro pngFix a" href="#">
						<h3 class="m_title">优化业务转入</h3>
						<span class="m_info">首页SEO转入双昌免开户费<br/>7并享受40%优惠</span>
						<span class="m_fee">RMB￥600/年</span>
					</a>
					<a class="relax pngFix a" href="#">
						<h3 class="m_title">独立主机</h3>
						<span class="m_info">SEO网站在优化基础上增加独立IP的<br/>7支持，是网站更具有竞争力！</span>
						<span class="m_fee">RMB￥300/年</span>
					</a>
				  </div>
				</div>
				
				<div id="taocan" class="fixed">
					<ul class="fixed">
					  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=22e0e8efde4ce8fa31eb3d23523ad7be&action=position&posid=12&catid=12&thumb=1&order=listorder+ASC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','catid'=>'12','thumb'=>'1','order'=>'listorder ASC','limit'=>'5',));}?>
					  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					  <?php $num++; ?>
					  <?php if($num % 5 == 0) { ?>
					  <li class="fright">
					  <?php } else { ?>
					  <li>
					  <?php } ?>
						<a target="_blank" href="<?php echo $r['url'];?>">
						  <img width="129" height="179" src="<?php echo thumb($r[thumb],129,179);?>" title="<?php echo $r['title'];?>"/>
						</a>
						<h3>
						  <a target="_blank" href="<?php echo $r['url'];?>"  looyu_bound="1">
							<?php echo $r['description'];?>
						  </a>
						</h3>
					  </li>
					  <?php $n++;}unset($n); ?>
					  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					  <div class="clr">
					  </div>
					</ul>
				</div>
				
				<!-- 经典案例开始 -->
				<div class="conC">
				  <div class="conC_L fl">
					<img width="148" height="60" src="<?php echo TEMPLETS_SKIN;?>/images/tit_3.jpg">
				  </div>
				  <div class="conC_R fr">
					<a class="prev fl" href="#">
					</a>
					<a class="next fr" href="#">
					</a>
					<div class="scrollCon fl">
					  <ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a6f8808dbacfe49cb1a68a26383eba2d&action=position&posid=2&catid=13&thumb=1&order=listorder+ASC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'13','thumb'=>'1','order'=>'listorder ASC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li>
						  <a target="_blank" href="<?php echo $r['url'];?>">
							<img width="138" height="64" border="0" alt="<?php echo $r['title'];?>" src="<?php echo thumb($r[thumb],138,64);?>"/>
						  </a>
						</li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					  </ul>
					</div>
					<script type="text/javascript">
					  $(function() {
						$(".scrollCon").jCarouselLite({
						  btnNext: ".next",
						  btnPrev: ".prev",
						  speed: 1000,
						  auto: 800,
						  visible: 5
						});
					  });
					</script>
				  </div>
				</div>
				<!-- 经典案例结束 -->
				
				<!-- 关键词开始 -->
				<div class="case">
					<div style=" width:670px; margin-top:10px; float:left;">
					  <ul class="mqt">
						<li style=" margin-top:10px; margin-right:10px;">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/Dr.gif">
						</li>
						<li style=" font-size:14px; color:#464646; font-weight:bold; margin-top:10px;">
						  最近上线关键词分享
						</li>
						<li style=" margin-top:8px; margin-left:5px;">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/3Start.gif">
						</li>
						<li style=" margin-top:10px; display:inline; margin-left:360px;">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/CL.gif">
						</li>
						<li style=" margin-top:10px; display:inline; margin-left:10px;">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/CR.gif">
						</li>
						<li style=" margin-top:10px; margin-left:10px;">
						  <a style=" color:#999;" href="#">
							更多
						  </a>
						</li>
					  </ul>
					  <div class="bx_wrap">
						<div class="bx_container" style="position: relative; width: 669px; overflow: hidden;">
						  <ul id="MainM21Roll" style="width: 999999px; position: relative; left: -223px;">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=84c1458471a1ffb4ceec7911fae24c6f&sql=SELECT+A.title%2CA.url%2CB.keywords%2CC.rank%2CC.pubdate+FROM+%60v9_seo%60+A+LEFT+JOIN+%60v9_keywords%60+B++%0AON+A.sid+%3D+B.sid++LEFT+JOIN+%60v9_rank%60+C+ON+B.kid+%3D+C.kid+WHERE+C.rank+%3C%3D+2+%0AGROUP+BY+A.title+ORDER+BY+A.sid+DESC&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT A.title,A.url,B.keywords,C.rank,C.pubdate FROM `v9_seo` A LEFT JOIN `v9_keywords` B  
ON A.sid = B.sid  LEFT JOIN `v9_rank` C ON B.kid = C.kid WHERE C.rank <= 2 
GROUP BY A.title ORDER BY A.sid DESC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
							<?php $TEMPLETS_SKIN = TEMPLETS_SKIN;?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
							  <ul class="MainM21Roll1">
									<img src="<?php echo $TEMPLETS_SKIN;?>/images/temp2.gif" width="60" height="60" />
							  </ul>
							  <ul class="MainM21Roll2">
								<?php echo $r['title'];?>
							  </ul>
							  <ul class="MainM21Roll3">
								关 键 词：<?php echo $r['keywords'];?>
							  </ul>
							  <ul class="MainM21Roll4">
								搜索引擎：百度
							  </ul>
							  <ul style=" overflow:hidden" class="MainM21Roll4">
								URL：<?php echo $r[url]=str_replace('http://','',$r[url])?>
							  </ul>
							</li>
							 <?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
					  </div>
					</div>
					<div id="book">
						<h3>《网站运营研究》免费下载</h3>
						<p>输入您的E-mail订阅博客电子书<br/>将发送到你的邮箱。</p>
						<div class="getemail">
						<form action="" name="mailform" id="mailform" onsubmit="return check()">
						<input type="text" name="email" id="email" onblur="javascript:if(this.value==''){this.value='您的邮件地址'}" onfocus="javascript:if(this.value=='您的邮件地址'){this.value='';}" value="您的邮件地址"/><input type="submit" id="wd_btn" value=""/>
						</form>
						<script type="text/javascript">
						function check()
						{
							var mailform = document.getElementById("mailform");
							var email = mailform["email"];
							var regu ="^(([0-9a-zA-Z]+)|([0-9a-zA-Z]+[_.0-9a-zA-Z-]*[0-9a-zA-Z]+))@([a-zA-Z0-9-]+[.])+([a-zA-Z]{2}|net|NET|com|COM|gov|GOV|mil|MIL|org|ORG|edu|EDU|int|INT)$";
							 var re = new RegExp(regu);
							 if (re.test(email.value)==true)
							 {
								return true;
							 } 
							 else 
							 {
								email.focus();
								window.alert("请输入有效合法的E-mail地址");
								return false;
							 }
						}
						</script>
						</div>
					</div>
				</div>
				<!-- 关键词结束 -->
				
				<!-- 新闻列表开始 -->
				<div class="conB fixed">
					<div class="conB_L fl">
						<div class="conB_Lt">
						  <h2>
							<img width="168" height="28" src="<?php echo TEMPLETS_SKIN;?>/images/bg_news_01.jpg">
						  </h2>
						  <a target="_blank" href="<?php echo $CATEGORYS['9']['url'];?>" target="_blank" class="More"
						  looyu_bound="1">
							查看更多
						  </a>
						</div>
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1454d7e06b4a5df832a770afb2f5c376&action=position&posid=2&catid=9&order=id+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'9','order'=>'id DESC','limit'=>'5',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								  <li>
									<a href="<?php echo $r['url'];?>" target="_blank" looyu_bound="1">
									  <img width="48" height="44" class="fl" src="<?php echo thumb($r[thumb],48,44);?>"/>
									</a>
									<p>
									  <a href="<?php echo $r['url'];?>" looyu_bound="1" target="_blank" title="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
										<?php echo str_cut($r[title],52);?>
									  </a>
									</p>
									<p class="info">
										<?php echo $r['description'];?>
									</p>
								  </li>
								<?php $n++;}unset($n); ?>  
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
						</ul>
					</div>
					<div class="conB_C fl">
						<div class="conB_Ct">
						  <h2>
							<img width="168" height="28" src="<?php echo TEMPLETS_SKIN;?>/images/bg_news_02.jpg">
						  </h2>
						  <a target="_blank" href="<?php echo $CATEGORYS['10']['url'];?>" target="_blank" class="More"
						  looyu_bound="1">
							查看更多
						  </a>
						</div>
						<div class="b_side_mCon" id="marquee">
						  <ul style="height: 620px;">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fc9ffc0f5e310d83890704ba3d899311&action=position&posid=2&catid=10&order=id+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'10','order'=>'id DESC','limit'=>'7',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
							  <span>
								<?php echo date('Y-m-d',$r[inputtime]);?>
							  </span>
							  <a target="_blank" href="<?php echo $r['url'];?>" target="_blank" looyu_bound="1" title="<?php echo $r['title'];?>">
								<?php echo str_cut($r[title],44);?>
							  </a>
							</li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
					</div>
					<div class="conB_C fl">
						<div class="conB_Ct">
						  <h2>
							<img width="168" height="28" src="<?php echo TEMPLETS_SKIN;?>/images/bg_news_03.jpg">
						  </h2>
						  <a target="_blank" href="<?php echo $CATEGORYS['11']['url'];?>" target="_blank" class="More"
						  looyu_bound="1">
							查看更多
						  </a>
						</div>
						<div class="b_side_mCon" id="marquee">
						  <ul style="height: 620px;">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e02ae310c4cfb367ffae2b5850c8547e&action=position&posid=2&catid=11&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'11','order'=>'listorder DESC','limit'=>'7',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
							  <span>
								<?php echo date('Y-m-d',$r[inputtime]);?>
							  </span>
							  <a target="_blank" href="<?php echo $r['url'];?>" target="_blank" looyu_bound="1" title="<?php echo $r['title'];?>">
								<?php echo str_cut($r[title],44);?>
							  </a>
							</li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						   </ul>
						</div>
					</div>
					
				</div>
				<!-- 新闻列表结束 -->
				
				
<?php include template("content","footer_index"); ?>