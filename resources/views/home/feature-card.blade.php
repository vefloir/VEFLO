@props([
    'icon' => '✨',
    'title' => '',
])

<x-ui.card class="p-8">

    <div class="text-5xl">

        {{ $icon }}

    </div>

    <h3 class="mt-6 text-2xl font-black text-white">

        {{ $title }}

    </h3>

    <div class="mt-5 leading-8 text-slate-400">

        {{ $slot }}

    </div>

</x-ui.card>