<x-layouts.main>
    <x-slot:title>
        {{ ucwords($path) }}
    </x-slot:title>

    <x-header>
        <x-slot:path>
            {{ $path }}
        </x-slot:path>
    </x-header>

</x-layouts.main>