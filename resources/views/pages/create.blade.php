@php
$style = 'rounded-lg w-full block mb-3';
@endphp
<x-layouts.main-layout title="Bienvenue sur notre site">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">Create new video</h1>
				<div class="max-w-sm">
						<form
								action="{{ route('videos.store') }}"
								enctype="multipart/form-data"
								method="post"
						>
								@csrf
								<div class="">
										<input
												class="{{ $style }}"
												name="title"
												placeholder="Votre titre"
												type="text"
												value="{{ old('title') }}"
										>
										<x-error-msg name="title" />
								</div>
								<div class="">
										<textarea
										  class="{{ $style }}"
										  cols="30"
										  id=""
										  name="description"
										  rows="10"
										>{{ old('description') }}"</textarea>
										<x-error-msg name="description" />

								</div>
								<div class="">
										<input
												class="{{ $style }}"
												name="nationality"
												placeholder="Nationalité"
												type="text"
												value="{{ old('nationality') }}"
										>
										<x-error-msg name="nationality" />

								</div>
								<div class="">
										<input
												class="{{ $style }}"
												name="year_created"
												placeholder="Année du film"
												type="text"
												value="{{ old('year_created') }}"
										>
										<x-error-msg name="year_created" />

								</div>
								<div class="">
										<input
												class="{{ $style }}"
												name="actor"
												placeholder="Acteur"
												type="text"
												value="{{ old('actor') }}"
										>
										<x-error-msg name="actor" />

								</div>
								<div class="">
										<input
												class="{{ $style }}"
												name="url_img"
												placeholder="Votre image"
												type="file"
										>
										<x-error-msg name="url_img" />

								</div>
								<button
										class="mt-5 rounded-lg bg-indigo-500 p-2 text-white"
										type="submit"
								>Envoyer</button>
						</form>

				</div>

		</div>
</x-layouts.main-layout>
