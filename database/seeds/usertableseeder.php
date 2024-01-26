<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;


class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('users')->truncate();

        $data = [
           
            'email' =>'admin@admin.com',
            'password' => bcrypt('123456'),
            'name' =>'Admin',
            'role' =>'admin',
        ];

        DB::table('users')->insert($data);
        factory(\App\User::class, 100)->create();
    }
    
}
