<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('format', '', 0);
class seo_admin extends admin {
	function __construct() {
		parent::__construct();
		$this->admin_db = pc_base::load_model('admin_model');
		$this->member_db = pc_base::load_model('member_model');
		$this->seo_db = pc_base::load_model('seo_model');
		$this->keywords_db = pc_base::load_model('keywords_model');
		$this->rank_db = pc_base::load_model('rank_model');
		$this->_username = param::get_cookie('admin_username');
		$this->_userid = param::get_cookie('userid');
		pc_base::load_app_func('global');
		pc_base::load_sys_class('form');
 		foreach(L('select') as $key=>$value) {
			$website_status[$key] = $value;
		}
		$this->website_status = $website_status;
	} 

	public function init() 
	{
		$this->website_list();
	}
	
	/**
	*获取站点列表 
	**/
	public function website_list()
	{
		$pagesize = 10;
		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
		
		$roleid = $_SESSION['roleid'];
		$roleuser = $_SESSION['userid'];
		
		$where = " 1=1 ";
		if($roleid<>1)
		{
			$where.= " AND roleuser=".$roleuser;
		}
		
		if(isset($_POST['dosubmit']))
		{
			if(!empty($_POST['search']['title']))
			{
				$where.= " AND title like '%".$_POST['search']['title']."%'";
			}
			$status = isset($_POST['search']['status'])?$_POST['search']['status']:'all';
			if($status<>"all")
			{
				$where.= " AND status = ".$status;
			}
			if(!empty($_POST['search']['start_date']) && !empty($_POST['search']['end_date']))
			{
				$where.= " AND adddate BETWEEN ".strtotime($_POST['search']['start_date'])." AND ".strtotime($_POST['search']['end_date']);
			}
			elseif(!empty($_POST['search']['start_date']))
			{
				$where.= " AND adddate >=".$_POST['search']['start_date'];
			}
			elseif(!empty($_POST['search']['end_date']))
			{
				$where.= " AND adddate <=".$_POST['search']['end_date'];
			}
			$infos = $this->seo_db->listinfo($where,$order = 'adddate DESC',$page,$pagesize);
		}
		else
		{
			$infos = $this->seo_db->listinfo($where,$order = 'adddate DESC',$page,$pagesize);
		}
		
		foreach($infos as $k => $v)
		{
			$num = $this->keywords_db->count("sid=".$v['sid']);
			$infos[$k]['counter'] = $num;
			$arr_keywords = $this->keywords_db->select('sid='.$v['sid'],'fee');
			
			$fee = 0;
			foreach($arr_keywords as $kk => $vv)
			{
			  $fee+=$vv['fee'];
			}
			$infos[$k]['fee'] = $fee;
			$arr_member = $this->member_db->get_one('userid='.$v['userid']);
			$infos[$k]['username'] = $arr_member['username'];
			if(!empty($v['roleuser']))
			{
				$arr_admin = $this->admin_db->get_one('userid='.$v['roleuser']);
				$infos[$k]['roleuser'] = $arr_admin['realname'];
			}
			else
			{
				$infos[$k]['roleuser'] = '';
			}
			
			
		}
		
		$pages = $this->seo_db->pages;
		$website_status = $this->website_status;
		include $this->admin_tpl('website_list');
	}
	
	/**
	 * 添加网站名称
	 * 
	 */
	public function website_add()
	{
		if(isset($_POST['dosubmit'])) 
		{
			$info = array();
			$info['userid'] = $_POST['info']['userid'];
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
			$info['status'] = $_POST['info']['status'];
			$info['roleuser'] = $_POST['info']['roleuser'];
			$info['adddate'] = time();
			
			$this->seo_db->insert($info,1,0);
			if($this->seo_db->insert_id())
			{
				showmessage("网站添加成功",'?m=seo&c=seo_admin&a=website_list&menuid='.$_POST['menuid']);
			}
			else
			{
				showmessage("网站添加失败",'?m=seo&c=seo_admin&a=website_list&menuid='.$_POST['menuid']);
			}
			include $this->admin_tpl('website_list');
		}
		else
		{
			//启用formvalidator验证
			$show_validator = $show_scroll =  true;
			
			$arr_userid = $this->member_db->select('','username,userid,nickname');
			$arr_seoner = $this->select_seoner_category();
			//站点状态
			$website_status = $this->website_status;
			include $this->admin_tpl('website_add');
		}
		
	}
	
