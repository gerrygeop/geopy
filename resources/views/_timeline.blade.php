<div class="border border-gray-400 rounded-lg bg-white mb-6">

    @forelse($tweets as $tweet)
        @include('_tweet')

    @empty
    	<p class="p-4">No tweet yet.</p>

    @endforelse

    {{ $tweets->links() }}

</div>