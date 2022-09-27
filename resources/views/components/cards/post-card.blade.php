@props(['url_img', 'title', 'content'])

<div class="">
		<img alt="{{ $title }}" class="rounded-t-xl" src="{{ $url_img }}">
		<div class="card-body p-5 ">
				<h2 class="card-title text-center text-xl">{{ $title }}</h2>
				<div class="pt-3">
						<p>{{ Str::substr($content, 0, 150) }}</p>
				</div>
		</div>
</div>
