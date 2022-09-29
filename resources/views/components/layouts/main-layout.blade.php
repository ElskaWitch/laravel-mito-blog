@props(['title'])

<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="ie=edge" http-equiv="X-UA-Compatible">
		<title>Blog Mito | {{ $title }}</title>
		{{-- font awesome --}}
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
		<!-- Fonts -->
		<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		{{-- font Oswald --}}
		<link href="https://fonts.googleapis.com" rel="preconnect">
		<link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
		<!-- import Tailwind -->
		@vite('resources/css/app.css')
		{{-- scrollreveal --}}
		<script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
		@include('partials.navbar._nav')
		<div class="px-16 py-7">
				@include('partials._session')
				{{ $slot }}
		</div>
		@include('partials.footer._footer')

		{{-- Js se mets tjrs avant la fin de body --}}
		@vite('resources/js/app.js')
</body>

</html>
