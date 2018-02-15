<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContact extends Controller
{
	public $nilai1 = 20;
    public $nilai2 = 40;

    public function mycontact(){
    	$n1 = $this->nilai1;
    	$n2 = $this->nilai2;
    	$hasil = $n1*$n2;
    	// return view('contactChild');
    	return $hasil;
    	// return $n1*$n2;
    	//return view('contactChild');
    }

    public function hasil(){
		return view('contactChild');
	}
}
