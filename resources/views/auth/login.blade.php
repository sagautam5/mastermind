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
    	@if(Session::has('login-failed'))
    		<p class="alert alert-danger">{{Session::get('login-failed')}} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
    	@endif
		<form class="login-form" action="{{URL::to('/login')}}" method="POST" class="form-horizontal" role="form">
			{{ csrf_field() }}
	      	<h3 class="title">Sign In</h3>
	      	<div class="form-group" id="email">
	        	<input class="form-input" placeholder="Email" id="email" name="email" value="{{old('email')}}"></input>
	        	<span class="help-block">
	        		<strong>@if($errors->has('email')){{$errors->first('email')}}@endif</strong>
	        	</span>
	      	</div>
	      	<div class="form-group" id="password">
	        	<input type="password" class="form-input" placeholder="Password" name="password"></input>
	        	<span class="help-block">
	        		<strong>@if($errors->has('password')){{$errors->first('password')}}@endif</strong>
	        	</span>
	      	</div>
	      	<div class="form-group">
	        	<button type="submit" class="login-button">Login</button>
	      	</div>
    	</form>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    	<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
