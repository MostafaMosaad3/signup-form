<?php
namespace App\Controllers;

class HomeController
{
    public function index(){
        return require 'App/Views/Home.view.php';
        echo "/welome";

    }


    public function Home(){
        $articles = [
            "article1" => [
                'title' => "Hello World1",
                'id' => 1
            ],
            "article2" => [
                'title' => "Hello World2",
                'id' => 2
            ],
            "article3" => [
                'title' => "Hello World3",
                'id' => 3
            ],
        ];
//
//        $msg = "Welcome";
        view('Ali' , compact('articles'));
//        return require 'App/Views/Ali.view.php';

    }

    public function Hypird(){
        return require 'App/Views/Hyprid.view.php';

    }
}