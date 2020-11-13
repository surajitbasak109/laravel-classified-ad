<x-master>
    <div id="app">

        @include('includes.admin.nav')

        <main class="py-4">
            {{ $slot }}
        </main>
    </div>
</x-master>
