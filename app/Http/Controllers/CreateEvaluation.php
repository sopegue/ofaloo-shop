<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 


class CreateEvaluation extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $eva = new Evaluation();
        $eva->user = $request->user;
        $eva->user_name = $request->user_name;
        $eva->product = $request->product;
        $eva->rate = $request->rate;
        $eva->comment = $request->comment;
        $eva ->save();
        return  response($eva, Response::HTTP_OK);
    }
}
