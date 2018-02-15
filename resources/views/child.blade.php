@extends('layouts.app')

@section('title', 'Halaman Baru')

@section('navbar')
	@parent
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    @parent
    <p>This is my body content.</p>
@endsection