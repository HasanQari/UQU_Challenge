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
    <title>Booking in RelaxIN</title>

</head>

<body class="bg-slate-100">

    <div dir="ltr" class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-4xl md:h-48">
        <div class="md:flex">
            <div class="md:shrink-0">
                <img class="h-72 w-full object-cover md:h-full md:w-64" src="/image/r-logo.png" alt="LOGO-RelaxIN">
            </div>
            <div class="p-10">
                <select name="" id="">
                    <option value="city">city</option>
                </select>
            </div>

<table class="table-fixed border grid grid-cols-1 text-center">
             <thead>
                 <tr class="grid grid-cols-7 border">
                     <td class="border border-black">#</td>
                     <td class="border border-black">الاسم</td>
                     <td class="border border-black">النوع</td>
                     <td class="border border-black">الموقع</td>
                     <td class="border border-black">سعر ليلة</td>
                     <td class="border border-black">سعر ساعة</td>
                     <td class="border border-black">سعر ساعة</td>
                     <td class="border border-black">Action</td>
                 </tr>
             </thead>
             <tbody>
                @foreach($real_estate as $e)
                <tr class="grid grid-cols-7 border">
                    <td class="border border-black">{{$e->id}}</td>
                    <td class="border border-black">{{$e->name}}</td>
                    <td class="border border-black">{{$e->type_name}}</td>
                    <td class="border border-black">{{$e->location}}</td>
                    <td class="border border-black">{{$e->price_night}}</td>
                    <td class="border border-black">132</td>
                    <td class="border border-black">تفاصيل</td>
                </tr>
                @endforeach
             </tbody>
         </table>
        </div>
    </div>

</body>

</html>
