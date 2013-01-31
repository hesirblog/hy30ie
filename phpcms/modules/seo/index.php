<?php
/**
 * 会员前台优化管理操作类
 */
defined('IN_PHPCMS') or exit('No permission resources.');
define('SKIN_PATH','/statics'); //定义statics路径
pc_base::load_app_class('foreground','member');//加载foreground 应用类. 自动判断是否登陆.
pc_base::load_sys_class('format', '', 0);
pc_base::load_sys_class('form', '', 0);

class index extends foreground {

	function __construct() {
		parent::__construct();
		$this->seo_db = pc_base::load_model('seo_model');
		$this->keywords_db = pc_base::load_model('keywords_model');
		$this->rank_db = pc_base::load_model('rank_model');
		$this->_username = param::get_cookie('_username');
		$this->_userid = param::get_cookie('_userid');
	}
	public function init(){
		$this->website_list();
	}
	
	/**
	 * 网站列表
	 * 
	 */
	public function website_list()
	{
		$userid = $this->_userid;
		$pagesize = 5;
		$page = isset($_GET['page']) && trim($_GET['page']) ? intval($_GET['page']) : 1;
		$weblist = $this->seo_db->listinfo(array('userid'=>$userid), 'sid DESC,adddate DESC', $page, $pagesize);
		foreach($weblist as $k => $v)
		{
			$num = $this->keywords_db->count("sid=".$v['sid']);
			$weblist[$k]['counter'] = $num;
			$arr = $this->keywords_db->select('sid='.$v['sid'],'fee');
			$fee = 0;
			foreach($arr as $kk => $vv)
			{
			  $fee+=$vv['fee'];
			}
			$weblist[$k]['fee'] = $fee;
		}
		$pages = $this->seo_db->pages;
		include template('seo', 'website_list');
	}
	
	/**
	 * 添加网站名称
	 * 
	 */
	public function website_add()
	{
		if(isset($_POST['dosubmit'])) 
		{
			$userid = $this->_userid;
			$info = array();
			$info['userid'] = $userid;
			$info['title'] = $_POST['info']['title'];
			$info['url'] = $_POST['info']['url'];
			$info['url'] = str_replace("http://","",$info['url']);
			$info['url'] = str_replace("/","",$info['url']);
			$info['url'] = "http://".$info['url'];
			$info['typetop'] = $_POST['L_3360-1'];
			$info['typeson'] = $_POST['L_3360-2'];
			$info['ftp_ip'] = $_POST['info']['ftp_ip'];
			$info['ftp_port'] = $_POST['info']['ftp_port'];
			$info['ftp_user'] = $_POST['info']['ftp_user'];
			$info['ftp_pwd'] = $_POST['info']['ftp_pwd'];
			$stype = $_POST['info']['searchtype'];
			$str_stype = "";
			for($i=0;$i<count($stype);$i++)
			{
				if($i==(count($stype)-1))
				{
					$str_stype .= $stype[$i];
				}
				else
				{
					$str_stype .= $stype[$i].",";
				}
			}
			$info['searchtype'] = $str_stype;
			$info['remark'] = $_POST['info']['remark'];
			$info['status'] = 0;
			$info['adddate'] = time();
			
			$this->seo_db->insert($info,1,0);
			if($this->seo_db->insert_id())
			{
				showmessage("网站添加成功",HTTP_REFERER);
			}
			else
			{
				showmessage("网站添加失败",HTTP_REFERER);
			}
			include template('seo', 'website_list');
		}
		else
		{
			$show_validator = 1;
			include template('seo', 'website_add');
		}
		
	}
	
