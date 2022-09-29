@props(['url_img', 'title', 'content'])

<div class="">
		<div class="grid place-content-center">
				<img alt="{{ $title }}" class="rounded-xl w-64 " src="{{ asset('storage/' . $url_img) }}">
		</div>
		<div class="card-body p-5">
				<h2 class="card-title text-center text-xl">{{ $title }}</h2>
				<div class="pt-3">
						<p>{{ Str::substr($content, 0, 150) }}</p>
				</div>
		</div>
</div>
