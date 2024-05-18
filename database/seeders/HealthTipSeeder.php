<?php

namespace Database\Seeders;

use App\Models\HealthTip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HealthTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $healthTips = [     //variable
           [
               "image_src"=>"/Images/health_tips_01.webp",
               "created_at" => now(),
               "updated_at" => now()
           ],
           [
               "image_src"=>"/Images/health_tips_02.webp",
               "created_at" => now(),
               "updated_at" => now()
           ],
           [
               "image_src"=>"/Images/health_tips_03.jpg",
               "created_at" => now(),
               "updated_at" => now()
           ]

       ];
       //models name::insert(variable name)
       HealthTip::insert($healthTips);
    }
}
