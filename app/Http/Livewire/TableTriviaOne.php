<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Respuesta;
use Livewire\Component;

class TableTriviaOne extends Component
{
    public $trivia;
    public function render()
    {
        $respuestas = Respuesta::where('trivia_id', $this->trivia)->get();

        $answerUser = [];

        foreach ($respuestas as $respuesta) {
            foreach ($respuesta->data as $key => $data) {

                $question = Question::where('id', str_replace("question_", '', $key))->first();
                $answer = Answer::where('question_id', str_replace("question_", '', $key))->where('is_correct', 1)->first();
                $answerUser[] = [
                    'name' => $respuesta->name,
                    'question' =>$question->question,
                    'answer' => $data,
                    'is_correct' => $data == $answer->answer ? 'Correcto' : 'Error'
                ];
            }
        }


        return view('livewire.table-trivia-one', [
            'answerUser' => collect($answerUser)
        ]);
    }
}
