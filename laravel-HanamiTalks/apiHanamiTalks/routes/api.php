<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GrammarController;
use App\Http\Controllers\GrammarUseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VocabularyController;
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
    Route::get('/kanjis/topic/{topicTitle}', [KanjiController::class, 'getByTopicTitle']);
    Route::get('/kanjis/topicTitles', [KanjiController::class, 'getAllTopicTitles']);
    Route::resource('/kanjis', KanjiController::class);

    //Endpoints related to vocabularies
    Route::get('/vocabularies/topic/{topicTitle}', [VocabularyController::class, 'getByTopicTitle']);
    Route::get('/vocabularies/topicTitles', [VocabularyController::class, 'getAllTopicTitles']);
    Route::resource('/vocabularies', VocabularyController::class);

    //Endpoints related to grammars
    Route::get('/grammars/topic/{topicTitle}', [GrammarController::class, 'getByTopicTitle']);
    Route::get('/grammars/topicTitles', [GrammarController::class, 'getAllTopicTitles']);
    Route::resource('/grammars', GrammarController::class);

    //Endpoints related to grammar uses
    Route::resource('/grammarUses', GrammarUseController::class);
});








