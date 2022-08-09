<?php

namespace Core;

class Controller
{
    public static function view($template ,$param = [])
    {
        $params = $param;
        require  './theme/'.$template.'.php';
    }
}