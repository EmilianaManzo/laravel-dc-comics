<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $num_comics = Comic::count();

        return view('home', compact('num_comics'));
    }

    public function contatti(){
        return view('contatti');
    }
}
