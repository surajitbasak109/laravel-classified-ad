<x-admin>
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
  </div>

</x-admin>
