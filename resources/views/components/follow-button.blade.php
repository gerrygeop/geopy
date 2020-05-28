{{-- cek jika ini profil user yang login hilangkan tombol follow --}}
@unless(current_user()->is($user))

	<form action="{{ route('follow', $user->username) }}" method="POST">
	    @csrf
	    <button 
	        type="submit" 
	        class="bg-blue-400 rounded-full shadow py-2 px-4 text-white text-xs"
	    >
	        {{ current_user()->following($user) ? 'Unfollow' : 'Follow' }}
	    </button>
	</form>

@endunless