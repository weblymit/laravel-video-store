<x-layouts.main-layout title="Bienvenue sur notre site">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">Titre : {{ $video->title }}</h1>
				<img
						alt=""
						class="w-96"
						src="{{ asset('storage/' . $video->url_img) }}"
				>
				<div class="pt-5">
						@forelse ($video->list_actors as $actor)
								<p>{{ $actor->name }}</p>
						@empty
								<p>pas d'acteur pour ce film</p>
						@endforelse

						<p>{{ $video->nationality }}</p>
						<p class="text-blue-500">Acteur : {{ $video->actor }}</p>
						<p class="text-blue-500">Date de création : {{ $video->year_created }}</p>
						<p>{!! nl2br(e($video->description)) !!}</p>
				</div>
				@auth
						<div class="flex space-x-5 pt-8">
								<a
										class="rounded-lg bg-green-600 p-2 text-white"
										href="{{ route('videos.edit', $video->id) }}"
								>Modifier</a>
								<x-btn-delete
										:item="$video"
										routeItem="videos.destroy"
								/>
						</div>
				@endauth
		</div>
</x-layouts.main-layout>
