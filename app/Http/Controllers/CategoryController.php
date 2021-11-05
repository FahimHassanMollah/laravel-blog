<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public  function  index(){
        $data =[];
        $data['categories'] = Category::paginate(15);
        return view('categories.index',$data);
    }
    public  function  create(Request $request){

    }
    public  function  store(Request $request){

    }

}
