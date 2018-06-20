@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/show-room-list.css') }}">
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/modal.js') }}"></script>
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
		        {{ Form::open(['method' => 'DELETE', 'route' => ['rooms.destroy', $room->id]]) }}
				    {{ Form::submit('Delete', ['class' => 'delete-btn']) }}
				{{ Form::close() }}

		        <a href="{{ route('rooms.edit', [$room->id]) }}" class="edit-btn"><i class="fa fa-edit"></i> Edit</a>

		    </div>
		    <div class="reserve">
		    	<a href="#" data-action="open-modal"><i class="fab fa-fort-awesome-alt"></i></a>
		    </div>
		</div>
		@endforeach
	</div>
	<div data-modal="outside" class="hidden">
		<div data-modal="inside">
			<div id="close"><i class="fa fa-times-circle"></i></div>
			<h1>Get in touch !</h1>
			<form class="book" method="POST">
				{{ csrf_field() }}
				<div class="form-row">
					{{ Form::label('name', 'You complete name') }}
					<br>
					{{ Form::input('text', 'name') }}
				</div>

				<div class="form-row">
					{{ Form::label('email', 'Your e-mail') }}
					<br>
					{{ Form::input('text', 'email') }}
				</div>

				<div class="form-row">
					{{ Form::label('comment', 'Any precision on request') }}
					<br>
					{{ Form::textarea('text', 'precisions', ['size' => '50x5']) }}
				</div>

				<div class="form-row">
					{{ Form::label('nb-person', 'How many guest') }}
					<br>
					{{ Form::input('text', 'nb_person') }}
				</div>

				<div class="form-row">
					{{ Form::label('from', 'from') }}
					<br>
					{{ Form::date('text', 'from') }}
				</div>

				<div class="form-row">
					{{ Form::label('to', 'To') }}
					<br>
					{{ Form::date('text', 'to') }}
				</div>

				<p class="success">{{ session()->get('message') }}</p>

				<div class="form-row">
					<a data-btn="book" href="#">Submit</a>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection