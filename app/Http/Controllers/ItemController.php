<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $items = Item::with("brand")->get();
        return view("items.index", compact("items"));
    }

    public function detail($id)
    {
        $item = Item::with("brand")->where("id", $id)->first();
        return view("items.detail", compact("item"));
    }
}
