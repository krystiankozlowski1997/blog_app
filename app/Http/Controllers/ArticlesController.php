<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //GET ALL ARTICLES
    public function index(){
        return view('articles.index');
    }

    public function store(){

    }

    public function add(){
        return view('articles.add');
    }
}
