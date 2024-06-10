<?php

namespace App\Http\Controllers;

use App\Http\Requests\VocabularyRequest;
use App\Http\Resources\VocabularyResource;
use App\Models\Vocabulary;

class VocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vocabularies = Vocabulary::all();
        return VocabularyResource::collection($vocabularies);
    }

    public function getAllTopicTitles()
    {
        $topicTitles = Vocabulary::select('topicTitle', 'level')
                            ->distinct()
                            ->get();

        return response()->json($topicTitles);
    }

    /**
     * Display a listing of vocabulary words that have the given topic title
     */
    public function getByTopicTitle($topicTitle)
    {
        $vocabularies = Vocabulary::where('topicTitle', $topicTitle)->get();
        return VocabularyResource::collection($vocabularies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VocabularyRequest $request)
    {
        $vocabularyNew = new Vocabulary();
        $vocabularyNew->word = $request->word;
        $vocabularyNew->kana = $request->kana;
        $vocabularyNew->romaji = $request->romaji;
        $vocabularyNew->translation = $request->translation;
        $vocabularyNew->topicTitle = $request->topicTitle;
        $vocabularyNew->level = $request->level;

        $vocabularyNew->save();

        return new VocabularyResource($vocabularyNew);
    }

    /**
     * Display the specified resource.
     */
    public function show($idVocabulary)
    {
        $kanji = Vocabulary::find($idVocabulary);
        return new VocabularyResource($kanji);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vocabulary $vocabulary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VocabularyRequest $request, $idVocabulary)
    {
        $vocabularyUpdate = Vocabulary::find($idVocabulary);
        
        $vocabularyUpdate->word = $request->word;
        $vocabularyUpdate->kana = $request->kana;
        $vocabularyUpdate->romaji = $request->romaji;
        $vocabularyUpdate->translation = $request->translation;
        $vocabularyUpdate->topicTitle = $request->topicTitle;
        $vocabularyUpdate->level = $request->level;

        $vocabularyUpdate->save();
        return new VocabularyResource($vocabularyUpdate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idVocabulary)
    {
        $vocabularyDelete = Vocabulary::find($idVocabulary);
        $vocabularyDelete->delete();
        return response()->json(['success' => true], 200);
    }
}
