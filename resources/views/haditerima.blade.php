@extends('layouts.parentHadi')
@section('title', 'Hadi Kirim')
@section('navbar')
	@parent
@endsection

@section('content')
	<br>
	<hr>
	<h1>Data Yang Di Terima.</h1>
	<br>
	<p>Dari Nama Depan (text)</p>
	<h3>" {{ $_POST['data1'] }} "</h3><br>
	<p>Dari Nama Belakang (text)</p>
	<h3>" {{ $_POST['data2'] }} "</h3><br>

	<p>Dari Data Jenis Kelamin (radio)</p>
	<h3>" {{ $_POST['gender'] }} "</h3><br>

	<p>Dari Hobi (checkbox)</p>
	<h3>" {{ $_POST['hobi1'] }} "</h3><br>
	<h3>" {{ $_POST['hobi2'] }} "</h3><br>
	<h3>" {{ $_POST['hobi3'] }} "</h3><br>
	<h3>" {{ $_POST['hobi4'] }} "</h3><br>

	<p>Dari Ukuran Baju (select)</p>
	<h3>" {{ $_POST['ukuran'] }} "</h3><br>
	<h3>" {{ $_POST['warna'] }} "</h3><br>

	<p>Dari Tahun Lahir (Select Range)</p>
	<h3>" {{ $_POST['tahunLahir'] }} "</h3><br>

	<p>Dari Tahun Lahir (Select Month)</p>
	<h3>" {{ $_POST['bulanLahir'] }} "</h3><br>

	<p>Dari Ukuran Sepatu (Number)</p>
	<h3>" {{ $_POST['sepatu'].' CM' }} "</h3><br>

	<p>Dari deskripsi anda (textarea)</p>
	<h3>" {{ $_POST['informasi'] }} "</h3><br>

	<p>Dari Username (text)</p>
	<h3>" {{ $_POST['username'] }} "</h3><br>
	<p>Dari Password (password)</p>
	<h3>" {{ $_POST['password'] }} "</h3><br>

	<hr>
	<p><a href="latihanHadiKirim">Kembali</a></p>

@endsection