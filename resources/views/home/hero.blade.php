<section class="section relative overflow-hidden">

    {{-- Motion Background --}}
    <div class="hero-bg">

        <div class="hero-gradient"></div>

        <div class="hero-grid"></div>

        <div class="hero-noise"></div>

    </div>

    {{-- Glow --}}
    <div class="absolute -top-40 left-0 h-96 w-96 rounded-full bg-blue-600/20 blur-3xl"></div>

    <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-violet-600/20 blur-3xl"></div>

    <div class="container-veflo relative z-10 grid min-h-[90vh] items-center gap-20 lg:grid-cols-2">

        {{-- Left --}}
        <div>

            <span
                class="glass radius-xl inline-flex items-center px-5 py-2 text-sm font-semibold text-blue-300">

                ✨ نسل جدید تولید محتوا با هوش مصنوعی

            </span>

            <h1 class="mt-8 text-5xl font-black leading-tight lg:text-7xl">

                آگهی‌های شما را

                <span class="text-gradient">

                    به مشتری تبدیل می‌کنیم

                </span>

            </h1>

            <p class="mt-8 max-w-2xl text-xl leading-10 text-slate-300">

                VEFLO آگهی شما را تحلیل می‌کند،
                آن را بازنویسی می‌کند،
                تصویر می‌سازد،
                برای شبکه‌های اجتماعی آماده می‌کند
                و در آینده روی صدها رسانه منتشر خواهد کرد.

            </p>

            <div class="mt-12 flex flex-wrap gap-5">

                <a href="/register"
                   class="motion-card glow radius-xl bg-gradient-to-r from-blue-600 to-violet-600 px-8 py-4 font-bold">

                    🚀 تحلیل رایگان آگهی

                </a>

                <a href="#features"
                   class="glass motion-card radius-xl px-8 py-4">

                    مشاهده امکانات

                </a>

            </div>

        </div>

        {{-- Right --}}
        <div class="flex items-center justify-center">

            <div class="flex items-center justify-center">

                <x-ai.engine />

            </div>

        </div>

    </div>

</section>