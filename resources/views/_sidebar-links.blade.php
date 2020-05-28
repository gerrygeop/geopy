<div class="bg-white border border-gray-400 p-4 rounded-lg">
	
	<ul>
		
		<li>
			<a 	href="{{ route('home') }}" 
				class="font-bold text-lg mb-4 block hover:text-blue-300"
			>
				Home
			</a>
		</li>
		<li>
			<a href="/explore" class="font-bold text-lg mb-4 block hover:text-blue-300">Explore</a>
		</li>
		<li>
			<a href="#" class="font-bold text-lg mb-4 block hover:text-blue-300">Notifications</a>
		</li>
		<li>
			<a href="#" class="font-bold text-lg mb-4 block hover:text-blue-300">Messages</a>
		</li>
		<li>
			<a href="#" class="font-bold text-lg mb-4 block hover:text-blue-300">Bookmarks</a>
		</li>
		<li>
			<a href="#" class="font-bold text-lg mb-4 block hover:text-blue-300">Lists</a>
		</li>
		<li>
			<a 	href="{{ route('profile', current_user()) }}" 
				class="font-bold text-lg mb-4 block hover:text-blue-300"
			>
				Profile
			</a>
		</li>
		<li>
			<form action="{{ route('logout') }}" method="POST">
				@csrf
				<button 
					type="submit" 
					class="font-bold text-lg mb-4 block hover:text-red-700">
					Logout
				</button>
			</form>
		</li>

	</ul>

</div>