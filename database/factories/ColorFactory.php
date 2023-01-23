<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Color>
 */
class ColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    //  $table->string('code');
    //         $table->string('title');
    //         $table->string('image1');
    //         $table->string('image2');
    //         $table->string('image3');
    //         $table->string('image4');
    //         $table->string('video');
    public function definition()
    {
        return [
            'code' => '#CBB49E',
            'title' => 'Какао',
            'image1' => 'images/kakao/2.png',
            'image2' => 'images/kakao/3.png',
            'image3' => 'images/kakao/4.png',
            'image4' => 'images/kakao/5.png',
            'video' => 'images/kakao/1.png',
            'type' => false,
        ];
    }
}
