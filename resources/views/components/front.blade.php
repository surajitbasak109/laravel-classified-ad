<x-master>
  <div class="preloader fixed h-full w-full bg-white z-9999">
    <div class="loader table-cell align-middle text-center">
      <div class="spinner absolute w-12 left-1/2 top-1/2 -mr-8 z-18 pointer-events-none">
        <div class="spinner-container pointer-events-none absolute w-full pb-100p inset-y-1/2 my-1/2">
          <div class="spinner-rotator absolute w-full h-full">
            <div class="spinner-left absolute top-0 left-0 bottom-0 overflow-hidden right-1/2">
              <div class="spinner-circle left-0 border-r divide-gray-200 box-border absolute w-full h-full border-solid
                rounded-full"></div>
            </div>
            <div class="spinner-right absolute top-0 right-0 bottom-0 overflow-hidden left-1/2"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
 {{ $slot }}
</x-master>
