@extends('layouts.app')

@section('content')

<h1>Contact</h1>

{!! Form::open(['url' => 'contact/submit']) !!}

	
	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null,['class'=>'form-control']) }}
	</div>


	<div class="form-group">
		{{ Form::label('email', 'E-Mail Address') }}
		{{ Form::email('email', null,['class'=>'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::label('message', 'Message') }}
		{{ Form::textarea('message', null,['class'=>'form-control']) }}
	</div>
	
	{{ Form::submit('Submit') ,['class'=>'btn btn-primary']}}

    
{!! Form::close() !!}

@stop

	@section('sidebar')
		@parent
		<p>This is appended Sidebar</p>
	
	@endsection