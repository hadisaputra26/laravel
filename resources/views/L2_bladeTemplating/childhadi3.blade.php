@extends('layouts.parentHadi')

@section('title', 'Child Hadi 01')

@section('navbar')
	@parent
@endsection
 
@section('content')
	<h1>INI Adalah Halaman Child Hadi 03</h1>
	<h2>Nama Saya Adalah : {{ $nama }}</h2>
	<h2>Umur Saya Adalah : {{ $umur }}</h2>
	<h2>Alamat saya : {{ $alamat }}</h2>
	<h2>Nilai Akhir Nya Adalah : {{ $n }}</h2>
@endsection
