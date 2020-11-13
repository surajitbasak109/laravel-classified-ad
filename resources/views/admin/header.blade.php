<header class="bg-nav">
  <div class="flex justify-between">
    <div class="p-1 mx-3 inline-flex items-center w-1/2 md:w-1/6 lg:w-1/6 justify-between">
      <h1 class="text-white">
        {{ config('app.name') }}
      </h1>
      <i class="fas fa-bars p-3 text-white" onclick="sidebarToggle();"></i>
    </div>
    <div class="p-1 flex flex-row items-center">
      <img
        onclick="profileToggle();"
        class="h-8 w-8 rounded-full hidden md:inline-block lg:inline-block"
        src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4"
        alt=""
        />
      <a
        href="javascript:void(0)"
        onclick="profileToggle();"
        class="p-2 no-underline text-white hidden md:block lg:block"
        >
        Adam Wathan
      </a>
      <div
        id="ProfileDropDown"
        class="rounded hidden shadow-md bg-white absolute pin pin-t mt-12 pin-r"
        >
        <ul class="list-reset">
          <li>
            <a
              href="#"
              class="no-underline px-4 py-2 block text-black text-sm hover:bg-gray-300"
              >
              <i class="fas fa-user mr-1"></i>
              My Account
            </a>
          </li>
          <li>
            <a
              href="#"
              class="no-underline px-4 py-2 block text-black text-sm hover:bg-gray-300"
              >
              <i class="fas fa-bell mr-1"></i>
              Notifications
            </a>
          </li>
          <li>
            <hr class="border-t mx-2 border-gray-300">
          </li>
          <li>
            <a
              href="#"
              class="no-underline px-4 py-2 block text-sm text-black hover:bg-gray-300"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
              >
              <i class="fas fa-power-off mr-1"></i>
              Logout
            </a>
              <form
                id="logout-form"
                method="POST"
                action="{{ route('logout') }}"
                class="hidden"
                >
                @csrf
              </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
