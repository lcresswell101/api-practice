<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create(['name' => 'admin']);

        \App\Models\Role::create(['name' => 'user']);

        $admin = \App\Models\User::create([
            'name' => 'Luke',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'api_key' => Str::random(60)
        ]);

        $admin->roles()->attach(1);

         \App\Models\User::factory(10)->create();

         \App\Models\User::all()->each(function($user){
                $user->roles()->attach(2);
         });
    }
}
