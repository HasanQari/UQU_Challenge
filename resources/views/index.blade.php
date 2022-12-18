<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    {{-- Page Title --}}
    <title>Welcome to RelaxIN</title>

</head>

<body class="bg-scroll" style="background-image: url(/image/bg.jpg)">

    <div dir="ltr" class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl md:h-80">
        <div class="md:flex">
            <div class="md:shrink-0">
                <img class="h-72 w-full object-cover md:h-full md:w-72" src="/image/r-logo.png" alt="LOGO-RelaxIN">
            </div>
            <div class="p-10" dir="rtl">
                {{-- <div class="uppercase tracking-wide text-sm text-neutral-500 font-semibold">Company retreats</div> --}}
                <h1 class="block mt-2 text-lg leading-tight font-medium text-red-500 hover:text-red-700">
                    خيارك الأفضل لقضاء وقت الراحة</h1>
                <p class="mt-3 text-slate-500">يمكنك في منصة <strong class="text-red-500">RelaxIN</strong> حجز
                    الاستراحات أو الجلسات باليوم أو الساعة
                    بكل سهولة <span class="text-red-500">وأنت مرتاح البال.</span></p>
            </div>

        </div>
        <div class="mb-7 text-center md:text-right md:mx-10">
            <a href="{{ url('/booking') }}"
                class="border p-3 px-20 bg-red-500 text-white rounded-t-full rounded-l-full hover:bg-red-800 hover:underline font-semibold">احجز
                الان</a>
        </div>
        <div class="mb-10 text-center md:text-right md:mx-10">

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="border p-3 px-10 bg-neutral-800 text-white rounded-b-full rounded-l-full hover:bg-neutral-500 hover:underline font-semibold">لوحة
                        تحكم المالك</a>
                @else
                    <a href="{{ route('login') }}"
                        class="border p-3 px-10 bg-neutral-800 text-white rounded-b-full rounded-l-full hover:bg-neutral-900 hover:underline font-semibold">دخول
                        المالك</a>
                @endauth
            @endif
        </div>
    </div>
    <div class="text-center bg-red-900 max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <a href="#" class="ml-3 underline hover:text-cyan-500 font-semibold text-white">
            HasanQari:LinkedIn
        </a>

        <a href="https://github.com/HasanQari" class="ml-3 underline hover:text-cyan-500 font-semibold text-white">
            HasanQari:GitHub
        </a>
    </div>


</body>

</html>
