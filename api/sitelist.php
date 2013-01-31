<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 
header("Content-Type: text/xml");
$db = pc_base::load_model("seo_model");

echo init();

/*
获取所有关键词列表
*/
function init()
{
	global $db;
	$sql = "SELECT A.sid,A.title,A.url,B.kid,B.keywords FROM `v9_seo` A LEFT JOIN `v9_keywords` B  
ON A.sid = B.sid";
	$db->query($sql);
	$arr = $db->fetch_array();
	$str="<Root>\n";
	for($i=0;$i<count($arr);$i++)
	{
		$str.="	<KeyWords>\n";
		$str.="		<Id>".$arr[$i]['sid']."</Id>\n";
		$str.="		<Key>".$arr[$i]['title']."</Key>\n";
		$str.="		<Host>".$arr[$i]['url']."</Host>\n";
		$str.="		<Kid>".$arr[$i]['kid']."</Kid>\n";
		$str.="		<Kwd>".$arr[$i]['keywords']."</Kwd>\n";
		$str.="	</KeyWords>\n";
	}
	$str.="</Root>";
	return $str;
}
?>