	/**
	 * 编辑网站名称
	 * 
	 */
	public function website_edit()
	{
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
			$info['status'] = $_POST['info']['status'];
			$info['roleuser'] = $_POST['info']['roleuser'];
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
			
			$rs = $this->seo_db->update($info,'sid='.$sid);
			if($rs)
			{
				showmessage("网站修改成功",'?m=seo&c=seo_admin&a=website_list&menuid='.$_POST['menuid']);
			}
			else
			{
				showmessage("网站修改失败",'?m=seo&c=seo_admin&a=website_list&menuid='.$_POST['menuid']);
			}
		}
		else
		{
			//启用formvalidator验证
			$show_validator = $show_scroll =  true;
			$sid = isset($_GET['sid'])?$_GET['sid']:'';
			if(!empty($sid))
			{
				$website_status = $this->website_status;
				$info = $this->seo_db->get_one('sid='.$sid);
				$arr_userid = $this->member_db->select('','username,userid');
				$arr_seoner = $this->select_seoner_category();
				include $this->admin_tpl('website_edit');
			}
			else
			{
				showmessage("站点参数错误",HTTP_REFERER);
			}
			
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
		$sid = isset($_REQUEST['sid'])?$_REQUEST['sid']:"";
		$menuid = isset($_REQUEST['menuid'])?$_REQUEST['menuid']:"";
		if(!empty($sid))
		{
			$ds = $this->seo_db->delete(array('sid'=>$sid));
			if($ds)
			{
				$this->keywords_db->delete(array('sid'=>$sid));
				$this->rank_db->delete(array('sid'=>$sid));
				showmessage("网站删除成功",'?m=seo&c=seo_admin&a=website_list&menuid='.$menuid);
			}
			else
			{
				showmessage("网站删除失败",'?m=seo&c=seo_admin&a=website_list&menuid='.$menuid);
			}
		}
	}
	
