<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.04.14
 * Time: 12:37
 */

//namespace application\entities;


class Article {

    public $title;
    public $srcFile;

    function __construct( $title, $srcFile )
    {
        $this->title = $title;
        $this->srcFile = $srcFile;
    }

} 