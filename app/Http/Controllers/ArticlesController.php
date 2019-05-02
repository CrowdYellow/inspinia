<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('articles.index');
    }

    public function create()
    {
        return redirect()->route('articles.index')->with('success', '1111111');
//        return view('articles.create_and_edit');
    }

    public function show()
    {
        return redirect()->route('articles.index')->with('error', '1111111');
//        return view('articles.show');
    }
}
