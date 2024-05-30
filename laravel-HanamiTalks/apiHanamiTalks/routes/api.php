<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GrammarController;
use App\Http\Controllers\GrammarUseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VocabularyController;
//TODO elimina el código innecesario.
use App\Models\Vocabulary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanjiController;

//Auth endpoints
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

//Routes that need authorization
Route::middleware('auth:sanctum')->group(function () {
    //Auth endpoints
    Route::get('logout', [AuthController::class, 'logout']);

    //User endpoints
    Route::post('users/{id}', [UserController::class, 'update']);
    Route::get('users', [UserController::class, 'show']);

    //Endpoints related to kanjis
    //TODO revisa los endpoints de get, fíjate en el ejemplo de clase, tanto si se devuelve un producto como si se devuelven varios, el endpoint era el mismo, sólo variaba que se le pasaba un id o no.
    Route::get('/kanjis/topic/{topicTitle}', [KanjiController::class, 'getByTopicTitle']);
    Route::get('/kanjis/topicTitles', [KanjiController::class, 'getAllTopicTitles']);
    Route::resource('/kanjis', KanjiController::class);

    //Endpoints related to vocabularies
    //TODO revisa los endpoints de get, fíjate en el ejemplo de clase, tanto si se devuelve un producto como si se devuelven varios, el endpoint era el mismo, sólo variaba que se le pasaba un id o no.
    Route::get('/vocabularies/topic/{topicTitle}', [VocabularyController::class, 'getByTopicTitle']);
    Route::get('/vocabularies/topicTitles', [VocabularyController::class, 'getAllTopicTitles']);
    Route::resource('/vocabularies', VocabularyController::class);

    //Endpoints related to grammars
    //TODO revisa los endpoints de get, fíjate en el ejemplo de clase, tanto si se devuelve un producto como si se devuelven varios, el endpoint era el mismo, sólo variaba que se le pasaba un id o no.
    Route::get('/grammars/topic/{topicTitle}', [GrammarController::class, 'getByTopicTitle']);
    Route::get('/grammars/topicTitles', [GrammarController::class, 'getAllTopicTitles']);
    Route::resource('/grammars', GrammarController::class);

    //Endpoints related to grammar uses
    Route::resource('/grammarUses', GrammarUseController::class);
});








