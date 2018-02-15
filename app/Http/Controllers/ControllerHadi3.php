<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHadi3 extends Controller
{
    public function informasi(){
    	$n1 = 30;
    	$n2 = 60;
    	$n = $n1*$n2;
    	$nama = 'Hadi Saputra';
    	$umur = '23';
    	$alamat = 'Yogyakarta';
    	return view('L2_bladeTemplating.childhadi3', compact('nama','umur','alamat','n'));
    }
}
