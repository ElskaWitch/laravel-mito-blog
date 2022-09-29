<x-layouts.main-layout title="Create">
		<div class="container">
				<h2 class="text-center text-4xl py-10 font-semibold text-[#6d5ba1]">New Post</h2>
				<form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
						@csrf
						<div class="px-96">
								{{-- title --}}
								<input class="block w-full rounded-xl border-gray-400" name="title" placeholder="Titre du post" type="text"
										value="{{ old('title') }}">
								<x-error-msg name="title" />
								{{-- content --}}
								<textarea class="mt-5 block w-full rounded-xl border-gray-400" cols="30" id="" name="content"
								  placeholder="Votre contenu..." rows="10">{{ old('content') }}</textarea>
								<x-error-msg name="content" />
								{{-- img --}}
								<div class="py-3">
										<label for="">Choisir une image:</label>
										<input class="block" id="" name="url_img" type="file">
										<x-error-msg name="url_img" />
								</div>
								{{-- <div class="py-5">
										<input class="block w-full rounded-xl border-gray-400" name="url_img" placeholder="Url de votre image"
												type="text" value="https://source.unsplash.com/640x480/?animals?1">
								</div> --}}
								<div class="text-center">
										<button class="btn btn-primary" type="submit">Envoyer</button>
								</div>
						</div>
				</form>
		</div>
</x-layouts.main-layout>
