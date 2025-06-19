<?php

namespace Database\Seeders;

use App\Models\login;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        User::create([
            'name' => 'Akasas',
            'email' => 'dummy@gmail.com',
            'password' => Hash::make('password123')
        ]);
    }
}
