<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */

/*时间加函数*/
function Add_date($givendate,$day=0,$mth=0,$yr=0) 
{
	$cd = strtotime($givendate);
	$newdate = date('Y-m-d', mktime(date('h',$cd),
	date('i',$cd), date('s',$cd), date('m',$cd)+$mth,
	date('d',$cd)+$day, date('Y',$cd)+$yr));
	return $newdate;
}
/*时间减函数*/
function Minus_date($givendate,$day=0,$mth=0,$yr=0) 
{
	$cd = strtotime($givendate);
	$newdate = date('Y-m-d', mktime(date('h',$cd),
	date('i',$cd), date('s',$cd), date('m',$cd)-$mth,
	date('d',$cd)-$day, date('Y',$cd)-$yr));
	return $newdate;
}
?>