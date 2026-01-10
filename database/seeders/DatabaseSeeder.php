<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Cource;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        

        Admin::create([
            'name' => 'Admin User',
            'mobile' => '1234567890',
            'email' => env('ADMIN_LOGIN_EMAIL'),
            'password' => Hash::make(env('ADMIN_LOGIN_PASSWORD')),
        ]);
        Admin::create([
            'name' => 'Home User',
            'mobile' => '1111111111',
            'email' => 'a@b.c',
            'password' => 'a@b.c',
        ]);

        Cource::create(
            ['cource_name' => 'xi_science']
        );
        Cource::create(
            ['cource_name' => 'neet_freser']
        );
        Cource::create(
            ['cource_name' => 'neet_repeater']
        );
        Cource::create(
            ['cource_name' => 'test_series']
        );

        Department::create(
            ['department_name' => 'physics']
        );
        Department::create(
            ['department_name' => 'chemistry']
        );
        Department::create(
            ['department_name' => 'mathematics']
        );
        Department::create(
            ['department_name' => 'biology']
        ); 
    }
}
