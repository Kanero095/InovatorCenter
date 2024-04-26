<div>
    <nav class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        id="menu-button" aria-controls="mobile-menu" aria-expanded="true">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
                  Icon when menu is closed.

                  Menu open: "hidden", Menu closed: "block"
                -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
                  Icon when menu is open.

                  Menu open: "block", Menu closed: "hidden"
                -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-10 w-auto" src="{{ asset('img/logo/LogoInovator.png') }}" alt="InovatorCenter">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4" role="none">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/home"
                                class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">Dashboard</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">Struktur
                                Organisasi</a>
                            <a href="/daftar-tim-inovasi"
                                class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">Daftar
                                Tim Inovasi</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">Berita</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-sky-700 hover:text-white hover:font-bold rounded-md px-3 py-2 text-sm font-medium">About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2" role="menu" aria-orientation="vertical"
                aria-labelledby="menu-button" tabindex="-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/home" role="menuitem" tabindex="-1" id="menu-item-0"
                    class="bg-gray-900 text-gray-300 block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Dashboard</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Struktur
                    Organisasi</a>
                <a href="/daftar-tim-inovasi"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Daftar
                    Tim Inovasi</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Berita</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
            </div>
        </div>
    </nav>

</div>
