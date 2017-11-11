<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class livingroomData extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function page()
    {
        return view('livingroomData');
    }
    public function index()
    {
        return DB::select('select * from livingroom_datas');
    }
}
