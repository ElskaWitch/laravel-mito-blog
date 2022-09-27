@if (Session::has('status'))
		<div class="alert alert-success shadow-lg max-w-md mx-auto">
				<div>
						<svg class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"
										stroke-width="2" />
						</svg>
						<span>{{ Session::get('status') }}</span>
				</div>
		</div>
@endif
