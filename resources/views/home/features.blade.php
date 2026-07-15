<section id="features" class="section py-24">

    <div class="container-veflo">

        <div class="text-center">

            <span class="text-cyan-400 font-bold">
                قابلیت‌های VEFLO
            </span>

            <h2 class="mt-4 text-5xl font-black text-white">
                همه چیز برای رشد کسب‌وکار شما
            </h2>

            <p class="mt-6 max-w-3xl mx-auto text-slate-400 leading-8">
                VEFLO فقط یک ابزار نیست؛
                یک موتور هوشمند برای تحلیل، تولید و انتشار محتواست.
            </p>

        </div>

        <div class="mt-20 grid gap-8 md:grid-cols-2 xl:grid-cols-4">

            @php

            $items=[

            [
            'icon'=>'🧠',
            'title'=>'تحلیل هوشمند',
            'desc'=>'بررسی کیفیت آگهی و ارائه پیشنهادهای حرفه‌ای.'
            ],

            [
            'icon'=>'✍️',
            'title'=>'بازنویسی AI',
            'desc'=>'تولید متن جذاب، حرفه‌ای و بدون تکرار.'
            ],

            [
            'icon'=>'🎯',
            'title'=>'SEO',
            'desc'=>'بهینه‌سازی برای موتورهای جستجو و افزایش بازدید.'
            ],

            [
            'icon'=>'🚀',
            'title'=>'انتشار',
            'desc'=>'آماده‌سازی برای انتشار در رسانه‌های مختلف.'
            ]

            ];

            @endphp

            @foreach($items as $item)

            <div
                class="group rounded-3xl border border-slate-800 bg-slate-900/70 p-8 transition duration-300 hover:-translate-y-2 hover:border-cyan-400/40 hover:shadow-[0_0_40px_rgba(56,189,248,.18)]">

                <div class="text-5xl">

                    {{ $item['icon'] }}

                </div>

                <h3 class="mt-8 text-2xl font-bold text-white">

                    {{ $item['title'] }}

                </h3>

                <p class="mt-5 leading-8 text-slate-400">

                    {{ $item['desc'] }}

                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>