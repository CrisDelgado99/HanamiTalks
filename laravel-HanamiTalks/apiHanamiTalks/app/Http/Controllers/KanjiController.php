<?php

namespace App\Http\Controllers;

use App\Http\Requests\KanjiRequest;
use App\Http\Resources\KanjiResource;
use App\Models\Kanji;

//TODO elimina el código innecesario
use Illuminate\Http\Request;

class KanjiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kanjis = Kanji::all();
        return KanjiResource::collection($kanjis);
    }
//TODO  me da la sensación que esta función es similar a la que tienes en GrammarController. Revísalo y si está duplicada quita una de las dos.
    public function getAllTopicTitles()
    {
        $topicTitles = Kanji::select('topicTitle', 'level')
                            ->distinct()
                            ->get();

        return response()->json($topicTitles);
    }

        /**
     * Display a listing of kanjis that have the given topic title
     */
    public function getByTopicTitle($topicTitle)
    {
        $kanjis = Kanji::where('topicTitle', $topicTitle)->get();
        return KanjiResource::collection($kanjis);
    }

//TODO elimina el código innecesario
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KanjiRequest $request)
    {
        $kanjiNew = new Kanji();
        $kanjiNew->symbol = $request->symbol;
        $kanjiNew->kunyomi = $request->kunyomi;
        $kanjiNew->onyomi = $request->onyomi;
        $kanjiNew->translation = $request->translation;
        $kanjiNew->topicTitle = $request->topicTitle;
        $kanjiNew->level = $request->level;

        $kanjiNew->save();

        return new KanjiResource($kanjiNew);
    }

    /**
     * Display the specified resource.
     */
    public function show($idKanji)
    {
        $kanji = Kanji::find($idKanji);
        return new KanjiResource($kanji);
    }

//TODO elimina el código innecesario
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kanji $kanji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KanjiRequest $request, $idKanji)
    {
        $kanjiUpdate = Kanji::find($idKanji);
        
        $kanjiUpdate->symbol = $request->symbol;
        //TODO fíjate que las siguientes líneas de código son muy similares a las que tienes en el store, considera encapsularlo en una función y llamar a esa función tanto en el store como en el update.
        $kanjiUpdate->kunyomi = $request->kunyomi;
        $kanjiUpdate->onyomi = $request->onyomi;
        $kanjiUpdate->translation = $request->translation;
        $kanjiUpdate->topicTitle = $request->topicTitle;
        $kanjiUpdate->level = $request->level;

        $kanjiUpdate->save();
        return new KanjiResource($kanjiUpdate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idKanji)
    {
        $kanjiDelete = Kanji::find($idKanji);
        $kanjiDelete->delete();
        return response()->json(['success' => true], 200);
    }
}
