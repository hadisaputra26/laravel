@extends('layouts.parentHadi')

@section('title', 'Child Hadi 01')

@section('navbar')
	@parent
@endsection

@section('content')
<center>
	<h1>Halaman Registrasi</h1>
</center>

<h2>Buat Akun Baru</h2>
	{{Form::open(array('action' => 'ControllerHadi1@informasi'))}}
		{{ Form::label('namaDepan', 'Nama Depan') }} <br>
		{{ Form::text('namaDepan') }}<br>

		{{ Form::label('namaBelakang', 'Nama Belakang') }} <br>
		{{ Form::text('namaBelakang') }}<br>

		{{ Form::label('nomorTelfon', 'Nomor Telfon') }} <br>
		{{ Form::text('nomorTelfon') }}<br>

		{{ Form::label('email', 'Alamat Email') }} <br>
		{{ Form::text('email') }}<br><br>

		{{ Form::label('ulangTahun', 'Ulang Tahun') }} <br>
		{{ Form::selectRange('tanggal', 1,31)}}
		{{ Form::selectMonth('month')}}
		{{ Form::selectRange('tahun', 1980, 2018)}} <br><br>

		{{Form::radio('gendre', 'Perempuan')}}
		{{Form::label('gendre', 'Perempuan')}}
		{{Form::radio('gendre', 'Laki - Laki')}}
		{{Form::label('gendre', 'Laki - Laki')}} <br><br>

		{{Form::submit('Daftar')}}

	{{Form::close()}}


@endsection
