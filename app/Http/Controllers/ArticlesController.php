<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = [1,2,3];
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create_and_edit');
    }

    public function show()
    {
        return view('articles.show');
    }
}
