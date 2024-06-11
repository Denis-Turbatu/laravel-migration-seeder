<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomePageController extends Controller
{
    public function index(){
        $trains = Train::all();
        dd($trains);
        return view('home', compact('trains'));
    }
}
