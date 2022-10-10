@php
$styleLink = 'bg-black px-3 py-1 rounded-xl hover:bg-blue-200 hover:text-black text-white';
@endphp

<x-layouts.main-layout title="Dashboard">
		<x-slot name="header">
				<h2 class="font-semibold text-xl text-gray-800 leading-tight">
						{{ __('Dashboard') }}
				</h2>
		</x-slot>

		<div class="container">
				<h1 class="text-center text-4xl pt-10  font-semibold text-[#6d5ba1] ">Bienvenue {{ Auth::user()->name }} sur ton
						Dashboard</h1>
				<div class="py-10 text-center space-x-5 ">
						<a class=" {{ $styleLink }} " href=" {{ route('posts.create') }} ">New post</a>
						<a class="{{ $styleLink }} " href=" ">Liste des post</a>
				</div>
		</div>
</x-layouts.main-layout>
