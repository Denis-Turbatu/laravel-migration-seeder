<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class HomePageController extends Controller
{
    public function index(){
        $today = Carbon::now(); 

        $trains = Train::where('departure_date', '>=', $today)->get();

        return view('home', compact('trains'));
    }
}
