<x-layout>
    <title>Daftar Tim</title>

    <div class="box-content bg-sky-100 p-1">
        <h1 class="text-center font-bold text-lg my-5 md:text-3x1">
            DAFTAR TIM INOVATOR CENTER
        </h1>

        <div class="flex flex-wrap m-auto md:flex-row md:m-0">
            {{-- content here --}}
            @foreach ($tims as $tim)
                <div class="border border-cyan-400 rounded-lg mx-1 my-2 md:mx-4 md:max-w-sm md:w-full">
                    <div class="box-border p-2 mt-2">
                        <img class="max-h-32 w-auto border border-cyan-500 m-auto rounded-xl scale-90 md:scale-100"
                            src="{{ asset('img/ImageTim/' . $tim->imgLogo) }}" alt="{{ $tim->nameinovasi }}">
                        <p class="text-xs md:text-base text-justify my-2">
                            {{ $tim->deskripsi }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-layout>
