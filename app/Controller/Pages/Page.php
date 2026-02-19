<?php

namespace App\Controller\Pages;

use \App\Utils\View;
class Page {
    private static function getNavbar(){
        return View::render('pages/navbar');
    }
    private static function getFooter(){
        return View::render('pages/footer');
    }
    public static function getPage($title,$content){
        return view::render('pages/page',[
            'title' => $title,
            'content' => $content,
            'navbar' => self::getNavbar(),
            'footer' => self::getFooter()
        ]);

    }

}