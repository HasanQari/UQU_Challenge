 <div class="grid gap-4 grid-cols-1">
     <div class="border h-64">booking by user</div>


 </div>

 <div class="grid gap-4 grid-cols-2">
    <h1 class="m-5 mb-0">اضافة عقار جديد</h1><br>
     <div class="border h-64 flex justify-center py-2">
         <form action="{{ route('estate.store') }}" method="post" class="">
             {!! csrf_field() !!}
             <input id="name" type="text" name="name" placeholder="اكتب اسم العقار" class="">
             <select name="type" id="type" class="px-10 py-2 rounded-full m-3">
                 <option value="1">استراحة</option>
                 <option value="2">جلسة</option>
             </select><br>
             <input id="descrip" type="text" name="descrip" placeholder="قم بوصف العقار" class="">
             <select name="location" id="location" class="px-10 py-2 rounded-full m-3">
                 <option value="makkah">مكة</option>
                 <option value="jeddah">جدة</option>
                 <option value="taif">الطائف</option>
                 <option value="madina">المدينة</option>
                 <option value="abha">أبها</option>
             </select><br>
             <input id="p-night" type="number" name="price_night" placeholder="السعر بالليلة" class=""><br>
             <input id="p-hour" type="number" name="price_hour" placeholder="السعر بالساعة" class="">
             <input type="submit" value="اضافة" class="btn btn-success border border-lime-400 hover:bg-lime-400 rounded-full m-3 px-11 py-2">
         </form>
     </div>
     <div class="border h-64">money</div>
 </div>

 <div class="grid gap-4 grid-cols-1 grid-rows-1">

     <div class="border h-64 ">
         <table class="table-fixed border grid grid-cols-1 text-center">
             <thead>
                 <tr class="grid grid-cols-7 border">
                     <td class="border border-black">#</td>
                     <td class="border border-black">الاسم</td>
                     <td class="border border-black">النوع</td>
                     <td class="border border-black">الموقع</td>
                     <td class="border border-black">سعر ليلة</td>
                     <td class="border border-black">سعر ساعة</td>
                     <td class="border border-black">Action</td>
                 </tr>
             </thead>
             <tbody>
                @foreach($real_estate as $e)
                <tr class="grid grid-cols-7 border">
                    <td class="border border-black">123456</td>
                    <td class="border border-black">استراحة النجمة</td>
                    <td class="border border-black">استراحة</td>
                    <td class="border border-black">مكة</td>
                    <td class="border border-black">2449</td>
                    <td class="border border-black">132</td>
                    <td class="border border-black">تفاصيل</td>
                </tr>
                @endforeach
             </tbody>
         </table>
     </div>

 </div>
