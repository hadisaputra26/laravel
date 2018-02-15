@extends('../layouts.parentHadi')
@section('title', 'Database')

@section('navbar')
	@parent
@endsection

@section('content')

 <?php echo Form::open{array{'url' => 'sapa/insert', 'method' => 'post'}}; ?>

<div class="form-group">
	<label for="inputEmail"></label>
	<textarea name="content" class="form-control" rows="5"></textarea>
</div>
<div class="form-group">
	<button type="submit">Sapa!!</button>
</div>

{{Form::close();}}
sapaan Anda
<br>
<br>
<?php 
foreach ($)
// Belum Selesai
?>
@endsection