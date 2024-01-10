<?php

use Illuminate\Database\Seeder;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('systemsettings')->truncate();
        $data=
            [
                'name' =>'Telimed',
                'slogan' =>'Nice Slogan sir',
                'phone' =>1234567890,
                'email' =>'system@system.com',
                'address' =>'Ghantaghar',
                'logo' =>'logo.jpeg'
            ];
        \Illuminate\Support\Facades\DB::table('systemsettings')->insert($data);
    }
}
