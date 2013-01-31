<?php
class format {
	/**
	 * 日期格式化
	 * 
	 * @param $timestamp
	 * @param $showtime
	 */
	public static function date($timestamp, $showtime = 0) {
		$times = intval($timestamp);
		if(!$times) return true;
		$lang = pc_base::load_config('system','lang');
		if($lang == 'zh-cn') {
			$str = $showtime ? date('Y-m-d H:i:s',$times) : date('Y-m-d',$times);
		} else {
			$str = $showtime ? date('m/d/Y H:i:s',$times) : date('m/d/Y',$times);
		}
		return $str;
	}
	
	/**
	 * 获取当前星期
	 * 
	 * @param $timestamp
	 */
	public static function week($timestamp) {
		$times = intval($timestamp);
		if(!$times) return true;
		$weekarray = array(L('Sunday'),L('Monday'),L('Tuesday'),L('Wednesday'),L('Thursday'),L('Friday'),L('Saturday')); 
		return $weekarray[date("w",$timestamp)]; 
	}
	
	/**
	 * 格式化价格
	 * 
	 * @param $price
	 */
	public static function price($price) {
		if(count(explode('.',$price))>1)
		{
		   $str = $price;
		}
		else if($price == '')
		{
		   $str = '0.00';
		}
		else
		{
		  $str = $price.".00";
		}
		return $str;
	}
	
	/**
	 * 运行状态
	 * 
	 * @param $status
	 */
	public static function status($status) {
		$str = "";
		switch($status)
		{
			case '0':
				$str = "<span class='sp_blue'>待审核</span>";
				break;
			case '1':
				$str = "<span class='sp_red'>审核未通过</span>";
				break;
			case '2':
				$str = "<span class='sp_green'>正常运行</span>";
				break;
			case '3':
				$str = "<span class='sp_red'>申请停用</span>";
				break;
			case '4':
				$str = "<span class='sp_red'>已停用</span>";
				break;
			case '5':
				$str = "<span class='sp_green'>申请启用</span>";
				break;
		}
		return $str;
	}
	
	/**
	 * 运行状态
	 * 
	 * @param $status
	 */
	public static function search_engine($index) {
		$str = "";
		switch($index)
		{
			case '1':
				$str = "百度";
				break;
			case '2':
				$str = "搜搜";
				break;
			case '3':
				$str = "搜狗";
				break;
		}
		return $str;
	}
	
	/**
	 * 运行状态
	 * 
	 * @param $status
	 */
	public static function null_number($num) {
		$str = "";
		if(empty($num) || $num == '')
		{
			$str = " -- ";
		}
		else
		{
			$str = $num;
		}
		return $str;
	}
}
?>