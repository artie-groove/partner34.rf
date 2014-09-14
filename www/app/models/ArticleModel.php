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
    private $selectedArticleId;

    private $articles = array(
        'about' => array(
            'basics' => 'О компании ЦНЭО &laquo;Партнёр&raquo;',
            'philosophy' => 'Философия компании',
            'certificates' => 'Свидетельства и сертификаты',
            'partners' => 'Партнёры и клиенты',
            'faces' => 'Компания в лицах',
            'thanks' => 'Благодарности',
            'vacancies' => 'Вакансии'
        ),
        'assessment' => array(
            'recovery' => 'Оценка стоимости восстановительного ремонта',
            'market' => 'Оценка рыночной стоимости транспортных средств',
            'loss' => 'Оценка утраты товарной стоимости',
            'notary' => 'Оценка для нотариуса',
            'prejudice' => 'Оценка всех видов ущерба',
            'estate' => 'Оценка недвижимости',
            'land' => 'Оценка стоимости земельных участков',
            'business' => 'Оценка бизнеса',
            'rent' => 'Оценка ставки по арендной плате',
            'equipment' => 'Оценка машин и оборудования',
            'immaterial' => 'Оценка нематериальных активов',
            'writeoff' => 'Оценка для целей списания имущества',
            'customs' => 'Оценка для таможни'
        ),
        'examination' => array(
            'summary' => 'Наши услуги',
            'technical' => 'Автотехническая экспертиза дорожно-транспортного происшествия',
            'motion' => 'Транспортно-трасологическая экспертиза',
            'transport' => 'Автодорожная экспертиза',
            'goods' => 'Товароведческая экспертиза',
            'independent' => 'Независимая техническая экспертиза',
            'quality' => 'Экспертиза качества',
            'building' => 'Строительная экспертиза'
        ),
        'legal' => 'Юридические услуги',
        'road_help' => 'Помощь на дороге',
        'prices' => 'Стоимость услуг',
        'map_vlz' => 'Схема расположения волжского офиса',
        'map_vgd' => 'Схема расположения волгоградского офиса'
    );

    function __construct( $storagePath )
    {
        $this->storagePath = $storagePath;
    }

    function setArticleId( $articleId )
    {
        $this->selectedArticleId = $articleId;
    }

    function getArticle()
    {
        return $this->getById( $this->selectedArticleId );
    }

    function getById( $articleId )
    {
        $item = $this->searchArticle($articleId, $this->articles);
        if ( $item )
        {
            $title = $item;
        }
        else
        {
            $title = '__Статья_не_существует__';
            $articleId = array('404');
        }
        $src = $this->storagePath . '/' . implode('/', $articleId) . '.html';
        return new Article($title, $src);
    }

    private function searchArticle( $arrAddress, $branch )
    {
        if ( !is_array($arrAddress) && empty($arrAddress) ) return false;
        $elem = array_shift($arrAddress);
        if ( array_key_exists($elem, $branch) )
        {
            if ( is_array($branch[$elem]) )
                return $this->searchArticle($arrAddress, $branch[$elem]);

            return $branch[$elem];
        }
        return false;
    }
}