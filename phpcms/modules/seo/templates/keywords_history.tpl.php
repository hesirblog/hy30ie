<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header','admin');
?>
<div class="pad-lr-10">
	<div class="mysearch">
	<form method="get" action="" id="searchform" name="searchform">	
		<input type="hidden" name="m" value="seo" />
		<input type="hidden" name="c" value="seo_admin" />
		<input type="hidden" name="a" value="keywords_history" />
		<input type="hidden" name="kid" value="<?php echo $_REQUEST['kid'];?>" />
		<input type="hidden" name="menuid" value="<?php echo $_REQUEST['menuid'];?>" />
		<span style="margin-right:5px;">
			搜索引擎：
			<select style="width:90px;" onchange="$('#searchform').submit();" id="search_engine" name="search_engine">
				<?php
					$arr_search_engine = Array('all'=>'全部','1'=>'百度','2'=>'搜搜','3'=>'搜狗');
					$str = "";
					foreach($arr_search_engine as $k=>$v)
					{
						if($_REQUEST['search_engine']=="$k")
						{
							$str.= "<option value=".$k." selected='selected'>".$v."</option>";
						}
						else
						{
							$str.= "<option value=".$k.">".$v."</option>";
						}
					}
					echo $str;
				?>
			</select>        
		</span>
		<span>
		选择页码：
		<select name="rpage" id="rpage" onchange="$('#searchform').submit();">
			<?php
					$arr_search_engine = Array('all'=>'全部','1'=>'第1页','2'=>'第2页');
					$str = "";
					foreach($arr_search_engine as $k=>$v)
					{
						if($_REQUEST['rpage']=="$k")
						{
							$str.= "<option value=".$k." selected='selected'>".$v."</option>";
						}
						else
						{
							$str.= "<option value=".$k.">".$v."</option>";
						}
					}
					echo $str;
				?>
		</select>
		</span>
		<span>
			选择日期：
			<input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:'#F{$dp.$D(\'end_date\',{d:-1})|| $dp.$DV(\'%y-%M-%d\',{d:-1})}'});" class="Wdate" id="start_date" name="start_date" value="<?php echo isset($_REQUEST['start_date'])?$_REQUEST['start_date']:''; ?>" style="width:96px;margin-right:2px;padding-left:4px">~
			<input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'#F{$dp.$D(\'start_date\',{d:+1})}',maxDate:'%y-%M-%d'});" class="Wdate" id="end_date" name="end_date" value="<?php echo isset($_REQUEST['end_date'])?$_REQUEST['end_date']:''; ?>" style="width:96px;margin-right:2px;padding-left:4px"> 
		</span>
		<span>
			<input type="submit" id="bg_07" value="">
		</span>  
		<div class="clear"></div>
	</form>
	</div>
	<div class="content">
		<form action="" name="myform" id="myform">
		<table width="100%" cellspacing="0" class="table_form">
			<tr>
				<td>关键词</td>
				<td class="td_center">搜索引擎</td>
				<td class="td_center">页码</td>
				<td class="td_center">排名</td>
				<td class="td_center">费用</td>
				<td class="td_center">更新IP</td>
				<td class="td_center">所在区域</td>
				<td class="td_center">所属站点</td>
				<td class="td_center">日期</td>
			</tr>
			<?php 
			if(count($rank_list)>0)
			{
				foreach($rank_list as $k => $v)
				{
			?>
					<tr>
						<td><?php echo $v['keywords']; ?></td>
						<td class="td_center"><?php echo format::search_engine($v['search_engine']); ?></td>
						<td class="td_center"><?php echo $v['rpage']; ?></td>
						<td class="td_center"><?php echo $v['rank']; ?></td>
						<td class="td_center"><?php echo format::price($v['fee']); ?></td>
						<td class="td_center"><?php echo $v['ip']; ?></td>
						<td class="td_center"><?php echo $v['city']; ?></td>
						<td class="td_center"><?php echo $v['title']; ?></td>
						<td class="td_center"><?php echo format::date($v['pubdate'],1); ?></td>
					</tr>
			<?php
				}
			}
			else
			{
			?>
			<tr>
				<td colspan="7" align="center"><?php echo L('no_message');?></td>
			</tr>
			<?php
			}
			?>
		</table>
		</form>
	</div>
	
	<div id="pages"><?php echo $pages;?></div>
</div>
<script type="text/javascript">

function see_all(id, name) {
	window.top.art.dialog({id:'sell_all'}).close();
	window.top.art.dialog({title:'<?php echo L('details');//echo L('edit')?> '+name+' ',id:'edit',iframe:'?m=seo&c=seo_admin&a=see_all&sid='+id,width:'700',height:'450'}, function(){var d = window.top.art.dialog({id:'see_all'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'see_all'}).close()});
}
function checkuid() {
	var ids='';
	$("input[name='messageid[]']:checked").each(function(i, n){
		ids += $(n).val() + ',';
	});
	if(ids=='') {
		window.top.art.dialog({content:"<?php echo L('before_select_operation')?>",lock:true,width:'200',height:'50',time:1.5},function(){});
		return false;
	} else {
		myform.submit();
	}
}

</script>
</body>
</html>
