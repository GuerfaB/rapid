<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index(){
        $banner = Banner::all();
        $about = About::all();
        $service = Service::all();
        $feature = Feature::all();
        $portfolio = Portfolio::all();
        return view("accueil", compact("banner", "about", "service", "feature", "portfolio"));
    }
}
