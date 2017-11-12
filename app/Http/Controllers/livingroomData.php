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
        $data = array( 'status' => false );
        $user = Auth::user();
        if ($user['deviceUrl']) {
            $dataRequest = @file_get_contents($user['deviceUrl']);
            if ($dataRequest && strpos($http_response_header[0], '200')) {
                $data = json_decode($dataRequest, true);
                $data['status'] = true;
            }
        }
        return view(
            'livingroomData',
            ['data' => $data]
        );
    }
    public function index()
    {
        return DB::select('select * from livingroom_datas');
    }
}
