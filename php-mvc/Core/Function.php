<?php
use Core\App;
use Core\Databases\Connection;
use Core\Databases\QueryBuilder;


App::bind('config' ,require 'config.php' );

App::bind('DATABASE', new QueryBuilder(
    Connection::Make(App::get('config')['database'])
));

function view($file , $data){
    extract($data);
    return require "App/Views/$file.view.php";
}