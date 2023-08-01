<?php
/*
use Core\Database\Connection;
use Core\Database\QueryBuilder ;
use Core\App ;


$app['config'] =require 'config.php';


$app["database"]= new QueryBuilder(
Connection::make($app['config']['database']));

/*$app['database'] ->insert(
    'articles' ,
    [
        'name' =>'article1' ,
        'body' => 'body1'
    ]

) ; */

//var_dump($app['database'] ->selectall('articles')) ;
//var_dump($app['database'] ->select('articles' , 1)) ;

/*$app['database'] ->update('articles' , 'name =?'
, 'id = ?' , ["article33" , '2']) ;

$app['database'] ->delete('articles' , '2') ;
 ;

function view($file, $data){

    extract($data);

    return require"app/views/$file.view.php";
};

*/