<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Member;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()
            ->create([
                'name'=>'Jared Onjiri',
                'email'=>Str::random().'@gmail.com',
                'password'=>Hash::make('admin1234'),
                'phone'=>fake()->numerify('07########'),
                'birthday'=>'1996-04-25',
                'gender'=>'Male'
            ]);

        Member::factory()->create([
            'fee'=>300,
            'trcode'=>'QRST246',
            'user_id'=>1
        ]);

        Payment::factory()->create([
            'trcode'=>fake()->numerify('QRST###'),
            'phone'=>fake()->numerify('07########'),
        ]);
        Payment::factory()->create([
            'trcode'=>fake()->numerify('VSTD###'),
            'phone'=>fake()->numerify('07########'),
        ]);
        Payment::factory()->create([
            'trcode'=>fake()->numerify('RSVG###'),
            'phone'=>fake()->numerify('07########'),
        ]);
        Payment::factory()->create([
            'trcode'=>fake()->numerify('UYRQ###'),
            'phone'=>fake()->numerify('07########'),
        ]);
        Payment::factory()->create([
            'trcode'=>fake()->numerify('UYRK###'),
            'phone'=>fake()->numerify('07########'),
        ]);
        Payment::factory()->create([
            'trcode'=>fake()->numerify('QRUT###'),
            'phone'=>fake()->numerify('07########'),
        ]);
        Payment::factory()->create([
            'trcode'=>fake()->numerify('RSTD###'),
            'phone'=>fake()->numerify('07########'),
        ]);
        Payment::factory()->create([
            'trcode'=>fake()->numerify('RSTG###'),
            'phone'=>fake()->numerify('07########'),
        ]);
        Payment::factory()->create([
            'trcode'=>fake()->numerify('UNRP###'),
            'phone'=>fake()->numerify('07########'),
        ]);
        Payment::factory()->create([
            'trcode'=>fake()->numerify('UYRO###'),
            'phone'=>fake()->numerify('07########'),
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
