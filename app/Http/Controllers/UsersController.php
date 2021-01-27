<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use App\Models\User;

class UsersController extends Controller
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
    public function index(Request $request)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $apps = App::where('user_id', $user_id)->get();
        return ($user->user_type == 'Developer') ? $this->devView($apps) : $this->clientView($apps);
    }

    function devView($apps)
    {
        return view('dev.apps', ['apps' => $apps]);
    }

    function clientView($apps)
    {
        return view('apps', ['apps' => $apps]);
    }
}