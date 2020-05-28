<x-master>

<div class="w-full max-w-xs mx-auto">
    
    <div class="bg-white shadow-md rounded-lg px-8 pt-8 pb-8">

            <form method="POST" action="{{ route('login') }}">
                @csrf

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
                        autocomplete="email"
                        placeholder="Email"
                        autofocus>

                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-8">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                        Password
                    </label>

                    <input 
                        id="password" 
                        type="password" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" 
                        name="password" 
                        required 
                        autocomplete="current-password"
                        placeholder="*******">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                {{-- <div class="form-group row mb-6">
                    
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="text-xs" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                    
                </div> --}}

                <div class="flex items-center justify-between">
                    
                        <button 
                            type="submit" 
                            class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        >
                            Login
                        </button>

                        @if (Route::has('password.request'))
                            <a 
                                href="{{ route('password.request') }}"
                                class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" 
                            >
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    
                </div>

            </form>
                
    </div>
</div>

</x-master>
