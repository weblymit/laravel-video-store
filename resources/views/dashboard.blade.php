<x-layouts.main-layout title="Dashboard">
		<div class="px-20 py-12">
				<h1 class="text-xl">Hi, {{ Auth::user()->name }}</h1>
				<div class="py-8">
						<a
								class="block"
								href="{{ route('videos.create') }}"
						>Ajouter film</a>
						<a href="{{ route('categories.index') }}">Gérer les catégories</a>
				</div>
		</div>
</x-layouts.main-layout>
