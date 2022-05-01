<?php

namespace Database\Seeders;

use App\Models\Category;
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
        DB::table('categories')->delete();

        $categories=[
            ['name'=>'html-tutorials','slug'=>'html-tutorials'],
            ['name'=>'css-tutorials','slug'=>'css-tutorials'],
            ['name'=>'javascript-tutorials','slug'=>'javascript-tutorials'],
            ['name'=>'vue-tutorials','slug'=>'vue-tutorials']
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
