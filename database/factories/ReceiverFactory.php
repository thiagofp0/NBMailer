<?php

namespace Database\Factories;

use App\Models\Receiver;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receiver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'tag' => $this->faker->word(),
            'lastSubmissionTo' => $this->faker->date()
        ];
    }
}
