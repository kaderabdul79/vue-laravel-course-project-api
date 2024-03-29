<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory()->create(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence(10),
            'code' => $this->faker->randomDigit(),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'price' => $this->faker->numberBetween(1000,20000),
            'status' => $this->faker->boolean($status = true),
        ];
    }
}
