<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 

class CreateFavorite extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $fav = new Favorite();
        $fav->user = $request->user;
        $fav->product = $request->product;

        $fav->image = $request->image;
        $fav->title = $request->title;
        $fav->price = $request->price;
        $fav->price_saleoff = $request->price_saleoff;
        $fav->link = $request->link;
        $fav ->save();
        return  response($fav, Response::HTTP_OK);
    }
}
