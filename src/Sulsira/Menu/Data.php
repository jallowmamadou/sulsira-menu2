<?php
/**
 * Created by PhpStorm.
 * User: mamadou
 * Date: 4/14/2015
 * Time: 2:08 PM
 */

namespace Sulsira\Menu;


trait Data {

    public $config;
    public $menu;
    public $nav;

    function __construct(){
        $this->nav = config('menu.nav');
        $this->menu = config('menu.nav');
        $this->config = config('menu.config');
    }
    public function getMenuData(){
    // we publish the config data to the variable of the trait

//        return config('menu.nav');
    }
} 