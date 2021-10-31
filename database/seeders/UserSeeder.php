<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'asad',
            'email' => 'muhamadasaddullah@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 1
        ]);
    }
}
