<?php

namespace App\Controllers;

use Core\App;

class ArticleController
{
    public function index()
    {
        $articles = App::get('DATABASE')->selectAll('articles');
        return view('articles/index' , compact('articles'));
    }
    public function create()
    {
        return require "App/Views/articles/create.view.php";
    }
    public function store()
    {

        App::get('DATABASE')->insert('articles' , [
            'title' => $_POST['title'],
            'descreption' => $_POST['descreption']
        ]);
        header("Location: /");

    }
    public function show()
    {
        $article = App::get('DATABASE')->selectRow('articles' ,'id=?', [$_GET['id']]);
        return view('articles/show' , compact('article'));
    }

    public function edit()
    {
        $article = App::get('DATABASE')->selectRow('articles' , 'id=?' , [$_GET['id']]);
        return view('articles/update' , compact('article'));
    }
    public function update()
    {
        App::get("DATABASE")->update('articles','title=? , descreption=?' , 'id=?' , [
            $_POST['title'],
            $_POST['descreption'],
            $_POST['id']
        ]);
        header("Location: /");
    }
    public function delete()
    {
        App::get('DATABASE')->delete('articles','id=?' , [$_GET['id']]);
        header("Location: /");
    }
}