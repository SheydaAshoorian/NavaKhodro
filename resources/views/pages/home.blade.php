@extends('layouts.app')

@section('title', 'نواخودرو | خرید، فروش و خدمات خودرو در منطقه آزاد')

@section('content')

    <!-- بخش ۱: هیرو -->
    <x-hero />
    <!-- بخش ۲: نوار اعتماد -->
    <x-trust-bar />

    <x-dual-portal />
    <!-- بخش ۳: خودروهای ویژه -->
    <x-featured-cars />
    <!-- بخش 4: برندها -->
    <x-brands />
    <!-- بخش 5: ثبت نام خودرو -->
    <x-register-cars />
    <!-- بخش 6: قطعات خودروهای وارداتی (منتقل شده به بالا) -->
    <x-services />
    <!-- بخش ۵: قطعات خودروهای وارداتی -->
    <x-parts-banner />
    <!-- بخش 7: معرفی شهر نواخودرو -->
    <x-about />
    <!-- بخش 8: سه گانه خدمات -->
    <x-how-to-help />
    <!-- بخش 9: بلاگ -->
    <x-blog />

    <section class="py-20 px-6 bg-slate-900 text-white">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-black mb-4">برای مشاوره، شماره خود را بگذارید</h2>
            <p class="text-slate-400 mb-8">کارشناسان ما در سریع‌ترین زمان با شما تماس می‌گیرند.</p>
            <form action="#" method="POST" class="flex flex-col md:flex-row gap-4 justify-center">
                @csrf
                <input type="text" name="name" placeholder="نام و نام خانوادگی" class="w-full md:w-64 bg-white/10 border border-white/20 rounded-full py-4 px-6 text-white placeholder-slate-400 focus:outline-none focus:border-blue-400 transition text-right" dir="rtl" required>
                <input type="tel" name="phone" placeholder="شماره تماس" class="w-full md:w-64 bg-white/10 border border-white/20 rounded-full py-4 px-6 text-white placeholder-slate-400 focus:outline-none focus:border-blue-400 transition text-right" dir="rtl" required>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-black py-4 px-8 rounded-full transition shadow-lg shadow-blue-500/30 whitespace-nowrap">
                    ارسال درخواست
                </button>
            </form>
        </div>
    </section>

@endsection
