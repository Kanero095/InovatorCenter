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
                    @foreach ($innovations as $innovation)
                        <div class="w-full border border-cyan-400 rounded-lg mx-1 my-2 md:mx-1.5 md:max-w-sm md:w-full">
                            <div class="box-border p-2 mt-2">
                                <img class="max-h-32 w-auto border border-cyan-500 m-auto rounded-xl scale-90 md:scale-100"
                                    src="{{ asset('/img/Innovations/' . $innovation->imgInnovation) }}"
                                    alt="{{ $innovation->nameinnovation }}">
                                <p class="mt-3 font-bold text-center hover:underline hover:decoration-sky-500/30">
                                    <a href="#">
                                        {{ $innovation->nameinnovation }}
                                    </a>
                                </p>
                                <p class="text-xs md:text-base text-justify my-2">
                                    {{ Str::limit($innovation->descriptionInnovation, 150) }}
                                    <a href="{{ route('innovation.read', $innovation->id) }}"
                                        class="px-2 text-white bg-sky-400 rounded-xl hover:text-sky-400 hover:bg-sky-700">
                                        More
                                    </a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
