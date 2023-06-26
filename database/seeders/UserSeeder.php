<?php

namespace Database\Seeders;

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
        $data = [
            [
                "name" => "Temo Kasaburi",
                "email" => "kasaburi.t@gmail.com",
                "password" => Hash::make('admin')
            ],
            [
                "name" => "Admin Admin",
                "email" => "admin@admin.com",
                "password" => Hash::make('admin')
            ],
        ];

        foreach ($data as $userData) {
            User::create($userData);
        }
    }
}
