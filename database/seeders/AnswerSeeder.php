<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $answers = [
            [
                'question' => 1,
                'answer' => '2003',
                'is_correct' => true
            ],
            [
                'question' => 1,
                'answer' => '2006',
                'is_correct' => false
            ],
            [
                'question' => 1,
                'answer' => '1997',
                'is_correct' => false
            ],
            [
                'question' => 2,
                'answer' => 'saltillo, coahuila',
                'is_correct' => false
            ],
            [
                'question' => 2,
                'answer' => 'nueva rosita, coahuila',
                'is_correct' => true
            ],
            [
                'question' => 2,
                'answer' => 'sabinas, coahuila',
                'is_correct' => false
            ],
            [
                'question' => 3,
                'answer' => '32',
                'is_correct' => false
            ],
            [
                'question' => 3,
                'answer' => '30',
                'is_correct' => true
            ],
            [
                'question' => 3,
                'answer' => '31',
                'is_correct' => false
            ],

            [
                'question' => 4,
                'answer' => 'Ing. Maldonado',
                'is_correct' => true
            ],
            [
                'question' => 4,
                'answer' => 'Ing. Niño',
                'is_correct' => false
            ],
            [
                'question' => 4,
                'answer' => 'Ing. Carles',
                'is_correct' => false
            ],
            [
                'question' => 5,
                'answer' => '3',
                'is_correct' => false
            ],
            [
                'question' => 5,
                'answer' => '4',
                'is_correct' => true
            ],
            [
                'question' => 5,
                'answer' => '5',
                'is_correct' => false
            ],
            [
                'question' => 6,
                'answer' => 'Comego',
                'is_correct' => false
            ],
            [
                'question' => 6,
                'answer' => 'Dephi o Aptiv',
                'is_correct' => true
            ],
            [
                'question' => 6,
                'answer' => 'Holcim',
                'is_correct' => false
            ],
            [
                'question' => 7,
                'answer' => 'Elevamos la confiabilidad operativa de la empresa',
                'is_correct' => false
            ],
            [
                'question' => 7,
                'answer' => 'Diagnosticando el estado de la maquinaria',
                'is_correct' => true
            ],
            [
                'question' => 7,
                'answer' => 'Somos innovación',
                'is_correct' => false
            ],
            [
                'question' => 8,
                'answer' => 'Negro',
                'is_correct' => false
            ],
            [
                'question' => 8,
                'answer' => 'Azul',
                'is_correct' => true
            ],
            [
                'question' => 8,
                'answer' => 'Blanco',
                'is_correct' => false
            ],
            [
                'question' => 9,
                'answer' => 'Termografía',
                'is_correct' => true
            ],
            [
                'question' => 9,
                'answer' => 'Vibraciones mecánicas',
                'is_correct' => false
            ],
            [
                'question' => 9,
                'answer' => 'Ultrasonido',
                'is_correct' => false
            ],
            [
                'question' => 10,
                'answer' => 'Israel Castillo',
                'is_correct' => false
            ],
            [
                'question' => 10,
                'answer' => 'Homero Tello',
                'is_correct' => true
            ],
            [
                'question' => 10,
                'answer' => 'Carlos Briones',
                'is_correct' => false
            ],
            [
                'question' => 11,
                'answer' => 'Edgar Enrique ajíleme Ramón',
                'is_correct' => false
            ],
            [
                'question' => 11,
                'answer' => 'Ricardo Fco. Lazaro Rodríguez',
                'is_correct' => false
            ],
            [
                'question' => 11,
                'answer' => 'Hiram Daniel Barrera de la Rosa *',
                'is_correct' => true
            ],
            [
                'question' => 12,
                'answer' => 'Paloma (cheyene 91)',
                'is_correct' => false
            ],
            [
                'question' => 12,
                'answer' => 'Hiramchona (F-150)',
                'is_correct' => true
            ],
            [
                'question' => 12,
                'answer' => 'Lobo 2009',
                'is_correct' => false
            ],
            [
                'question' => 13,
                'answer' => 'PM595',
                'is_correct' => true
            ],
            [
                'question' => 13,
                'answer' => 'P60',
                'is_correct' => false
            ],
            [
                'question' => 13,
                'answer' => 'Fluke',
                'is_correct' => false
            ],
            [
                'question' => 14,
                'answer' => 'Britany',
                'is_correct' => true
            ],
            [
                'question' => 14,
                'answer' => 'Citlali',
                'is_correct' => false
            ],
            [
                'question' => 14,
                'answer' => 'Angel',
                'is_correct' => false
            ],
            [
                'question' => 15,
                'answer' => 'Ricardo Lazaro',
                'is_correct' => false
            ],
            [
                'question' => 15,
                'answer' => 'Hiram Barrera',
                'is_correct' => false
            ],
            [
                'question' => 15,
                'answer' => 'Carlos Briones',
                'is_correct' => true
            ],
            [
                'question' => 16,
                'answer' => 'Edgar Enrique',
                'is_correct' => true
            ],
            [
                'question' => 16,
                'answer' => 'Citlali',
                'is_correct' => false
            ],
            [
                'question' => 16,
                'answer' => 'Carlos Briones',
                'is_correct' => false
            ],
            [
                'question' => 17,
                'answer' => 'Ricardo Lazaro',
                'is_correct' => false
            ],
            [
                'question' => 17,
                'answer' => 'Edgar Enrique',
                'is_correct' => false
            ],
            [
                'question' => 17,
                'answer' => 'Hiram Daniel',
                'is_correct' => true
            ],
            [
                'question' => 18,
                'answer' => 'Axel',
                'is_correct' => false
            ],
            [
                'question' => 18,
                'answer' => 'Hugo Fabela',
                'is_correct' => true
            ],
            [
                'question' => 18,
                'answer' => 'Edgar',
                'is_correct' => false
            ],
            [
                'question' => 19,
                'answer' => 'Ricardo',
                'is_correct' => false
            ],
            [
                'question' => 19,
                'answer' => 'Yadid',
                'is_correct' => false
            ],
            [
                'question' => 19,
                'answer' => 'Yazmin',
                'is_correct' => true
            ],
            [
                'question' => 20,
                'answer' => 'Hiram',
                'is_correct' => true
            ],
            [
                'question' => 20,
                'answer' => 'Angel',
                'is_correct' => false
            ],
            [
                'question' => 20,
                'answer' => 'Jorge Ibarra',
                'is_correct' => false
            ],
            [
                'question' => 21,
                'answer' => 'Heder',
                'is_correct' => false
            ],
            [
                'question' => 21,
                'answer' => 'Citlali',
                'is_correct' => true
            ],
            [
                'question' => 21,
                'answer' => 'Britany',
                'is_correct' => false
            ],
            [
                'question' => 22,
                'answer' => 'los "detallitos"',
                'is_correct' => false
            ],
            [
                'question' => 22,
                'answer' => 'No entregar a tiempo los reportes',
                'is_correct' => true
            ],
            [
                'question' => 22,
                'answer' => 'No contestar el chat',
                'is_correct' => false
            ],
            [
                'question' => 23,
                'answer' => '3',
                'is_correct' => true
            ],
            [
                'question' => 23,
                'answer' => '4',
                'is_correct' => false
            ],
            [
                'question' => 23,
                'answer' => '5',
                'is_correct' => false
            ],

        ];

        foreach ($answers as $key => $answer) {
            Answer::create([
                'question_id' => $answer["question"],
                'answer' => $answer["answer"],
                'is_correct' => $answer["is_correct"]
            ]);
        }
    }
}
