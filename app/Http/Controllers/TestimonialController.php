<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
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
        $this->authorize("testimonial/create");
        return view("testimonial.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $request->validate([
            "path" => "required",
            "name" => "required",
            "poste" => "required",
            "texte" => "required",
        ]);
        $testimonial->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        $testimonial->name = $request->name;
        $testimonial->poste = $request->poste;
        $testimonial->texte = $request->texte;
        $testimonial->save();
        return redirect()->route("menu");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $this->authorize("testimonial/edit", $testimonial);
        return view("testimonial.edit", compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            "path" => "required",
            "name" => "required",
            "poste" => "required",
            "texte" => "required",
        ]);
        Storage::disk("public")->delete("img/" . $testimonial->path );
        $testimonial->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        $testimonial->name = $request->name;
        $testimonial->poste = $request->poste;
        $testimonial->texte = $request->texte;
        $testimonial->save();
        return redirect()->route("menu");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::disk("public")->delete("img/" . $testimonial->path );
        $testimonial->delete();
        return redirect()->back();
    }
}
