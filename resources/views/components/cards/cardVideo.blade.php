@props(['url_img', 'title', 'description'])
<div class="shadow-lg">
		<img
				alt=""
				src="{{ $url_img }}"
		>
		<div class="p-4">
				<p class="pb-3 text-lg font-black">{{ $title }}</p>
				<p>{{ Str::substr($description, 0, 120) }}</p>
		</div>
</div>
