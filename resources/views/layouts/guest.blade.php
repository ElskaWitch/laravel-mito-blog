<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta content="{{ csrf_token() }}" name="csrf-token">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Fonts -->
		<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

		<!-- Scripts -->
		@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
		<div class="font-sans text-gray-900 antialiased">
				{{ $slot }}
		</div>
</body>

</html>
