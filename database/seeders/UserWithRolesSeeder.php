<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Date;

class UserWithRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => 'admin',
                'last_name' => 'admin',
                'email' => 'admin@peakhotels.com',
                'email_verified_at' => now(),
                'gender' => 'male',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => \Str::random(10),
                'date_of_birth' => Date::today(),
                'contact_no' => '1234567890',
                'user_type' => 1,
                'address' => 'test address',
            ],
            [
                'id' => 2,
                'first_name' => 'agent',
                'last_name' => 'agent',
                'email' => 'agent@peakhotels.com',
                'email_verified_at' => now(),
                'gender' => 'male',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => \Str::random(10),
                'date_of_birth' => Date::today(),
                'contact_no' => '1234567891',
                'user_type' => 1,
                'address' => 'test address',
            ],
        ]);

        DB::table('role_user')->insert([[
            'role_id' => 1,
            'user_id' => 1,
            'user_type' => 'App\\Models\\User',
        ], [
            'role_id' => 2,
            'user_id' => 2,
            'user_type' => 'App\\Models\\User',
        ]]);
    }
}
