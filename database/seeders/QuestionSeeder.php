<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'trivia_id' => 2,
                'question' => 'En qué año se fundó DIAPSA'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Lugar de origen de los fundadores de DIAPSA'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Que edad tenía el Ing. Mancha al momento de fundar DIAPSA'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Aliado y asesor de Diapsa por más de una década'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Cantidad de lugares donde DIAPSA ha teñido oficina'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Empresa cliente más antigua de diapsa'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Cual fue el primer Eslogan de DIAPSA'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Color favorito de DIAPSA'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Disciplina inicial de DIAPSA en servicios'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Primer trabajador (hombre) contratado de DIAPSA'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Primer persona contratada para proyecto pemex (2012)'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Vehículo inicial adquirido por DIAPSA'
            ],
            [
                'trivia_id' => 2,
                'question' => 'Primera cámara termografica propiedad de DIAPSA'
            ],

            [
                'trivia_id' => 1,
                'question' => 'Persona más joven de DIAPSA',
            ],
            [
                'trivia_id' => 1,
                'question' => 'Personal de campo con Mayor edad',
            ],
            [
                'trivia_id' => 1,
                'question' => 'Personal con más reingresos en DIAPSA',
            ],
            [
                'trivia_id' => 1,
                'question' => 'Cuál de los sig especialistas creó la frase “un detallito”',
            ],
            [
                'trivia_id' => 1,
                'question' => 'Quien manda más sticker en el grupo DIAPSA2021',
            ],
            [
                'trivia_id' => 1,
                'question' => 'Quien recibe más Paqueteria',
            ],
            [
                'trivia_id' => 1,
                'question' => 'Que especialista compra más comida rápida',
            ],
            [
                'trivia_id' => 1,
                'question' => 'Ultima persona contratada',
            ],
            [
                'trivia_id' => 1,
                'question' => 'Que es lo que más hace enojar al ing Mancha',
            ],
            [
                'trivia_id' => 1,
                'question' => 'Cuantos vehículos de trabajo hay en DIAPSA',
            ],
        ];

        foreach ($questions as $key => $question) {
            Question::create([
                'trivia_id' => $question["trivia_id"],
                'question' => $question["question"]
            ]);
        }
    }
}
