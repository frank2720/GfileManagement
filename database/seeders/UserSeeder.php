<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(5)
            ->hasfee(1)
            ->hasmonthly(5)
            ->create();

        User::factory()
            ->count(6)
            ->hasfee(1)
            ->create();

        User::factory()
            ->count(2)
            ->create();
    }
}
