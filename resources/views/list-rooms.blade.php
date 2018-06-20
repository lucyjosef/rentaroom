@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/show-room-list.css') }}">
@endsection

@section('content')
<section id="content">
	<div class="content-result">
		@foreach($room_table as $room)
		<div class="list-row">
			<h2>{{ $room->title }}</h2>
			<p>Location : {{ $room->adress }}, in {{ $room->city }}</p>
			<p>{{ $room->nb_places }} places availables</p>
			<p>{{ $room->fee }} EUR</p>
			<p>{{ $room->created_at }}</p>
			<div class="edit-admin">
		        <a href="{{ route('rooms.destroy', [$room->id]) }}" class="delete-btn"><i class="fa fa-trash-alt"></i> Delete</a>

		        <a href="{{ route('rooms.edit', [$room->id]) }}" class="edit-btn"><i class="fa fa-edit"></i> Edit</a>
		    </div>
		</div>
		@endforeach
	</div>
</section>
@endsection