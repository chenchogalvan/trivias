<?php

namespace Database\Seeders;

use App\Models\Trivia;
use Illuminate\Database\Seeder;

class TriviaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trivias = [
            [
                'name' => 'Trivia Personal',
                'slug' => 'trivia-personal'
            ],
            [
                'name' => 'Trivia Conocimiento DIAPSA',
                'slug' => 'trivia-conocimiento-diapsa'
            ]
        ];
        foreach ($trivias as $key => $trivia) {
            Trivia::create([
                'name' => $trivia["name"],
                'slug' => $trivia["slug"]
            ]);
        }
    }
}
