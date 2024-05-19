<x-layout>
    <title>Innovation Teams</title>

    <div class="pl-3">
        <a href="/" class="text-xs text-sky-600">Inovator Center ></a>
        <a href="/innovation-teams" class="text-xs text-sky-600">Innovation Teams</a>
    </div>

    <div class="box-content bg-sky-100 p-1">
        <h1 class="text-center font-bold text-lg my-5 md:text-3x1">
            INNOVATOR CENTER TEAM LIST
        </h1>

        <div class="flex flex-wrap m-auto md:flex-row md:m-0">
            {{-- content here --}}
            @foreach ($teams as $tim)
                <div class="w-56 border border-cyan-400 rounded-lg mx-1 my-2 md:mx-4 md:max-w-sm md:w-full">
                    <div class="box-border p-2 mt-2">
                        <img class="max-h-32 w-auto border border-cyan-500 m-auto rounded-xl scale-90 md:scale-100"
                            src="{{ asset('/img/LogoTim/' . $tim->imgLogo) }}" alt="{{ $tim->nameinovasi }}">
                        <p class="mt-3 font-bold text-center hover:underline hover:decoration-sky-500/30">
                            <a href="{{ route('innovation.read', $tim->id) }}">
                                {{ $tim->nameInovasi }}
                            </a>
                        </p>
                        <p class="text-xs md:text-base text-justify my-2">
                            {{ Str::limit($tim->deskripsi, 150) }}
                            <a href="{{ route('innovation.read', $tim->id) }}"
                                class="px-2 text-white bg-sky-400 rounded-xl hover:text-sky-400 hover:bg-sky-700">
                                More
                            </a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
