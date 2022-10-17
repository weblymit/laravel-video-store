@props(['title'])
<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="UTF-8">
		<meta
				content="IE=edge"
				http-equiv="X-UA-Compatible"
		>
		<meta
				content="width=device-width, initial-scale=1.0"
				name="viewport"
		>
		<title>Vidéo Store | {{ $title }}</title>
		@vite('resources/css/app.css')
</head>

<body>
		@include('partials._navigation')
		<div class="bg-green-500 text-white">
				{{ Session::get('status') }}
		</div>

		{{ $slot }}

		@vite('resources/js/app.js')

</body>

</html>
