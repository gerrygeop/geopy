<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8 bg-white">

    <form action="/tweets" method="POST">
        @csrf

        <textarea 
            name="body" 
            id="" 
            class="w-full"
            placeholder="Tweet something!"
            required 
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img 
                src="{{ current_user()->avatar }}" 
                alt="avatar"
                width="40" 
                style="height: 40px" 
                class="rounded-full mr-2 object-cover">

            <button 
                type="submit" 
                class="bg-blue-500 rounded-lg shadow py-2 px-4 text-sm text-white hover:bg-blue-600"
            >
                Tweet
            </button>

        </footer>

    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror

</div>