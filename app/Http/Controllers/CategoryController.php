<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail($id)
    {
        $category = Category::with("items")->findOrFail($id);
        $title = $category->category_name;
        $items = $category->items;
        return view("categories.detail", compact("title", "items"));
    }
}
