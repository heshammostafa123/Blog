<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        $posts=[
            ['title'=>'a simple title','slug'=>Str::slug('a simple title'),'body'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic ",'image'=>'p1.jpg','user_id'=>1,'category_id'=>1],
            ['title'=>'introduction to js','slug'=>Str::slug('introduction to js'),'body'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic ",'image'=>'p2.jpg','user_id'=>1,'category_id'=>2],
            ['title'=>'laravel for beginners','slug'=>Str::slug('laravel for beginners'),'body'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic ",'image'=>'p3.jpg','user_id'=>1,'category_id'=>3]
        ];

        foreach($posts as $post){
            Post::create($post);
        }
    }
}
