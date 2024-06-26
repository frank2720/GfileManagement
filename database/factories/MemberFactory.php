<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fee'=>$this->faker->numberBetween(300,500),
            'trcode'=>$this->faker->unique()->numerify('QRST###'),
            'user_id'=> User::factory()
        ];
    }
}
