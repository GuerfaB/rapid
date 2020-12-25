<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index(){
        if (Auth::user()->role_id === 1){
        $user = User::all();
        $banner = Banner::all();
        $about = About::all();
        $service = Service::all();
        $feature = Feature::all();
        $portfolio = Portfolio::all();
        $testimonial = Testimonial::all();
        return view("vendor.adminlte.menu", compact("user", "banner", "about", "service","feature", "portfolio", "testimonial"));
        }
        else{
            $portfolio = Portfolio::all();
            return view("vendor.adminlte.redacteur", compact("portfolio"));
        }
        
       
      
    }
}
