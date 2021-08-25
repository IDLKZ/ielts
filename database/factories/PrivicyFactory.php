<?php

namespace Database\Factories;

use App\Models\Privicy;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrivicyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Privicy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'language_id' => $this->faker->word,
        'title' => $this->faker->word,
        'description' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
