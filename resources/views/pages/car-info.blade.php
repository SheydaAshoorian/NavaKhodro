@extends('layouts.app')

@section('title', 'سوابق و اطلاعات خودرو | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[300px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 max-w-2xl mt-8">
        <span class="inline-flex items-center gap-2 bg-blue-500/20 text-blue-300 border border-blue-500/30 text-sm font-bold px-4 py-1.5 rounded-full mb-4 backdrop-blur-sm">
            📋 نواسرویس
        </span>
            <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">اطلاعات <span class="text-blue-500">خودرو</span></h1>
            <p class="text-lg text-slate-300 leading-relaxed">
                شماره پلاک یا VIN خودروی خود را وارد کنید تا سوابق کامل را مشاهده کنید.
            </p>
        </div>
    </section>

    <!-- بخش اصلی -->
    <div class="max-w-[1000px] mx-auto px-4 md:px-8 py-12">

        <!-- فرم جستجو -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 md:p-8 mb-8">
            <form id="carInfoForm" onsubmit="event.preventDefault(); window.location.href='{{ route('car-details') }}';" class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <label class="block text-sm text-slate-600 mb-2 font-bold">شماره پلاک یا VIN خودرو *</label>
                    <input type="text" id="carIdentifier" required placeholder="مثال: ۱۲ب۳۴۵ ایران ۱۱ یا VIN ۱۷ رقمی" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all text-center sm:text-right">
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-black px-8 py-3.5 rounded-xl shadow-lg shadow-blue-500/20 transition-all transform hover:-translate-y-0.5 flex items-center justify-center gap-2 whitespace-nowrap mt-6 sm:mt-0 self-end">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    نمایش اطلاعات
                </button>
            </form>
        </div>

        <!-- بخش نتایج (با موفقیت نمایش داده می‌شود) -->
        <div id="carResult" class="hidden space-y-6">

            <!-- کارت مشخصات خودرو -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="bg-gradient-to-l from-blue-600 to-blue-800 p-6 md:p-8 text-white flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-3xl">
                            🚗
                        </div>
                        <div>
                            <h2 class="text-2xl font-black">BMW 320i</h2>
                            <p class="text-blue-100 font-mono text-sm mt-1" dir="ltr">VIN: WBA8E9C50GK123456</p>
                        </div>
                    </div>
                    <div class="bg-emerald-500/20 border border-emerald-400/30 text-emerald-100 px-4 py-2 rounded-xl text-center">
                        <div class="text-xs opacity-80">وضعیت گارانتی</div>
                        <div class="font-black">فعال تا ۱۴۰۶/۰۳/۱۵</div>
                    </div>
                </div>

                <div class="p-6 md:p-8 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div>
                        <div class="text-xs text-slate-500 mb-1">سال ساخت</div>
                        <div class="font-black text-slate-800">۱۴۰۳</div>
                    </div>
                    <div>
                        <div class="text-xs text-slate-500 mb-1">رنگ</div>
                        <div class="font-black text-slate-800">سفید</div>
                    </div>
                    <div>
                        <div class="text-xs text-slate-500 mb-1">شماره پلاک</div>
                        <div class="font-black text-slate-800">۱۲ب۳۴۵ ایران ۱۱</div>
                    </div>
                    <div>
                        <div class="text-xs text-slate-500 mb-1">تاریخ آخرین سرویس</div>
                        <div class="font-black text-slate-800">۱۴۰۴/۰۶/۲۰</div>
                    </div>
                </div>
            </div>

            <!-- جدول سوابق سرویس -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 md:p-8">
                <h3 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-2">
                    <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                    تاریخچه سرویس‌های انجام شده
                </h3>

                <div class="overflow-x-auto">
                    <table class="w-full text-right text-sm">
                        <thead>
                        <tr class="border-b border-slate-200 text-slate-500">
                            <th class="pb-3 font-bold">تاریخ</th>
                            <th class="pb-3 font-bold">نوع سرویس</th>
                            <th class="pb-3 font-bold">کیلومتر</th>
                            <th class="pb-3 font-bold">تعمیرگاه</th>
                            <th class="pb-3 font-bold">وضعیت</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                        <tr>
                            <td class="py-4 text-slate-600 font-semibold">۱۴۰۴/۰۶/۲۰</td>
                            <td class="py-4 font-bold text-slate-800">سرویس دوره‌ای ۲۰,۰۰۰ کیلومتر</td>
                            <td class="py-4 text-slate-600">۲۱٬۵۰۰</td>
                            <td class="py-4 text-slate-600">مرکز خدمات تهران</td>
                            <td class="py-4"><span class="bg-emerald-100 text-emerald-700 px-2 py-1 rounded text-xs font-bold">تکمیل شده</span></td>
                        </tr>
                        <tr>
                            <td class="py-4 text-slate-600 font-semibold">۱۴۰۴/۰۲/۱۵</td>
                            <td class="py-4 font-bold text-slate-800">تعویض لنت ترمز جلو</td>
                            <td class="py-4 text-slate-600">۱۵٬۲۰۰</td>
                            <td class="py-4 text-slate-600">شعبه بابلسر</td>
                            <td class="py-4"><span class="bg-emerald-100 text-emerald-700 px-2 py-1 rounded text-xs font-bold">تکمیل شده</span></td>
                        </tr>
                        <tr>
                            <td class="py-4 text-slate-600 font-semibold">۱۴۰۳/۱۱/۰۵</td>
                            <td class="py-4 font-bold text-slate-800">سرویس دوره‌ای ۱۰,۰۰۰ کیلومتر</td>
                            <td class="py-4 text-slate-600">۱۰٬۱۰۰</td>
                            <td class="py-4 text-slate-600">مرکز خدمات تهران</td>
                            <td class="py-4"><span class="bg-emerald-100 text-emerald-700 px-2 py-1 rounded text-xs font-bold">تکمیل شده</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- حالت اولیه -->
        <div id="initialState" class="text-center py-16">
            <div class="w-20 h-20 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center mx-auto mb-4 text-4xl">
                🔍
            </div>
            <h3 class="text-lg font-black text-slate-800 mb-2">هنوز اطلاعاتی نمایش داده نشده</h3>
            <p class="text-slate-500 text-sm">شماره پلاک یا VIN خودروی خود را وارد کنید و روی دکمه نمایش اطلاعات کلیک کنید.</p>
        </div>
    </div>
@endsection


