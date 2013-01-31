<?php 

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
/**
 * 百度排名查询前段显示
 */
function baidu_s($sid,$kid,$searchtype,$keyword,$url,$page = 1)
{
	set_time_limit(0);
	static $px = 0;
	static $arr;
	$rsState = false;
	$url = str_replace("http://","",$url);
	$enKeyword = urlencode($keyword);
	$firstRow = ($page - 1) * 10;
	if($page > 10)
	{
		die('<table width="100%" class="table_form" style="text-align:center"><tr><td><h3>10页之内没有该网站排名...!</h3></td></tr></table>');
	}	
	$contents = geturlfile("http://www.baidu.com/s?wd=$enKeyword&pn=$firstRow");
	/* preg_match_all('/<table[^>]*?class="result"[^>]*>[\s\S]*?<\/table>/i',$contents,$rs); */
	preg_match_all('/<span[^>]*?class="g"[^>]*>[\s\S]*?<\/span>/i',$contents,$rs);
	foreach($rs[0] as $k=>$v){
		$px++;
		if(strstr($v,$url)){
			$rsState = true;
			preg_match_all('/<h3[\s\S]*?(<a[\s\S]*?<\/a>)[\s\S]*?<\/h3>/i',$v,$rs_t);
			$arr = get_onlineip();
			$arr['sid'] = $sid;
			$arr['kid'] = $kid;
			$arr['searchtype'] = $searchtype;
			$arr['keyword'] = $keyword;
			$arr['url'] = $url;
			$arr['firstRow'] = $firstRow;
			$arr['px'] = $px;
			$arr['page'] = $page;
			break;
		}
	}
	unset($contents);
	if($rsState === false){
		baidu_s($sid,$kid,$searchtype,$keyword,$url,++$page);
	}
	return $arr;
}

/**
 * 一键更新所有关键词百度排名
 */
function baidu_s2($sid,$kid,$searchtype,$keyword,$url,$maxtime=30,$page = 1)
{
	set_time_limit(0);
	static $px = 0;
	static $arr;
	$rsState = false;
	$url = str_replace("http://","",$url);
	$enKeyword = urlencode($keyword);
	$firstRow = ($page - 1) * 10;
	//获取函数执行开始时间
	static $timestart;
	$timestart = time();
	if($page <= 10)
	{
		$contents = geturlfile("http://www.baidu.com/s?wd=$enKeyword&pn=$firstRow");
		preg_match_all('/<span[^>]*?class="g"[^>]*>[\s\S]*?<\/span>/i',$contents,$rs);
		foreach($rs[0] as $k=>$v){
			$px++;
			if(strstr($v,$url)){
				$rsState = true;
				preg_match_all('/<h3[\s\S]*?(<a[\s\S]*?<\/a>)[\s\S]*?<\/h3>/i',$v,$rs_t);
				$arr = get_onlineip();
				$arr['sid'] = $sid;
				$arr['kid'] = $kid;
				$arr['searchtype'] = $searchtype;
				$arr['keyword'] = $keyword;
				$arr['url'] = $url;
				$arr['firstRow'] = $firstRow;
				$arr['px'] = $px;
				$arr['page'] = $page;
				break;
			}
			//10秒内函数无响应停止执行
			if(time()-$timestart>$maxtime)
			{
				break;
			}
		}
	}	
	
	unset($contents);
	if($rsState === false){
		baidu_s2($sid,$kid,$searchtype,$keyword,$url,$maxtime,++$page);
	}
	return $arr;
}

/**
 * 判断PHP环境是否支持curl，不支持则启用“file_get_contents”
 */
function geturlfile($url) {
	$url = trim($url);
	$content = '';
	if (extension_loaded('curl')) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$content = curl_exec($ch);
		curl_close($ch);
	} else {
		$content = file_get_contents($url);
	}
	return trim($content);
}

/**
 * 根据客户端真实IP返回访问区域
 * @param string $id 窗口ID
 * @param string $id 返回的错误信息
 * @param string $flag 信息提示图标
 * @param string $timer 信息提示显示时间
 */
function ShowMsg($id,$flag,$timer,$msg)
{
	$str="<script type='text/javascript'>";
	$str.="window.top.art.dialog({id:'msg',icon:'".$flag."',content:'".$msg."',time:".$timer."});";
	$str.="window.top.art.dialog({id:'".$id."'}).close();";
	$str.="</script>";
	return $str;
}
?>