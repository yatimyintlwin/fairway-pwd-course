<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = [
            ["title" => "Title One"],
            ["title" => "Title 222"],
            ["title" => "Title 333"],
        ];

        return view("articles.index", [
            "articles" => $data
        ]);
    }

    public function detail($id)
    {
        return "Article Controller Detail -$id";
    }
}
