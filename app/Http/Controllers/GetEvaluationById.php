<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class GetEvaluationById extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return response(Evaluation::where('product',$request->id)->get(), Response::HTTP_OK);
    }
}
