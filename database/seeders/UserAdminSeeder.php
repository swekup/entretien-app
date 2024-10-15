<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@admin.fr')->exists()) {
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@admin.fr',
                'password' => Hash::make('admin'),
                'admin' => true,
            ]);
        }

        if (!User::where('email', 'user@user.fr')->exists()) {
            User::create([
                'name' => 'Admin User',
                'email' => 'user@user.fr',
                'password' => Hash::make('user'),
                'admin' => false,
            ]);
        }

    }
}
