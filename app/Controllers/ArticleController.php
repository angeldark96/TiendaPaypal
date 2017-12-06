<?php
namespace App\Controllers;
use App\Libraries\View ;
use App\Models\Article ;

 class ArticleController
 {
     public function index()
     {
         $articles = Article::all();
        //La funcion compact es lo contrario de extarc
         //lo convierte en un array asociativo

         View::render('/articles/index',compact('articles'));
     }

     public function show()
     {
         //se guarda el parametro en una variable
         //get si no esta definido que sea vacio
         $id = $_GET['id'] ?? '';
         $article = Article::find($id);

         if (!empty($article))
         {
             View::render('/articles/show',compact('article'));
         }
         else
         {
             //si esta vacio me redirecciona al index
             $this->index();
         }
     }
 }

