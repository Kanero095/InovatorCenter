<x-layout>
    <title>Home</title>

    <div class="pl-3">
        <a href="/" class="text-xs text-sky-600">Inovator Center ></a>
        <a href="/home" class="text-xs text-sky-600">Home</a>
    </div>

    <div class="box-content bg-sky-100 p-2">
        <div class="container mx-auto px-4 py-2">
            <img class="max-h-96 w-auto border m-auto mt-10 rounded-xl" src="{{ asset('img/logo/LogoInovator.png') }}"
                alt="InovatorCenter">

            <div class="border border-sky-400 rounded-lg p-2 mt-8">
                <p class="font-bold text-lg">
                    --> Innovation List
                </p>
                <div class="flex flex-wrap m-auto md:flex-row md:m-0 overflow-x-scrool">
                    {{-- content here --}}
                    @foreach ($teams as $tim)
                        <div class="w-full border border-cyan-400 rounded-lg mx-1 my-2 md:mx-4 md:max-w-sm md:w-full">
                            <div class="box-border p-2 mt-2">
                                <img class="max-h-32 w-auto border border-cyan-500 m-auto rounded-xl scale-90 md:scale-100"
                                    src="{{ asset('/img/LogoTim/' . $tim->imgLogo) }}" alt="{{ $tim->nameinovasi }}">
                                <p class="mt-3 font-bold text-center hover:underline hover:decoration-sky-500/30">
                                    <a href="{{ route('innovation.read', $tim->id) }}">
                                        {{ $tim->nameInovasi }}
                                    </a>
                                </p>
                                <a href="{{ route('innovation.read', $tim->id) }}">
                                    <p class="text-xs md:text-base text-justify my-2">
                                        {{ Str::limit($tim->deskripsi, 150) }}
                                    </p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
