<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/global.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo TEMPLETS_SKIN;?>/css/site.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-1.4.1.min.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo TEMPLETS_SKIN;?>/js/jquery-cookie.js" language="javascript" type="text/javascript"></script>
</head>
<?php include template("content","header"); ?>
				<div id="nav_inf">
				  当前位置：
				  <a class="nb" href="/">
					首页
				  </a>
				  &gt; 营销型站点建设
				</div>
				<div id="st_left">
				  <ul class="st_l">
					<li style=" margin-left:12px; padding-top:26px;">
					  <img src="<?php echo TEMPLETS_SKIN;?>/images/cjbz.gif">
					</li>
					<li style="color:#909090; margin-left:15px; margin-top:5px;">
					  拨打热线电话，直接对话专家
					</li>
					<li style="color:#ff5b00; font-size:26px; font-weight:bold; padding-left:10px; margin-left:5px; margin-top:5px; border-bottom:1px solid #eff0f0; width:178px;">
					  400-023-6181
					</li>
					<li style="color:#909090; margin-left:15px; margin-top:5px;">
					  如有疑问，在线咨询
					</li>
					<li style=" margin-left:15px; margin-top:10px;">
					  <a href="#"
					  target="_blank">
						<img src="<?php echo TEMPLETS_SKIN;?>/images/ZXZX.gif" border="0">
					  </a>
					</li>
				  </ul>
				  <ul class="st_l" style="margin-top:10px">
					<li style=" margin-left:12px; padding-top:26px;">
					  <img src="<?php echo TEMPLETS_SKIN;?>/images/ZJZDBZN.gif">
					</li>
					<li class="st_l_1">
					  <span>
						姓名：
					  </span>
					  <input id="Name" type="text">
					</li>
					<li class="st_l_1">
					  <span>
						电话：
					  </span>
					  <input id="Phone" type="text">
					</li>
					<li class="st_l_1">
					  <span>
						地区：
					  </span>
					  <input id="Area" type="text">
					</li>
					<li style=" margin-left:60px; margin-top:5px;">
					  <input id="tj_btn" class="btn_tj" value="提交" style=" text-align:center;">
					</li>
				  </ul>
				  <script language="javascript" type="text/javascript">
					$("#tj_btn").click(function() {
					  var btn = $(this);
					  btn.val("提交中");
					  $.post("/home/Consult", {
						"Name": $("#Name").val(),
						"Phone": $("#Phone").val(),
						"Area": $("#Area").val()
					  },
					  function(data) {
						if (data.result) {
						  $("#dialog").css({
							"display": "block"
						  });
						  $("#Name").val("");
						  $("#Phone").val("");
						  $("#Area").val("");
						} else {
						  alert("请正确填写信息内容");
						}
						btn.val("提交");
					  },
					  "json");
					});
				  </script>
				  <ul class="st_m">
					<li class="st_m_t">
					  建设网站流程
					</li>
					<li class="st_m_m">
					  <img src="<?php echo TEMPLETS_SKIN;?>/images/Temp1.gif">
					</li>
				  </ul>
				  <ul class="st_m">
					<li class="st_m_t">
					  为什么选择双昌
					</li>
					<li class="st_m_m">
					  <img src="<?php echo TEMPLETS_SKIN;?>/images/UPBFB.gif">
					</li>
				  </ul>
				</div>
				<div id="st_right">
				  <ul style=" width:750px; height:80px;">
					<img src="<?php echo TEMPLETS_SKIN;?>/images/S_ad1.gif">
				  </ul>
				  <ul style=" width:748px; height:390px; border:1px solid #dddddd; margin-top:13px; ">
					<li class="ts"></li>
					<li class="tcc">
					  <ul class="tcs">
					  </ul>
					  <ul class="tc">
						<li>
						  <img src="<?php echo TEMPLETS_SKIN;?>/upload/Catering/ztCases3.gif">
						</li>
						<li style=" margin-top:11px;">
						  餐饮行业
						</li>
						<li style=" margin-top:9px;">
						  价格：
						  <span>
							4980.00
						  </span>
						  元
						</li>
						<li class="tc_1">
							<a href="#">
							  查看详情
							</a>
						</li>
					  </ul>
					  <ul class="tcs">
					  </ul>
					  <ul class="tc">
						<li>
						  <img src="<?php echo TEMPLETS_SKIN;?>/upload/Catering/ztCasesFdc1.gif">
						</li>
						<li style=" margin-top:11px;">
						  培训行业
						</li>
						<li style=" margin-top:9px;">
						  价格：
						  <span>
							4980.00
						  </span>
						  元
						</li>
						<li class="tc_1">
							<a href="#">
							  查看详情
							</a>
						</li>
					  </ul>
					  <ul class="tcs">
					  </ul>
					  <ul class="tc">
						<li>
						  <img src="<?php echo TEMPLETS_SKIN;?>/upload/Catering/ztCasesQc3.gif">
						</li>
						<li style=" margin-top:11px;">
						  汽车用品行业
						</li>
						<li style=" margin-top:9px;">
						  价格：
						  <span>
							4980.00
						  </span>
						  元
						</li>
						<li class="tc_1">
							<a href="#">
							  查看详情
							</a>
						</li>
					  </ul>
					</li>
				  </ul>
				  <ul style="padding:15px 0;">
					<img src="<?php echo TEMPLETS_SKIN;?>/images/HYZTI.gif">
				  </ul>
				  <ul id="fl">
					<li class="fl_left">
					  <ul class="fl_ls">
					  </ul>
					  <ul class="fl_c">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3185d11e64173fa3d5f0a763fbbc88fe&action=category&catid=15&num=9&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'15','order'=>'listorder ASC','limit'=>'9',));}?>
								<?php $i=0;?>
								<?php $TEMPLETS_SKIN = TEMPLETS_SKIN;?>
								<?php $arr = Array(0=>"$TEMPLETS_SKIN/images/HT_A2.gif",1=>"$TEMPLETS_SKIN/images/HT_B1.gif",2=>"$TEMPLETS_SKIN/images/HT_C1.gif",3=>"$TEMPLETS_SKIN/images/HT_D1.gif",4=>"$TEMPLETS_SKIN/images/HT_E1.gif",5=>"$TEMPLETS_SKIN/images/HT_F1.gif",6=>"$TEMPLETS_SKIN/images/HT_G1.gif",7=>"$TEMPLETS_SKIN/images/HT_H1.gif",8=>"$TEMPLETS_SKIN/images/HT_I1.gif");?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<?php $catid = $r[catid];?>
									<?php $caturl = $CATEGORYS[$catid]['url'];?>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=591d5df635da45a01443e61bba54ab39&sql=SELECT+%2A+FROM+%60v9_news%60+WHERE+catid%3D%24r%5Bcatid%5D&return=t&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `v9_news` WHERE catid=$r[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$t = $a;unset($a);?>
										<?php $len = count($t);?>
										<?php $str='';?>
										<?php $n=1;if(is_array($t)) foreach($t AS $z) { ?>
										<?php $k=0;?>
										<?php if($k==$len){$str.="{'t_ShowImg':'$z[thumb]','t_DemoUrl':'$z[url]','t_TemplateSite_ID':'$caturl'}";}else{$str.="{'t_ShowImg':'$z[thumb]','t_DemoUrl':'$z[url]','t_TemplateSite_ID':'$caturl'},";}?>
										<?php $k++;?>
										<?php $n++;}unset($n); ?>
										<?php if(($i==0)) { ?>
										<li data="[<?php echo $str;?>]" class="fl_cc" title="<?php echo $r['catname'];?>"><img src="<?php echo $arr[$i];?>" /></li>
										<?php } else { ?>
										<li data="[<?php echo $str;?>]" title="<?php echo $r['catname'];?>"><img src="<?php echo $arr[$i];?>" /></li>
										<?php } ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									<?php $i++;?>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					  <ul class="fl_lx">
					  </ul>
					</li>
					<li class="fl_right">
					  <ul style=" margin-left:20px; margin-top:15px; height:30px;">
						<a id="zturl" href="#">
						  <img style=" float:left; border:none;" src="<?php echo TEMPLETS_SKIN;?>/images/CKCZT.gif">
						</a>
						<span id="showT">
						  让网站展示您的服装风尚
						</span>
					  </ul>
					  <ul id="showImg">
						<li>
						  <a target="_blank" href="#">
							<img src="<?php echo TEMPLETS_SKIN;?>/upload/Catering/ztCases1.gif">
						  </a>
						</li>
						<li>
						  <a target="_blank" href="#">
							<img src="<?php echo TEMPLETS_SKIN;?>/upload/Catering/ztCases2.gif">
						  </a>
						</li>
						<li>
						  <a target="_blank" href="#">
							<img src="<?php echo TEMPLETS_SKIN;?>/upload/Catering/ztCases3.gif">
						  </a>
						</li>
						<li>
						  <a target="_blank" href="#">
							<img src="<?php echo TEMPLETS_SKIN;?>/upload/Catering/ztCases4.gif">
						  </a>
						</li>
						<li>
						  <a target="_blank" href="#">
							<img src="<?php echo TEMPLETS_SKIN;?>/upload/Catering/ztCases5.gif">
						  </a>
						</li>
					  </ul>
					</li>
				  </ul>
				</div>

				<script language="javascript" type="text/javascript">
					changeright();
					var speed = 20;
					var length =2;
					var lock = false;
					$(".fl_c li").click(function () {
						$(".fl_c li").attr("className", "");
						$(".fl_c li").find("img").each(function () {
							this.src = $(this).attr("src").replace("2", "1");
						});
						this.className = "fl_cc";
						$(this).find("img")[0].src = $(this).find("img").attr("src").replace("1", "2");
						changeright();
						
					});
					$(".fl_ls").click(function () {
						if (!lock) {
							var prev = $(".fl_cc").prev();
							if (prev.html() != null) {
								$(".fl_cc").find("img").attr("src", $(".fl_cc").find("img").attr("src").replace("2", "1"));
								$(".fl_cc").removeAttr("className");
								roll("Up", $(".fl_c")[0]);
								prev.attr("className", "fl_cc");
								prev.find("img").attr("src", prev.find("img").attr("src").replace("1", "2"));
								changeright();
							}
						}
					});
					$(".fl_lx").click(function () {
						if (!lock) {
							var next = $(".fl_cc").next();
							if (next.html() != null) {
								$(".fl_cc").find("img").attr("src", $(".fl_cc").find("img").attr("src").replace("2", "1"));
								$(".fl_cc").removeAttr("className");

								roll("Down", $(".fl_c")[0]);
								next.attr("className", "fl_cc");
								next.find("img").attr("src", next.find("img").attr("src").replace("1", "2"));
								changeright();
							}
						}
					});
					function changeright() {
						var jsondata = $(".fl_cc").attr("data");
						$("#showImg li").fadeOut("slow", function () {
							$("#showImg li").remove();
							
							var data = eval(jsondata);
							for (var i = 0; i < data.length; i++) {
								$("#showImg").append("<li><a target=\"_blank\" href=\"" + data[i].t_DemoUrl + "\"><img src=\"" + data[i].t_ShowImg + "\" /></a></li>");
								$("#zturl").attr("href",data[i].t_TemplateSite_ID);
							}
						});

					}
					function roll(action, obj) {
						var si;
						lock = true;
						switch (action) {
							case "Up":
								var l = 58;
								si = setInterval(function () {
									obj.scrollTop -= length;
									l -= length;
									if (l <= 0) {
										l = 58;
										clearInterval(si);
										lock = false;
									}
								}, speed);

								break;
							case "Down":
								var l = 0;
								si = setInterval(function () {
									obj.scrollTop += length;
									l += length;
									if (l >= 57) {
										l = 0;
										clearInterval(si);
										lock = false;
									}
								}, speed);

								break;
						}
					}
				</script>
<?php include template("content","footer"); ?>		