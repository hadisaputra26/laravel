<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHadi1 extends Controller
{
    public function informasi(){
    	$namaDepan = $_POST['namaDepan'];
    	$namaBelakang = $_POST['namaBelakang'];
    	$nomorTelfon = $_POST['nomorTelfon'];
    	$email = $_POST['email'];
    	$tanggalLahir = $_POST['tanggal'];
    	$bulanLahir = $_POST['month'];
    	$tahunLahir = $_POST['tahun'];
    	$gendre = $_POST['gendre'];

    	if($bulanLahir == 1){
    		$bulanLahir = 'Januari';
    	} else if ($bulanLahir == 2) {
    		$bulanLahir = 'Febuari';
    	} else if($bulanLahir == 3) {
    		$bulanLahir = 'Maret';
    	} else if($bulanLahir == 4) {
    		$bulanLahir = 'April';
    	} else if($bulanLahir == 5) {
    		$bulanLahir = 'Mei';
    	} else if($bulanLahir == 6) {
    		$bulanLahir = 'Juni';
    	} else if($bulanLahir == 7) {
    		$bulanLahir = 'Juli';
    	} else if($bulanLahir == 8) {
    		$bulanLahir = 'Agustus';
    	} else if($bulanLahir == 9) {
    		$bulanLahir = 'September';
    	} else if($bulanLahir == 10) {
    		$bulanLahir = 'Oktober';
    	} else if($bulanLahir == 11) {
    		$bulanLahir = 'November';
    	} else if($bulanLahir == 12) {
    		$bulanLahir = 'Desember';
    	}

    	// Membuat Variable untuk Compact
    	$dataUser = compact(
    		'namaDepan','namaBelakang','nomorTelfon','email',
    		'tanggalLahir','bulanLahir','tahunLahir','gendre');

    	return view('L2_bladeTemplating.childhadi1terima', $dataUser);

    	// return view('L2_bladeTemplating.childhadi1terima', compact(
    	// 	'namaDepan','namaBelakang','nomorTelfon','email',
    	// 	'tanggalLahir','bulanLahir','tahunLahir','gendre'
    	// ));
    }
}
