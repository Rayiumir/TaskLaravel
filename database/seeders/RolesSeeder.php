<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['title' => 'isAdmin', 'value' => 'مدیر کل', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'isUser', 'value' => 'کاربر عادی', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
