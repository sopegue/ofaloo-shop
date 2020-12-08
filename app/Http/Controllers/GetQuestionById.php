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
        $ques = Question::find($request->id);
        $ans = Answer::where('question',$request->id)->first();
        $ques["ans"]= $ans;
        return  response($ques, Response::HTTP_OK);
    }
}
