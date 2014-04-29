<?

require_once 'app/entities/Article.php';
require_once 'app/models/ArticleModel.php';

class ArticleView {

    private $smarty;
    private $model;
    private $articleId;

    function __construct( $smarty, $articleModel )
    {
        $this->model = $articleModel;
        $this->smarty = $smarty;
    }

    function setArticleId( $articleId )
    {
        $this->articleId = $articleId;
    }

    function render()
    {
        $article = $this->model->getById($this->articleId);
        $this->smarty->assign('title', $article->title);
        $this->smarty->assign('pageName', $article->srcFile);
        $this->smarty->display('templates/inner.tpl');
        return true;
    }

}