<!DOCTYPE html>
<html lang="en">
	<head>
	 	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	  	<title>@yield('title','Boston DSA Sign In Application')</title>
	  	<meta name="description" content="Boston DSA Sign In app for meetings.">
	  	<meta name="author" content="Sean Beck">

	  	<link rel="SHORTCUT ICON" href="/favicon.ico" />

	  	<script src="https://use.typekit.net/btv4ydl.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

	 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	 	<link href="/css/app.css" rel="stylesheet" type="text/css">

	 	<script src="https://use.typekit.net/tjj3ezf.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	  
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	   	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-10">
				@yield('content')
			</div>
		</div>
	</body>
</html>