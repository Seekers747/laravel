<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        // Voeg rollen toe
        DB::table('roles')->insert([
            ['name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'editor', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'user', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Voeg gebruikers toe (voorbeeld, pas aan naar jouw model/users)
        DB::table('users')->insert([
            [
                'name' => 'Imraan',
                'email' => 'imraan@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anna',
                'email' => 'anna@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Koppel gebruikers aan rollen (user_id en role_id)
        DB::table('role_user')->insert([
            ['user_id' => 1, 'role_id' => 1, 'created_at' => now(), 'updated_at' => now()], // Imraan = admin
            ['user_id' => 2, 'role_id' => 3, 'created_at' => now(), 'updated_at' => now()], // Anna = user
            ['user_id' => 2, 'role_id' => 2, 'created_at' => now(), 'updated_at' => now()], // Anna = editor
        ]);
    }
}
