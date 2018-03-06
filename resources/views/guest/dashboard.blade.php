@extends('layout.master')
@section('title', 'Master Mind - Admin Dashboard')
@section('assets')
@parent

@endsection

@section('header')
	@include('layout.header')
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<input class="form-control">
			</div>			
		</div>
	</div>
</div>
@endsection
@section('footer')
	@include('layout.footer')
@endsection
@section('imports')
@parent
@endsection
