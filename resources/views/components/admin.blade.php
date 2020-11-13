<x-master>
  @section('header-end')
  @endsection
  <div class="mx-auto bg-grey-lightest">
    <!-- Screen -->
    <div class="min-h-screen flex flex-col">
      <!-- Header section starts here -->
      @include('admin.header')
      <!-- /Header -->

      <div class="flex flex-1">
        <!-- Sidebar -->
        @include('admin.sidebar')
        <!-- /Sidebar -->

        <!-- Main -->
        <main class="bg-white-medium flex-1 p-3 overflow-hidden">
          {{ $slot }}
        </main>
        <!-- /Main -->
      </div>
      <!-- Footer -->
      <footer class="bg-gray-800 text-white p-2">
        <div class="flex flex-1 mx-auto">
          &copy; LaraTailwindCSS
        </div>
      </footer>
      <!-- /Footer -->
    </div>
  </div>

  @push('js')
    <script src="{{ asset('js/main.js') }}"></script>
  @endpush
</x-master>
