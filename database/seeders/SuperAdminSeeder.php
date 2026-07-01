<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'hamzawemughales@gmail.com'],
            [
                'name' => 'Hamza',
                'password' => Hash::make('hamzawemughales@gmail.com123'),
            ],
        );
    }
}
