<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            'username' => 'admin',
            'password' => bcrypt('password'),
            'role' => 'ADMIN',
        ]);
    }
}
