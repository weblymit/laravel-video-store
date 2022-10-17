<x-layouts.main-layout title="Dashboard">
		<div class="px-20 py-12">
				<h1 class="text-xl">Gestion des catégories</h1>
				<div class="max-w-sm">
						<form
								action="{{ route('categories.update', $category->id) }}"
								method="POST"
						>
								@csrf
								@method('PUT')
								<input
										class="w-full rounded-lg"
										name="name"
										placeholder="Add category"
										type="text"
										value="{{ old('name', $category->name) }}"
								>
								<button
										class="rounded-lg bg-indigo-500 p-2 text-white"
										type="submit"
								>Ajouter</button>
						</form>
				</div>
		</div>
</x-layouts.main-layout>
