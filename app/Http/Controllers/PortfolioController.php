<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
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
        return view("portfolio.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Portfolio::class);
        $portfolio = new Portfolio();
        $request->validate([
            "path" => "required",
            "category" => "required",
        ]);
        $portfolio->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        $portfolio->category = $request->category;
        $portfolio->save();
        return redirect()->route("menu");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $this->authorize("portfolio/edit", $portfolio);
        return view("portfolio.edit", compact("portfolio"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->authorize("update", $portfolio);
        $request->validate([
            "path" => "required",
            "category" => "required",
        ]);
        Storage::disk("public")->delete("img/" . $portfolio->path);
        $portfolio->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        $portfolio->category = $request->category;
        $portfolio->save();
        return redirect()->route("menu");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $this->authorize("delete", $portfolio);
        Storage::disk("public")->delete("img/" . $portfolio->path);
        $portfolio->delete();
        return redirect()->back();
    }
}
