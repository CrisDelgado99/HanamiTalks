<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrammarRequest;
use App\Http\Resources\GrammarResource;
use App\Models\Grammar;
use Illuminate\Http\Request;

class GrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grammars = Grammar::all();
        return GrammarResource::collection($grammars);
    }

    public function getAllTopicTitles()
    {
        $topicTitles = Grammar::select('topicTitle', 'level')
                            ->distinct()
                            ->get();

        return response()->json($topicTitles);
    }

        /**
     * Display a listing of grammar topics that have the given topic title
     */
    public function getByTopicTitle($topicTitle)
    {
        $grammars = Grammar::where('topicTitle', $topicTitle)->get();
        return GrammarResource::collection($grammars);
    }

//TODO elimina el código innecesario
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
    public function store(GrammarRequest $request)
    {
        $grammarNew = new Grammar();
        $grammarNew->topicTitle = $request->topicTitle;
        $grammarNew->description = $request->description;
        $grammarNew->level = $request->level;

        $grammarNew->save();

        return new GrammarResource($grammarNew);
    }

    /**
     * Display the specified resource.
     */
    public function show($idGrammar)
    {
        $grammar = Grammar::find($idGrammar);
        return new GrammarResource($grammar);
    }

//TODO elimina el código innecesario
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grammar $grammar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GrammarRequest $request, $idGrammar)
    {
        $grammarUpdate = Grammar::find($idGrammar);

        $grammarUpdate->topicTitle = $request->topicTitle;
        $grammarUpdate->description = $request->description;
        $grammarUpdate->level = $request->level;

        $grammarUpdate->save();

        return new GrammarResource($grammarUpdate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idGrammar)
    {
        $grammarDelete = Grammar::find($idGrammar);

        $grammarDelete->grammar_uses()->delete();
        $grammarDelete->delete();

        return response()->json(['success' => true], 200);
    }
}
