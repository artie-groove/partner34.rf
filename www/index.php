<?
    /*
    if ( empty( !$_GET['section'] ) )
    {
        if ( $_GET['section'] == "article" )
        {
            require_once "application/controllers/ArticleController.php";
            $cntl = new ArticleController();
            $view = new ArticleView();
        }
    }
    else
    {
        require_once "application/controllers/DefaultController.php";
        $cntl = new ArticleController();
        $view = new ArticleView();
    }
    $cntl->index();
    */

    /* if ( empty( $_GET['section'] ) ) include 'content.html'; 
    include $_SERVER['DOCUMENT_ROOT'] . '/articles/accompaniment.html';
	*/
	
	$sections = array(
		'assessment' => 'Оценка имущества',
		'examination' => 'Независимая техническая экспертиза',
		'legal' => 'Юридические услуги',
        'road_help' => 'Помощь на дороге',
        'road_incident' => 'Экспертиза ДТП',
		'accompainment' => 'Сопровождение и&nbsp;представительство в&nbsp;страховых компаниях'
	);
	
	$content = '';
	$template = 'main';
	$title = '';
	if ( !empty( $_GET['section'] ) ) 
	{
		$src = 'articles/' . $_GET['section'] . '.html';
		if ( file_exists( $src ) )
		{
			$content = $src;
			$template = 'inner';

			$title = $sections[$_GET['section']];
		}
	}
	
	if ( isset( $_GET['dev'] ) ) $template .= '_dev';
	
	include 'templates/' . $template . '.tmpl.php';