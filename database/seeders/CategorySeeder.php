<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            ["category_name"=> "Shirt"],
            ["category_name"=> "Bag"],
            ["category_name"=> "Shoes"],
            ["category_name"=> "Dress"],
        ]);
    }
}
