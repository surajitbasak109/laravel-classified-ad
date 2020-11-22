<?php
  
  namespace App\Http\Controllers;
  
  use App\Category;
  use App\Country;
  use Illuminate\Http\Request;
  
  class FrontController extends Controller
  {
    public function index()
    {
      $categories = Category::latest()->get(['id', 'name', 'icon']);
      $countries = Country::all(['id', 'name']);
      return view('welcome', compact('categories', 'countries'));
    }
  
    public function category(Category $category)
    {
      return $category->adposts()->get();
    }
  }
