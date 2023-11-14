<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'firstName'       => 'Admin',
            'lastName'        => 'Super Admin',
            'email'           => 'admin@gmail.com',
            'password'        => bcrypt('123456')
        ]);
        $admin->assignRole('admin');

        $manager = User::create([
            'firstName'       => 'Manager',
            'lastName'        => 'curl-ware',
            'email'           => 'manager@gmail.com',
            'password'        => bcrypt('123456')
        ]);
        $manager->assignRole('manager');

        $employee = User::create([
            'firstName'       => 'Arafat',
            'lastName'        => 'Ali',
            'email'           => 'arafat@gmail.com',
            'password'        => bcrypt('123456')
        ]);
        $employee->assignRole('employee');

    }
}
