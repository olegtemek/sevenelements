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

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sapiente ipsa saepe itaque iure harum velit perspiciatis soluta laborum, in provident at, minima placeat doloremque explicabo aperiam architecto, quo quaerat distinctio esse dolorem delectus repellat consequuntur quos. Dolorem, nostrum culpa?</p>',
            'description1' => '<h1>test</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sapiente ipsa saepe itaque iure harum velit perspiciatis soluta laborum</p>',
            'description2' => '<h1>test</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sapiente ipsa saepe itaque iure harum velit perspiciatis soluta laborum</p>'
        ];
    }
}
