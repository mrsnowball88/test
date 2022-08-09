<?php

namespace Core\Controllers;

class Page extends \Core\Controller
{
   public static function ActionHome(){
        self::view('home',[
            'tittle' => 'Главная',
        ]);
   }
    public static function ActionContacts(){
        self::view('contact',[
            'tittle' => 'Контакты',
        ]);
    }
}