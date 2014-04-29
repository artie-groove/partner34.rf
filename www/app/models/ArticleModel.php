<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06.03.14
 * Time: 21:35
 */

//namespace application\models;

require_once 'app/entities/Article.php';

class ArticleModel {

    private $storagePath;

    private $articles = array(
        'assessment' => 'Оценка имущества',
        'examination' => 'Независимая техническая экспертиза',
        'legal' => 'Юридические услуги',
        'road_help' => 'Помощь на дороге',
        'road_incident_1' => 'Автотехническая экспертиза дорожно-транспортного происшествия',
        'road_incident_2' => 'Транспортно-трасологическая экспертиза',
        'road_incident_3' => 'Автодорожная экспертиза',
        'road_incident_4' => 'Товароведческая экспертиза',
        'map_vlz' => 'Схема расположения волжского офиса',
        'map_vgd' => 'Схема расположения волгоградского офиса'
    );

    function __construct( $storagePath )
    {
        $this->storagePath = $storagePath;
    }

    function getById( $articleId )
    {
        if ( array_key_exists($articleId, $this->articles) )
        {
            $title = $this->articles[$articleId];
        }
        else
        {
            $title = '__Статья_не_существует__';
            $articleId = '404';
        }
        $src = $this->storagePath . '/' . $articleId . '.html';
        return new Article($title, $src);
    }
}