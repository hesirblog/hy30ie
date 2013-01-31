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
		<input type="hidden" name="a" value="keywords_list" />
		<input type="hidden" name="menuid" value="<?php echo $_GET['menuid'];?>" />
		<span style="margin-right:5px;">
			选择站点： 
			<select onchange="$('#searchform').submit();" id="sid" name="sid">
			<?php 
			if(count($website_category)>0)
			{
				foreach($website_category as $k => $v)
				{
					if ($v['sid']==$_REQUEST['sid'])
					{
			?>
						<option value="<?php echo $v['sid']; ?>" selected="selected"><?php echo $v['title']; ?></option>
			<?php
					}
					else
					{
			?>
						<option value="<?php echo $v['sid']; ?>"><?php echo $v['title']; ?></option>
			<?php
					}
				}
			}
			else
			{
			?>
				<option value="">请添加站点</option>
			<?php
			}
			?>
			</select>
		</span>
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
			关键字状态：
			<select onchange="$('#searchform').submit();" id="status" name="status">
				<?php
					$arr_status = Array('all'=>'全部','0'=>'待审核','1'=>'审核未通过','2'=>'正常运行','3'=>'申请停用','4'=>'已停用','5'=>'申请启用');
					$str = "";
					foreach($arr_status as $k=>$v)
					{
						if($_REQUEST['status']=="$k")
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
			&nbsp;结束日期：
			<input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:'%y-%M-%d'});" class="Wdate" id="end_date" value="" name="end_date" style="width:96px;margin-right:2px;padding-left:4px">    
		</span>
		<span>
			<input type="submit" id="bg_07" value=""/>
		</span>  
		<div class="clear"></div>
	</form>
	</div>
	<div class="content">
		<form action="" name="myform" id="myform">
		<table width="100%" cellspacing="0" class="table_form">
			<tr>
				<td>关键词</td>
				<td>实时查询</td>
				<?php
				if($_REQUEST['end_date']=="")
				{
					$now = date('Y-m-d',time());
				}
				else
				{
					$now = $_REQUEST['end_date'];
				}
				for($i=6;$i>=0;$i--)
				{
					echo "<td>".Minus_date($now,$i,0,0)."</td>";
				}
				?>
				<td>添加日期</td>
				<td>累计消费</td>
				<td class="td_center">当前状态</td>
				<td class="td_center">操作选项</td>
			</tr>
				<?php 
				if(count($keywords_list)>0)
				{
					foreach($keywords_list as $k => $v)
					{
				?>
					<tr>
						<td><a href="index.php?m=seo&c=seo_admin&a=keywords_history&menuid=<?echo $_GET['menuid'];?>&sid=<?php echo $v['sid']; ?>&kid=<?php echo $v['kid'];?>&t=3" title="点击查看关键词历史排名信息" ><?php echo $v['keywords']; ?></a></td>
						<td class="td_center"><a href="javascript:ShowMsg(<?php echo $v['kid']; ?>,<?php echo $v['sid']; ?>);" title="点击查看关键词实时排名信息"><img src="/statics/images/seo/search.png" width="20" height="20"/></a></td>
						<?php
							for($i=6;$i>=0;$i--)
							{
								echo '<td class="td_center"><sup>'.$v['rpage'][$i].'</sup>/<sub>'.$v['rank'][$i].'</sub></td>';
							}
						?>
						
						<td><?php echo format::date($v['kadddate'],0);?></td>
						<td><?php echo $v['fee']; ?></td>
						<td class="td_center"><?php echo format::status($v['kstatus']); ?></td>
						<td class="td_center">
						<a href="index.php?m=seo&c=seo_admin&a=keywords_history&menuid=<?echo $_GET['menuid'];?>&sid=<?php echo $v['sid']; ?>&kid=<?php echo $v['kid'];?>&t=3" title="点击查看关键词历史排名信息">历史</a>&nbsp;|&nbsp;
						<a href="index.php?m=seo&c=seo_admin&a=keywords_edit&menuid=<?echo $_GET['menuid'];?>&sid=<?php echo $v['sid']; ?>&kid=<?php echo $v['kid']; ?>&t=3">修改</a>&nbsp;|&nbsp;<a href="index.php?m=seo&c=seo_admin&a=keywords_delete&menuid=<?echo $_GET['menuid'];?>&sid=<?php echo $v['sid']; ?>&kid=<?php echo $v['kid']; ?>" onclick="javascript:if(confirm('删除关键词同时会删除该关键词的所有\n排名记录，确实要删除此关键词吗？')){return true;}else{return false;}">删除</a></td>
					</tr>
				<?php
					}
				}
				else
				{
				?>
					<tr>
						<td colspan="12" height="60" class="td_center"><?php echo L('no_message'); ?></td>
					</tr>
				<?php
				}
				?>
		</table>
		</form>
	</div>
	
	<div id="pages"><?php echo $pages?></div>
	<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
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

//显示弹出框
function ShowMsg(kid,sid)
{
	//window.top.art.dialog({id:'modelinfo'}).close();
	window.top.art.dialog({id:'modelinfo',iframe:'?m=seo&c=seo_admin&a=init_search&kid='+kid+'&sid='+sid,width:300,button:[{name:'查询',callback:function(){var d = window.top.art.dialog({id:'modelinfo'}).data.iframe;var searchtype = d.document.getElementById("searchtype").value;window.top.art.dialog({id:'modelinfo'}).close();window.top.art.dialog({id:'modelinfo2',title:'关键词实时排名查询',iframe:'?m=seo&c=seo_admin&a=show_search&kid='+kid+'&sid='+sid+"&searchtype="+searchtype,width:700,button:[{name:'更新',callback:function(){var d =window.top.art.dialog({id:'modelinfo2'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;},focus:true},{name:'关闭'}]});return false;},focus:true}]});
}

</script>
</body>
</html>
