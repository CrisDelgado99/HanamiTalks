<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrammarUseRequest;
use App\Http\Resources\GrammarUseResource;
use App\Models\GrammarUse;
use Illuminate\Http\Request;

class GrammarUseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grammarUses = GrammarUse::all();
        return GrammarUseResource::collection($grammarUses);
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
    public function store(GrammarUseRequest $request)
    {
        $grammarUseNew = new GrammarUse();
        $grammarUseNew->title = $request->title;
        $grammarUseNew->description = $request->description;
        $grammarUseNew->example = $request->example;
        $grammarUseNew->grammar_id = $request->grammar_id;

        $grammarUseNew->save();

        return new GrammarUseResource($grammarUseNew);
    }

    /**
     * Display the specified resource.
     */
    public function show($idGrammarUse)
    {
        $grammarUse = GrammarUse::find($idGrammarUse);
        return new GrammarUseResource($grammarUse);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GrammarUse $grammarUse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GrammarUseRequest $request, $idGrammarUse)
    {
        $grammarUseUpdate = GrammarUse::find($idGrammarUse);
        $grammarUseUpdate->title = $request->title;
        $grammarUseUpdate->description = $request->description;
        $grammarUseUpdate->example = $request->example;
        $grammarUseUpdate->grammar_id = $request->grammar_id;

        $grammarUseUpdate->save();

        return new GrammarUseResource($grammarUseUpdate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idGrammarUse)
    {
        $grammarUseDelete = GrammarUse::find($idGrammarUse);
        $grammarUseDelete->delete();
        return response()->json(['success' => true], 200);
    }
}
