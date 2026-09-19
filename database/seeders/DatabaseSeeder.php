<?php

namespace Database\Seeders;

use App\Models\User;
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
        // Gunakan updateOrCreate agar tidak terduplikasi saat seeder dijalankan ulang
        User::updateOrCreate(
            ['email' => 'admin@undanganmetatah.com'],
            [
                'name' => 'Admin Metatah',
                'password' => Hash::make('admin123'),
            ]
        );

        $this->call([AdminUserSeeder::class]);
    }
}