<?php

namespace Database\Factories;

use App\Models\Debt;
use Illuminate\Database\Eloquent\Factories\Factory;

class DebtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Debt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'debt_collection_id' => $this->faker->biasedNumberBetween(1, 3),

            'name' => $this->faker->company,
            'description' => null,
            
            'debt_type' => $this->faker->biasedNumberBetween(1, 5, function($x) { return 1 - sqrt($x); }),
            
            'opening_balance' => $this->faker->randomFloat(2, 250, 2500),
            'interest_rate' => $this->faker->randomFloat(2, 0, 40),
            'monthly_charge' => $this->faker->randomFloat(2, 0, 5),

            'minimum_payment_flat' => $this->faker->numberBetween(5, 25),
            'minimum_payment_percentage' => $this->faker->randomFloat(2, 1, 2.5),
            
            'interest_free_months' => 0,
        ];
    }
}