<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use Auth;

class livingroomData extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function page()
    {
        $data = array();
        $user = Auth::user();
        if ($user['deviceUrl']) {
            try {
                //$json = json_decode(file_get_contents(env('LIVINGROOM_DATA_SOURCE')), true);
                $data = json_decode(file_get_contents($user['deviceUrl']), true);
                $data['status'] = true;
                //$json['status'] = true;
            }
            catch (Exception $e) {
                $data = array(
                    'status' => false
                );
            }
        }
        else {
            $data['status'] = false;
        }
        return view(
            'livingroomData',
            /*[
                'temperature' => $json['temperature'],
                'light' => $json['light'],
                'time' => $json['time'],
                'status' => $json['status']
            ]*/
            ['data' => $data]
        );
    }
    public function index()
    {
        return DB::select('select * from livingroom_datas');
    }
}
