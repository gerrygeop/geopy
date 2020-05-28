<x-app>

    <header class="mb-6 bg-white rounded-lg shadow">

    	<div class="relative">
            
            <img 
        		src="https://images.unsplash.com/photo-1490604001847-b712b0c2f967?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1380&q=80" 
        		alt="background"
        		class="rounded-lg mb-2" 
        	>
            <img 
                src="{{ $user->avatar }}" 
                alt="avatars"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 lg:translate-y-1/2 object-cover"
                style="left: 50%; height: 150px;" 
                width="150"
            >
        </div>

    	<div class="flex justify-between items-center mb-4 py-2 px-4">
    		<div style="max-width: 270px;">
    			<h2 class="font-bold text-2xl">{{ $user->name }}</h2>
    			<p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
    		</div>

    		<div class="flex">

    			@can('edit', $user)
                    <a  href="{{ $user->path('edit') }}" class="rounded-full border border-gray-400 py-2 px-4 text-xs mr-2">
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
                
    		</div>

    	</div>
        
        <div class="px-4 pb-4">
    		<p class="text-sm">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum obcaecati veniam aut facilis amet cumque quibusdam magni, minima aperiam possimus dicta mollitia similique officiis in earum nam maxime ipsam a.
    		</p>
        </div>

    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])

</x-app>