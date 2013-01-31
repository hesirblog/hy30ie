<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>				<div class="left">
				  <div class="left_ad1">
					<ul class="La1_ns">
					  <li class="La1_top">
						了解双昌公司
					  </li>
					  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc7cc59d2a659cdd679cd623317476b7&action=category&catid=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
					  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					  <li <?php if($catid==$r[catid]) { ?> class="La1_bg2"<?php } else { ?>class="La1_bg1"<?php } ?>>
						<a href="<?php echo $r['url'];?>">
						  <?php echo $r['catname'];?>
						</a>
					  </li>
					  <?php $n++;}unset($n); ?>
					  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				  </div>
				  <div class="left_ad2">
					<ul class="yous">
					  <li class="youstltle">
						<img src="<?php echo TEMPLETS_SKIN;?>/images/cdn_14.jpg">
					  </li>
					  
					  <li class="youli">
						通过专业的甄选准确把握有效营销资源标准度
					  </li>
					  <li class="youli">
						六年技术研究积累大量营销经验
					  </li>
					  <li class="youli">
						降低企业网络推广风险
					  </li>
					  <li class="youli">
						规范科学化的管理加技术人才积累，拥有一支铁的技术团队
					  </li>
					  <li class="youli">
						确保服务的精致性
					  </li>
					  <li class="youli2">
						24小时实时保障的服务机制
					  </li>
					</ul>
				  </div>
				  <div class="left_ad4">
				  </div>
				</div>