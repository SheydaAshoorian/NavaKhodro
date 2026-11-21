@extends('layouts.app')

@section('title', 'سبد خرید | نواسرویس')

@section('content')
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-10">

        <!-- عنوان صفحه -->
        <div class="flex items-center gap-3 mb-8">
            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl">
                🛒
            </div>
            <div>
                <h1 class="text-2xl font-black text-slate-800">سبد خرید</h1>
                <p class="text-sm text-slate-500 mt-1">لیست محصولات انتخابی شما در نواسرویس</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

            <!-- لیست محصولات (سمت راست) -->
            <div class="lg:col-span-2 space-y-4">

                <!-- محصول ۱ -->
                <div class="bg-white rounded-2xl border border-slate-200 p-4 shadow-sm flex flex-col sm:flex-row items-center gap-4">
                    <div class="w-24 h-24 bg-slate-50 rounded-xl overflow-hidden flex-shrink-0">
                        <img src="{{ asset('images/ch.jpg') }}" class="w-full h-full object-cover" alt="چراغ جلو">
                    </div>
                    <div class="flex-1 text-center sm:text-right">
                        <h3 class="text-base font-bold text-slate-800 mb-1">چراغ جلو سمت راست MVM</h3>
                        <div class="text-xs text-slate-500 mb-2">MVM Original · کد: 63117289123</div>
                        <div class="flex items-center justify-center sm:justify-start gap-2">
                            <span class="bg-blue-50 text-blue-600 text-xs font-bold px-2 py-1 rounded">موجود در انبار</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center sm:items-end gap-3 w-full sm:w-auto">
                        <div class="text-lg font-black text-blue-600">۲۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal text-slate-500">تومان</span></div>
                        <div class="flex items-center gap-3">
                            <!-- تغییر تعداد -->
                            <div class="flex items-center border border-slate-200 rounded-lg overflow-hidden">
                                <button class="w-8 h-8 flex items-center justify-center bg-slate-50 hover:bg-slate-100 text-slate-600 font-bold">-</button>
                                <span class="w-10 text-center font-bold text-sm">۱</span>
                                <button class="w-8 h-8 flex items-center justify-center bg-slate-50 hover:bg-slate-100 text-slate-600 font-bold">+</button>
                            </div>
                            <!-- حذف -->
                            <button class="text-rose-500 hover:text-rose-700 transition-colors p-1" title="حذف از سبد">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- محصول ۲ -->
                <div class="bg-white rounded-2xl border border-slate-200 p-4 shadow-sm flex flex-col sm:flex-row items-center gap-4">
                    <div class="w-24 h-24 bg-slate-50 rounded-xl overflow-hidden flex-shrink-0">
                        <img src="{{ asset('images/l.jpg') }}" class="w-full h-full object-cover" alt="لنت ترمز">
                    </div>
                    <div class="flex-1 text-center sm:text-right">
                        <h3 class="text-base font-bold text-slate-800 mb-1">لنت ترمز جلو فونیکس</h3>
                        <div class="text-xs text-slate-500 mb-2">Fownix Original · کد: 34116858671</div>
                        <div class="flex items-center justify-center sm:justify-start gap-2">
                            <span class="bg-blue-50 text-blue-600 text-xs font-bold px-2 py-1 rounded">موجود در انبار</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-center sm:items-end gap-3 w-full sm:w-auto">
                        <div class="text-lg font-black text-blue-600">۴٬۵۰۰٬۰۰۰ <span class="text-xs font-normal text-slate-500">تومان</span></div>
                        <div class="flex items-center gap-3">
                            <div class="flex items-center border border-slate-200 rounded-lg overflow-hidden">
                                <button class="w-8 h-8 flex items-center justify-center bg-slate-50 hover:bg-slate-100 text-slate-600 font-bold">-</button>
                                <span class="w-10 text-center font-bold text-sm">۱</span>
                                <button class="w-8 h-8 flex items-center justify-center bg-slate-50 hover:bg-slate-100 text-slate-600 font-bold">+</button>
                            </div>
                            <button class="text-rose-500 hover:text-rose-700 transition-colors p-1" title="حذف از سبد">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- دکمه ادامه خرید -->
                <div class="pt-4">
                    <a href="{{ route('part-search') }}" class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-800 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        ادامه خرید و بازگشت به فروشگاه
                    </a>
                </div>
            </div>

            <!-- خلاصه سفارش (سمت چپ) -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm sticky top-24">
                    <h2 class="text-lg font-black text-slate-800 mb-4 pb-4 border-b border-slate-100">خلاصه سفارش</h2>

                    <div class="space-y-3 text-sm mb-6">
                        <div class="flex justify-between text-slate-600">
                            <span>قیمت کالاها (۲ مورد)</span>
                            <span class="font-bold">۲۴٬۵۰۰٬۰۰۰ تومان</span>
                        </div>
                        <div class="flex justify-between text-slate-600">
                            <span>تخفیف کالاها</span>
                            <span class="font-bold text-rose-500">۰ تومان</span>
                        </div>
                        <div class="flex justify-between text-slate-600">
                            <span>هزینه ارسال</span>
                            <span class="font-bold text-emerald-600">رایگان</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center border-t border-slate-100 pt-4 mb-6">
                        <span class="font-bold text-slate-800">مبلغ قابل پرداخت</span>
                        <span class="font-black text-blue-600 text-xl">۲۴٬۵۰۰٬۰۰۰ <span class="text-xs font-normal text-slate-500">تومان</span></span>
                    </div>

                    <a href="{{ route('checkout') }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5">
                        ادامه فرآیند خرید
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
