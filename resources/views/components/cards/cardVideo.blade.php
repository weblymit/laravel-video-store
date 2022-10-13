@props(['url_img', 'title', 'description'])
<div class="">
		<img
				alt=""
				src="{{ $url_img }}"
		>
		<div class="">
				<p>{{ $title }}</p>
				<p>{{ Str::substr($description, 0, 120) }}</p>
		</div>
</div>
