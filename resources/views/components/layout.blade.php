<!DOCTYPE html>
<html lang="en">
<x-partial.head />
<x-slot name="title">Server Error</x-slot>


<body>
    <x-partial.navbar />

    {{ $slot }}

    <x-partial.footer />
</body>

</html>
