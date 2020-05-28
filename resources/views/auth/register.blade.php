<x-master>

<div class="w-full max-w-lg mx-auto">

    <div class="bg-white shadow-md rounded-lg px-8 pt-8 pb-8">

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                    Username
                </label>

                <input 
                    id="username" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror" 
                    name="username" 
                    value="{{ old('username') }}" 
                    required 
                    autocomplete="username" 
                    autofocus>

                @error('username')
                    <p class="text-red text-xs mt-2">{{ $message }}</p>
                @enderror
                
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                    Name
                </label>

                <input 
                    id="name" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required 
                    autocomplete="name" 
                    autofocus>

                @error('name')
                    <p class="text-red text-xs mt-2">{{ $message }}</p>
                @enderror
                
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                    E-Mail Address
                </label>
                
                <input 
                    id="email" 
                    type="email" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email">

                @error('email')
                    <p class="text-red text-xs mt-2">{{ $message }}</p>
                @enderror
                
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                    Password
                </label>

                <input 
                    id="password" 
                    type="password" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" 
                    name="password" 
                    required 
                    autocomplete="new-password">

                @error('password')
                    <p class="text-red text-xs mt-2">{{ $message }}</p>
                @enderror
                
            </div>

            <div class="mb-6">
                <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                    Confirm Password
                </label>

                <input 
                    id="password-confirm" 
                    type="password" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password">
                
            </div>

            <div class="form-group row mb-0">

                <button 
                    type="submit" 
                    class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                >
                    Register
                </button>

                
            </div>

        </form>

    </div>
</div>

</x-mater>