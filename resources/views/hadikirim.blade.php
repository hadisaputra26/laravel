@extends('layouts.parentHadi')
@section('title', 'Hadi Kirim')
@section('navbar')
	@parent
@endsection

@section('content')
	<br>
	<hr>
	{{ Form::open(['url' => 'latihanHadiTerima', 'method' => 'post']) }}

	
	<hr>

	{{-- ===================================== --}}
	{{--              TEXT                     --}}
	{{-- ===================================== --}}
	{{ Form::label('data1', 'Nama Depan') }} <br>
	{{ Form::text('data1') }}<br><br>
	{{ Form::label('data2', 'Nama Belakang') }} <br>
	{{ Form::text('data2') }}<br><br>


	{{-- ===================================== --}}
	{{--               Radio                   --}}
	{{-- ===================================== --}}
	<h4>Jenis Kelamin</h4>
	{{Form::label('gender', 'Laki Laki')}}
	{{Form::radio('gender', 'Laki Laki')}}
	{{Form::label('gender', 'Perempuan')}}
	{{Form::radio('gender', 'Perempuan')}}<br><br>
	
	{{-- ===================================== --}}
	{{--            Checkbox                   --}}
	{{-- ===================================== --}}
	<h4>Hobi Anda</h4>
	{{Form::label('hobi1', 'Makan')}}
	{{Form::checkbox('hobi1', 'Makan','true')}} <br>
	{{Form::label('hobi2', 'Olahraga')}}
	{{Form::checkbox('hobi2', 'Olahraga','true')}} <br> 
	{{Form::label('hobi3', 'shopping')}}
	{{Form::checkbox('hobi3', 'shopping', 'true')}} <br>
	{{Form::label('hobi4', 'Nonton')}}
	{{Form::checkbox('hobi4', 'Nonton', 'true')}} <br><br>

	{{-- ===================================== --}}
	{{--              Select                   --}}
	{{-- ===================================== --}}
	{{ Form::label('ukuran', 'Ukuran Baju Anda')}} <br>
	{{Form::select('ukuran', array('L' => 'Large',
	'S' => 'Small', 'M' => 'Medium', 'XL' => 'Extra Lager'))}}<br><br>
	{{Form::select('warna', array(
    'Merah' => array('Merah_Muda' => 'Merah Muda',
	'Merah_Tua' => 'Merah Tua', 
	'Merah_Soft' => 'Merah Soft'),
    'Biru' => array('Biru_Muda' => 'Biru Muda',
	'Biru_Tua' => 'Biru Tua',
	'Biru_Soft' => 'Biru Soft'),
	))}}<br><br>

	{{-- ===================================== --}}
	{{--              Select Range             --}}
	{{-- ===================================== --}}
	{{Form::label('tahunLahir', 'Tahun Lahir')}} <br>
	{{Form::selectRange('tahunLahir', 1980, 2018)}} <br><br>

	{{-- ===================================== --}}
	{{--              Select Month             --}}
	{{-- ===================================== --}}
	{{Form::label('bulanLahir', 'Bulan Lahir')}} <br>
	{{Form::selectMonth('bulanLahir')}} <br><br>

	{{-- ===================================== --}}
	{{--               Number                  --}}
	{{-- ===================================== --}}
	{{Form::label('sepatu', 'Ukuran Sepatu Anda')}} <br>
	{{Form::number('sepatu','Nomor Sepatu')}} <br><br>

	{{-- ===================================== --}}
	{{--               Text Area               --}}
	{{-- ===================================== --}}
	{{Form::label('informasi', 'Deskripsi Tentang Anda')}} <br>
	{{Form::textarea('informasi')}} <br><br>


	{{-- ===================================== --}}
	{{--        Username dan Password          --}}
	{{-- ===================================== --}}
	{{Form::label('username', 'Username Anda')}} <br>
	{{Form::text('username')}}<br><br>
	{{Form::label('password', 'Passworn Anda')}} <br>
	{{Form::password('password')}}<br><br>

	{{ Form::submit('kirim') }}
	{{ Form::close() }}
	<hr>

@endsection