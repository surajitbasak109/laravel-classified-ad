<x-admin>
  @section('title', 'All Categories | '.config('app.name'))
  <div class="container mx-auto mt-2">
    <div class="lg:flex justify-between items-center">
      <div class="w-full lg:w-3/4">
        <h1 class="font-bold text-xl">All Categories</h1>
      </div>
      <div class="w-full lg:w-1/4 text-right">
        <a
          href="{{ route('admin.category.create') }}"
          class="rounded-md py-2 px-4 bg-red-600 text-white border border-red-500 hover:bg-red-500">
          <i class="fa fa-plus mr-1"></i>
          Add New
        </a>
      </div>
    </div>

    <div class="w-full lg:overflow-x-hidden overflow-x-auto mt-8">
      <ul class="px-0">
        @foreach($categories as $category)
          <li class="border list-none rounded-sm px-3 py-3 @if(!$loop->last) border-b-0 @endif">
            <div class="flex justify-between">
              <div>{{ $category->name }}</div>
              @if(!empty($category->icon))
                <div>
                  <i class="fa fa-{{ $category->icon }}"></i>
                </div>
              @endif
              <div>{{ $category->created_at->diffForHumans() }}</div>
              <div class="flex">
                <a class="text-white text-sm py-2 px-4 bg-indigo-400 hover:bg-indigo-500 mr-2"
                   href="{{ route('admin.category.edit', $category->id) }}">Edit</a>
                <form
                  method="POST"
                  action="{{ route('admin.category.destroy', $category->id) }}"
                  class="inline"
                >
                  @csrf
                  @method('DELETE')
                  <button
                    class="text-white text-sm py-2 px-4 bg-red-400 hover:bg-red-500"
                  >Delete
                  </button>
                </form>
              </div>
            </div>

            @if($category->children)
              <ul class="ml-4 mt-2">
                @foreach($category->children as $child)
                  <li class="mb-1">
                    <div class="flex justify-between">
                      <div>{{ $child->name }}</div>
                      @if(!empty($child->icon))
                        <div>
                          <i class="fa fa-{{ $child->icon }}"></i>
                        </div>
                      @endif
                      <div>{{ $child->created_at->diffForHumans() }}</div>
                      <div class="flex">
                        <a class="text-white text-xs py-2 px-4 bg-indigo-400 hover:bg-indigo-500 mr-2"
                           href="{{ route('admin.category.edit', $child->id) }}">Edit</a>
                        <form
                          method="POST"
                          action="{{ route('admin.category.destroy', $child->id) }}"
                          class="inline"
                        >
                          @csrf
                          @method('DELETE')
                          <button
                            class="text-white text-xs py-2 px-4 bg-red-400 hover:bg-red-500"
                          >Delete
                          </button>
                        </form>
                      </div>
                    </div>
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
        @endforeach
      </ul>

      <div class="mt-4">
        {{ $categories->links('pagination::tailwind') }}
      </div>
    </div>
  </div>

</x-admin>
