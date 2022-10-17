<x-layouts.main-layout title="Bienvenue sur notre site">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">Titre : {{ $video->title }}</h1>
				<img
						alt=""
						class="w-96"
						src="{{ $video->url_img }}"
				>
				<div class="pt-5">
						<p>{{ $video->nationality }}</p>
						<p class="text-blue-500">Acteur : {{ $video->actor }}</p>
						<p class="text-blue-500">Date de création : {{ $video->year_created }}</p>
						<p>{!! nl2br(e($video->description)) !!}</p>
				</div>
				@auth
						<div class="flex space-x-5 pt-8">
								<a
										class="rounded-lg bg-green-600 p-2 text-white"
										href=""
								>Modifier</a>
								<x-btn-delete :video="$video" />
						</div>
				@endauth
		</div>
</x-layouts.main-layout>
