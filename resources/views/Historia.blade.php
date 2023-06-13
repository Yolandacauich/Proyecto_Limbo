<x-guest-layout>
    <x-navigation-menu></x-navigation-menu>
    <div>
        @php
            $historiaId = session('historia_id');
        @endphp
        @livewire('historia-individual', ['historiaId' => $historiaId], key('historia-individual-' . $historiaId))
    </div>
</x-guest-layout>
