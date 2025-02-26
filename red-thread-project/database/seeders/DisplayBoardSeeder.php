<?php

namespace Database\Seeders;

use App\Models\DisplayBoard;
use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DisplayBoardSeeder extends Seeder
{
    public function run()
    {
        // Fetch the created users from DatabaseSeeder
        $admin = User::where('email', 'admin@example.com')->first();
        $student = User::where('email', 'student@example.com')->first();

        if (!$admin || !$student) {
            throw new \Exception("Users not found. Make sure DatabaseSeeder creates them first.");
        }

        // Insert test display boards
        DisplayBoard::insert([
            [
                'title' => 'Exam Schedule Update',
                'description' => 'The midterm exams have been rescheduled to next Monday due to unforeseen circumstances.',
                'image' => 'display_boards/exam_update.jpg',
                'user_id' => $admin->id,  // Use valid user ID
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'School Rules Update',
                'description' => 'New dress code regulations have been introduced. Please check the school website for details.',
                'image' => 'display_boards/rules_update.jpg',
                'user_id' => $admin->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Sports Day Announcement',
                'description' => 'The annual Sports Day will be held on March 15th. Get ready for some exciting events!',
                'image' => 'display_boards/sports_day.jpg',
                'user_id' => $student->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}