<div class="bg-white border border-gray-400 rounded-lg py-4 px-6">
	<h3 class="font-bold text-blue-300 text-xl mb-4">Following</h3>

	<ul>

		@forelse(current_user()->follows as $user)
			<li class="mb-4">

				<a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
					<img 
						src="{{ $user->avatar }}" 
						alt="avatar"
						width="40" 
						style="height: 40px;" 
						class="rounded-full mr-2 object-cover">

					{{ $user->name }}
				</a>
				
			</li>
		@empty
			<li>Follow Somebody</li>

		@endforelse

	</ul>
</div>
