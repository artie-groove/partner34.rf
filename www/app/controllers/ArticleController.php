<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06.03.14
 * Time: 21:33
 */

class ArticleController {

    private $model;
    //private $view;

    public function __construct($model)
    {
        $this->model = $model;
        //$this->view = $view;
    }

    public function index()
    {
        $id = explode('/', rtrim($_GET['article'], '/'));
        $this->model->setArticleId($id);
    }
}