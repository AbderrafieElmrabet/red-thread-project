<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create a user and store the reference
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        $student = User::factory()->create([
            'name' => 'Student User',
            'email' => 'student@example.com',
        ]);

        // Call the display board seeder and pass the user IDs
        $this->call([
            DisplayBoardSeeder::class,
        ]);
    }
}
