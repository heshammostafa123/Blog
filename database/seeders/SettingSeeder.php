<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $settings=[
           ['site_name'=>'web site','contact_email'=>'hesham@gmail.com','address'=>'address example here']
        ];

        foreach($settings as $setting){
            Setting::create($setting);
        }
    }
}
