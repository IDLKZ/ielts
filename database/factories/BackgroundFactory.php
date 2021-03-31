<?php

namespace Database\Factories;

use App\Models\Background;
use Illuminate\Database\Eloquent\Factories\Factory;

class BackgroundFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Background::class;

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
        'subtitle' => $this->faker->word,
        'video_url' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
