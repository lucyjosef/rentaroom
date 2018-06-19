<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RenTaRoom</title>
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Styles -->
		<style>
			html, body
			{
				background-color: #fff;
				color: #636b6f;
				font-family: 'Raleway SemiBold', sans-serif;
				font-weight: 100;
				height: 130vh;
				margin: 0;
			}

      .content {
        text-align: center;
      }

			.links > a
			{
				color: #636b6f;
				padding: 0 25px;
				font-size: 12px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
			}

			.title
			{
				text-align: center;
				font-size: 90px;
        right: 120px;
        left: 120px;
			}

			.login
			{
				text-align: center;
			}

      .col-md-6 {
        text-align: justify;
      }

      .image {
        text-align: center;
      }

		</style>
	</head>
	<body>
		<div classe="content">
			<div class="title">
				RenTaRoom
			</div>
			<div class="login">
				@if (Route::has('login'))
				<div class="links">
					@auth
					<a href="{{ url('/home') }}">Home</a>
					@else
					<a href="{{ route('login') }}">Login</a>
					<a href="{{ route('register') }}">Register</a>
					@endauth
				</div>
				@endif
			</div>
		</div>
    <br>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        Et qoniam inedia gravi adflictabantur, locum petivere Paleas nomine, vergentem in mare, valido muro firmatum, ubi conduntur nunc usque commeatus distribui militibus omne latus Isauriae defendentibus adsueti. circumstetere igitur hoc munimentum per triduum et trinoctium et cum neque adclivitas ipsa sine discrimine adiri letali, nec cuniculis quicquam geri posset, nec procederet ullum obsidionale commentum, maesti excedunt postrema vi subigente maiora viribus adgressuri.
      </div>
    </div>
    <br>
    <div class="image">
      <img src="assets/img/room.jpg" class="img-fluid" alt="Responsive image">
    </div>
	</body>
</html>
