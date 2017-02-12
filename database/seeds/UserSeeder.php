<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'is_admin' => true,
            'name'     => env('NAME'),
            'email'    => env('EMAIL'),
            'password' => bcrypt(env('PASSWORD'))
        ]);
    }
}
