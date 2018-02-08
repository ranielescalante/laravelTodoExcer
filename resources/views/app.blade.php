<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">



<script type="text/javascript" src="{{asset('js/sample.js')}}"></script>

	<title> @yield('title') </title>

</head>
<body>
	@include('partials.header')

	<div class="container">
		
		@yield('content')
	</div>
	


</body>
</html>