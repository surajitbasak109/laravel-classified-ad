<x-admin>
  @section('title', 'Add new category | '.config('app.name'));
  <div class="container mt-2">
    <form
      method="POST"
      action="{{ route('admin.category.store') }}"
      class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/2 mx-auto"
      >
      @csrf

      <h1 class="font-bold text-xl mb-4 text-indigo-600 uppercase">Create New Category</h1>
      <div class="mb-4">
        <label
          class="font-bold text-indigo-500 block mb-4"
          for="name"
          >
          Name
        </label>
        <input
          type="text"
          name="name"
          id="name"
          value="{{ old('name') }}"
          placeholder="Enter category name"
          autocomplete="name"
          class="border-b-2 border-indigo-400 py-4 px-2 outline-none w-full"
          autofocus
          {{--required--}}
          >
          @error('name')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
          @enderror
      </div>

          <div class="mb-4">
            <label
              class="font-bold text-indigo-500 block mb-4"
              for="description"
              >
              Description
            </label>

            <textarea
              name="description"
              id="description"
              placeholder="Enter description"
              autocomplete="description"
              class="border-b-2 border-indigo-400 py-4 px-2 outline-none w-full"
              >{{ old('description') }}</textarea>
            @error('description')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror

          </div>

          <footer class="w-full fixed bottom-0 left-0 border-t border-gray-400 z-9999 bg-white">
            <div class="container mx-auto py-2">
              <div class="flex flex-1">
                <div class="w-3/4"></div>
                <div class="w-1/4 text-right">
                  <button
                    type="submit"
                    class="rounded py-2 px-8 bg-indigo-800 text-white">
                    <i class="fas fa-save mr-1"></i>
                    Save
                  </button>
                  <a
                    class="rounded py-2 px-8 bg-red-600 text-white mr-4"
                    href="{{ route('admin.category.index') }}">
                    <i class="fas fa-sign-out-alt mr-1"></i>
                    Back
                  </a>
                </div>
              </div>
            </div>
          </footer>
    </form>
  </div>

</x-admin>
