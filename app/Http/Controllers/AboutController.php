<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $this->authorize("about/edit", $about);
        return view("about.edit", compact("about"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            "titre" => "required",
            "phrase1" => "required",
            "phrase2" => "required",
            "skill1" => "required",
            "skill2" => "required",
            "skill3" => "required",
            "path" => "required",
        ]);
        $about->titre = $request->titre;
        $about->phrase1 = $request->phrase1;
        $about->phrase2 = $request->phrase2;
        $about->skill1 = $request->skill1;
        $about->skill2 = $request->skill2;
        $about->skill3 = $request->skill3;
        $about->skill1 = $request->skill1;
        Storage::disk("public")->delete("img/" . $about->path);
        $about->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        $about->save();
        return redirect()->route("menu");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
