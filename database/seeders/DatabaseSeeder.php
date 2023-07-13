<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'is_admin' => '1',
            'notelp' => '08236646156',
            'alamat' => 'sidoarjo',
            'email_verified_at' => null,
            'password' => Hash::make('12345678')
        ]);
            
    }
}
