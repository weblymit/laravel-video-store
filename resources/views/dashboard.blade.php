<x-layouts.main-layout title="Dashboard">
		<div class="px-20 py-12">
				<h1 class="text-xl">Hi, {{ Auth::user()->name }}</h1>
				<div class="py-8">
						<a href="{{ route('videos.create') }}">Ajouter film</a>
						{{-- <a href="{{ route('videos.edit') }}">Modifier film</a> --}}
				</div>
		</div>
</x-layouts.main-layout>
