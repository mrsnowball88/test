<?php
namespace Core;

class Route
{
    private $path;
    private $controller;
    private $action;

    public function __construct($path, $controller, $action)
    {
        $this->path = $path;
        $this->controller = $controller;
        $this->action = $action;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public static function Go($routesList = [], $path)
    {
        foreach ($routesList as $route){
          if (
              $route->path == $path
          ){
              $run = "Core\Controllers\\".$route->controller.'::Action'. $route->action;
              $run();
          }
        }
    }
}