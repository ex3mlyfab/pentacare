<?php

use App\Models\Admin;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
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

        Admin::create([
            'last_name'      =>  $faker->name,
            'other_names'      =>  $faker->name,
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('password'),
        ]);
    }
}
