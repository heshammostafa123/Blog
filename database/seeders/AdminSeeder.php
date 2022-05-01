<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'mohamed mostafa',
            'email'=>'mohamed@gmail.com',
            'password'=>bcrypt('123123123'),
            'profile_img'=>'profile_img1.jpg',
            'is_admin'=>true
        ]);
    }
}
