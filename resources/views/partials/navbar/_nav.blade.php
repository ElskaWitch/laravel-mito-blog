<nav
		class="bg-gradient-to-r from-[#0e0037] via-[#6d5ba1] to-[#0e0037] text-white px-16 py-3 flex justify-between items-center">
		<a class="text-2xl" href="/" id="logo">Mito-Blog</a>
		<div class=" space-x-4 flex" id="navitem">
				<div class="bg-black px-3 py-1 rounded-xl hover:bg-blue-200 hover:text-black">
						<a href="/">Home</a>
				</div>
				<div class="bg-black px-3 py-1 rounded-xl hover:bg-blue-200 hover:text-black">
						<a href="{{ route('posts.create') }}">New Post</a>
				</div>
		</div>
</nav>
