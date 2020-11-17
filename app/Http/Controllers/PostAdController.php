<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use Illuminate\Http\Request;

class PostAdController extends Controller
{
    public function create()
    {
        $categories = Category::all(['id', 'name']);
        $countries = Country::all('id', 'name');
        return view('front.post.create', compact('categories', 'countries'));
    }
}
