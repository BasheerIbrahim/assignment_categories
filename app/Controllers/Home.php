<?php

namespace App\Controllers;

class Home extends BaseController
{


    public function index()
    {
        return view('Category/categories_view');
    }

    public function categories()
    {
        return view('Category/categories_tree');
    }
}
