<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/global.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/case.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-1.8.3.min.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-cookie.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo TEMPLETS_SKIN;?>/js/tab.js" language="javascript" type="text/javascript"></script>
</head>
<?php include template("content","header"); ?>
				<div id="nav_inf">
				  当前位置：
				  <a class="nb" href="/">
					首页
				  </a>
				  &gt; 成功案例
				</div>
				<div class="left">
				  <div class="left_ad1">
					<ul class="ad1_title">
					  &gt;&gt;更多
					</ul>
					<div class="ad1_con">
					  <ul class="ad1_content">
						<li class="ad1_p">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/20121012002.gif">
						</li>
						<li class="ad1_c">
						  <span>
							稳定性
						  </span>
						  <br>
						  所用均为高端品牌服务
						</li>
					  </ul>
					  <ul class="ad1_content">
						<li class="ad1_p">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/20121012003.gif">
						</li>
						<li class="ad1_c">
						  <span>
							安全性
						  </span>
						  <br>
						  均在硬件防火墙下
						</li>
					  </ul>
					  <ul class="ad1_content">
						<li class="ad1_p">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/20121012004.gif">
						</li>
						<li class="ad1_c">
						  <span>
							速度快
						  </span>
						  <br>
						  均为国内顶级骨干网机
						</li>
					  </ul>
					  <ul class="ad1_content">
						<li class="ad1_p">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/20121012005.gif">
						</li>
						<li class="ad1_c">
						  <span>
							售后好
						  </span>
						  <br>
						  提供24小时的技术支持
						</li>
					  </ul>
					</div>
				  </div>
				  <div>
					<img src="<?php echo TEMPLETS_SKIN;?>/images/20120925006.gif" width="194px">
				  </div>
				  <div class="left_ad4">
					<ul class="ad4_title">
					  最新签约客户
					</ul>
					<ul class="ad4_con" style=" height:335px; overflow:hidden;">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=723cfe0ed93f65ad328e0d5ad1bb0b32&action=lists&catid=20&num=20&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'20','order'=>'id DESC','limit'=>'20',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li >
						<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a>
						</li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				  </div>
				  <script language="javascript" type="text/javascript">
					$(function() {
					  var _wrap = $('.ad4_con');
					  var _interval = 1000;
					  var _moving;
					  _wrap.hover(function() {
						clearInterval(_moving);
					  },
					  function() {
						_moving = setInterval(function() {
						  var _field = _wrap.find('li:first');
						  var _h = _field.height();
						  _field.animate({
							marginTop: -_h + 'px'
						  },
						  600,
						  function() {
							_field.css('marginTop', 0).appendTo(_wrap);
						  })
						},
						_interval)
					  }).trigger('mouseleave');
					});
				  </script>
				</div>
				<div class="Example_con">
				  <ul id="tab_menu">
					<li class="MouseonMenu" onclick="showDiv('tab_div1');this.className='MouseonMenu'">
					  最近上线案例
					</li>
					<li class="Spacing">
					</li>
					<li class="MouseoutMenu" onclick="showDiv('tab_div2');this.className='MouseonMenu'">
					  其它随机案例
					</li>
				  </ul>
				  <div class="tab_div" id="tab_div1">
					<ul>
					  <li class="div_top">
					  </li>
					  <li class="Shadow">
					  </li>
					</ul>
					<ul id="FCG">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7e35f481af9e2050c41f0781c96059aa&sql=SELECT+A.title%2CA.url%2CB.keywords%2CC.rank%2CC.pubdate+FROM+%60v9_seo%60+A+LEFT+JOIN+%60v9_keywords%60+B++%0D%0AON+A.sid+%3D+B.sid++LEFT+JOIN+%60v9_rank%60+C+ON+B.kid+%3D+C.kid+WHERE+C.rank+%3C%3D+2+%0D%0AGROUP+BY+A.title+ORDER+BY+A.sid+DESC&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT A.title,A.url,B.keywords,C.rank,C.pubdate FROM `v9_seo` A LEFT JOIN `v9_keywords` B  
