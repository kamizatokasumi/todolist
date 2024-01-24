<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Todo;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Todo::class;
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'url' => $this->faker->url(),
            'description' => $this->faker->realText(),
        ];
    }
}
