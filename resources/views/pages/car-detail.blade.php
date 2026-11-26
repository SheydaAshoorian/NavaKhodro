@extends('layouts.app')

@section('title', 'جزئیات خودرو | نواخودرو')

@section('content')
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-6">

        <!-- بردکرامب (مسیر صفحه) -->
        <nav class="flex text-xs text-slate-500 mb-6 font-semibold">
            <a href="{{ route('home') }}" class="hover:text-blue-600">خانه</a>
            <span class="mx-2">/</span>
            <a href="{{ route('modirankhodro') }}" class="hover:text-blue-600">محصولات مدیران خودرو</a>
            <span class="mx-2">/</span>
            <span class="text-slate-800">MVM X55 Pro</span>
        </nav>

        <!-- بخش اصلی (گالری و اطلاعات خرید) -->
        <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm flex flex-col lg:flex-row gap-10 mb-8">

            <!-- گالری عکس (سمت راست) -->
            <div class="w-full lg:w-[500px] flex-shrink-0 flex flex-col gap-4">
                <!-- تصویر اصلی -->
                <div class="bg-slate-50 rounded-2xl flex items-center justify-center p-8 relative h-[350px]">
                    <img src="{{ asset('images/cars/mvm-x55.jpg') }}" class="w-full h-full object-contain" alt="MVM X55 Pro">
                </div>
                <!-- تصاویر کوچک -->
                <div class="flex gap-3 overflow-x-auto">
                    <button class="w-20 h-20 border-2 border-blue-500 rounded-xl p-1 bg-white flex-shrink-0">
                        <img src="{{ asset('images/cars/mvm-x55.jpg') }}" class="w-full h-full object-contain" alt="MVM X55 Pro 1">
                    </button>
                    <button class="w-20 h-20 border border-slate-200 rounded-xl p-1 bg-white hover:border-blue-300 transition-colors flex-shrink-0">
                        <img src="{{ asset('images/cars/mvm-x55-2.jpg') }}" class="w-full h-full object-contain" alt="MVM X55 Pro 2">
                    </button>
                    <button class="w-20 h-20 border border-slate-200 rounded-xl p-1 bg-white hover:border-blue-300 transition-colors flex-shrink-0">
                        <img src="{{ asset('images/cars/mvm-x55-3.jpg') }}" class="w-full h-full object-contain" alt="MVM X55 Pro 3">
                    </button>
                </div>
            </div>

            <!-- اطلاعات خودرو (سمت چپ) -->
            <div class="flex-1 flex flex-col">
                <h1 class="text-2xl md:text-3xl font-black text-slate-800 mb-2">MVM X55 Pro</h1>
                <div class="text-sm text-slate-500 mb-6">شاسی‌بلند - اتوماتیک</div>

                <!-- مشخصات کلیدی -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                    <div class="bg-slate-50 rounded-xl p-3 text-center">
                        <div class="text-xs text-slate-500 mb-1">سال ساخت</div>
                        <div class="font-bold text-slate-800">۱۴۰۳</div>
                    </div>
                    <div class="bg-slate-50 rounded-xl p-3 text-center">
                        <div class="text-xs text-slate-500 mb-1">گیربکس</div>
                        <div class="font-bold text-slate-800">اتوماتیک</div>
                    </div>
                    <div class="bg-slate-50 rounded-xl p-3 text-center">
                        <div class="text-xs text-slate-500 mb-1">سوخت</div>
                        <div class="font-bold text-slate-800">بنزین</div>
                    </div>
                </div>

                <!-- بخش قیمت و درخواست -->
                <div class="mt-auto bg-slate-50 rounded-2xl p-6">
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div>
                            <div class="text-xs text-slate-500 mb-1">قیمت خودرو</div>
                            <div class="text-2xl font-black text-blue-600">۱٬۲۰۰٬۰۰۰٬۰۰۰ <span class="text-sm font-normal text-slate-600">تومان</span></div>
                        </div>
                        <a href="{{ route('car-registration') }}" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-black px-8 py-3.5 rounded-xl shadow-lg shadow-blue-500/30 transition-all transform hover:-translate-y-0.5 text-center">
                            ثبت نام خودرو
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- بخش مشخصات فنی و امکانات -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- مشخصات فنی -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                <h2 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-2">
                    <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                    مشخصات فنی
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between items-center py-2 border-b border-slate-50">
                        <span class="text-slate-500">حجم موتور</span>
                        <span class="font-bold text-slate-800">۱۵۰۰ سی سی</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-slate-50">
                        <span class="text-slate-500">حداکثر قدرت</span>
                        <span class="font-bold text-slate-800">۱۵۰ اسب بخار</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-slate-50">
                        <span class="text-slate-500">حداکثر گشتاور</span>
                        <span class="font-bold text-slate-800">۲۱۰ نیوتن‌متر</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-slate-50">
                        <span class="text-slate-500">سیستم تعلیق</span>
                        <span class="font-bold text-slate-800">مکفرسون / مولتی لینک</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-slate-50">
                        <span class="text-slate-500">طول/عرض/ارتفاع</span>
                        <span class="font-bold text-slate-800">۴۵۰۰/۱۸۰۰/۱۶۵۰ میلی‌متر</span>
                    </div>
                    <div class="flex justify-between items-center py-2">
                        <span class="text-slate-500">ظرفیت باک</span>
                        <span class="font-bold text-slate-800">۵۵ لیتر</span>
                    </div>
                </div>
            </div>

            <!-- امکانات رفاهی -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                <h2 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-2">
                    <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                    امکانات و تجهیزات
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-slate-600">
                    <div class="flex items-center gap-2"><span class="text-emerald-500">✓</span> کیلس استارت</div>
                    <div class="flex items-center gap-2"><span class="text-emerald-500">✓</span> ترمز ABS و EBD</div>
                    <div class="flex items-center gap-2"><span class="text-emerald-500">✓</span> کیسه هوا (راننده و سرنشین)</div>
                    <div class="flex items-center gap-2"><span class="text-emerald-500">✓</span> دوربین دید عقب</div>
                    <div class="flex items-center gap-2"><span class="text-emerald-500">✓</span> کروز کنترل</div>
                    <div class="flex items-center gap-2"><span class="text-emerald-500">✓</span> مانیتور لمسی</div>
                    <div class="flex items-center gap-2"><span class="text-emerald-500">✓</span> فرمان برقی</div>
                    <div class="flex items-center gap-2"><span class="text-emerald-500">✓</span> تنظیم برقی صندلی</div>
                </div>
            </div>
        </div>
    </div>
@endsection
