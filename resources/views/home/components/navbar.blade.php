<nav class="bg-primary  fixed w-full z-20 top-0 start-0 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a class="flex items-center space-x-3 rtl:space-x-reverse" href="/">
            <img src="{{ asset('img/logover2.png') }}" class="h-12 pt-2" alt="Logo">    
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-2">
            @guest
                <button type="button"
                    class=" hover:bg-secondary  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center ">
                    <a href="{{ route('login') }}" class="text-accent"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                </button>
                <button type="button"
                    class="text-background  hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">
                    <a href="{{ route('register') }}" class="text-accent"><i class="fa-solid fa-user-plus"></i></a>

                </button>
            @endguest
            <button class="font-medium rounded-lg text-sm px-4 py-2 text-center">
                <a href="{{ route('carte') }}" class="text-accent"> 
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>

            </button>
            
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
        <div class="items-center justify-between  font-serif hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col bg-transparent p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg- ">
                <li>
                    <a href="{{ route('home') }}" class="font-playfair text-xl block py-2 px-3 text-accent hover:text-secondary"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('menu') }}" class="font-playfair text-xl block py-2 px-3 text-accent hover:text-secondary">Menu</a>
                </li>
                <li>
                    <a href="{{ route('calendar') }}"
                        class="font-playfair text-xl block py-2 px-3  text-accent hover:text-secondary">Reservation</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="font-playfair text-xl block py-2 px-3 text-accent hover:text-secondary">Review</a>
                </li>
                <li>
                    <a href="/#contact" class="font-playfair text-xl block py-2 px-3 text-accent hover:text-secondary">Contact
                        Us</a>
                </li>

            </ul>
           
            @auth

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        <i class="fa-solid fa-arrow-right-from-bracket text-bright-red"></i>
                    </x-dropdown-link>
                </form>
            @endauth
            

        </div>
    </div>
</nav>
































