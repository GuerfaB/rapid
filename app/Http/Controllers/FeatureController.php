<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("feature/create");
        return view("feature.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feature = new Feature();
        $request->validate([
            "titre" => "required",
            "texte1" => "required",
            "texte2" => "required",
            "path" => "required",
            "order" => "required",
        ]);
        
        $feature->titre = $request->titre;
        $feature->texte1 = $request->texte1;
        $feature->texte2 = $request->texte2;
        $feature->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        $feature->order = $request->order;
        $feature->save();
        return redirect()->route("menu");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        $this->authorize("feature/edit", $feature);
        return view("feature.edit", compact("feature"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            "titre" => "required",
            "texte1" => "required",
            "texte2" => "required",
            "path" => "required",
            "order" => "required",
        ]);
        Storage::disk("public")->delete("img/" . $feature->path );
        $feature->titre = $request->titre;
        $feature->texte1 = $request->texte1;
        $feature->texte2 = $request->texte2;
        $feature->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        $feature->order = $request->order;
        $feature->save();
        return redirect()->route("menu");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        Storage::disk("public")->delete("img/"  . $feature->path );
        $feature->delete();
        return redirect()->back();
    }
}
