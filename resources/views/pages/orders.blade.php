@extends('layouts.app')

@section('title', 'لیست سفارشات | نواسرویس')

@section('content')
    <div class="max-w-[1000px] mx-auto px-4 md:px-8 py-10">

        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-black text-slate-800">لیست سفارشات</h1>
                <p class="text-sm text-slate-500 mt-1">تاریخچه درخواست‌ها و سفارشات شما</p>
            </div>
            <a href="{{ route('home') }}" class="text-sm font-bold text-blue-600 hover:text-blue-800 flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                بازگشت به فروشگاه
            </a>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-right text-sm">
                    <thead class="bg-slate-50 text-slate-500">
                    <tr>
                        <th class="p-4 font-bold">شماره سفارش</th>
                        <th class="p-4 font-bold">تاریخ ثبت</th>
                        <th class="p-4 font-bold">محصول / خودرو</th>
                        <th class="p-4 font-bold">مبلغ</th>
                        <th class="p-4 font-bold">وضعیت</th>
                        <th class="p-4 font-bold">جزئیات</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                    <!-- سفارش ۱ -->
                    <tr>
                        <td class="p-4 font-mono font-bold text-blue-600">ORD-98765</td>
                        <td class="p-4 text-slate-600">۱۴۰۴/۰۸/۱۵</td>
                        <td class="p-4 font-bold text-slate-800">MVM X77</td>
                        <td class="p-4 font-bold text-slate-800">۱٬۲۰۰٬۰۰۰٬۰۰۰ تومان</td>
                        <td class="p-4"><span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-lg text-xs font-bold">در حال بررسی</span></td>
                        <td class="p-4"><button class="text-blue-600 hover:underline font-bold">مشاهده</button></td>
                    </tr>
                    <!-- سفارش ۲ -->
                    <tr>
                        <td class="p-4 font-mono font-bold text-blue-600">ORD-98760</td>
                        <td class="p-4 text-slate-600">۱۴۰۴/۰۸/۱۰</td>
                        <td class="p-4 font-bold text-slate-800">چراغ جلو MVM</td>
                        <td class="p-4 font-bold text-slate-800">۲۰٬۰۰۰٬۰۰۰ تومان</td>
                        <td class="p-4"><span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-lg text-xs font-bold">تکمیل شده</span></td>
                        <td class="p-4"><button class="text-blue-600 hover:underline font-bold">مشاهده</button></td>
                    </tr>
                    <!-- سفارش ۳ -->
                    <tr>
                        <td class="p-4 font-mono font-bold text-blue-600">ORD-98755</td>
                        <td class="p-4 text-slate-600">۱۴۰۴/۰۸/۰۵</td>
                        <td class="p-4 font-bold text-slate-800">لنت ترمز فونیکس</td>
                        <td class="p-4 font-bold text-slate-800">۴٬۵۰۰٬۰۰۰ تومان</td>
                        <td class="p-4"><span class="bg-rose-100 text-rose-700 px-3 py-1 rounded-lg text-xs font-bold">لغو شده</span></td>
                        <td class="p-4"><button class="text-blue-600 hover:underline font-bold">مشاهده</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
