<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ControllerArticle extends Controller
{
    public function show(){


        return view('lista-articoli' );
    }

    public function create(){
        return view('Aggiungi');
    }

    public function modifica(Article $article){

        return view('modifica', ['article'=>$article] );
        
    }

}