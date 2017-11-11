<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function show()
    {
        return DB::select('select * from users');
    }

    // Testing Vendor views
    public function userlist()
    {
        //$users = DB::table('users')->simplePaginate(5);
        $users = DB::table('users')->paginate(5);
        return view('userlist', ['users' => $users]);
    }
}
