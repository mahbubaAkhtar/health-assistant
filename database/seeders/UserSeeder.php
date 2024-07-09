<?php

namespace Database\Seeders;

use App\Models\HealthTip;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [     //variable
           [
               "name" => "Mst.Mahbuba Akhtar",
               "email" => "jedni1907@gmail.com",
               "password" => bcrypt('secret'), //secret,
               "gender" => "Female",
               "dob" => "2001-09-19",
               "critical_health_issue" => "ALLERGIC RHINITIS",
               "created_at" => now(),
               "updated_at" => now()
           ]

       ];
       //models name::insert(variable name)
       User::insert($users);
    }
}
