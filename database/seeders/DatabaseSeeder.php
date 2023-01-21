<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Color;
use App\Models\Intro;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'email' => 'a@a.a',
            'password' => Hash::make('a')
        ]);
        Color::factory(2)->create();
        $images = [
            [
                'image' => 'images/Intro/1.png'
            ],
            [
                'image' => 'images/Intro/2.png'
            ],
            [
                'image' => 'images/Intro/3.png'
            ],
            [
                'image' => 'images/Intro/4.png'
            ]
        ];
        DB::table('intros')->insert($images);


        $heroes = [
            [
                'name' => 'ксения кушербаева',
                'pos' => 'Консультант по розничной торговле',
                'color_id' => '1',
                'image1' => 'images/hero/1.1.png',
                'description' => 'Подчеркивает личные качества в образе.
                Цвет сумки совпадает с цветом глаз',
                'image2' => 'images/hero/1.2.png',
                'image3' => 'images/hero/1.3.png',
                'image4' => 'images/hero/1.4.png',
            ],
            [
                'name' => 'ксения кушербаева',
                'pos' => 'Консультант по розничной торговле',
                'color_id' => '2',
                'description' => 'Подчеркивает личные качества в образе.
                Цвет сумки совпадает с цветом глаз',
                'image1' => 'images/hero/1.1.png',
                'image2' => 'images/hero/1.2.png',
                'image3' => 'images/hero/1.3.png',
                'image4' => 'images/hero/1.4.png',
            ],
        ];
        DB::table('heroes')->insert($heroes);
    }
}
