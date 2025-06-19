<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed the User model (you can specify any number here)
        User::factory(10)->create(); // Example to create 10 users

        // Alternatively, you can specify custom data with a factory
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Call the LoginSeeder
        $this->call([
            loginsSeeder::class,
        ]);
    }
}
