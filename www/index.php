<?

    // put full path to Smarty.class.php
    $tePath = $_SERVER['DOCUMENT_ROOT'] . '/app/lib/smarty';
    require $tePath . '/Smarty.class.php';
    $smarty = new Smarty();

    $smarty->setTemplateDir($tePath . '/templates');
    $smarty->setCompileDir($tePath . '/templates_c');
    $smarty->setCacheDir($tePath . '/cache');
    $smarty->setConfigDir($tePath . '/configs');


    require 'app/models/ArticleModel.php';
    require 'app/views/ArticleView.php';
    require 'app/controllers/ArticleController.php';
    require 'app/views/DefaultView.php';

    // router
    $view = 0;
	if ( !empty( $_GET['article'] ) )
	{
        $model = new ArticleModel('articles');
        $view = new ArticleView($smarty, $model);
        $cntl = new ArticleController($model);
        $cntl->index();
	}
    else
    {
        $view = new DefaultView($smarty);
    }

    $view->render();