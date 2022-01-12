<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$characters = HTTP::get('https://rickandmortyapi.com/api/character');
        //$charactersArray = $characters->json('results');
        $characters=DB::table('characters')->get();
        return view('home', ['characters' => $characters]);
    }
}
