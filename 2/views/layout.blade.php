<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>@yield('title')</title>
</head>
<body>
	@include('cabecera')
	@include('menu')
	@yield('contenido')
</body>
</html>

