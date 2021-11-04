<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
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
        $faker = Faker::create();
      for ($i=0; $i < 100; $i++) {
        User::create([
            'full_name'=> $faker->name,
            'email' => $faker->email,
            'password'=>bcrypt( $faker->password),
            'phone_number'=>$faker->phoneNumber,

        ]);
      }
    }
}
