<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => 'images/hero/1.1.png',
            'title' => 'test' . fake()->numberBetween(0, 3),
            'description' => '<h1>test</h1>

            <p>testtest</p>',
            'description1' => '<h1>test</h1>

            <p>testtest</p>',
            'description2' => '<h1>test</h1>

            <p>testtest</p>
            <p>testtest</p>
            <p>testtest</p>
            <p>testtest</p>'
        ];
    }
}
