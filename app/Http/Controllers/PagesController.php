<?php

namespace App\Http\Controllers;

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


    public function tablas()
    {
        return view('tabla');
    }
}
