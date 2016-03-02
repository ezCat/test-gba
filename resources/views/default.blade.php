<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/simple-sidebar.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  	<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
</head>

@yield('navigation')

@yield('content')
