<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class ApiController extends Controller
{
    //
    public function widgetData(){
        $result['data'] = DB::table('widgets')
            ->select('id',
                'slug',
                'widget_name',
                'created_at')
            ->get();
        return json_encode($result);
    }
}
