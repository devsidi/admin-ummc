<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'dev.md.sidi@gmail.com',
                'is_admin' => '1',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'User',
                'email' => 'md.sidi93@gmail.com',
                'is_admin' => '0',
                'password' => Hash::make('12345678'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}