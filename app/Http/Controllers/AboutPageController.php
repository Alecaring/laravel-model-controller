<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class AboutPageController extends Controller
{
    public function about() {
        $movies = Movie::all();
        dd($movies[0]->title);
        return view("About");
    }
}
