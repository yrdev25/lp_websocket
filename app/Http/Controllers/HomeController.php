<?php

namespace App\Http\Controllers;

use App\Events\ForWebsocket;
use Illuminate\Http\Request;

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
        // dd(asset('app'));
        // $data = 'event called';
        // event(new ForWebsocket($data));
         event(new ForWebsocket());
        //broadcast(new ForWebsocket());
        return view('home');
    }

    public function event(){
        // $data = [ "data" => "dqatg"];

        dd('event called');

    }
}
