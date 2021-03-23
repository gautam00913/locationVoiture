<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        return Category::create([
            'name' =>$request->name,
            'image' =>$request->image
        ]);
    }
    public function show()
    {
        return Category::all();
    }
    public function showById($id)
    {
        return Category::whereId($id)->get();
    }
    public function listCategories()
    {
        $categories=$this->show();
        return view('home')->withCategories($categories);
    }

}
