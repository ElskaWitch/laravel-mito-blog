<x-layouts.main-layout title="Accueil">
		<div>
				<h2>Hello World</h2>
				@foreach ($posts as $post)
						<div class="py-3">
								<p class="font-semibold text-lg">{{ $post->title }}</p>
								<p>{{ $post->content }}</p>
						</div>
				@endforeach
		</div>
</x-layouts.main-layout>
