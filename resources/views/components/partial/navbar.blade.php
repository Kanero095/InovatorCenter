<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/home" class="flex ml-5 items-center space-x-3 rtl:space-x-reverse">
            <img class="h-14 w-auto" src="{{ asset('img/logo/LogoInovator.png') }}" alt="InovatorCenter">
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/home"
                        class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">Struktur
                        Organisasi
                    </a>
                </li>
                <li>
                    <a href="/innovation-teams"
                        class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">
                        Teams
                    </a>
                </li>
                <li>
                    <a href="/innovations"
                        class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">Innovation
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">
                        Berita
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">
                        About
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
