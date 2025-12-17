<?php

namespace Database\Seeders;

use App\Models\Homeowner;
use Illuminate\Database\Seeder;

class HomeownerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Homeowner::create([
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'middle_name' => 'Santos',
            'email' => 'homeowner@gmail.com',
            'phone' => '09171234567',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'avatar' => null,
            'bio' => 'Test homeowner account',
            'address' => '123 Sample Street',
            'city' => 'Auckland',
            'region' => 'Auckland',
            'postal_code' => '1010',
            'latitude' => -36.8485,
            'longitude' => 174.7633,
            'status' => 'active',
        ]);
    }
}
