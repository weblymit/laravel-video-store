<x-layouts.main-layout title="Bienvenue sur notre site">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">List vidéo</h1>
				<div class="grid grid-cols-4 gap-4">
						@forelse ($videos as $video)
								<a href="{{ route('videos.show', $video->id) }}">
										{{-- <a href="videos/{{ $video->id }}"> --}}
										<x-cards.cardVideo
												:title="$video->title"
												:description="$video->description"
												:url_img="$video->url_img"
										/>
								</a>
						@empty
								<p>No video yet</p>
						@endforelse
				</div>
				<div class="pt-8">
						{{ $videos->links() }}
				</div>
		</div>
</x-layouts.main-layout>