	/**
	 * 编辑网站名称
	 * 
	 */
	public function website_edit()
	{
		$userid = $this->_userid;
		
		if(isset($_POST['dosubmit'])) 
		{
			$info = array();
			$sid = $_POST['info']['sid'];
			$info['title'] = $_POST['info']['title'];
			$info['url'] = $_POST['info']['url'];
			$info['url'] = str_replace("http://","",$info['url']);
			$info['url'] = str_replace("/","",$info['url']);
			$info['url'] = "http://".$info['url'];
			$info['typetop'] = $_POST['L_3360-1'];
			$info['typeson'] = $_POST['L_3360-2'];
			$info['ftp_ip'] = $_POST['info']['ftp_ip'];
			$info['ftp_port'] = $_POST['info']['ftp_port'];
			$info['ftp_user'] = $_POST['info']['ftp_user'];
			$info['ftp_pwd'] = $_POST['info']['ftp_pwd'];
			$info['remark'] = $_POST['info']['remark'];
			$rs = $this->seo_db->update($info,'sid='.$sid);
			if($rs)
			{
				showmessage("网站修改成功",HTTP_REFERER);
			}
			else
			{
				showmessage("网站修改失败",HTTP_REFERER);
			}
		}
		else
		{
			$show_validator = 1;
			$sid = $_GET['sid'];
			$info = $this->seo_db->get_one(array('userid'=>$userid,'sid'=>$sid));
			include template('seo', 'website_edit');
		}
	}
	
	/**
	 * Ajax检查网站名称是否存在
	 * 
	 */
	 public function public_checktitle_ajax()
	 {
		$title = isset($_GET['title']) && trim($_GET['title']) ? trim($_GET['title']) : exit(0);
		if(CHARSET != 'utf-8') {
			$title = iconv('utf-8', CHARSET, $title);
			$title = addslashes($title);
		}
		$title = safe_replace($title);
		
		$rows = $this->seo_db->get_one('title="'.$title.'"');
		if($rows>0)
		{
			exit("-1");
		}
		else
		{
			exit("1");
		}
		
	 }
	
	/**
	 * Ajax检查网址是否存在
	 * 
	 */
	 public function public_checkurl_ajax()
	 {
		$url = isset($_GET['url']) && trim($_GET['url']) ? trim($_GET['url']) : exit(0);
		$url = str_replace("http://","",$url);
		$url = str_replace("/","",$url);
		$url = "http://".$url;
		$rows = $this->seo_db->get_one('url="'.$url.'"');
		if($rows>0)
		{
			exit("-1");
		}
		else
		{
			exit("1");
		}
	 }
	
	/**
	 * 删除网站数据
	 * 
	 */
	public function website_delete()
	{
		$userid = $this->_userid;
		$sid = isset($_REQUEST['sid'])?$_REQUEST['sid']:"";
		if(!empty($sid))
		{
			$ds = $this->seo_db->delete(array('sid'=>$sid));
			if($ds)
			{
				$this->keywords_db->delete(array('sid'=>$sid));
				showmessage("网站删除成功",HTTP_REFERER);
			}
			else
			{
				showmessage("网站删除失败",HTTP_REFERER);
			}
		}
	}
	
	
	/**
	 *关键词列表
	 * 
	 */
	public function keywords_list()
	{
		$sid = isset($_GET['sid'])?$_GET['sid']:'';
		$userid = $this->_userid;
		
		//获取所有站点
		$website_category = $this->select_websites_category();
		
		$pubdate = !empty($_REQUEST['end_date'])?$_REQUEST['end_date']:date('Y-m-d',time());
		$pagesize = 8;
		$page = isset($_GET['page']) && trim($_GET['page']) ? intval($_GET['page']) : 1;
		
		if(isset($_GET['sid']))
		{
			$where = " userid = ".$userid;
			$where.= " AND sid = ".$sid;
			
			$status = isset($_REQUEST['status'])?$_REQUEST['status']:'all';
			if($status<>"all" || $status=='0')
			{
				$where.= " AND kstatus = ".$status;
			}
			
			$keywords_list = $this->keywords_db->listinfo($where, 'kid DESC,sid DESC', $page, $pagesize);
		}
		else
		{
			$where = " userid = ".$userid;
			$where.= " AND sid = ".$website_category[0]['sid'];
			
			$keywords_list = $this->keywords_db->listinfo($where,'kid DESC,sid DESC',$page,$pagesize);
		}

		//获取最近一星期关键词排名情况
		foreach($keywords_list as $k => $v)
		{
			for($i=6;$i>=0;$i--)
			{
				$arr_rank = $this->rank_db->select('kid='.$v['kid'].'  AND pubdate >= '.strtotime(Minus_date($pubdate,$i,0,0)).' AND pubdate < '.strtotime(Minus_date($pubdate,$i-1,0,0)));
				if(count($arr_rank)==0)
				{
					$keywords_list[$k]['rank'][$i] = '-';
					$keywords_list[$k]['rpage'][$i] = '-';
				}
				else
				{
					if(empty($arr_rank[0]['rank']))
					{
						$keywords_list[$k]['rank'][$i] = '-' ;
						$keywords_list[$k]['rpage'][$i] = '-';
					}
					else
					{
						$keywords_list[$k]['rank'][$i] = $arr_rank[0]['rank'];
						$keywords_list[$k]['rpage'][$i] = $arr_rank[0]['rpage'];
					}
					
				}
			}
		}
		
		$pages = $this->keywords_db->pages;
		include template('seo', 'keywords_list');
	}
	