	/**
	 * 批量删除网站数据
	 * 
	 */
	public function website_delete_all()
	{
		$arr_sid = isset($_POST['sid'])?$_POST['sid']:"";
		
		//print_r($arr_sid);
		/* $menuid = isset($_REQUEST['menuid'])?$_REQUEST['menuid']:"";
		if(!empty($sid))
		{
			$ds = $this->seo_db->delete(array('sid'=>$sid));
			if($ds)
			{
				$this->keywords_db->delete(array('sid'=>$sid));
				$this->rank_db->delete(array('sid'=>$sid));
				showmessage("网站删除成功",'?m=seo&c=seo_admin&a=website_list&menuid='.$menuid);
			}
			else
			{
				showmessage("网站删除失败",'?m=seo&c=seo_admin&a=website_list&menuid='.$menuid);
			}
		} */
	}
	
	
	/**
	 *关键词列表
	 * 
	 */
	public function keywords_list()
	{
		$sid = isset($_GET['sid'])?$_GET['sid']:'';
		
		//获取所有站点
		$website_category = $this->select_websites_category();
		
		$pubdate = !empty($_REQUEST['end_date'])?$_REQUEST['end_date']:date('Y-m-d',time());
		$pagesize = 10;
		$page = isset($_GET['page']) && trim($_GET['page']) ? intval($_GET['page']) : 1;
		
		if(isset($_GET['sid']))
		{
			$where = " sid = ".$sid;
			$status = isset($_REQUEST['status'])?$_REQUEST['status']:'all';
			if($status<>"all" || $status=='0')
			{
				$where.= " AND kstatus = ".$status;
			}
			$keywords_list = $this->keywords_db->listinfo($where, 'kid DESC,sid DESC', $page, $pagesize);
		}
		else
		{
			$where = " sid = ".$website_category[0]['sid'];
			$keywords_list = $this->keywords_db->listinfo($where,'kid DESC,sid DESC',$page,$pagesize);
		}
		
		foreach($keywords_list as $k => $v)
		{
			$arr_seo = $this->seo_db->get_one('sid='.$v['sid'],'url');
			$keywords_list[$k]['url'] = $arr_seo['url'];
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
		include $this->admin_tpl('keywords_list');
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
			$info['kstatus']=2;
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
				showmessage("关键词添加成功",'?m=seo&c=seo_admin&a=keywords_list&sid='.$_POST['info']['sid'].'&menuid='.$_POST['menuid']);
			}
			else
			{
				showmessage("关键词添加失败",'?m=seo&c=seo_admin&a=keywords_list&sid='.$_POST['info']['sid'].'&menuid='.$_POST['menuid']);
			}
		}
		else
		{
			//启用formvalidator验证
			$show_validator = $show_scroll =  true;
			
			$website_category = $this->select_websites_category();
			include $this->admin_tpl('keywords_add');
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
			$info['kstatus'] = trim($_POST['info']['kstatus']);
			$info['taskid'] = trim($_POST['info']['taskid']);
			
			if(!empty($kid))
			{
				$rs = $this->keywords_db->update($info,'kid='.$kid);
				if($rs)
				{
					showmessage("关键词修改成功",'?m=seo&c=seo_admin&a=keywords_list&sid='.$_POST['info']['sid'].'&menuid='.$_POST['menuid']);
				}
				else
				{
					showmessage("关键词修改失败",'?m=seo&c=seo_admin&a=keywords_list&sid='.$_POST['info']['sid'].'&menuid='.$_POST['menuid']);
				}
			}
		}
		else
		{
			//启用formvalidator验证
			$show_validator = $show_scroll =  true;
			
			$kid = isset($_GET['kid'])?$_GET['kid']:'';
			$website_category = $this->select_websites_category();
			$keywords_status = $this->website_status;
			$info = $this->keywords_db->get_one(array('kid'=>$kid));
			include $this->admin_tpl('keywords_edit');
		}
	}
	
	/**
	 * 关键词历史情况
	 * 
	 */
	public function keywords_history()
	{
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
		include $this->admin_tpl('keywords_history');
	}
	
	/**
	 * 删除网站关键词
	 * 
	 */
	public function keywords_delete()
	{
		$kid = isset($_REQUEST['kid'])?$_REQUEST['kid']:"";
		$sid = isset($_REQUEST['sid'])?$_REQUEST['sid']:"";
		$menuid = isset($_REQUEST['menuid'])?$_REQUEST['menuid']:"";
		if(!empty($kid))
		{
			$ds = $this->keywords_db->delete(array('kid'=>$kid));
			if($ds)
			{
				$this->rank_db->delete(array('kid'=>$kid));
				showmessage("关键词删除成功",'?m=seo&c=seo_admin&a=keywords_list&sid='.$sid.'&menuid='.$menuid);
			}
			else
			{
				showmessage("关键词删除失败",'?m=seo&c=seo_admin&a=keywords_list&sid='.$sid.'&menuid='.menuid);
			}
		}
	}

	/**
	 * 初始化搜索引擎查询页面
	 * 
	 */
	public function init_search()
	{
		$kid = isset($_REQUEST['kid'])?$_REQUEST['kid']:"";
		$sid = isset($_REQUEST['sid'])?$_REQUEST['sid']:"";
		$arr_seo = $this->seo_db->get_one('sid='.$sid);
		$arr_keywords = $this->keywords_db->get_one('kid='.$kid);
		$arr = Array();
		$arr['url'] = $arr_seo["url"];
		$arr['keywords'] = $arr_keywords["keywords"];
		
		include $this->admin_tpl("search_engine");
	}
	
	/**
	 * 获取搜索引擎查询数据
	 * 
	 */
	public function show_search()
	{
		$kid = isset($_REQUEST['kid'])?$_REQUEST['kid']:"";
		$sid = isset($_REQUEST['sid'])?$_REQUEST['sid']:"";
		$arr_seo = $this->seo_db->get_one('sid='.$sid);
		$arr_keywords = $this->keywords_db->get_one('kid='.$kid);
		$searchtype = isset($_REQUEST['searchtype'])?$_REQUEST['searchtype']:"";
		$url = $arr_seo['url'];
		$keywords = $arr_keywords['keywords'];
		$rows = baidu_s($sid,$kid,$searchtype,$keywords,$url);
		include $this->admin_tpl("search_engine");
	}
	
	/**
	 * 保存搜索引擎查询数据
	 * 
	 */
	public function save_search()
	{
		if(isset($_POST['dosubmit'])) 
		{
			$arr['sid']= isset($_POST['sid'])?$_POST['sid']:'';
			$arr['kid']= isset($_POST['kid'])?$_POST['kid']:'';
			$arr['search_engine']= isset($_POST['search_engine'])?$_POST['search_engine']:1;
			$arr['rpage']= isset($_POST['rpage'])?$_POST['rpage']:'';
			$arr['rank']= isset($_POST['rank'])?$_POST['rank']:'';
			$arr['ip']= isset($_POST['ip'])?$_POST['ip']:'';
			$arr['city']= isset($_POST['city'])?$_POST['city']:'';
			
			if(!empty($arr['sid']) && $arr['kid'])
			{
				
				$rows = $this->rank_db->get_one('sid='.$arr['sid'].' AND kid = '.$arr['kid'],'rid,rank,pubdate','pubdate desc');
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
					$this->rank_db->insert($arr,1,0);
					if($this->rank_db->insert_id())
					{
						echo ShowMsg("modelinfo2","succeed",2,"信息添加成功");
					}
					else
					{
						echo ShowMsg("modelinfo2","warning",2,"信息添加失败");
					}
				}
				else
				{
					if($arr['rank'] < $rows['rank'])
					{
						$flag = $this->rank_db->update($arr,'rid='.$rows['rid']);
						if($flag)
						{
							echo ShowMsg("modelinfo2","succeed",2,"信息更新成功");
						}
						else
						{
							echo ShowMsg("modelinfo2","warning",2,"信息更新失败");
						}
					}
					else
					{
						echo ShowMsg("modelinfo2","warning",8,"当前排名较已有信息排名相同或靠后无需更新");
					}
				}
			}
		}
	}
	
	/**
	 * 一键同步所有关键词
	 * 
	 */
	public function data_add()
	{
		$website_category = $this->select_websites_category();
		if(isset($_REQUEST['dosubmit']))
		{
			$num = isset($_REQUEST['num'])?$_REQUEST['num']:0;
			$row = isset($_REQUEST['row'])?$_REQUEST['row']:0;
			$sid = isset($_REQUEST['sid'])?$_REQUEST['sid']:'all';
			if($sid<>'all')
			{
				//获取指定站点的所有关键词
				$arr_keywords = $this->keywords_db->select('sid='.$sid,'sid,kid,keywords');
				$total = $this->keywords_db->count();
			}
			else
			{
				//获取所有关键词
				$arr_keywords = $this->keywords_db->select('','sid,kid,keywords','','kadddate DESC');
				$total = $this->keywords_db->count();
			}
			
			
			if(!isset($_REQUEST['site_id']))
			{
				$message = "数据更新开始…<br/>共需处理 <span class='bdred'>".$total."</span> 条数据";
				$forward = "?m=seo&c=seo_admin&a=data_add&menuid=1661&dosubmit=1&site_id=1&num=".$num;
			}
			else
			{
				$num++;
				if($num<=$total)
				{
					//获取所有站点
					$arr_website = $this->seo_db->get_one('sid='.$arr_keywords[$row]['sid'],'title,url');
					
					$message = "当前站点：<span class='bdred'>".$arr_website['title']."</span><br/>";
					$message .= "当前关键词：<span class='bdred'>".$arr_keywords[$row]['keywords']."</span><br/>";
					$arr = baidu_s2($arr_keywords[$row]['sid'],$arr_keywords[$row]['kid'],1,$arr_keywords[$row]['keywords'],
					$arr_website['url'],2);
					$rows = Array();
					$rows['sid'] = $arr['sid'];
					$rows['kid'] =$arr['kid'];
					$rows['search_engine'] =$arr['searchtype'];
					$rows['rpage'] =$arr['page'];
					$rows['rank'] =$arr['px'];
					$rows['ip'] =$arr['ip'];
					$rows['city'] =$arr['city'];
					$rows['pubdate']= time();
					if(count($arr)>0)
					{
						$arr_rank = $this->rank_db->get_one('sid='.$arr['sid'].' AND kid = '.$arr['kid'],'rid,pubdate','pubdate desc');
						$d = date('d',intval($rows['pubdate']-$arr_rank['pubdate']));
						if($d>1)
						{
							$this->rank_db->insert($rows,1,0);
						}
						else
						{
							$this->rank_db->update($rows,'rid='.$arr_rank['rid']);
						}
					}
					
					$message .= "成功更新第 <span class='bdred'>".$num."</span> 条数据<br/>共需处理 <span class='bdred'>".$total."</span> 条数据";
					$row++;
					$forward = "?m=seo&c=seo_admin&a=data_add&menuid=1661&dosubmit=1&site_id=1&num=".$num."&row=".$row;
				}
				else
				{
					$message = "数据全部更新成功<br/>总共处理 <span class='bdred'>".$total."</span> 条数据";
					$forward = "?m=seo&c=seo_admin&a=data_add&menuid=1661";
				}
			}
			showmessage($message,$forward,200);
		}
		else
		{
			include $this->admin_tpl("data_add");
		}
	}
	
	/**
	 * 获取网站下拉选项数据
	 * 
	 */
	public function select_websites_category()
	{
		$roleid = $_SESSION['roleid'];
		$roleuser = $_SESSION['userid'];
		$arr = Array();
		if($roleid<>1)
		{
			$arr = $this->seo_db->select('roleuser='.$roleuser,'sid,title,url');
		}
		else
		{
			$arr = $this->seo_db->select('','sid,title,url');
		}
		return $arr;
	}
	
	/**
	 * 获取所有优化人员信息
	 * 
	 */
	public function select_seoner_category()
	{
		$sql = 'userid <> 1';
		$arr = $this->admin_db->select($sql,'userid,username,realname');
		return $arr;
	}
}
?>