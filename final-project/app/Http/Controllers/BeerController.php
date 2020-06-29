<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
        public function index(){
        
        
        $beers = Beer::all();

        return view('beers.index', compact('beers'));
    }


    public function show($beer_id){

        $beer = Beer::findOrFail($beer_id);


        return view('beers.show', compact('beer'));
    }
}
