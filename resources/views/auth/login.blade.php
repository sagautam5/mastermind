<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body id="login-body">
		<form class="login-form" action="{{URL::to('/login')}}" method="POST" class="form-horizontal" role="form">
			{{ csrf_field() }}
	      	<h3 class="title">Sign In</h3>
	      	<div class="form-group" id="email">
	        	<input class="form-input" placeholder="Email" id="email" name="email"></input>
	      	</div>
	      	<div class="form-group" id="password">
	        	<input type="password" class="form-input" placeholder="Password" name="password"></input>
	      	</div>
	      	<div class="form-group">
	        	<button type="submit" class="login-button">Login</button>
	      	</div>
    	</form>
    </body>
</html>
