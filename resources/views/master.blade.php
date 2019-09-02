<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Blogify</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset(mix('app.css', 'vendor/blogify')) }}" rel="stylesheet" type="text/css">
</head>
<body>
	
	<div id="blogify" class="container">
		<header id="header" class="mb-10">

				<h4>header - WhatEver</h4>

		</header>

		<div class="row">
			<div id="sidebar" class="col-2">
				<ul class="nav flex-column">
                    <li class="nav-item">
                        <router-link active-class="active" to="/blog" class="nav-link d-flex align-items-center pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm2 2v12h16V5H2zm8 3l4 5H6l4-5z"></path>
                            </svg>
                            <span>Articles</span>
                        </router-link>
                    </li>
                </ul>
			</div>

			<div id="main" class="col-10">
				<router-view></router-view>
			</div>

		</div>
		

	</div>


<!-- Global Blogify Object -->
<script>
    window.Blogify = @json($blogifyJsVariables);
</script>
	
<script src="{{asset(mix('app.js', 'vendor/blogify'))}}"></script>
</body>
</html>