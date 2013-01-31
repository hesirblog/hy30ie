<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 
$db = pc_base::load_model("rank_model");

if(isset($_POST['dosave']))
{
	save();
}
/*
执行保存操作
*/
function save()
{
	global $db;
	/* 获取客户端执行IP地址 */
	$arrs = get_onlineip();
	
	$arr = Array();
	$arr['sid'] = $_POST['sid'];
	$arr['kid'] = $_POST['kid'];
	$arr['search_engine'] = 1;
	$arr['rpage'] = $_POST['rpage'];
	$arr['rank'] = $_POST['rank'];
	$arr['ip'] = $arrs['ip'];
	$arr['city'] = $arrs['country'].$arrs['region'].$arrs['city'];
	
	$rows = $db->get_one('sid='.$arr['sid'].' AND kid = '.$arr['kid'],'rid,rank,pubdate','pubdate desc');
	/* 计算当前时间与上次更新时间差 */
	$timenow = time();
	$timenow_span = mktime(date('H',$timenow),date('i',$timenow),date('s',$timenow),date('m',$timenow),date('d',$timenow),date('Y',$timenow));
	$datenow = $rows['pubdate'];
	$datenow_span = mktime(0,0,0,date('m',$datenow),date('d',$datenow),date('Y',$datenow));
	$d = ($timenow_span-$datenow_span)/3600/24;
	//$d = number_format($d,2);
	
	if($d>=1)
	{
		$timenow = strtotime(date('Y-m-d',$timenow));
		$arr['pubdate'] = $timenow;
		$insert_id = $db->insert($arr,true);
		/* if($insert_id)
		{
			echo '<script type="text/javascript">alert("数据添加成功")</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("数据添加失败")</script>';
		} */
	}
	else
	{
		if($arr['rank']<$rows['rank'])
		{
			$flag = $db->update($arr,'rid='.$rows['rid']);
			/* if($flag)
			{
				echo '<script type="text/javascript">alert("数据更新成功")</script>';
			}
			else
			{
				echo '<script type="text/javascript">alert("数据更新失败")</script>';
			} */
		}
	}
}

/**
 * 获取客户端访问真实IP
 * @param int $catid 栏目id
 */
function get_onlineip() 
{ 
	$ch = curl_init('http://iframe.ip138.com/ic.asp'); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	$a = iconv("GB2312", "UTF-8",curl_exec($ch)); 
	preg_match('/\[(.*)\]/', $a, $ip); 
	preg_match('/来自：(.*)/',$a,$area);
	$arr = Array();
	$arr["ip"] = $ip[1];
	$json = get_area($arr['ip']);
	$J = json_decode($json);
	$arr["country"] = $J->data->country;
	$arr["region"] = $J->data->region;
	$arr["city"] = $J->data->city;
	$arr["isp"] = $J->data->isp;
	//$arr[4] = $J;
	curl_close($ch);
	return $arr; 
}

/**
 * 根据客户端真实IP返回访问区域
 * @param string $ip 客户端真实IP地址
 */
function get_area($ip)
{
	$ch = curl_init("http://ip.taobao.com/service/getIpInfo.php?ip=".$ip);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	$a = iconv("GB2312", "UTF-8",curl_exec($ch)); 
	curl_close($ch);
	return $a;
}
?>