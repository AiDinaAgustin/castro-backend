<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('cari',[
            "title" => "Post Categories",
            "active" => "categories",
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('category',[
            "title" => $category->name,
            "podcasts" => $category->podcasts,
            "category" => $category->name
        ]);
    }
}
