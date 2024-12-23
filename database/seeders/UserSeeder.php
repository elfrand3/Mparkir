<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'        => 'frand el',
            'email'       => 'oke@gmail.com',
            'password'    => Hash::make('inipassword'),
        ]);
    }
}
