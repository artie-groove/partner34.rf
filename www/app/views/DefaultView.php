<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06.03.14
 * Time: 21:35
 */

class DefaultView {

    private $smarty;

    public function __construct ($smarty) {
        $this->smarty = $smarty;
    }

    public function render()
    {
        $this->smarty->display('templates/main.tpl');
        return true;
    }
} 