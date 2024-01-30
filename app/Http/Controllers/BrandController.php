<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::where("top5_flag", true)->get();
        return view("brands.index", compact("brands"));
    }

    public function detail($id)
    {
        $brand = Brand::with("items")->where("id", $id)->first();
        return view("brands.detail", compact("brand"));
    }
}
