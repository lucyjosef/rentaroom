@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/form-add-room.css') }}">
@endsection

@section('content')
<?php 
$user_id = Auth::user()->id;
?>
<section id="content">
	<div class="content-form">
		<form class="create-room" method="POST" action="{{ route('rooms.store')}}">
			{{ csrf_field() }}
			<div class="form-row">
				{{ Form::label('title', 'Post title') }}
				<br>
				{{ Form::input('text', 'title') }}
			</div>

			<div class="form-row">
				{{ Form::label('city', 'City') }}
				<br>
				{{ Form::input('text', 'city') }}
			</div>

			<div class="form-row">
				{{ Form::label('adress', 'Adress Precisions') }}
				<br>
				{{ Form::input('text', 'adress') }}
			</div>

			<div class="form-row">
				{{ Form::label('nb-places', 'How many places') }}
				<br>
				{{ Form::number('text', 'nb_places') }}
			</div>

			<div class="form-row">
				{{ Form::label('fee', 'Fee') }}
				<br>
				{{ Form::number('text', 'fee') }}
			</div>

			<div class="form-row">
				{{ Form::submit('submit') }}
			</div>
		</form>
	</div>
</section>
@endsection