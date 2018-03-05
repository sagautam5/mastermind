<form action="{{URL::to('/login')}}" method="POST">
	        {{ csrf_field() }}
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="col-md-3">
				<label>Email</label>
			</div>
			<div class="col-md-3">
				<input type="email" name="email">
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-3">
				<label>Password</label>
			</div>
			<div class="col-md-3">
				<input type="password" name="password">
			</div>
		</div>
	<button type="submit">Login</button>
</form>