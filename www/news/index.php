<?
ini_set("display_errors","1");
error_reporting(E_ALL);

	session_start();
	$part = array ();
	$part[0] = 'root';
	$part[1] = 'news';
	$title = array ();
	$title[0] = '';
	$title[1] = 'Новости';
	$req_path = $_SERVER['DOCUMENT_ROOT'];
	$pos = strripos($req_path, '/');
	$req_path = substr($req_path, 0, $pos) . '/req/init_atc.req';
	require_once($req_path); 
	$vars = new class_vars;

	//newslist
	$mysql = new class_mysql;
    require_once($vars->path_adm."/news/_lib/csnews.inc.php");	
	$news_obj = new class_News;
	$news_obj->mysql = $mysql;
	
	$start_page=0;
	$end_page=0;
	$select_year = date("Y");
	
	
	if( isset($_POST['select_year']) )
		{
			$select_year=$_POST['select_year']; 
			$_SESSION['filter']['select_year'] = $select_year;
		}
		else
		{
			if(isset($_GET['year']))
			{
				$select_year=$_GET['year'];
				$_SESSION['filter']['select_year'] = $select_year;
			}
			 else{
					if(!isset($_SESSION['filter']['select_year']))
					{
						$select_year=date("Y");
					}
					 else
					 {
						$select_year = $_SESSION['filter']['select_year'];
					}
				}	
		}
	
	if(!empty($_POST['select_month'])){ $select_month=$_POST['select_month']; }else{ $select_month=0; };
	
	$select_site=2;
	$visible=1; 
    $years = $news_obj->get_all_year();
    if(!in_array($select_year, $years)) $select_year=$years[0];

	$list_news = $news_obj->get_all_news(0, 4, 0, 0, 1, 0,0);
	$list_all_news = $news_obj->get_all_news($start_page, $end_page, $select_year, $select_month , $visible, 0,0);
	$monthes = $news_obj->get_all_month($select_year);
	//
	include($vars->path_inc . '/main.inc.php');

	
?>
