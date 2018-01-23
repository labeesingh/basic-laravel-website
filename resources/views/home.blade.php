@extends('layouts.app')

@section('content')
	<h2>Home</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nihil perferendis repellendus sint architecto ex soluta veritatis nam quam totam, exercitationem, ipsum, minima maxime quod possimus culpa eveniet earum deserunt!</p>
@stop

@section('sidebar')
		@parent
		<p>This is appended Sidebar</p>
	
	@endsection