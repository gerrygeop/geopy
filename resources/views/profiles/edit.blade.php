<x-app>
	
	<form action="{{ $user->path() }}" method="POST" class="bg-white rounded-md p-6" enctype="multipart/form-data">
		@csrf
		@method('PATCH')

		<div class="mb-6">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                Username
            </label>

            <input 
                id="username" 
                type="text" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror" 
                name="username" 
                value="{{ $user->username }}" 
                required 
                autocomplete="username" 
                autofocus>

            @error('username')
                <p class="text-red text-xs mt-2">{{ $message }}</p>
            @enderror
            
        </div>

        <div class="mb-6">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                Name
            </label>

            <input 
                id="name" 
                type="text" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror" 
                name="name" 
                value="{{ $user->name }}" 
                required 
                autocomplete="name" 
                autofocus>

            @error('name')
                <p class="text-red text-xs mt-2">{{ $message }}</p>
            @enderror
            
        </div>

        <div class="mb-6">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                E-Mail Address
            </label>
            
            <input 
                id="email" 
                type="email" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" 
                name="email" 
                value="{{ $user->email }}" 
                required 
                autocomplete="email">

            @error('email')
                <p class="text-red text-xs mt-2">{{ $message }}</p>
            @enderror
            
        </div>

        <div class="mb-6">
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

        <div class="mb-6">
            <label for="avatar" class="block text-gray-700 text-sm font-bold mb-2">
                Avatar
            </label>

            <div class="flex">
                <input 
                    id="avatar" 
                    type="file" 
                    class="shadow border rounded w-full p-2 text-gray-700 " 
                    name="avatar">

                <img src="{{ $user->avatar }}" 
                     alt="avatar" 
                     class="object-cover rounded-full"
                     width="50" 
                     style="height: 50px">
            </div>

            @error('avatar')
                <p class="text-red text-xs mt-2">{{ $message }}</p>
            @enderror
            
        </div>

        <div class="form-group row mb-0">

            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded mr-4">
                Update
            </button>

            <a href="{{ $user->path() }}" class="border border-gray-400 rounded py-2 px-4">Cancel</a>

            
        </div>

	</form>

</x-app>