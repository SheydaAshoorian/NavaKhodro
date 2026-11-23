@extends('layouts.app')

@section('title', 'محصولات برند | نواسرویس')

@section('content')
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-10">

        <!-- بردکرامب (مسیر صفحه) -->
        <nav class="flex text-xs text-slate-500 mb-6 font-semibold items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-600">خانه</a>
            <span>/</span>
            <a href="{{ route('brands') }}" class="hover:text-blue-600">فروشگاه قطعات</a>
            <span>/</span>
            <span class="text-slate-800">فردا موتورز (FMC)</span> <!-- این متن باید بر اساس برند انتخاب شده داینامیک بشه -->
        </nav>

        <div class="flex flex-col lg:flex-row gap-8 items-start">

            <!-- سایدبار فیلترها (سمت راست) -->
            <aside class="w-full lg:w-72 flex-shrink-0 bg-white rounded-2xl border border-slate-200 p-5 sticky top-24 shadow-sm">
                <div class="flex justify-between items-center mb-5 pb-4 border-b border-slate-100">
                    <h3 class="text-base font-black text-slate-800">فیلترها</h3>
                    <button class="text-xs text-blue-600 font-bold hover:text-blue-800">حذف همه</button>
                </div>

                <div class="space-y-6">
                    <!-- دسته‌بندی -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">دسته‌بندی</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> قطعات موتوری</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> قطعات بدنه</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> سیستم ترمز</label>
                        </div>
                    </div>

                    <!-- محدوده قیمت -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">محدوده قیمت (تومان)</h4>
                        <div class="flex gap-2 mb-2">
                            <input type="number" placeholder="از" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-2 py-1.5 text-xs outline-none focus:border-blue-500">
                            <input type="number" placeholder="تا" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-2 py-1.5 text-xs outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </aside>

            <!-- بخش لیست نتایج (سمت چپ) -->
            <main class="flex-1 w-full">

                <!-- نوار مرتب‌سازی -->
                <div class="bg-white rounded-xl border border-slate-200 p-3 flex items-center justify-between mb-6 shadow-sm">
                    <div class="text-sm text-slate-500 hidden sm:block"><strong class="text-blue-600">۶</strong> کالا یافت شد</div>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-500">مرتب‌سازی:</span>
                        <select class="bg-transparent font-bold text-slate-800 outline-none cursor-pointer">
                            <option>پرفروش‌ترین</option>
                            <option>ارزان‌ترین</option>
                            <option>گران‌ترین</option>
                        </select>
                    </div>
                </div>

                <!-- گرید محصولات -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">

                    <!-- محصول ۱ -->
                    <a href="{{ route('product-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/f.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="فیلتر روغن">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">فیلتر روغن هیوندای مدل Hyundai Original مناسب FMC</h3>
                        <div class="text-xs text-slate-400 mb-3">Hyundai Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base">۸۵۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                        </div>
                    </a>

                    <!-- محصول ۲ -->
                    <a href="{{ route('product-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/ch.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="چراغ جلو">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">چراغ جلو سمت راست MVM مدل اورجینال مناسب FMC</h3>
                        <div class="text-xs text-slate-400 mb-3">MVM Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base">۲۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                        </div>
                    </a>

                    <!-- محصول ۳ -->
                    <a href="{{ route('product-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/l.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="لنت ترمز">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">لنت ترمز جلو فونیکس مدل Fownix Original مناسب FMC</h3>
                        <div class="text-xs text-slate-400 mb-3">Fownix Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base">۴٬۵۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                        </div>
                    </a>

                </div>
            </main>
        </div>
    </div>
@endsection
