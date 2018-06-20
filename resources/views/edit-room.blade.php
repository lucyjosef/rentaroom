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
		<form class="create-room" method="POST" action="{{ route('rooms.update', [$room->id])}}">
			{{ csrf_field() }}
			{{ method_field('PUT')}}
			<div class="form-row">
				{{ Form::label('title', 'Post title') }}
				<br>
				{{ Form::input('text', 'title', $room->title) }}
			</div>

			<div class="form-row">
				{{ Form::label('city', 'City') }}
				<br>
				{{ Form::input('text', 'city', $room->city) }}
			</div>

			<div class="form-row">
				{{ Form::label('adress', 'Adress Precisions') }}
				<br>
				{{ Form::input('text', 'adress', $room->adress) }}
			</div>

			<div class="form-row">
				{{ Form::label('nb-places', 'How many places') }}
				<br>
				{{ Form::input('text', 'nb_places', $room->nb_places) }}
			</div>

			<div class="form-row">
				{{ Form::label('fee', 'Fee') }}
				<br>
				{{ Form::input('text', 'fee', $room->fee) }}
			</div>

			<p class="success">{{ session()->get('message') }}</p>

			<div class="form-row">
				{{ Form::submit('submit') }}
			</div>
		</form>
	</div>
</section>
@endsection