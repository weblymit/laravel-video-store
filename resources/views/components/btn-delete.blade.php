@props(['video'])
<div class="">
		<form
				action="{{ route('videos.destroy', $video->id) }}"
				method="POST"
				onsubmit="return confirm('Are you sure you want to delete this video ?')"
		>
				@csrf
				@method('DELETE')
				<button
						class="rounded-lg bg-red-500 p-3 text-white"
						type="submit"
				>Supprimer</button>
		</form>
</div>
