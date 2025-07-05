<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admins::updateOrcreate(
            ['name' => 'admin'],
            ['email' => 'admin@admin.com', 'password' => bcrypt('1234567')],
        );
    }
}
