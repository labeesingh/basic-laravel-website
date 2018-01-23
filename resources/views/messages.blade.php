@extends('layouts.app')

@section('content')
	
	@if(count($message) > 0)
	
	@foreach($message as $mesg)
			<ul class="list-group">
				<li class="list-group-item">Name : {{ $mesg->name }}</li>
				<li class="list-group-item">Email : {{ $mesg->email }}</li>
				<li class="list-group-item">Message : {{ $mesg->message }}</li>
			</ul> 
		@endforeach

	@endif

@endsection