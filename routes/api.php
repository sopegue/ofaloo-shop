<?php
use App\Http\Controllers\CreateFavorite;
use App\Http\Controllers\CreateEvaluation;
use App\Http\Controllers\CreateQuestion;
use App\Http\Controllers\GetAllFavorites;
use App\Http\Controllers\GetAllEvaluations;
use App\Http\Controllers\GetAllQuestions;
use App\Http\Controllers\GetAnswerById;
use App\Http\Controllers\GetEvaluationById;
use App\Http\Controllers\GetFavoriteById;
use App\Http\Controllers\CountFavoritesByUser;
use App\Http\Controllers\DelFavoriteById;
use App\Http\Controllers\GetQuestionById;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('createfavorite', CreateFavorite::class);
Route::post('getallfavorites', GetAllFavorites::class);
Route::post('getfavoritebyid', GetFavoriteById::class);
Route::post('delfavoritebyid', DelFavoriteById::class);
Route::post('countfavoritebyuser', CountFavoritesByUser::class);

Route::post('createevaluation', CreateEvaluation::class);
Route::get('getallevaluations', GetAllEvaluations::class);
Route::post('getevaluationbyid', GetEvaluationById::class);

Route::post('createquestion', CreateQuestion::class);
Route::get('getallquestions', GetAllQuestions::class);
Route::post('getquestionbyid', GetQuestionById::class);

Route::post('getanswerbyid', GetAnswerById::class);