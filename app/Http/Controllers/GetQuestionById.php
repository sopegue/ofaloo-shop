<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class GetQuestionById extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $ques = Question::where('product',$request->id)->get();
        if($ques) {
            foreach ($ques as $question) {
                $ans = Answer::where('question',$question->id)->first();
                $question["ans"]= $ans;
            }
        }
        return  response($ques, Response::HTTP_OK);
    }
}
