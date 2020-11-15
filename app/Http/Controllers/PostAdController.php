<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostAdController extends Controller
{
    public function create()
    {
        return view('front.post.create');
    }
}
