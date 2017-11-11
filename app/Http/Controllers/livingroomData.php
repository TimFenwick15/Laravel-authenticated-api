<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;

class livingroomData extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function page()
    {
        $json = json_decode(file_get_contents(env('LIVINGROOM_DATA_SOURCE')), true);
        return view(
            'livingroomData',
            [
                'temperature' => $json['temperature'],
                'light' => $json['light'],
                'time' => $json['time']
            ]
        );
    }
    public function index()
    {
        return DB::select('select * from livingroom_datas');
    }
}
