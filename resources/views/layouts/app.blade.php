<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acme</title>
	<link rel="stylesheet" href="/basic-laravel-wesite/public/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@if(Request::is('/')) 
			@include('inc.showcase') 
		@endif

		@include('inc.error')
		
		<div class="row">
			<div class="col-md-8  col-lg-8">
					@yield('content') 
			</div>
			<div class="col-md-4  col-lg-4">
				@section('sidebar')
					<div class="well">
						<h3>Sidebar</h3>
						<p>This is the Sidebar</p>
					</div>
				@show
			</div>	
		</div> 
	</div>
	<footer id="footer" class="text-center">

		<p>Copyright 2017 &copy; Labee </p>
		
	</footer>
</body>
</html>