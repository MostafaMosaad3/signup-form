<?php
namespace Core;
use http\Exception;

class Router
{
    public $routes = [
        'get' =>[
        ],
        'post' =>[

        ]
    ];

    public static function load($file)
    {
        $router = new static();

        require $file;
        return $router;
    }
    public function get($url , $controller){
        $this->routes['get'][$url] = $controller;


    }
    public function post($url , $controller){
        $this->routes['post'][$url] = $controller;
    }

    public function direct($url , $methodType)
    {

        if (array_key_exists($url , $this->routes[$methodType])){

            $this->callAction(...explode('@',$this->routes[$methodType][$url]));
        }else{

            throw new \Exception("Not Found");
        }

    }

    public function callAction($controller , $action)
    {
        $controllerClass = "App\\Controllers\\{$controller}";
        $controllerInstance = new $controllerClass;
        if (! method_exists($controllerInstance , $action)){

            throw Exception("There No Method Called {$action}");
        }
        else
        {
            return $controllerInstance->$action();
        }
    }
}