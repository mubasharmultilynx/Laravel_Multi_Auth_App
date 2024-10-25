<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@devbunch.com',
            'password' => Hash::make('12345678'),
        ]);

        $teacher = User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@devbunch.com',
            'password' => Hash::make('12345678'),
        ]);

        $student = User::create([
            'name' => 'Student User',
                'email' => 'student@devbunch.com',
            'password' => Hash::make('12345678'),
        ]);

        // Assign roles if using Spatie package
        $admin->assignRole('Admin');
        $teacher->assignRole('Teacher');
        $student->assignRole('Student');
    }
}
