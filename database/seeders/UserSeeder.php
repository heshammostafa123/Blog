<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'hesham mostafa',
            'email'=>'heshammostafa847@gmail.com',
            'password'=>bcrypt('123123123'),
            'profile_img'=>'profile_img1.jpg'
        ]);
    }
}
