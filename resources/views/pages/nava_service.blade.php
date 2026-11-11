@extends('layouts.app')

@section('title', 'نواسرویس | خدمات پس از فروش و قطعات یدکی')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[400px] lg:h-[450px] overflow-hidden bg-slate-900">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/banner.jpeg') }}');"></div>
    </section>

    <!-- بخش خدمات -->
    <!-- بخش خدمات -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-20 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- باکس اول: قطعات یدکی -->

            <div class="bg-white rounded-3xl p-8 md:p-10 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] border border-slate-100">
                <div class="flex flex-col items-center text-center gap-4 mb-8 pb-8 border-b border-slate-100">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-3xl shadow-sm">
                        🛠️
                    </div>
                    <div>
                        <h2 class="text-2xl font-black text-slate-900">خدمات تعمیرگاهی</h2>
                        <p class="text-base text-slate-500 mt-2 font-medium">رزرو نوبت، پیگیری وضعیت و اطلاعات خودرو</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <a href="{{ route('booking') }}" class="group flex items-center gap-5 p-5 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition-all duration-300 border border-transparent hover:border-indigo-100">
                        <div class="w-14 h-14 rounded-xl bg-white text-slate-400 group-hover:text-indigo-600 flex items-center justify-center shadow-sm transition-colors text-2xl">📅</div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 group-hover:text-indigo-700">ثبت نوبت تعمیرگاهی</h3>
                            <p class="text-base text-slate-500 mt-1">رزرو نوبت سرویس دوره‌ای یا تعمیر</p>
                        </div>
                    </a>
                    <a href="{{ route('track-car') }}" class="group flex items-center gap-5 p-5 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition-all duration-300 border border-transparent hover:border-indigo-100">
                        <div class="w-14 h-14 rounded-xl bg-white text-slate-400 group-hover:text-indigo-600 flex items-center justify-center shadow-sm transition-colors text-2xl">🚗</div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 group-hover:text-indigo-700">پیگیری خودرو</h3>
                            <p class="text-base text-slate-500 mt-1">مشاهده وضعیت لحظه‌ای خودرو با کد رهگیری</p>
                        </div>
                    </a>
                    <a href="{{ route('car-info') }}" class="group flex items-center gap-5 p-5 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition-all duration-300 border border-transparent hover:border-indigo-100">
                        <div class="w-14 h-14 rounded-xl bg-white text-slate-400 group-hover:text-indigo-600 flex items-center justify-center shadow-sm transition-colors text-2xl">📋</div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 group-hover:text-indigo-700">دسترسی به اطلاعات خودرو</h3>
                            <p class="text-base text-slate-500 mt-1">مشاهده تاریخچه سرویس و وضعیت گارانتی</p>
                        </div>
                    </a>
                    <a href="{{ route('complaints') }}" class="group flex items-center gap-5 p-5 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition-all duration-300 border border-transparent hover:border-indigo-100">
                        <div class="w-14 h-14 rounded-xl bg-white text-slate-400 group-hover:text-indigo-600 flex items-center justify-center shadow-sm transition-colors text-2xl">📣</div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 group-hover:text-indigo-700">ثبت شکایت</h3>
                            <p class="text-base text-slate-500 mt-1">ثبت و پیگیری شکایت از خدمات</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- باکس دوم: خدمات تعمیرگاهی -->

            <div class="bg-white rounded-3xl p-8 md:p-10 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] border border-slate-100">
                <div class="flex flex-col items-center text-center gap-4 mb-8 pb-8 border-b border-slate-100">
                    <div class="w-16 h-16 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-3xl shadow-sm">
                        ⚙️
                    </div>
                    <div>
                        <h2 class="text-2xl font-black text-slate-900">قطعات یدکی</h2>
                        <p class="text-base text-slate-500 mt-2 font-medium">جستجو و تهیه قطعات اصل با ضمانت اصالت</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <a href="{{ route('part-search') }}" class="group flex items-center gap-5 p-5 rounded-2xl bg-slate-50 hover:bg-blue-50 transition-all duration-300 border border-transparent hover:border-blue-100">
                        <div class="w-14 h-14 rounded-xl bg-white text-slate-400 group-hover:text-blue-600 flex items-center justify-center shadow-sm transition-colors text-2xl">🔍</div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 group-hover:text-blue-700">جستجوی قطعه</h3>
                            <p class="text-base text-slate-500 mt-1">جستجو بر اساس برند، مدل، سال و کد فنی</p>
                        </div>
                    </a>
                    <a href="{{ route('track-order') }}" class="group flex items-center gap-5 p-5 rounded-2xl bg-slate-50 hover:bg-blue-50 transition-all duration-300 border border-transparent hover:border-blue-100">
                        <div class="w-14 h-14 rounded-xl bg-white text-slate-400 group-hover:text-blue-600 flex items-center justify-center shadow-sm transition-colors text-2xl">📦</div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 group-hover:text-blue-700">وضعیت درخواست / پیگیری سفارش</h3>
                            <p class="text-base text-slate-500 mt-1">مشاهده وضعیت ارسال و تحویل سفارش قطعات</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- بخش جدید: چرا نواسرویس؟ (برای پر کردن فضای خالی) -->
    <section class="bg-white border-t border-slate-200 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-black text-slate-900 mb-4">چرا نواسرویس را انتخاب کنیم؟</h2>
            <p class="text-slate-500 text-lg mb-12 max-w-2xl mx-auto">ما در کنار شما هستیم تا خودروی شما همیشه در بهترین وضعیت باشد.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-slate-50 rounded-3xl">"C:\Program Files\Git\bin\bash.exe" --login -i
                    <div class="text-4xl mb-4">🛡️</div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">ضمانت اصالت</h3>
                    <p class="text-slate-500 text-base">تمامی قطعات ارائه شده در نواسرویس دارای ضمانت اصالت و سلامت فیزیکی هستند.</p>
                </div>
                <div class="p-8 bg-slate-50 rounded-3xl">
                    <div class="text-4xl mb-4">⏱️</div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">پشتیبانی ۲۴/۷</h3>
                    <p class="text-slate-500 text-base">تیم پشتیبانی ما در تمام ساعات شبانه‌روز آماده پاسخگویی به شما عزیزان است.</p>
                </div>
                <div class="p-8 bg-slate-50 rounded-3xl">
                    <div class="text-4xl mb-4">⚡</div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">تحویل سریع</h3>
                    <p class="text-slate-500 text-base">سفارشات قطعات شما در سریع‌ترین زمان ممکن به دستتان خواهد رسید.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
