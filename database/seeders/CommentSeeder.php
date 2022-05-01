<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        $comments=[
           ['body'=>'some comment here from a simple user','user_id'=>1,'post_id'=>1],
           ['body'=>'some comment here from a simple user','user_id'=>1,'post_id'=>2],
           ['body'=>'some comment here from a simple user','user_id'=>1,'post_id'=>3],
        ];

        foreach($comments as $comment){
            Comment::create($comment);
        }
    }
}
