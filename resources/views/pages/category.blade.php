<x-layouts.main-layout title="Dashboard">
		<div class="px-20 py-12">
				<h1 class="text-xl">Gestion des catégories</h1>
				<div class="max-w-sm">
						<form
								action="{{ route('categories.store') }}"
								method="POST"
						>
								@csrf
								<input
										class="w-full rounded-lg"
										name="name"
										placeholder="Add category"
										type="text"
								>
								<button
										class="rounded-lg bg-indigo-500 p-2 text-white"
										type="submit"
								>Ajouter</button>
						</form>
				</div>
				@forelse ($categories as $category)
						<p>{{ $category->name }}</p>
						<div class="my-3 space-x-4 text-xs">
								<a
										class="text-green-500"
										href="{{ route('categories.edit', $category->id) }}"
								>modifier</a>
								<x-btn-delete
										:item='$category'
										routeItem="categories.destroy"
								/>
						</div>
				@empty
						<p>Pas de catégorie actuellement !</p>
				@endforelse
		</div>
</x-layouts.main-layout>
