<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"Veysel",
            'surname'=>"Duran",
            'email'=>"vdrn76@gmail.com",
            'phone_number'=>"05388735527",
            'password'=>"12345"
        ]
    );
    User::create(['name'=>"Ali",
    'surname'=>"Şahin",
    'email'=>"alisahin12.05@gmail.com",
    'phone_number'=>"05054667584",
    'password'=>"12346"]);
    }
}
