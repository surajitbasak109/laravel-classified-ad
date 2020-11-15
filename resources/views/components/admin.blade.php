<x-master>
  @section('header-end')
  @endsection
  <div class="mx-auto bg-grey-lightest">
    <!-- Screen -->
    <div class="min-h-screen flex flex-col">
      <!-- Header section starts here -->
      @include('admin._header')
      <!-- /Header -->

      <div class="flex flex-1">
        <!-- Sidebar -->
        @include('admin._sidebar')
        <!-- /Sidebar -->

        <!-- Main -->
        <main class="bg-white-medium flex-1 p-3 overflow-hidden">
          {{ $slot }}
        </main>
        <!-- /Main -->
      </div>
    </div>
  </div>

  @push('js')
    <script src="{{ asset('js/admin.js') }}"></script>
  @endpush
</x-master>
