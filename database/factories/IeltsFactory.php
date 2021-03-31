<?php

namespace Database\Factories;

use App\Models\Ielts;
use Illuminate\Database\Eloquent\Factories\Factory;

class IeltsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ielts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alias' => $this->faker->word,
        'title' => $this->faker->word,
        'language_id' => $this->faker->word,
        'img' => $this->faker->word,
        'description' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
