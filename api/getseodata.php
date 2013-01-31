<?php
	header("Content-type: text/xml");
	$apiurl = "http://agent.jomesoft.com/api/agentapi.aspx";
	$wAgent="101035";
	$wAction = "GetTaskRank";
	$pwd="yes12300";
	$key="50720D46C9CF2312865BFD3AD20DE6D1";
	$wMsgID = time();
	
	$taskid = $_GET['taskid'];

	$wParam = "TaskId=$taskid";
	$wSign = strtoupper(md5($wAgent.$wAction.$wMsgID.$wParam.$key));
	$postfields = "wAgent=".$wAgent."&wAction=".$wAction."&wMsgID=".$wMsgID."&wSign=".$wSign."&wParam=".$wParam;
	
	//模拟POST请求获取数据
	request_by_curl($apiurl,$postfields);
	
	/**
	 * Curl版本
	 * 使用方法：
	 * $post_string = "app=request&version=beta";
	 * request_by_curl('http://facebook.cn/restServer.php',$post_string);
	 */
	function request_by_curl($remote_server,$postfields)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_URL,$remote_server);
		//为了支持cookie
		curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		curl_setopt($ch, CURLOPT_POSTFIELDS,$postfields);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

?>
	

