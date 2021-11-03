<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'full_name'=> 'Rakib',
            'email' =>'r@gmail.com',
            'password'=>bcrypt('123'),
            'phone_number'=>'0191863690',

        ]);
    }
}
