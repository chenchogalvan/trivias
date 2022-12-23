<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Respuesta;
use App\Models\Trivia;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function trivia(Trivia $trivia)
    {
        $questions = Question::with('answers')->where('trivia_id', $trivia->id)->get();

        $questionsList = [];

        $questionsList["name"] = '';
        foreach ($questions as $question) {
            $questionsList['question_'.$question->id] = '';
        }

        return view('trivia', compact('trivia', 'questions', 'questionsList'));
    }

    public function storeTrivia(Request $request)
    {

        Respuesta::create([
            'name' => $request->get('name'),
            'trivia_id' => $request->get('trivia_id'),
            'data' => json_encode($request->except(['_token', 'name', 'trivia_id']))
        ]);

        return redirect()->back()->with('success', 'Felicidades '.$request->get('name').'! Terminaste de responder la trivia! ');
    }


    public function tablas(Trivia $trivia)
    {
        // $respuestas = Respuesta::where('trivia_id', 1)->get();

        // foreach ($respuestas as $respuesta) {
        //     foreach ($respuesta->data as $key => $data) {

        //         $question = Question::where('id', str_replace("question_", '', $key))->first();
        //         $answer = Answer::where('question_id', str_replace("question_", '', $key))->where('is_correct', 1)->first();
        //         echo $data == $answer->answer ? $data .' es correcto <br>' : $data. ' Esta equivocada <br>';
        //         // echo $question->question.' - '.str_replace("question_", '', $key).' - '.$data.'<br>';
        //     }
        // }


        return view('tabla', compact('trivia'));
    }
}
