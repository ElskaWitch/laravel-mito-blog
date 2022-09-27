<x-layouts.main-layout title="Accueil">
		<div class="container">
				<h2 class="text-center text-4xl py-10 font-semibold text-[#6d5ba1]">Blog Mito Laravel</h2>
				<div class="grid grid-cols-4 justify-items-center gap-7">
						@foreach ($posts as $post)
								<a class="card w-80 bg-base-100 shadow-xl py-7 rounded-xl" href="posts/{{ $post->id }}">
										<x-cards.post-card :content="$post->content" :title="$post->title" :url_img="$post->url_img" />
								</a>
						@endforeach
				</div>
		</div>
</x-layouts.main-layout>
