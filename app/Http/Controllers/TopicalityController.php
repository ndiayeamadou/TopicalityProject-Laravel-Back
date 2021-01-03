<?php

namespace App\Http\Controllers;

use App\Http\Resources\TopicalityResource as ResourcesTopicality;
use App\Models\Topicality;
use Illuminate\Http\Request;

class TopicalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topicalities = Topicality::all();
        return $topicalities->toJson(JSON_PRETTY_PRINT);    //pretty_ pour l'affichage
        //Using Resources
        //return ResourcesTopicality::collection($topicalities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Topicality::create($request->all())) {
            return response()->json([
                'success', 'Actualité créée avec succès !'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function show(Topicality $topicality)
    {
        return $topicality;
        //return new ResourcesTopicality($topicality);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topicality $topicality)
    {
        if($topicality->update($request->all())) {
            return response()->json([
                "success", "Actualité mise à jour"
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topicality $topicality)
    {
        if($topicality->delete()) {
            return response()->json([
                'success', 'Actualité supprimée avec succès'
            ]);
        }
    }
}
