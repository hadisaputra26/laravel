@extends('layouts.parentHadi')
@section('title', 'Informasi')
@section('navbar')
	@parent
@endsection

@section('content')
<h1>Informasi Anda</h1>
<p>Nama Lengkap : {{$namaDepan.' '.$namaBelakang}}</p><br>
<p>Nomor Telfon : {{$nomorTelfon}}</p><br>
<p>Alamat Email : {{$email}}</p><br>
<p>Tanggal Lahir : {{$tanggalLahir.' '.$bulanLahir.' '.$tahunLahir}}</p><br>
<p>Jenis Kelamin : {{$gendre}}</p>
@endsection