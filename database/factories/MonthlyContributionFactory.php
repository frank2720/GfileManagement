<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MonthlyContribution>
 */
class MonthlyContributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount'=> $this->faker->numberBetween(1000,20000),
            'trcode'=> $this->faker->unique()->numerify('QRST###'),
            'user_id'=> User::factory()
        ];
    }
}
