<?php

namespace Database\Seeders;

use App\Models\HealthTip;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [     //variable
           [
               "name" => "Admin Mahbuba",
               "email" => "admin@health.com",
               "password" => '$2y$10$RQbBhbgmd4khO3EwXX3uiuD9c4mDR2PIG1YSK2217iwOlWNqaTrgy', //secret,
               "gender" => "Female",
               "dob" => "2001-09-19",
               "is_admin" => 1,
               "created_at" => now(),
               "updated_at" => now()
           ]

       ];
       //models name::insert(variable name)
       User::insert($admins);
    }
}
