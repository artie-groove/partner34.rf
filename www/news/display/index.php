<? 
        session_start();



    /*error_reporting (E_ALL | E_STRICT);
	ini_set("display_errors", "1");*/
	
	$part[1] = 'news';
	$title = array ();
	$title[0] = '';
	$title[1] = 'Новости';
	$req_path=$_SERVER['DOCUMENT_ROOT'];
	$pos=strripos($req_path,'/');
	$req_path=substr($req_path,0,$pos).'/req/init_atc.req';
	require_once($req_path); 
	$vars=new class_vars;
	$mysql = new class_mysql;
    require_once($vars->path_adm."/news/_lib/csnews.inc.php");	
        
	$mysql = new class_mysql;
	
	$news_obj = new class_News;
	$news_obj->mysql = $mysql;
	
	$vars = new class_Vars;
	
	if(!empty($_GET['nid'])){ $id_news=$_GET['nid']; }else{ header("Location: /"); }
	if(!empty($_SESSION['filter']['year'])){ $select_year=$_SESSION['filter']['year']; }

	$enews = $news_obj->get_news(0,$id_news);
	if(empty($enews['CONTENT'])){ header("Location: /news/"); }
        $title[0] = $enews['TITLE'];
	$list_news = $news_obj->get_all_news(0, 4, 0, 0, 1, 0,0);
	

	include ($vars->path_inc.'/main.inc.php');
?>
