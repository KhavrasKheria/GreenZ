<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create(attributes: [
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt(value: '123456'),
            'phone_number' => '099999999',
            'status' => 'active',
            'avatar' => '.',
            'address' => 'Da Nang, Vietnam',
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create(attributes: [
            'name' => 'Staff User',
            'email' => 'Staff@example.com',
            'password' => bcrypt(value: '123456'),
            'phone_number' => '088888888',
            'status' => 'active',
            'avatar' => '.',
            'address' => 'Gia Lai, Vietnam',
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),  
        ]);
    }
}
