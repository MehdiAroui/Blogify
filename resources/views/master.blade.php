<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Blogify</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset(mix($cssFile, 'vendor/blogify')) }}" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="blogify">
		<header id="header">

			<div class="container">
				header
			</div>

		</header>

		<section id="main">
			<router-view></router-view>
		</section>
	</div>
	
<script src="{{asset(mix('app.js', 'vendor/blogify'))}}"></script>
</body>
</html>