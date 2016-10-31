<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title')</title>
	<meta name="description" content="@yield('metadescription')">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

	<!-- favicons -->
<!-- 		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/favicon/apple-touch-icon.png') }}">
		<link rel="icon" type="image/png" href="{{ asset('/assets/favicon/favicon-32x32.png') }}" sizes="32x32">
		<link rel="icon" type="image/png" href="{{ asset('/assets/favicon/favicon-16x16.png') }}" sizes="16x16">
		<link rel="manifest" href="{{ asset('/assets/favicon/manifest.json') }}">
		<link rel="shortcut icon" href="{{ asset('/assets/favicon/favicon.ico') }}">
		<meta name="msapplication-config" content="{{ asset('/assets/favicon/browserconfig.xml') }}">
		<meta name="theme-color" content="#ffffff"> -->
	<!-- end favicons -->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-84500020-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<!--top scripts-->
		@yield('topscripts')
</head>

<body class="@yield('bodyclass', '')">

	<div class="page-wrap">

		<!--Content of page-->
			@yield('content')

		<!--All site scripts-->

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="{{ asset('/assets/js/scripts.js') }}"></script>
<!--Page scripts-->yield('scripts')
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700|Open+Sans:400,600" rel="stylesheet">
<script src="https://use.fortawesome.com/96155e14.js"></script>
</body>
</html>

