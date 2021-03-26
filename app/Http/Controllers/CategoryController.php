<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Car;


class CategoryController extends Controller
{
   
    //show all categories at index page
    public function listCategories()
    {
        $categories=Category::all();
        return view('home')->withCategories($categories);
    }

}
