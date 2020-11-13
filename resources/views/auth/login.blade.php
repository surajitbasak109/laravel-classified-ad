<x-master>
  @section('body-class', 'h-screen font-sans login bg-cover')
  @section('header-end')
    <style>
      .login {
        background: url('{{ asset('images/login-new.jpeg') }}')
      }
    </style>
  @endsection

  <div class="container mx-auto h-full flex flex-1 justify-center items-center">
      <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form
              method="POST"
              action="{{ route('login') }}"
              class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                @csrf
                <div class="font-bold text-xl mb-4 text-indigo-800 text-center">{{ __('Login') }}</div>
                <div class="mb-4">
                    <label
                        for="email"
                        class="block text-indigo-500 text-sm font-bold mb-2"
                    >
                        {{ __('E-Mail Address') }}
                    </label>
                    <input
                        id="email"
                        type="email"
                        class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus
                    />

                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label
                        for="email"
                        class="block text-indigo-500 text-sm font-bold mb-2"
                    >
                        {{ __('Password') }}
                    </label>
                    <input
                        id="password"
                        type="password"
                        class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none"
                        name="password"
                        required
                        autocomplete="current-password">

                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="remember"
                        id="remember"
                        {{ old('remember') ? 'checked' : '' }}
                    >

                    <label
                        class="form-check-label"
                        for="remember"
                    >
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="mb-2">
                    <button type="submit" class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2
                        px-4 mb-6 rounded">
                        {{ __('Login') }}
                    </button>
                </div>

                <footer class="flex justify-between">
                    <a
                        class="text-indigo-700 hover:text-pink-700 text-sm"
                        href="{{ route('password.request') }}"
                    >
                        {{ __('Forgot Your Password?') }}
                    </a>
                    <a
                        class="text-indigo-700 hover:text-pink-700 text-sm"
                        href="{{ route('register') }}"
                    >
                        {{ __('Register') }}
                    </a>
                </footer>
            </form>
        </div>
      </div>
  </div>

</x-master>
