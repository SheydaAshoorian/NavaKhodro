@extends('layouts.app')

@section('title', 'رویدادها و وبلاگ | نواخودرو')

@section('content')
    <!-- بخش ۱: هیرو -->
    <x-hero />
    <!-- بخش اصلی -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            <!-- ستون سمت راست (پست‌ها) -->
            <div class="lg:col-span-2 space-y-8">
                <!-- پست ۱ -->
                <article class="bg-white shadow-sm border border-slate-100 overflow-hidden group hover:shadow-lg transition-all duration-300 flex flex-col md:flex-row h-auto md:h-72">
                    <!-- بخش عکس (سمت راست - بدون گردی در سمت راست) -->
                    <a href="#" class="block w-full md:w-2/5 h-64 md:h-full relative overflow-hidden flex-shrink-0">
                        <img src="{{asset('images/b-1.jpg')}}" alt="کمپین رانندگی سبز" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">رویداد ویژه</div>
                    </a>

                    <!-- بخش متن (سمت چپ - با گردی در سمت چپ) -->
                    <div class="p-6 md:p-8 flex flex-col justify-center flex-1 md:rounded-l-3xl bg-white">
                        <div class="flex items-center gap-4 text-xs text-slate-500 mb-3 font-semibold">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> ۳۱ تیر ۱۴۰۴</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> بهزاد عرفانیان</span>
                        </div>
                        <h2 class="text-xl md:text-2xl font-black text-slate-900 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                            <a href="#">همراهی با طبیعت در کمپین رانندگی سبز فونیکس NEV</a>
                        </h2>
                        <p class="text-slate-600 text-sm leading-relaxed line-clamp-2 md:line-clamp-3 mb-4">
                            کمپین «رانندگی سبز» فونیکس NEV روز جمعه ۲۷ تیر ۱۴۰۴ با حضور مشتریان خودروهای برقی فونیکس برگزار شد؛ رویدادی صمیمی و متفاوت که با صرف صبحانه، معرفی فناوری خودروهای MSH توسط تیم برند فونیکس، اهدای هدایای ویژه و حرکت گروهی به دل طبیعت همراه بود.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-blue-600 text-sm font-bold hover:text-blue-800 transition-colors">
                            ادامه مطلب
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        </a>
                    </div>
                </article>

                <!-- پست ۲ -->
                <article class="bg-white shadow-sm border border-slate-100 overflow-hidden group hover:shadow-lg transition-all duration-300 flex flex-col md:flex-row h-auto md:h-72">
                    <!-- بخش عکس (سمت راست - بدون گردی در سمت راست) -->
                    <a href="#" class="block w-full md:w-2/5 h-64 md:h-full relative overflow-hidden flex-shrink-0">
                        <img src="{{asset('images/b-2.jpg')}}" alt="نکوداشت دکتر اسماعیل‌پور" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </a>

                    <!-- بخش متن (سمت چپ - با گردی در سمت چپ) -->
                    <div class="p-6 md:p-8 flex flex-col justify-center flex-1 md:rounded-l-3xl bg-white">
                        <div class="flex items-center gap-4 text-xs text-slate-500 mb-3 font-semibold">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> ۲۸ اردیبهشت ۱۴۰۴</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> بهزاد عرفانیان</span>
                        </div>
                        <h2 class="text-xl md:text-2xl font-black text-slate-900 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                            <a href="#">نواخودرو، همراه اندیشه و فرهنگ | نکوداشت دکتر ابوالقاسم اسماعیل‌پور</a>
                        </h2>
                        <p class="text-slate-600 text-sm leading-relaxed line-clamp-2 md:line-clamp-3 mb-4">
                            در تقویم فرهنگی ایران، برخی روزها تنها یادآور تاریخ نیستند، بلکه تجلی احترام به دانایی و گرامی‌داشت اندیشه‌اند. ۲۸ فروردین ۱۴۰۴ یکی از همین روزها بود که دانشگاه صنعتی نوشیروانی بابل، میزبان مراسم نکوداشتی درخور برای دکتر ابوالقاسم اسماعیل‌پور مطلق شد.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-blue-600 text-sm font-bold hover:text-blue-800 transition-colors">
                            ادامه مطلب
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        </a>
                    </div>
                </article>
            </div>

            <!-- ستون سمت چپ (سایدبار) -->
            <div class="space-y-8">

                <!-- باکس جستجو -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100">
                    <h3 class="text-lg font-black text-slate-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        جستجو در مقالات
                    </h3>
                    <form action="#" class="relative">
                        <input type="text" placeholder="کلمه مورد نظر..." class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 px-4 text-sm outline-none focus:border-blue-500 focus:bg-white transition-all">
                        <button type="submit" class="absolute left-2 top-1/2 -translate-y-1/2 bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                    </form>
                </div>

                <!-- باکس دسته‌بندی‌ها -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100">
                    <h3 class="text-lg font-black text-slate-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        دسته‌بندی‌ها
                    </h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center justify-between py-2 text-slate-600 hover:text-blue-600 transition-colors group">
                                <span class="group-hover:translate-x-[-4px] transition-transform">آموزش آپشن خودرو</span>
                                <span class="bg-slate-100 text-slate-500 text-xs py-1 px-2.5 rounded-md group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors">۱۲</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between py-2 text-slate-600 hover:text-blue-600 transition-colors group">
                                <span class="group-hover:translate-x-[-4px] transition-transform">اطلاعات روز خودروها</span>
                                <span class="bg-slate-100 text-slate-500 text-xs py-1 px-2.5 rounded-md group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors">۸</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between py-2 text-blue-600 font-bold transition-colors group">
                                <span class="group-hover:translate-x-[-4px] transition-transform">رویداد</span>
                                <span class="bg-blue-100 text-blue-600 text-xs py-1 px-2.5 rounded-md">۱۵</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between py-2 text-slate-600 hover:text-blue-600 transition-colors group">
                                <span class="group-hover:translate-x-[-4px] transition-transform">اخبار برندها</span>
                                <span class="bg-slate-100 text-slate-500 text-xs py-1 px-2.5 rounded-md group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors">۲۴</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- باکس آرشیو -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100">
                    <h3 class="text-lg font-black text-slate-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                        آرشیو ماهانه
                    </h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="text-sm text-slate-600 hover:text-blue-600 flex items-center gap-2 py-1.5"><span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span> شهریور ۱۴۰۴</a></li>
                        <li><a href="#" class="text-sm text-slate-600 hover:text-blue-600 flex items-center gap-2 py-1.5"><span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span> تیر ۱۴۰۴</a></li>
                        <li><a href="#" class="text-sm text-slate-600 hover:text-blue-600 flex items-center gap-2 py-1.5"><span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span> خرداد ۱۴۰۴</a></li>
                        <li><a href="#" class="text-sm text-slate-600 hover:text-blue-600 flex items-center gap-2 py-1.5"><span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span> اردیبهشت ۱۴۰۴</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
