<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $person = [
            'name' => 'Davidka',
            'adfge' => 23,
            'age' => 3,
            'country' => 'russia'
        ];

        $arr = collect($person);
        
        return view('home');
    }
}
