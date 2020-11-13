<x-master>
    <div class="flex h-screen bg-indigo-700 items-center">
        <div class="container mx-auto">
            <div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">
                <div class="font-bold text-xl mb-4 text-indigo-800 text-center">{{ __('Reset Password') }}</div>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-2">
                        <label
                            for="email"
                            class="block text-indigo-500 text-sm font-bold mb-2"
                            >
                            {{ __('E-Mail Address') }}
                        </label>

                        <input
                            id="email"
                            type="email"
                            class="w-full p-2 py-1 mb-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                            name="email"
                            value="{{ $email ?? old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            >

                            @error('email')
                            <span class="text-red-500 font-bold" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                    </div>

                    <div class="mb-2">
                        <label
                            for="password"
                            class="block text-indigo-500 text-sm font-bold mb-2"
                            >
                            {{ __('Password') }}
                        </label>

                        <input
                            id="password"
                            type="password"
                            class="w-full p-2 py-1 mb-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                            name="password"
                            required
                            autocomplete="new-password"
                            />

                        @error('password')
                        <span class="font-bold text-red-500" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label
                            for="password-confirm"
                            class="block text-indigo-500 text-sm font-bold mb-2"
                        >
                            {{ __('Confirm Password') }}
                        </label>

                        <input
                            id="password-confirm"
                            type="password"
                            class="w-full p-2 py-1 mb-2 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                        />
                    </div>

                    <div class="mb-2">
                        <button
                            type="submit"
                            class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-master>
