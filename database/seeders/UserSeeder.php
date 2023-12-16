<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Sesuaikan dengan namespace dan lokasi model User Anda

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "ferdiansyah",
            "email" => "ferdiansyahp716@gmail.com",
            "password" => Hash::make('ferdi'),
        ]);
    }
}
