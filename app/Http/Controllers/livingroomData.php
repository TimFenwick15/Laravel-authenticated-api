<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class livingroomData extends Controller
{
    public function index()
    {
        return DB::select('select * from livingroom_datas');
    }
}
