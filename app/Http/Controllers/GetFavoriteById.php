<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class GetFavoriteById extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $fav = Favorite::where(['user' => $request->user, 'product' =>$request->product])->first();
        return response($fav, Response::HTTP_OK);
    }
}
