<?php

use App\Models\Paragraph;
use App\Models\Series;
use App\Models\Lesson;
use App\Models\WPM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WPMs;

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

Route::get('articles', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Article::all();
});
 
Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

Route::post('articles', function(Request $request) {
    return Article::create($request->all);
});


Route::put('articles/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();

    return 204;
});

Route::get('/series', function () {
    
    $posts = Series::all();
    
    foreach( $posts as $arr ){
    
        $newArr = Paragraph::where("series_id",$arr['id'])->get();
        
        $arr['paragraphs'] = $newArr;
        // echo $arr;
    }
   
    
    return $posts;
});

Route::get('/paragraph/{id}', function ($id) {

    $paragraphs = Paragraph::find($id);

    return $paragraphs;
});


Route::get('/getWPM', function () {
    $post = WPM::all();
    
    return $post;
});

Route::post("add", [WPMs::class,'addRec']);