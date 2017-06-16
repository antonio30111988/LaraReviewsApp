<!DOCTYPE html>
<html>
	<head>
		@yield('head')
		<link rel='stylesheet' href='/css/style.css'>
		<title>
			@yield('title')
		</title>
	</head>
	<body>
		<div class="container">
			<div class="heading">
				@yield('heading')
			</div>
			<div class="content">
				@yield('content')
			</div>
			<div class="footer">@yield('footer')</div>
		</div>
	</body>
</html>