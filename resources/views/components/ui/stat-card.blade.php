@props([
    'icon' => '✨',
    'number' => '',
    'title' => '',
])

<x-ui.card class="p-8 text-center">

    <div class="text-5xl">
        {{ $icon }}
    </div>

    <h3 class="mt-6 text-3xl font-black text-white">
        {{ $number }}
    </h3>

    <p class="mt-3 text-slate-400">
        {{ $title }}
    </p>

</x-ui.card>