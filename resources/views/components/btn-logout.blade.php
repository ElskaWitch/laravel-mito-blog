<!-- Authentication -->
<form action="{{ route('logout') }}" method="POST">
		@csrf
		
		<button class="btn btn-primary" type="submit">Déconnexion</button>
</form>
