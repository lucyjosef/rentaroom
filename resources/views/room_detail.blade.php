@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/show-room-details.css') }}">
@endsection

@section('content')
<section id="content">
	<div class="content-result">
		<h2>{{ $room->title }}</h2>
		<p>Located in {{ $room->city }}</p>
		<p> {{ $room->adress }}</p>
		<br>
		<p>{{ $room->nb_places }} places available(s)</p>
		<p>Dry fee of {{ $room->fee }} EUR</p>
		@if($room->rented == true)
			<p class="warning">NOT AVAILABLE</p>
		@else
			<p class="is-available">AVAILABLE</p>
		@endif
        <div class="edit-admin">
	        {{ Form::open(['method' => 'DELETE', 'route' => ['rooms.destroy', $room->id]]) }}
			    {{ Form::submit('Delete', ['class' => 'delete-btn']) }}
			{{ Form::close() }}

	        <a href="{{ route('rooms.edit', [$room->id]) }}" class="edit-btn"><i class="fa fa-edit"></i> Edit</a>
	    </div>
	</div>
</section>
@endsection