<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'fname' => 'admin',
            'lname' => 'clovis',
            'email' => 'admin@example.com',
            'password' => 'Angel2016$',
            'roles' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'paul',
            'lname' => 'clinton',
            'email' => 'paul@example.com',
            'password' => 'Angel2016$',
        ]);
    }
}