	/**
	 * 添加关键词
	 * 
	 */
	public function keywords_add()
	{
		if(isset($_POST['dosubmit'])) 
		{
			$userid = $this->_userid;
			$info = Array();
			$info['userid'] = $userid;
			$info['sid'] = $_POST['info']['sid'];
			$arr_keywords = preg_split('/\r\n/',$_POST['info']['keywords']);
			$arr_keywords = array_reverse($arr_keywords);
			$counter = 0;
			$info['kadddate']=time();
			foreach($arr_keywords as $k => $v)
			{
				if(!empty($v))
				{
					$info['keywords'] = trim($v);
					$this->keywords_db->insert($info,1,0);
					if($this->keywords_db->insert_id())
					{
						$counter++;
					}
				}
				else
				{
					$counter++;
				}
			}
			if($counter == count($arr_keywords))
			{
				showmessage("关键词添加成功",HTTP_REFERER);
			}
			else
			{
				showmessage("关键词添加失败",HTTP_REFERER);
			}
		}
		else
		{
			$show_validator = 1;
			$website_category = $this->select_websites_category();
			include template('seo', 'keywords_add');
		}
	}
	
	/**
	 * 修改网站关键词
	 * 
	 */
	 
	public function keywords_edit()
	{
		if(isset($_POST['dosubmit']))
		{
			$info = Array();
			$kid = isset($_POST['kid'])?$_POST['kid']:'';
			
			$info['sid'] = $_POST['info']['sid'];
			$info['keywords'] = trim($_POST['info']['keywords']);
			$info['taskid'] = trim($_POST['info']['taskid']);
			
			if(!empty($kid))
			{
				$rs = $this->keywords_db->update($info,'kid='.$kid);
				if($rs)
				{
					showmessage("关键词修改成功","/index.php?m=seo&c=index&a=keywords_list&t=3");
				}
				else
				{
					showmessage("关键词修改失败",HTTP_REFERER);
				}
			}
		}
		else
		{
			$show_validator = 1;
			$kid = isset($_GET['kid'])?$_GET['kid']:'';
			$website_category = $this->select_websites_category();
			$info = $this->keywords_db->get_one(array('kid'=>$kid));
			include template('seo', 'keywords_edit');
		}
	}
	
