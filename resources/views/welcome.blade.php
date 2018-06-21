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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body
            {
                background-color: #darkgrey;
                color: #636b6f;
                font-family: 'Raleway SemiBold', sans-serif;
                font-weight: 100;
                height: 130vh;
                margin: 0;
            }
            .content
            {
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
                font-size:90px  ;
                right: 120px;
                left: 120px;
            }
            .login
            {
                text-align: center;
            }
            .col-md-6
            {
                text-align: justify;
            }
            .image
            {
                text-align: center;
            }
      .mentions
      {
        font-size: x-small;
        text-align: center;
      }
        </style>
    </head>
    <body>
    <span class="border border-dark"></span>
        <div classe="content">
            <div class="title">
                RenTaRoom
            </div>
    </span>
            <div class="login">
                @if (Route::has('login'))
                <div class="links">
                    <a href="{{ route('login') }}">Login <i class="fas fa-door-open"></i></a>
                    <a href="{{ route('register') }}">Register <i class="fas fa-door-closed"></i></a>
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
    <br>
      <div class="mentions">
      © 2016 / 2018 - RenTaRoom - Mentions Légales - Tous droits réservés
        </div>
    </body>
</html>
