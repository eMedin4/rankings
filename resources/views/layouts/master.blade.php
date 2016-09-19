<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta name="description" content="Ranking SSD">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://use.typekit.net/fac6ixi.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script src="https://use.fortawesome.com/96155e14.js"></script>
	<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
	<!--top scripts-->
		@yield('topscripts')
</head>

<body class="@yield('bodyclass', '')">


	<!--Content of page-->
		@yield('content')

	<!--All site scripts-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="{{ asset('/assets/js/scripts.js') }}"></script>

	<!--Page scripts-->
		@yield('scripts')


</body>
</html>

