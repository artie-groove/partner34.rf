<?

require_once 'app/entities/Article.php';
require_once 'app/models/ArticleModel.php';

class ArticleView {

    private $smarty;
    private $model;

    function __construct( $smarty, $articleModel )
    {
        $this->model = $articleModel;
        $this->smarty = $smarty;
    }

    function render()
    {
        $article = $this->model->getArticle();
        $this->smarty->assign('title', $article->title);
        $this->smarty->assign('pageName', $article->srcFile);
        $this->smarty->display('templates/inner.tpl');
        return true;
    }

}