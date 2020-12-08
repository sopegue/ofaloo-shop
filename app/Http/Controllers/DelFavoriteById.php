<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DelFavoriteById extends Controller
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
        Favorite::destroy($fav->id);
        return response(null, Response::HTTP_OK);
    }
}
