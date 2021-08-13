<?php

namespace Database\Factories;

use App\Models\Workday;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkdayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Workday::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'weekday_id' => $this->faker->word,
        'teacher_id' => $this->faker->word,
        'title' => $this->faker->word,
        'date_start' => $this->faker->word,
        'date_end' => $this->faker->word,
        'time_start' => $this->faker->word,
        'time_end' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
