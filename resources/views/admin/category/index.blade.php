<x-admin>
  @section('title', 'All Categories | '.config('app.name'));
  <div class="container mx-auto mt-2">
    <div class="flex justify-between items-center">
      <div class="w-3/4">
        <h1 class="font-bold text-xl">All Categories</h1>
      </div>
      <div class="w-1/4 text-right">
        <a
          href="{{ route('admin.category.create') }}"
          class="rounded-md py-2 px-4 bg-red-600 text-white border border-red-500 hover:bg-red-500">
          <i class="fa fa-plus mr-1"></i>
          Add New
        </a>
      </div>
    </div>

    <div class="mt-8">
      <table class="table-auto w-full">
        <thead class="text-white">
          <tr class="bg-teal-400 text-white">
            <th class="px-4 py-2 text-left">Name</th>
            <th class="px-4 py-2 text-left">Description</th>
            <th class="px-4 py-2 text-left">Created at</th>
            <th class="px-4 py-2 text-left" width="110px">Actions</th>
          </tr>
        </thead>

        <tbody>
          @forelse($categories as $category)
            <tr class="">
              <td class="border-grey-light border hover:bg-gray-100 px-4 py-2">{{ $category->name }}</td>
              <td class="border-grey-light border hover:bg-gray-100 px-4 py-2 truncate">{{ $category->description }}</td>
              <td class="border-grey-light border hover:bg-gray-100 px-4 py-2 truncate">{{ $category->created_at->diffForHumans() }}</td>
              <td class="border-grey-light border hover:bg-gray-100 px-4 py-2" width="150px">
                <a
                  class="text-blue-400 hover:text-blue-500 hover:font-medium"
                  href="{{ route('admin.category.edit', $category->id) }}">Edit</a> |
                <form
                  method="POST"
                  action="{{ route('admin.category.destroy', $category->id) }}"
                  class="inline"
                  >
                  @csrf
                  @method('DELETE')
                  <button
                    class="text-red-400 hover:text-red-500 hover:font-medium"
                    href="{{ route('admin.category.destroy', $category->id) }}"
                    >Delete</button>
                </form>
              </td>

            </tr>
          @empty
            <tr>
              <td class="mt-2 text-green-500" colspan="4">No records found</td>
            </tr>
          @endforelse
        </tbody>
      </table>

      <div class="mt-4">
        {{ $categories->links('pagination::tailwind') }}
      </div>
    </div>
  </div>

</x-admin>
