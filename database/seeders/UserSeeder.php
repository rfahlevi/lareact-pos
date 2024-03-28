<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'is_superadmin' => true,
            'email' => 'superadmin@example.com',
            'first_name' => 'Reza',
            'last_name' => 'Fahlevi'
        ]);

         User::factory()->create([
            'is_superadmin' => false,
            'email' => 'user@example.com',
        ]);
    }
}
