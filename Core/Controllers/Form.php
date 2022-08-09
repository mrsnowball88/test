<?php

namespace Core\Controllers;

class Form extends \Core\Controller
{
    public static function ActionFeedback(){
        self::view('contact',[
            'tittle' => '',
            'result' => 'Ок',
        ]);
    }
}