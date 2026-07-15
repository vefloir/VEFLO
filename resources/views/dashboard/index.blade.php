@extends('layouts.app')

@section('title','Dashboard | VEFLO')

@section('content')

<div class="min-h-screen bg-slate-950 text-white">

    <div class="flex">

        {{-- Sidebar --}}
        @include('dashboard.sidebar')

        {{-- Main --}}
        <main class="flex-1">

            {{-- Header --}}
            @include('dashboard.header')

            <div class="p-10">

                {{-- AI Core --}}
                @include('dashboard.ai-core')

                {{-- Statistics --}}
                @include('dashboard.stats')

                {{-- Cards --}}
                @include('dashboard.cards')

                {{-- Activity --}}
                @include('dashboard.activity')

            </div>

        </main>

    </div>

</div>

@endsection