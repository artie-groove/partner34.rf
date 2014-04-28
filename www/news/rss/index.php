<? 
//	error_reporting  (E_ALL | E_STRICT);
//	ini_set("display_errors", "1");

function all_replace($my_str)
{
$my_str=html_entity_decode($my_str);
$my_str=str_replace("&mdash;","-",$my_str);
return $my_str;
}


	require_once('/opt/www/mechanism/req/init_stream.req'); 
    require_once("/opt/www/mechanism/www/stream.ru/htdocs/_admin/news/_lib/csnews.inc.php");	
        
	$mysql = new class_mysql;
	$mysql->sql_connect();
	
	$news_obj = new class_News;
	$news_obj->mysql = $mysql;	
	$vars = new class_Vars;	

	if(!empty($_POST['select_month'])){ $select_month=$_POST['select_month']; }else{ $select_month=0; };
	
	$select_month = 0;
	$select_site=2;
	$visible=1;
	 
    $list_news = $news_obj->get_all_news_rss($select_site);

	header("Content-type: text/xml");

   echo "<?xml version=\"1.0\" encoding=\"windows-1251\"?>
   	<rss version=\"2.0\">
     <channel>
      <title>Новости СТРИМ</title>
      <link>http://www.comstar-direct.ru/</link>
      <description>Последние 50 новостей СТРИМ</description>
      <managinEditor>mpetrov@comstar-direct.ru (Максим Петров)</managinEditor>
      <image>
      	  <url>http://img.comstar-direct.ru/comstardirect_logo.gif</url>
      	  <title>Новости СТРИМ</title>
      	  <link>http://www.comstar-direct.ru/news/</link>
      	  <width>160</width>
      	  <height>74</height> 
      	  <description>Новости СТРИМ</description>     
      </image>
      <ttl>720</ttl>";

    
    foreach($list_news as $news){ 

 
      
      echo "<item>
       <title>".all_replace($news['TITLE'])."</title>
       <link>http://www.comstar-direct.ru/news/".$news['UID']."/</link>
       <description><![CDATA[".all_replace($news['LEAD'])."]]></description>
       <guid>http://www.comstar-direct.ru/news/".$news['UID']."/</guid>
       <pubDate>".date("D, d M Y H:i:s T",strtotime($news['DATE_NEWS']))."</pubDate>      	  
      </item>";
    }
    
   echo "</channel>
   </rss>";
      

?>
