@extends('layouts.app')

@section('title', 'خدمات تعمیرگاهی | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[300px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-40"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 max-w-2xl mt-8">
            <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">خدمات <span class="text-blue-500">تعمیرگاهی</span></h1>
            <p class="text-lg text-slate-300 leading-relaxed">
                رزرو نوبت، پیگیری وضعیت و دسترسی به اطلاعات خودرو در یک مجموعه معتبر.
            </p>
        </div>
    </section>

    <!-- بخش اصلی (باکس‌های تعمیرگاه) -->
    <div class="max-w-[1000px] mx-auto px-4 md:px-8 py-16">

        <!-- باکس ۱: ثبت نوبت -->
        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm hover:shadow-md transition-shadow mb-6">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center text-4xl text-blue-600 flex-shrink-0">
                    📅
                </div>
                <div class="flex-1 text-center md:text-right">
                    <h2 class="text-2xl font-black text-slate-800 mb-2">ثبت نوبت تعمیرگاهی</h2>
                    <p class="text-slate-500 font-medium">رزرو نوبت سرویس دوره‌ای یا تعمیر در بهترین تعمیرگاه‌های نواسرویس.</p>
                </div>
                <a href="{{ route('booking') }}" class="mt-4 md:mt-0 bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3 rounded-xl shadow-lg shadow-blue-500/20 transition-all transform hover:-translate-y-0.5 whitespace-nowrap">
                    ثبت نوبت آنلاین
                </a>
            </div>
        </div>

        <!-- باکس ۲: پیگیری خودرو -->
        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm hover:shadow-md transition-shadow mb-6">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="w-20 h-20 bg-indigo-50 rounded-2xl flex items-center justify-center text-4xl text-indigo-600 flex-shrink-0">
                    🚗
                </div>
                <div class="flex-1 text-center md:text-right">
                    <h2 class="text-2xl font-black text-slate-800 mb-2">پیگیری خودرو</h2>
                    <p class="text-slate-500 font-medium">مشاهده وضعیت لحظه‌ای خودرو و پیشرفت تعمیرات با کد رهگیری.</p>
                </div>
                <a href="{{ route('track-car') }}" class="mt-4 md:mt-0 bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-8 py-3 rounded-xl shadow-lg shadow-indigo-500/20 transition-all transform hover:-translate-y-0.5 whitespace-nowrap">
                    پیگیری وضعیت
                </a>
            </div>
        </div>

        <!-- باکس ۳: اطلاعات خودرو -->
        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm hover:shadow-md transition-shadow mb-6">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="w-20 h-20 bg-emerald-50 rounded-2xl flex items-center justify-center text-4xl text-emerald-600 flex-shrink-0">
                    📋
                </div>
                <div class="flex-1 text-center md:text-right">
                    <h2 class="text-2xl font-black text-slate-800 mb-2">دسترسی به اطلاعات خودرو</h2>
                    <p class="text-slate-500 font-medium">مشاهده تاریخچه کامل سرویس‌ها و وضعیت گارانتی خودرو.</p>
                </div>
                <a href="{{ route('car-info') }}" class="mt-4 md:mt-0 bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-8 py-3 rounded-xl shadow-lg shadow-emerald-500/20 transition-all transform hover:-translate-y-0.5 whitespace-nowrap">
                    مشاهده اطلاعات
                </a>
            </div>
        </div>

        <!-- باکس ۴: ثبت شکایت -->
        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="w-20 h-20 bg-rose-50 rounded-2xl flex items-center justify-center text-4xl text-rose-600 flex-shrink-0">
                    📣
                </div>
                <div class="flex-1 text-center md:text-right">
                    <h2 class="text-2xl font-black text-slate-800 mb-2">ثبت شکایت</h2>
                    <p class="text-slate-500 font-medium">ثبت و پیگیری شکایت از کیفیت خدمات یا رفتار پرسنل تعمیرگاه.</p>
                </div>
                <a href="{{ route('complaints') }}" class="mt-4 md:mt-0 bg-rose-600 hover:bg-rose-700 text-white font-bold px-8 py-3 rounded-xl shadow-lg shadow-rose-500/20 transition-all transform hover:-translate-y-0.5 whitespace-nowrap">
                    ثبت شکایت
                </a>
            </div>
        </div>

    </div>
@endsection
