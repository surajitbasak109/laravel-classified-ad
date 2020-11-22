<?php
  
  namespace App\Http\Controllers;
  
  use App\Adpost;
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
    
    public function store(Request $request)
    {
      // validate request
      
      $request->validate([
        'title' => 'required|string|between:10,255',
        'category' => 'required|integer',
        'ad_type' => 'required|string',
        'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'description' => 'required|string|between:100,3000',
        'ad_image' => 'required|string',
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'address' => 'required|string',
        'country' => 'required|integer',
        'state' => 'required|integer',
        'city' => 'required|integer',
      ]);
      
      // store into database
      $adpost = new Adpost();
      $adpost->title = $request->title;
      $adpost->category_id = $request->category;
      $adpost->ad_type = $request->ad_type;
      $adpost->price = $request->price;
      $adpost->description = $request->description;
      $adpost->ad_image = $request->ad_image;
      $adpost->name = $request->name;
      $adpost->email = $request->email;
      $adpost->phone = $request->phone;
      $adpost->address = $request->address;
      $adpost->country_id = $request->country;
      $adpost->state_id = $request->state;
      $adpost->city_id = $request->city;
      $adpost->user_id = 1;
      $adpost->active = false;
      
      $adpost->save();
      
      // create a flash message
      session()->flash('success', 'Your ad has been saved. Please wait for approval');
      
      // redirect to home page
      return redirect()->route('post-ad');
    }
  }
