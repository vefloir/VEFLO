<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'VEFLO | انتشار هوشمند محتوا')</title>

    <meta name="description"
        content="VEFLO پلتفرم هوشمند تحلیل آگهی، تولید محتوا و انتشار خودکار برای رشد کسب‌وکار">

    <meta name="keywords"
        content="هوش مصنوعی, تولید محتوا, تحلیل آگهی, انتشار آگهی, VEFLO">

    <meta name="author" content="VEFLO">

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-slate-950 text-white antialiased">

    @include('components.navbar')

    <main>

        @yield('content')

    </main>

</body>

</html>