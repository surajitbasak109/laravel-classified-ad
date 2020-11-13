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
          action="{{ route('register') }}"
          class="max-w-xl m-2 p-10 bg-white rounded shadow-xl"
        >
          @csrf

          <div class="font-bold text-xl mb-4 text-indigo-800 text-center">{{ __('Register') }}</div>
          <div class="mb-2">
              <label
                  for="name"
                  class="block text-indigo-500 text-sm font-bold mb-2"
                  >
                  {{ __('Name') }}
              </label>

              <input
                  id="name"
                  type="text"
                  class="w-full p-2 py-1 mb-2 text-indigo-700 border-b-2 border-indigo-500 outline-none"
                  name="name"
                  value="{{ old('name') }}"
                  required
                  autocomplete="name"
                  autofocus
              />

              @error('name')
              <span class="text-red-500 font-bold" role="alert">
                  {{ $message }}
              </span>
              @enderror
          </div>

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
                  class="w-full p-2 py-1 mb-2 text-indigo-700 border-b-2 border-indigo-500 outline-none"
                  name="email"
                  value="{{ old('email') }}"
                  required
                  autocomplete="email"
              />

              @error('email')
              <span class="text-red-500 font-bold" role="alert">
                  <strong>{{ $message }}</strong>
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
                  class="w-full p-2 py-1 mb-2 text-indigo-700 border-b-2 border-indigo-500 outline-none"
                  name="password"
                  value="{{ old('password') }}"
                  required
                  autocomplete="new-password"
              />

                  @error('password')
                  <span class="text-red-500 font-bold" role="alert">
                      {{ $message }}
                  </span>
              @enderror
          </div>

          <div class="mb-2">
              <label
                  for="password_confirm"
                  class="block text-indigo-500 text-sm font-bold mb-2"
                  >
                  {{ __('Confirm Password') }}
              </label>

              <input
                  id="password_confirm"
                  type="password"
                  class="w-full p-2 py-1 mb-2 text-indigo-700 border-b-2 border-indigo-500 outline-none"
                  name="password_confirmation"
                  value="{{ old('password_confirmation') }}"
                  required
                  autocomplete="new-password"
              />
          </div>

          <div class="mb-2">
              <button
                  type="submit"
                  class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded">
                  {{ __('Register') }}
              </button>
          </div>

          <footer class="flex justify-center">
              <a
                  class="text-indigo-700 hover:text-pink-700 text-sm"
                  href="{{ route('login') }}"
              >
                  Have an account? Login
              </a>
          </footer>
        </form>
      </div>
    </div>
  </div>

</x-master>
