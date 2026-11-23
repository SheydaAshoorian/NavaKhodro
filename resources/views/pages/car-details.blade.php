@extends('layouts.app')

@section('title', 'جزئیات و سوابق خودرو | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[250px] flex items-center justify-center overflow-hidden bg-slate-900">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        <div class="relative z-10 flex flex-col items-center text-center px-4 mt-8">
        <span class="inline-flex items-center gap-2 bg-blue-500/20 text-blue-300 border border-blue-500/30 text-sm font-bold px-4 py-1.5 rounded-full mb-3 backdrop-blur-sm">
            🚗 پرونده خودرو
        </span>
            <h1 class="text-2xl md:text-4xl font-black text-white">مشخصات و سوابق <span class="text-blue-500">خودرو</span></h1>
        </div>
    </section>

    <!-- بخش اصلی -->
    <div class="max-w-[1000px] mx-auto px-4 md:px-8 mt-10 relative z-20 pb-16">
        <!-- کارت اطلاعات اصلی خودرو -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden mb-6">
            <div class="bg-blue-600 p-6 md:p-8 text-white flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-5">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-4xl shadow-inner">
                        🚘
                    </div>
                    <div>
                        <h2 class="text-2xl font-black">BMW 320i</h2>
                        <p class="text-blue-100 font-mono text-sm mt-1" dir="ltr">VIN: WBA8E9C50GK123456</p>
                        <p class="text-blue-100 text-sm mt-1">پلاک: ۱۲ب۳۴۵ ایران ۱۱</p>
                    </div>
                </div>
                <div class="bg-white/10 border border-white/20 px-6 py-3 rounded-2xl text-center backdrop-blur-sm">
                    <div class="text-xs text-blue-100 mb-1">وضعیت گارانتی</div>
                    <div class="font-black text-emerald-300 flex items-center gap-2">
                        <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
                        فعال تا ۱۴۰۶/۰۳/۱۵
                    </div>
                </div>
            </div>

            <div class="p-6 md:p-8 grid grid-cols-2 md:grid-cols-4 gap-6 bg-slate-50">
                <div>
                    <div class="text-xs text-slate-500 mb-1">سال ساخت</div>
                    <div class="font-black text-slate-800 text-lg">۱۴۰۳</div>
                </div>
                <div>
                    <div class="text-xs text-slate-500 mb-1">رنگ</div>
                    <div class="font-black text-slate-800 text-lg">سفید</div>
                </div>
                <div>
                    <div class="text-xs text-slate-500 mb-1">کارکرد فعلی</div>
                    <div class="font-black text-slate-800 text-lg">۲۵٬۰۰۰ کیلومتر</div>
                </div>
                <div>
                    <div class="text-xs text-slate-500 mb-1">آخرین سرویس</div>
                    <div class="font-black text-slate-800 text-lg">۱۴۰۴/۰۶/۲۰</div>
                </div>
            </div>
        </div>

        <!-- جدول سوابق سرویس -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 md:p-8">
            <h3 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-2 border-b border-slate-100 pb-4">
                <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                تاریخچه سرویس‌ها
            </h3>

            <div class="overflow-x-auto">
                <table class="w-full text-right text-sm">
                    <thead>
                    <tr class="bg-slate-50 text-slate-500">
                        <th class="p-4 rounded-r-xl font-bold">تاریخ</th>
                        <th class="p-4 font-bold">نوع سرویس</th>
                        <th class="p-4 font-bold">کیلومتر</th>
                        <th class="p-4 font-bold">تعمیرگاه</th>
                        <th class="p-4 rounded-l-xl font-bold">وضعیت</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                    <tr>
                        <td class="p-4 text-slate-600 font-semibold">۱۴۰۴/۰۶/۲۰</td>
                        <td class="p-4 font-bold text-slate-800">سرویس دوره‌ای ۲۰,۰۰۰ کیلومتر</td>
                        <td class="p-4 text-slate-600">۲۱٬۵۰۰</td>
                        <td class="p-4 text-slate-600">مرکز خدمات تهران</td>
                        <td class="p-4"><span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-lg text-xs font-bold">تکمیل شده</span></td>
                    </tr>
                    <tr>
                        <td class="p-4 text-slate-600 font-semibold">۱۴۰۴/۰۲/۱۵</td>
                        <td class="p-4 font-bold text-slate-800">تعویض لنت ترمز جلو</td>
                        <td class="p-4 text-slate-600">۱۵٬۲۰۰</td>
                        <td class="p-4 text-slate-600">شعبه بابلسر</td>
                        <td class="p-4"><span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-lg text-xs font-bold">تکمیل شده</span></td>
                    </tr>
                    <tr>
                        <td class="p-4 text-slate-600 font-semibold">۱۴۰۳/۱۱/۰۵</td>
                        <td class="p-4 font-bold text-slate-800">سرویس دوره‌ای ۱۰,۰۰۰ کیلومتر</td>
                        <td class="p-4 text-slate-600">۱۰٬۱۰۰</td>
                        <td class="p-4 text-slate-600">مرکز خدمات تهران</td>
                        <td class="p-4"><span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-lg text-xs font-bold">تکمیل شده</span></td>
                    </tr>
                    <tr>
                        <td class="p-4 text-slate-600 font-semibold">۱۴۰۳/۰۸/۱۰</td>
                        <td class="p-4 font-bold text-slate-800">سرویس اولیه (۱۰۰۰ کیلومتر)</td>
                        <td class="p-4 text-slate-600">۱٬۰۰۰</td>
                        <td class="p-4 text-slate-600">شعبه بابلسر</td>
                        <td class="p-4"><span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-lg text-xs font-bold">تکمیل شده</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- دکمه‌های پایین صفحه -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
            <a href="{{ route('car-info') }}" class="bg-white border border-slate-300 text-slate-700 font-bold px-8 py-3 rounded-xl hover:bg-slate-50 transition-colors text-center">
                جستجوی خودروی دیگر
            </a>
            <a href="{{ route('booking') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-black px-8 py-3 rounded-xl shadow-lg transition-all text-center">
                رزرو نوبت سرویس
            </a>
        </div>
    </div>
@endsection

