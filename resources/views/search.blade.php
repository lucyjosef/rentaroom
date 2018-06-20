@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
@endsection

@section('content')
<section id="content">
	<div class="content-result">
		<form class="create-room" method="GET" action="{{ route('results')}}">
			{{ csrf_field() }}
			{{ method_field('GET')}}
			<div class="form-row">
				{{ Form::label('search', 'Search') }}
				<br>
				{{ Form::input('text', 'search') }}
				{{ Form::submit('OK') }}
		</div>
		</form>
	</div>
</section>
@endsection