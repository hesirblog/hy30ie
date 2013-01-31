<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header','admin');
?>
<div class="pad-lr-10">
<form name="searchform" action="?m=seo&c=seo_admin&a=website_list&menuid=<?php echo $_GET['menuid'];?>" method="post" >
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
		<td><div class="explain-col">网站名称&nbsp;<input type="text" value="" class="input-text" name="search[title]" />&nbsp;网站状态&nbsp;<?php echo form::select($website_status,$status,'name="search[status]"','全部','all')?>&nbsp;&nbsp;
		创建时间&nbsp;<input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:'#F{$dp.$D(\'end_date\',{d:-1})|| $dp.$DV(\'%y-%M-%d\',{d:-1})}'});" class="Wdate" id="start_date" name="start_date" value="<?php echo isset($_REQUEST['start_date'])?$_REQUEST['start_date']:''; ?>" style="width:96px;margin-right:2px;padding-left:4px">&nbsp;~&nbsp;<input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'#F{$dp.$D(\'start_date\',{d:+1})}',maxDate:'%y-%M-%d'});" class="Wdate" id="end_date" name="end_date" value="<?php echo isset($_REQUEST['end_date'])?$_REQUEST['end_date']:''; ?>" style="width:96px;margin-right:2px;padding-left:4px">&nbsp;&nbsp;<input type="submit" value="搜索" class="button" name="dosubmit">
		</div>
		</td>
		</tr>
    </tbody>
</table>
</form>
<form name="myform" action="?m=seo&c=seo_admin&a=website_list" method="post" onsubmit="checkuid();return false;">
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th width="35" align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('messageid[]');"></th>
			<th class="th_left">网站名称</th>
			<th class="th_left">所属用户</th>
			<th class="th_left">所属优化人员</th>
			<th align="center">关键词数量</th>
			<th align="center">累计消费</th>
			<th align="center">创建日期</th>
			<th align="center">当前状态</th>
			<th align="center">操作选项</th>
		</tr>
	</thead>
<tbody>
<?php
if(is_array($infos)){
	foreach($infos as $info){
		?>
	<tr>
		<td align="center" width="35">
		<input type="checkbox" name="sid[]" value="<?php echo $info['sid']?>"></td>
		<td><a href="?m=seo&c=seo_admin&a=keywords_list&sid=<?php echo $info['sid'];?>&menuid=<?php echo $_GET['menuid'];?>" title="点击查看站点关键词列表"><?php echo $info['title']?></a></td>
		<td><?php echo $info['username'];?></td>
		<td class="td_center"><?php echo $info['roleuser']==''?'<span class="sp_red">未分配</span>':'<span class="sp_green">'.$info['roleuser'].'</span>';?></td>
		<td class="td_center"><?php echo $info['counter']?></td>
		<td class="td_center"><?php echo $info['fee'];?></td>
		<td class="td_center"><?php echo date('Y-m-d',$info['adddate']);?></td>
		<td class="td_center"><?php echo format::status($info['status']);?></td>
		<td class="td_center"> 
		<a href="?m=seo&c=seo_admin&a=keywords_add&sid=<?php echo $info['sid'];?>&menuid=<?php echo $_GET['menuid'];?>">添加关键词</a>&nbsp;|&nbsp;<a href="?m=seo&c=seo_admin&a=keywords_list&sid=<?php echo $info['sid'];?>&menuid=<?php echo $_GET['menuid'];?>">关键词管理</a>&nbsp;|&nbsp;<a href="?m=seo&c=seo_admin&a=website_edit&sid=<?php echo $info['sid'];?>&menuid=<?php echo $_GET['menuid'];?>">修改</a>&nbsp;|&nbsp;<a href="?m=seo&c=seo_admin&a=website_delete&menuid=<?php echo $_GET['menuid'];?>&sid=<?php echo $info['sid'];?>" onclick="javascript:if(confirm('删除网站同时会删除站点下的所有关键词\n及所有关键词排名记录，确实要删除吗？')){return true;}else{return false;}">删除</a>
		</td>
	</tr>
	<?php
	}
}
?>
</tbody>
</table>
<div class="btn"><a href="#"
	onClick="javascript:$('input[type=checkbox]').attr('checked', true)">全选</a>/<a
	href="#"
	onClick="javascript:$('input[type=checkbox]').attr('checked', false)">取消</a>
<input name="submit" type="submit" class="button"
	value="删除选中"
	onClick="return confirm('确实要删除【选中】吗？')">&nbsp;&nbsp;</div>
<div id="pages"><?php echo $pages?></div>
</div>
</form>
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
