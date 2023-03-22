<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => \Hash::make('admin'),
            'level' => 'admin'
        ]);
    }
}
