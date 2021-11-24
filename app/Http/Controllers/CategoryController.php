<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    //
    public  function  index()
    {
        $data = [];
        $data['categories'] = Category::paginate(15);
        return view('categories.index', $data);
    }

    public  function  create(Request $request)
    {
        return view('categories.create');
    }
    public  function  store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:categories,name', 'max:255'],
            'status' => ['required','between:0,1'],
        ]);

        Category::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'status' => $request->input('status')
        ]);
        $request->session()->flash('message', 'Category created successfully');
        return redirect()->back();
    }

    public function show(Request $request,$id)
    {
        $categoryDetails = Category::with('posts','posts.user')->find($id);

        // dd($categoryDetails);

        return view('categories.show',compact('categoryDetails'));
    }
    public function edit(Request $request,$id)
    {
        $categoryDetails = Category::find($id);
        return view('categories.edit',compact('categoryDetails'));
    }
    public function update(Request $request,$id)
    {
        $category = Category::find($id);
        $validatedData = $request->validate([
            'name' => ['required','max:255','unique:categories,name->ignore($id)'],
            'status' => ['required', 'between:0,1'],
        ]);

        $category = Category::find($id);

        $category->update([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'status' => $request->input('status')
        ]);
        $request->session()->flash('message', 'Category updated successfully');
        return redirect()->back();
    }
}
