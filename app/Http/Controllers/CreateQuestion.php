<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CreateQuestion extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $ques = new Question();
        $ques->user = $request->user;
        $ques->product = $request->product;
        $ques->user_name = $request->user_name;
        $ques->question = $request->question;
        $ques->save();
        return  response($ques, Response::HTTP_OK);
    }
}
