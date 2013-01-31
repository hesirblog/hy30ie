<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div id="s_left">
				  <div>
					<ul id="s_leftTop">
					</ul>
					<ul id="s_leftM">
					  <li id="s_leftM1">
						搜索引擎优化
					  </li>
					  <li>
						<a href="#">
						  购买一个词
						</a>
					  </li>
					  <li>
						<a href="#">
						  批量购买词
						</a>
					  </li>
					  <li>
						<a href="#" target="_blank">
						  关键词推荐
						</a>
					  </li>
					  <li>
						<a href="#">
						  优化转入
						</a>
					  </li>
					</ul>
					<ul id="s_leftBottom">
					</ul>
				  </div>
				  <div>
					<a href="#" target="_blank">
					  <img src="<?php echo TEMPLETS_SKIN;?>/images/ssyqyouhua.jpg">
					</a>
				  </div>
				  <div>
					<img src="<?php echo TEMPLETS_SKIN;?>/images/klpq.gif">
				  </div>
				  <div>
					<ul class="s_l_t">
					</ul>
					<ul class="s_l_m">
					  <li>
						7x24小时销售热线
					  </li>
					  <li style="margin-top:5px; margin-bottom:15px;">
						<img src="<?php echo TEMPLETS_SKIN;?>/images/400.gif">
					  </li>
					  <li style="margin-bottom:4px;>
						<a href="#" target="_blank">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/mfzchy.gif">
						</a>
					  </li>
					  <li>
					  </li>
					  <li>
						<a href="#"
						target="_blank">
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/zxsqzx.gif">
						</a>
						<a href="#"
						target="_blank">
						  <img style="margin-left:5px" src="<?php echo TEMPLETS_SKIN;?>/images/liuyan.gif">
						</a>
					  </li>
					</ul>
					<ul class="s_l_b">
					</ul>
				  </div>
				  <div>
					<ul class="s_l_t">
					</ul>
					<ul class="s_l_m" style="padding:0">
					  <li class="s_l_m_1">
						<ul style="font-size:14px; font-weight:bold; color:#353535;">
						  建设网站从未如此简单
						</ul>
						<ul style="font-size:10px; font-family:Arial; color:#909090; margin-top:3px; margin-bottom:18px">
						  It's so easy to create a website
						</ul>
						<ul>
						  <span style="color:#5c5c5c; float:left; margin-top:3px;">
							在双昌营销型网站
						  </span>
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/ybgaodian.gif">
						</ul>
						<ul>
						  <img style="margin-left:55px; margin-top:10px;" src="<?php echo TEMPLETS_SKIN;?>/images/TV.gif">
						</ul>
						<ul>
						  <a href="#" target="_blank" style="text-decoration:underline; color:#315589 ">
							查看详情
						  </a>
						</ul>
					  </li>
					</ul>
					<ul class="s_l_b">
					</ul>
				  </div>
				  <div>
					<ul id="s_lbt">
					</ul>
					<ul id="s_lbm">
					  <li id="s_lbm_1">
						<ul style="padding-top:9px; padding-left:12px;">
						  <span style=" font-size:14px; font-weight:bold; color:#252525;">
							最新签约客户
						  </span>
						</ul>
						<ul>
						  <img src="<?php echo TEMPLETS_SKIN;?>/images/s_l_b_b_m_R.gif" style=" margin-left:5px; margin-top:5px;">
						</ul>
						<ul id="agd">
					    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=723cfe0ed93f65ad328e0d5ad1bb0b32&action=lists&catid=20&num=20&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'20','order'=>'id DESC','limit'=>'20',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li >
							<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a>
							</li>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					  </li>
					</ul>
					<ul id="s_lbb">
					</ul>
				  </div>
				  <script language="javascript" type="text/javascript">
					$(function() {
					  var _wrap = $('#agd');
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