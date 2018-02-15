<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ControllerSapa extends Controller
{
	public function index(){
		
    $sapa = DB::select('select * from sapa');
		return view('sapa.index', ['sapa_bro' => $sapa]);
	}
}
