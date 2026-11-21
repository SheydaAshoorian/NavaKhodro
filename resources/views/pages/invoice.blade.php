@extends('layouts.app')

@section('title', 'فاکتور و اتمام خرید | نواسرویس')

@section('content')
    <div class="max-w-[900px] mx-auto px-4 md:px-8 py-10">

        <!-- پیام موفقیت -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h1 class="text-3xl font-black text-slate-800 mb-2">پرداخت با موفقیت انجام شد!</h1>
            <p class="text-slate-500 font-medium">از خرید شما سپاسگزاریم. فاکتور خرید شما در زیر آمده است.</p>
        </div>

        <!-- فاکتور (Invoice) -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">

            <!-- هدر فاکتور -->
            <div class="bg-slate-50 p-6 md:p-8 border-b border-slate-200 flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                        <span class="text-white font-black text-2xl">ن</span>
                    </div>
                    <div>
                        <h2 class="font-black text-slate-800 text-lg">فاکتور فروش</h2>
                        <p class="text-xs text-slate-500">نواسرویس</p>
                    </div>
                </div>
                <div class="text-center sm:text-left">
                    <div class="text-xs text-slate-500 mb-1">شماره فاکتور</div>
                    <div class="font-mono font-bold text-blue-600 text-sm">INV-98765</div>
                    <div class="text-xs text-slate-500 mt-2">تاریخ: ۱۴۰۴/۰۸/۱۵</div>
                </div>
            </div>

            <!-- اطلاعات مشتری -->
            <div class="p-6 md:p-8 border-b border-slate-100 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-sm font-bold text-slate-800 mb-3">اطلاعات خریدار</h3>
                    <div class="space-y-2 text-sm text-slate-600">
                        <p><span class="text-slate-400">نام:</span> علی رضایی</p>
                        <p><span class="text-slate-400">شماره تماس:</span> ۰۹۱۲۳۴۵۶۷۸۹</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-800 mb-3">اطلاعات پرداخت</h3>
                    <div class="space-y-2 text-sm text-slate-600">
                        <p><span class="text-slate-400">روش پرداخت:</span> درگاه اسنپ پی</p>
                        <p><span class="text-slate-400">کد پیگیری:</span> <span class="font-mono text-blue-600">TXN-123456789</span></p>
                    </div>
                </div>
            </div>

            <!-- جدول اقلام -->
            <div class="p-6 md:p-8">
                <h3 class="text-sm font-bold text-slate-800 mb-4">اقلام خریداری شده</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-right text-sm">
                        <thead>
                        <tr class="border-b border-slate-200 text-slate-500">
                            <th class="pb-3 font-bold">نام کالا</th>
                            <th class="pb-3 font-bold">تعداد</th>
                            <th class="pb-3 font-bold">قیمت واحد</th>
                            <th class="pb-3 font-bold">جمع</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                        <tr>
                            <td class="py-4 font-bold text-slate-800">چراغ جلو سمت راست MVM</td>
                            <td class="py-4 text-slate-600">۱</td>
                            <td class="py-4 text-slate-600">۲۰٬۰۰۰٬۰۰۰ تومان</td>
                            <td class="py-4 font-bold text-slate-800">۲۰٬۰۰۰٬۰۰۰ تومان</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- جمع کل -->
            <div class="bg-slate-50 p-6 md:p-8 border-t border-slate-200">
                <div class="max-w-xs mr-auto space-y-3 text-sm">
                    <div class="flex justify-between text-slate-600">
                        <span>جمع کل کالاها</span>
                        <span class="font-bold">۲۰٬۰۰۰٬۰۰۰ تومان</span>
                    </div>
                    <div class="flex justify-between text-slate-600">
                        <span>هزینه ارسال</span>
                        <span class="font-bold text-emerald-600">رایگان</span>
                    </div>
                    <div class="flex justify-between border-t border-slate-200 pt-3 text-base">
                        <span class="font-black text-slate-800">مبلغ نهایی پرداخت شده</span>
                        <span class="font-black text-blue-600">۲۰٬۰۰۰٬۰۰۰ تومان</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- دکمه‌های اقدام -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
            <button onclick="window.print()" class="bg-white border border-slate-300 text-slate-700 font-bold px-8 py-3 rounded-xl hover:bg-slate-50 transition-colors flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                چاپ فاکتور
            </button>
            <a href="{{ route('buy') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-black px-8 py-3 rounded-xl shadow-lg transition-all flex items-center justify-center gap-2">
                بازگشت به فروشگاه
            </a>
        </div>
    </div>
@endsection
