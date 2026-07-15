<div class="relative flex items-center justify-center w-[520px] h-[520px]">

    {{-- Glow Background --}}
    <div class="absolute w-[430px] h-[430px] rounded-full bg-cyan-500/10 blur-[120px] animate-pulse"></div>

    <div class="absolute w-[380px] h-[380px] rounded-full bg-violet-600/10 blur-[100px] animate-pulse"></div>

    {{-- Outer Ring --}}
    <div
        class="absolute w-[430px] h-[430px] rounded-full border border-cyan-400/20 animate-spin-slow">
    </div>

    {{-- Middle Ring --}}
    <div
        class="absolute w-[340px] h-[340px] rounded-full border border-violet-500/30 animate-spin-reverse">
    </div>

    {{-- Inner Ring --}}
    <div
        class="absolute w-[260px] h-[260px] rounded-full border border-blue-400/20 animate-spin-slow">
    </div>

    {{-- Core Glow --}}
    <div
        class="absolute w-52 h-52 rounded-full bg-gradient-to-br from-cyan-400 via-blue-500 to-violet-600 shadow-[0_0_120px_rgba(59,130,246,.8)] animate-pulse">
    </div>

    {{-- Center Core --}}
    <div
        class="absolute flex items-center justify-center w-36 h-36 rounded-full border border-white/10 bg-slate-900/80 backdrop-blur-xl shadow-2xl">

        <span
            class="text-2xl font-black tracking-widest bg-gradient-to-r from-cyan-300 via-sky-400 to-violet-400 bg-clip-text text-transparent">

            VEFLO

        </span>

    </div>

    {{-- Orbit Point --}}
    <div
        class="absolute w-[430px] h-[430px] animate-spin-slow">

        <div
            class="absolute left-1/2 -translate-x-1/2 -top-2 w-4 h-4 rounded-full bg-cyan-300 shadow-[0_0_25px_rgba(34,211,238,.9)]">
        </div>

    </div>

    {{-- Orbit Point --}}
    <div
        class="absolute w-[340px] h-[340px] animate-spin-reverse">

        <div
            class="absolute left-1/2 -translate-x-1/2 -bottom-2 w-3 h-3 rounded-full bg-violet-400 shadow-[0_0_20px_rgba(167,139,250,.9)]">
        </div>

    </div>

</div>