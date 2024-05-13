<x-layout>

    <title>Tim {{ $teams->nameInovasi }}</title>

    <div class="pl-3">
        <a href="/" class="text-xs text-sky-600">Inovator Center ></a>
        <a href="/innovation-teams" class="text-xs text-sky-600">Innovation Teams ></a>
        <a class="text-xs text-sky-600">{{ $teams->nameInovasi }}</a>
    </div>

    <div class="box-content bg-sky-100 p-1">
        <div class="box-border p-2 mt-1">
            {{-- image logo --}}
            <img class="max-h-80 w-auto border border-cyan-500 m-auto rounded-xl scale-90 md:scale-100"
                src="{{ asset('/img/LogoTim/' . $teams->imgLogo) }}" alt="{{ $teams->nameInovasi }}">

            {{-- Innovation Name --}}
            <h1 class="font-bold text-2xl text-center md:mt-2 md:text-4xl">
                {{ $teams->nameInovasi }}
            </h1>

            {{-- link sosmed --}}
            <div class="flex justify-center md:mt-1">
                {{-- website --}}
                <div class="mx-px">
                    <a href="{{ $teams->website }}">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5 mt-1 md:w-7 md:h-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </a>
                </div>

                {{-- ig --}}
                <div class="mx-px">
                    <a href="{{ $teams->instagram }}">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                            class="w-5 h-5 mt-1 md:w-7 md:h-7" viewBox="0 0 50 50">
                            <path
                                d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z">
                            </path>
                        </svg>
                    </a>
                </div>

                {{-- fb --}}
                <div class="mx-px">
                    <a href="{{ $teams->facebook }}">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                            viewBox="0 0 50 50" class="w-5 h-5 mt-1 md:w-7 md:h-7">
                            <path
                                d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z">
                            </path>
                        </svg>
                    </a>
                </div>

                {{-- other --}}
                <div class="mx-px">
                    <a href="{{ $teams->other }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mt-1 md:w-7 md:h-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>

                    </a>
                </div>
            </div>

            <div class="px-2 mt-2 md:p-2 md:px-6">
                {{-- deskripsi --}}
                <p class="text-xs md:text-base text-justify my-2">
                    {{ $teams->deskripsi }}
                </p>
            </div>

            {{-- image tim --}}
            <img class="max-h-64 w-full mt-2 border border-cyan-500 m-auto rounded-xl scale-90 md:scale-100 md:w-5/12"
                src="{{ asset('/img/ImageTim/' . $teams->imgTim) }}" alt="{{ $teams->nameinovasi }}">
        </div>
    </div>

</x-layout>
