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
        $admin = User::create([
            'name' => "admin",
            'email' => "admin01@gmail.com",
            'password' => Hash::make('password')

        ]);
        $respo_academique = User::create([
            'name' => "respo_academique",
            'email' => "respoacademique01@gmail.com",
            'password' => Hash::make('password')

        ]);
        $admin->roles()->attach([1,2]);
        $respo_academique->roles()->attach([2]);
    }
}