	/**
	 * 关键词历史情况
	 * 
	 */
	public function keywords_history()
	{
		$userid = $this->_userid;
		$kid = isset($_REQUEST['kid'])?$_REQUEST['kid']:'';
		$start_date = isset($_REQUEST['start_date'])?$_REQUEST['start_date']:'';
		$end_date = isset($_REQUEST['end_date'])?$_REQUEST['end_date']:'';
		$search_engine = isset($_REQUEST['search_engine'])?$_REQUEST['search_engine']:'all';
		$rpage = isset($_REQUEST['rpage'])?$_REQUEST['rpage']:'all';
		
		//分页
		$pagesize = 10;
		$page = isset($_GET['page']) && trim($_GET['page']) ? intval($_GET['page']) : 1;
		
		
		$where = ' 1=1 ';
		$where.= ' AND kid = '.$kid;
		if(!empty($start_date) && !empty($end_date))
		{
			$where.= ' AND  pubdate BETWEEN '.strtotime($start_date).' AND '.strtotime($end_date);
		}
		elseif(!empty($start_date))
		{
			$where.= ' AND  pubdate >='.strtotime($start_date);
		}
		elseif(!empty($end_date))
		{
			$where.= ' AND  pubdate <='.strtotime($end_date);
		}
		if($search_engine<>'all')
		{
			$where.= ' AND  search_engine ='.$search_engine;
		}
		if($rpage<>'all')
		{
			$where.= ' AND  rpage ='.$rpage;
		}
		$rank_list = $this->rank_db->listinfo($where, 'pubdate DESC', $page, $pagesize);
		
		foreach($rank_list as $k => $v)
		{
			$arr_keywords = $this->keywords_db->get_one('kid='.$v['kid']);
			$arr_websites = $this->seo_db->get_one('sid='.$v['sid']);
			$rank_list[$k]['keywords'] = $arr_keywords['keywords'];
			$rank_list[$k]['title'] = $arr_websites['title'];
		}
		
		$pages = $this->rank_db->pages;
		include template('seo', 'keywords_history');
	}
	
	/**
	 * 删除网站关键词
	 * 
	 */
	public function keywords_delete()
	{
		$kid = isset($_REQUEST['kid'])?$_REQUEST['kid']:"";
		if(!empty($kid))
		{
			$ds = $this->keywords_db->delete(array('kid'=>$kid));
			if($ds)
			{
				showmessage("关键词删除成功",HTTP_REFERER);
			}
			else
			{
				showmessage("关键词删除失败",HTTP_REFERER);
			}
		}
	}
	
	/**
	 * 模拟关键词排名数据同步
	 * 
	 */
	public function data_add()
	{
		$userid = $this->_userid;
		if(isset($_POST['dosubmit']))
		{
			$info = Array();
			$arr_search_engine=Array('1','2','3');
			$now = date('Y-m-d',time());
			$sid = $_POST['info']['sid'];
			if($sid<>'all')
			{
				$arr_keywords = $this->keywords_db->select('sid='.$sid,'*');
			}
			else
			{
				$arr_keywords = $this->keywords_db->select();
			}
			
			for($i=0;$i<count($arr_keywords);$i++)
			{
				$index = 6;
				for($j=0;$j<7;$j++)
				{
					$info[$i][$j]['sid'] = $arr_keywords[$i]['sid'];
					$info[$i][$j]['kid'] = $arr_keywords[$i]['kid'];
					$info[$i][$j]['search_engine'] = $arr_search_engine[0];
					$info[$i][$j]['rank'] = rand(1,5);
					$info[$i][$j]['rpage'] = rand(1,3);
					$info[$i][$j]['pubdate']= strtotime(Minus_date($now,$index));
					$index--;
				}
			}

			$total = count($info)*count($info[0]);
			$counter = 0;
			//echo $total;
			
			for($i=0;$i<count($info);$i++)
			{
				for($j=0;$j<count($info[$i]);$j++)
				{
					$rs = $this->rank_db->insert($info[$i][$j],1,0);
					if($rs)
					{
						$counter++;
					}
					/* echo "INSERT INTO `v9_rank` (`sid`,`kid`,`search_engine`,`rpage`,`rank`,`pubdate`) VALUES ($info[$i][$j]['sid'],$info[$i][$j]['kid'],$info[$i][$j]['search_engine'],$info[$i][$j]['rpage'],$info[$i][$j]['rank'],$info[$i][$j]['pubdate'])<br/>"; */
				}
				/* echo "<br/>"; */
			}
			
			if($total == $counter)
			{
				showmessage("数据同步成功",HTTP_REFERER);
			}
			else
			{
				showmessage("数据同步失败",HTTP_REFERER);
			}
		}
		else
		{
			$website_category = $this->select_websites_category();
			include template('seo', 'data_add');
		}
	}
	
	/**
	 * 获取网站下拉选项数据
	 * 
	 */
	public function select_websites_category()
	{
		$userid = $this->_userid;
		$arr = $this->seo_db->select('userid ='.$userid.' ORDER BY sid DESC');
		return $arr;
	}
	
	
	
}
?>
