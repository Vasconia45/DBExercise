<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mountain;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MountainFactory extends Factory
{
    protected $model = Mountain::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'height' => $this->faker->numberBetween(1000, 9000),
            'belogsToRange' => $this->faker->boolean(),
            'firstClimbDate' => $this->faker->date(),
            'continent' => $this->faker->randomElement(['Afrika','Asia','Europe','America','Oceania']),
        ];
    }
}
