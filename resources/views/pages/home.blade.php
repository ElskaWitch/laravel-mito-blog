<x-layouts.main-layout title="Accueil">
		<div class="container">
				<h2 class="text-center text-4xl py-10 font-semibold text-[#6d5ba1]">Mito-Blog Laravel</h2>
				<div class="grid grid-cols-4 justify-items-center gap-7" id="container_card">
						@forelse ($posts as $post)
								<a class="card w-80 bg-base-100 shadow-xl py-7 rounded-xl" href="posts/{{ $post->id }}">
										<x-cards.post-card :content="$post->content" :title="$post->title" :url_img="$post->url_img" />
								</a>
						@empty
								<p class="text-xl text-[#0e0037]">Pas d'article actuellement</p>
						@endforelse
				</div>
				<div class="pt-10">
						{{ $posts->links('pagination::simple-tailwind') }}
				</div>
		</div>
</x-layouts.main-layout>
