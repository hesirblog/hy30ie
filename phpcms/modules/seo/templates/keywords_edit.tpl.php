<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header','admin');
?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#website").formValidator({onshow:"请选择网站名称",onfocus:"网站名称不能为空"}).inputValidator({min:1,max:999,onerror:"网站名称不能为空"});
	$("#keywords").formValidator({onshow:"请填写关键词！",onfocus:"请填写关键词！"}).inputValidator({min:1,max:999,onerror:"关键词不能为空"});	
	
	//回车提交数据
	$(document).keydown(function(event){
	  if(event.keyCode ==13){
		$("#dosubmit").click();
	  }
	});
})
//-->
</script>
<div class="pad-lr-10">
<form name="myform" action="?m=seo&c=seo_admin&a=keywords_edit" method="post" id="myform">
<table width="100%" cellspacing="0" class="table_form">
<tr>		
<th width="10%">站点选择：</th>
   <td>
	   <select name="info[sid]" id="website">
	   <option value="">请选择站点</option>
		<?php 
		foreach($website_category as $k => $v)
		{
		?>
			<?php
			if($v['sid']==$_REQUEST['sid'])
			{
			?>
			<option value="<?php echo $v['sid']; ?>" selected="selected"><?php echo $v['title']; ?> - <?php echo $v['url'];?></option>
			<?php
			}
			else
			{
			?>
			<option value="<?php echo $v['sid']; ?>"><?php echo $v['title']; ?> - <?php echo $v['url'];?></option>
			<?php
			}
			?>
		<?php
		}
		?>
	   </select>
   </td>
 </tr>
 <tr>
   <th>关键词：</th>
   <td><textarea name="info[keywords]"  id="keywords" rows="5" cols="50"><?php echo $info['keywords'];?></textarea></td>
 </tr>
 <!-- <tr>
   <th>任务ID：</th>
   <td><input name="info[taskid]" type="text" id="taskid" size="30" value="<?php echo $info['taskid'];?>"  class="input-text"/></td>
 </tr>-->
 <tr>
   <th>关键词状态：</th>
   <td>
	<?php echo form::select($keywords_status,$info['kstatus'],'name="info[kstatus]" id="status"','请选择状态','')?>
   </td>
 </tr>
 <tr>
   <td></td>
   <td colspan="2"><label>
	 <input type="hidden" name="kid" id="kid" value="<?php echo $_GET['kid']?>" />
	 <input type="hidden" name="menuid" id="menuid" value="<?php echo $_GET['menuid']?>" />
	 <input type="submit" name="dosubmit" id="dosubmit" value="确 定" class="button"/>
	 <input type="button" value="返回" class="button" onclick="javascript:history.back(-1)"/>
	 </label></td>
 </tr>
</table>
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
