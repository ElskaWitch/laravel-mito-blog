<x-layouts.main-layout :title="$post->title">
		<div class="container">
				<h2 class="text-center text-4xl py-10 font-semibold text-[#6d5ba1]">{{ $post->title }}</h2>
				<div class="grid place-items-center">
						<img alt="{{ $post->title }}" class="rounded-xl w-96 " src="{{ $post->url_img }}">
						<p class="text-center px-96 py-10">{{ $post->content }}</p>
				</div>
				<div class="pt-6 text-center">
						<x-btn-delete :post="$post" />
				</div>
		</div>
</x-layouts.main-layout>