ON A.sid = B.sid  LEFT JOIN `v9_rank` C ON B.kid = C.kid WHERE C.rank <= 2 
GROUP BY A.title ORDER BY A.sid DESC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					<?php $num=1;?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					 <?php if((($num%4)==1)) { ?>
					 <div class="FG">
					 <?php } ?>
						<ul class="S_case">
						  <li class="S_c">
							<ul class="c_u">
							  <li class="C_url">
								<?php echo $r[url]=str_replace('http://','',$r[url])?>
							  </li>
							  <li>
								<?php echo $r['title'];?>
							  </li>
							</ul>
							<ul class="C_field">
							  <li class="kw_name">
								关键词
							  </li>
							  <li class="b_line">
							  </li>
							  <li class="kw_ranking">
								排名
							  </li>
							</ul>
							<ul class="Kw_n">
							  <li class="Kw_bg">
								<?php echo $r['keywords'];?>
							  </li>
							</ul>
							<ul class="Kw_r">
							  <li class="Kw_bg">
								<?php if(($r[rank])) { ?>
									<?php echo $r['rank'];?>
								<?php } else { ?>
									N/A
								<?php } ?>
							  </li>
							</ul>
						  </li>
						  <li class="datetime">
							Time:
							<?php if(($r[pubdate])) { ?>
								<?php echo date('Y-m-d',$r[pubdate]);?>
							<?php } else { ?>
								N/A
							<?php } ?>
						  </li>
						</ul>
						<ul class="spacing">
						</ul>
					  <?php if((($num%4)==0)) { ?>
					  </div>
					  <?php } ?>
					  <?php $num++; ?>
					  <?php $n++;}unset($n); ?>
					  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				  </div>
				  <div class="tab_div" id="tab_div2" style="display:none;">
					<ul>
					  <li class="div_top">
					  </li>
					  <li class="Shadow">
					  </li>
					</ul>
					<ul id="FCG">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f4bacca8a0c2e471a1a53132f81da4d0&sql=SELECT+A.title%2CA.url%2CB.keywords%2CC.rank%2CC.pubdate+FROM+%60v9_seo%60+A+LEFT+JOIN+%60v9_keywords%60+B++%0D%0AON+A.sid+%3D+B.sid++LEFT+JOIN+%60v9_rank%60+C+ON+B.kid+%3D+C.kid+WHERE+rank+IS+NOT+NULL%0D%0AGROUP+BY+A.title&num=20&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT A.title,A.url,B.keywords,C.rank,C.pubdate FROM `v9_seo` A LEFT JOIN `v9_keywords` B  
ON A.sid = B.sid  LEFT JOIN `v9_rank` C ON B.kid = C.kid WHERE rank IS NOT NULL
GROUP BY A.title LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					<?php $num=1;?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					 <?php if((($num%4)==1)) { ?>
					 <div class="FG">
					 <?php } ?>
						<ul class="S_case">
						  <li class="S_c">
							<ul class="c_u">
							  <li class="C_url">
								<?php echo $r[url]=str_replace('http://','',$r[url])?>
							  </li>
							  <li>
								<?php echo $r['title'];?>
							  </li>
							</ul>
							<ul class="C_field">
							  <li class="kw_name">
								关键词
							  </li>
							  <li class="b_line">
							  </li>
							  <li class="kw_ranking">
								排名
							  </li>
							</ul>
							<ul class="Kw_n">
							  <li class="Kw_bg">
								<?php echo $r['keywords'];?>
							  </li>
							</ul>
							<ul class="Kw_r">
							  <li class="Kw_bg">
								<?php if(($r[rank])) { ?>
									<?php echo $r['rank'];?>
								<?php } else { ?>
									N/A
								<?php } ?>
							  </li>
							</ul>
						  </li>
						  <li class="datetime">
							Time:
							<?php if(($r[pubdate])) { ?>
								<?php echo date('Y-m-d',$r[pubdate]);?>
							<?php } else { ?>
								N/A
							<?php } ?>
						  </li>
						</ul>
						<ul class="spacing">
						</ul>
					  <?php if((($num%4)==0)) { ?>
					  </div>
					  <?php } ?>
					  <?php $num++; ?>
					  <?php $n++;}unset($n); ?>
					  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				  </div>
				</div>
<?php include template("content","footer"); ?>