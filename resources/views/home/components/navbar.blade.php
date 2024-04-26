<nav
    class="bg-[#ca8920] dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo"> --}}

            <a href="{{ route('home') }}"
                class="self-center text-2xl font-semibold whitespace-nowrap text-white hover:text-[#48230e]"><i class="fa-solid fa-utensils"></i>Morocco</a>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-2">
            @guest
                <button type="button"
                    class=" hover:bg-[#48230e]  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <a href="{{ route('login') }}" class="text-white">login</a>
                </button>
                <button type="button"
                    class="text-white  hover:bg-[#48230e] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <a href="{{ route('register') }}" class="text-white">registre</a>
                    
                </button>
                
            @endguest
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col bg-transparent p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg- dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700  ">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 px-3 text-white hover:text-[#48230e]"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('menu') }}" class="block py-2 px-3 text-white hover:text-[#48230e]">Menu</a>
                </li>
                <li>
                    <a href="{{ route('calendar') }}"
                        class="block py-2 px-3  text-white hover:text-[#48230e]">Reservation</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="block py-2 px-3 text-white hover:text-[#48230e]">Review</a>
                </li>
                <li>
                    <a href="/#contact" class="block py-2 px-3 text-white hover:text-[#48230e]">Contact
                        Us</a>
                </li>
                <li>
                    <a href="#aboutus" class="block py-2 px-3 text-white hover:text-[#48230e]">About
                        Us</a>
                </li>

            </ul>

            @auth
                
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
            @endauth
        </div>
    </div>
</nav>