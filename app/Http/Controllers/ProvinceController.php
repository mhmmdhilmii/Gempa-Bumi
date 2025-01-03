<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Province;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    public function showProvinces()
    {
        // $provinces = Provinces::all();
        // return view('provinces',compact('provinces'))

        $provinces = DB::table('provinces')->get();
        return view('map.province',['provinces'=> $provinces]);
    }
}
