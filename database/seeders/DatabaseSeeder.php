<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
    }
}
