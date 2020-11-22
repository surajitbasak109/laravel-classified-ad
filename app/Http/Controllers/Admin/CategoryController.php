<?php
  
  namespace App\Http\Controllers\Admin;
  
  use App\Category;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;
  
  class CategoryController extends Controller
  {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::with('children')->latest()->whereNull('parent_id')->paginate(5);
      return view('admin.category.index', compact('categories'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::whereNull('parent_id')->get();
      return view('admin.category.create', compact('categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $attributes = $request->validate(
        [
          'name' => ['required', 'unique:categories', 'string', 'between:3,255'],
          'parent_id' => ['sometimes', 'nullable', 'numeric'],
          'icon' => ['nullable', 'unique:categories,icon', 'string'],
          'description' => ['nullable', 'between:50,3000']
        ]
      );
      
      $category = new Category();
      $category->name = $attributes['name'];
      $category->parent_id = $attributes['parent_id'];
      $category->icon = $attributes['icon'];
      $category->description = $attributes['description'];
      $category->save();
      
      toastr()->success('Category saved.');
      return redirect()->route('admin.category.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param \App\cr $cr
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
      //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\cr $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
      $categories = Category::whereNull('parent_id')->get();
      return view('admin.category.edit', compact('category', 'categories'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\cr $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
      $attributes = $request->validate(
        [
          'name' => ['required', 'unique:categories,name,' . $category->id, 'string', 'between:3,255'],
          'parent_id' => ['sometimes', 'nullable', 'numeric'],
          'icon' => ['nullable', 'unique:categories,icon', 'string'],
          'description' => ['nullable', 'between:50,3000']
        ]
      );
      
      $category->name = $attributes['name'];
      $category->parent_id = $attributes['parent_id'];
      $category->icon = $attributes['icon'];
      $category->description = $attributes['description'];
      $category->save();
      
      toastr()->success('Category updated.');
      return redirect()->route('admin.category.index');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\cr $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
      $category->delete();
      toastr()->success('Category deleted.');
      return redirect()->route('admin.category.index');
    }
  }
