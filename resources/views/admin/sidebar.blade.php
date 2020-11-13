<aside
  id="sidebar"
  class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block"
  >
  <ul class="list-reset flex flex-col">
    <li class="w-full h-full py-3 px-2 border-b border-gray-300 bg-white">
      <a
        href="{{ route('home') }}"
        class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline flex
        justify-between items-center"
      >
        <i class="fas fa-tachometer-alt mx-2"></i>
        <span class="flex-1">Dashboard</span>
        <span><i class="fas fa-angle-right"></i></span>
      </a>
    </li>
    <li class="w-full h-full py-3 px-2 border-b border-gray-300">
      <a
        href="/forms"
        class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline flex
        justify-between items-center"
      >
        <i class="fab fa-wpforms mx-2"></i>
        <span class="flex-1">Forms</span>
        <span><i class="fas fa-angle-right"></i></span>
      </a>
    </li>
  </ul>
</aside>
