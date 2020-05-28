<x-app>

	<div class="bg-white rounded-lg p-6">

		@foreach($users as $user)
			<a href="{{ $user->path() }}" class="flex items-center mb-5">
				<img src="{{ $user->avatar}}" 
					 alt="avatar"
					 class="rounded-full object-cover mr-4"
					 style="height: 50px"
					 width="50">
			
				<div>
					<h4 class="font-bold">{{ '@'.$user->username }}</h4>
				</div>

			</a>
		@endforeach
		
		<div class="flex items-center w-full text-red-500 font-bold justify-center px-4">
			<ul>
				<li>
					{{ $users->links() }}
				</li>
			</ul>
		</div>

	</div>

</x-app>
