@extends('layouts.app')

@section('title', 'نواخودرو | خرید، فروش و خدمات خودرو در منطقه آزاد')

@section('content')

    <!-- بخش ۱: هیرو -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-blue-900 text-white py-24 px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto text-center relative z-10">
        <span class="inline-block bg-blue-500/20 border border-blue-400/30 text-blue-300 text-sm font-bold px-4 py-2 rounded-full mb-6">
            منطقه آزاد مازندران - بابلسر
        </span>
            <h1 class="text-4xl md:text-6xl font-black leading-tight mb-6">
                خرید خودرو وارداتی و خدمات پس از فروش<br>
                <span class="text-blue-400">با اطمینان کامل</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto mb-10 leading-relaxed">
                از واردات مستقیم خودروهای صفر و کارکرده تا تامین قطعات یدکی و خدمات تخصصی، همه در یک مجموعه معتبر در قلب منطقه آزاد.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('buy') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-8 rounded-full transition shadow-lg shadow-blue-500/30">
                    مشاهده خودروهای موجود
                </a>
                <a href="{{ route('part-search') }}" class="bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold py-4 px-8 rounded-full transition backdrop-blur">
                    استعلام قطعات
                </a>
            </div>
        </div>
    </section>

    <!-- بخش ۲: نوار اعتماد -->
    <section class="bg-white border-b border-slate-100 py-8 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <div class="text-3xl mb-2">🏆</div>
                <div class="font-black text-slate-800 text-lg">۱۳ سال سابقه</div>
                <div class="text-sm text-slate-500">تجربه در صنعت خودرو</div>
            </div>
            <div>
                <div class="text-3xl mb-2">🏢</div>
                <div class="font-black text-slate-800 text-lg">۱۵ برند رسمی</div>
                <div class="text-sm text-slate-500">در شهر نواخودرو</div>
            </div>
            <div>
                <div class="text-3xl mb-2">🚢</div>
                <div class="font-black text-slate-800 text-lg">واردات مستقیم</div>
                <div class="text-sm text-slate-500">از منطقه آزاد</div>
            </div>
            <div>
                <div class="text-3xl mb-2">🔧</div>
                <div class="font-black text-slate-800 text-lg">سالن خدمات</div>
                <div class="text-sm text-slate-500">۳۵۰۰ متر مربعی</div>
            </div>
        </div>
    </section>

    <!-- بخش ۳: خودروهای ویژه -->
    <section class="py-20 px-6 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-4">
                <div>
                    <h2 class="text-3xl font-black text-slate-800 mb-2">خودروهای موجود</h2>
                    <p class="text-slate-500">جدیدترین خودروهای وارداتی و داخلی موجود در منطقه آزاد</p>
                </div>
                <a href="{{ route('buy') }}" class="text-blue-600 font-bold hover:text-blue-700 transition">مشاهده همه خودروها ←</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- کارت نمونه ۱ -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition border border-slate-100 group">
                    <div class="h-48 bg-slate-200 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-6xl opacity-50 group-hover:scale-110 transition duration-500">🚗</div>
                        <span class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">صفر کیلومتر</span>
                        <span class="absolute top-4 left-4 bg-white/90 text-blue-600 text-xs font-bold px-3 py-1 rounded-full border border-blue-100">وارداتی</span>
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-bold text-blue-600 mb-1">تویوتا</div>
                        <h3 class="text-lg font-black text-slate-800 mb-2">تویوتا کمری هیبرید ۲۰۲۴</h3>
                        <div class="text-sm text-slate-500 mb-4">اتوماتیک · بنزین · ۰ کیلومتر</div>
                        <div class="flex justify-between items-center pt-4 border-t border-slate-100">
                            <div class="text-blue-600 font-black">۳,۵۰۰,۰۰۰,۰۰۰ تومان</div>
                            <a href="#" class="text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 py-2 px-4 rounded-full transition">جزئیات</a>
                        </div>
                    </div>
                </div>

                <!-- کارت نمونه ۲ -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition border border-slate-100 group">
                    <div class="h-48 bg-slate-200 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-6xl opacity-50 group-hover:scale-110 transition duration-500">🚙</div>
                        <span class="absolute top-4 right-4 bg-slate-500 text-white text-xs font-bold px-3 py-1 rounded-full">کارکرده</span>
                        <span class="absolute top-4 left-4 bg-white/90 text-blue-600 text-xs font-bold px-3 py-1 rounded-full border border-blue-100">وارداتی</span>
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-bold text-blue-600 mb-1">هیوندای</div>
                        <h3 class="text-lg font-black text-slate-800 mb-2">هیوندای توسان ۲۰۲۲</h3>
                        <div class="text-sm text-slate-500 mb-4">اتوماتیک · بنزین · ۴۵,۰۰۰ کیلومتر</div>
                        <div class="flex justify-between items-center pt-4 border-t border-slate-100">
                            <div class="text-blue-600 font-black">۲,۱۰۰,۰۰۰,۰۰۰ تومان</div>
                            <a href="#" class="text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 py-2 px-4 rounded-full transition">جزئیات</a>
                        </div>
                    </div>
                </div>

                <!-- کارت نمونه ۳ -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition border border-slate-100 group">
                    <div class="h-48 bg-slate-200 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-6xl opacity-50 group-hover:scale-110 transition duration-500">🚐</div>
                        <span class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">صفر کیلومتر</span>
                        <span class="absolute top-4 left-4 bg-white/90 text-blue-600 text-xs font-bold px-3 py-1 rounded-full border border-blue-100">داخلی</span>
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-bold text-blue-600 mb-1">مدیران خودرو</div>
                        <h3 class="text-lg font-black text-slate-800 mb-2">چری تیگو ۸ پرو ۱۴۰۳</h3>
                        <div class="text-sm text-slate-500 mb-4">اتوماتیک · بنزین · ۰ کیلومتر</div>
                        <div class="flex justify-between items-center pt-4 border-t border-slate-100">
                            <div class="text-blue-600 font-black">۲,۵۰۰,۰۰۰,۰۰۰ تومان</div>
                            <a href="#" class="text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 py-2 px-4 rounded-full transition">جزئیات</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش ۴: سه گانه خدمات -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-14">
                <h2 class="text-3xl font-black text-slate-800 mb-4">چطور می‌توانیم کمک کنیم؟</h2>
                <p class="text-slate-500 max-w-xl mx-auto">سه مسیر اصلی برای پاسخ به نیازهای خودرویی شما در منطقه آزاد</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <a href="{{ route('buy') }}" class="bg-slate-50 hover:bg-blue-50 p-8 rounded-3xl border border-slate-100 hover:border-blue-200 transition text-center group">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm group-hover:scale-110 transition">🚗</div>
                    <h3 class="text-xl font-black text-slate-800 mb-3">خرید خودرو</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">مشاهده موجودی خودروهای وارداتی و داخلی در منطقه آزاد با امکان استعلام قیمت.</p>
                </a>
                <a href="{{ route('sell') }}" class="bg-slate-50 hover:bg-blue-50 p-8 rounded-3xl border border-slate-100 hover:border-blue-200 transition text-center group">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm group-hover:scale-110 transition">💰</div>
                    <h3 class="text-xl font-black text-slate-800 mb-3">فروش خودرو</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">ثبت درخواست فروش خودروی خود و دریافت قیمت کارشناسی شده از تیم ما.</p>
                </a>
                <a href="{{ route('nava_service') }}" class="bg-slate-50 hover:bg-blue-50 p-8 rounded-3xl border border-slate-100 hover:border-blue-200 transition text-center group">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm group-hover:scale-110 transition">🔧</div>
                    <h3 class="text-xl font-black text-slate-800 mb-3">خدمات و قطعات</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">رزرو نوبت تعمیرگاهی و جستجوی قطعات اصل برای خودروهای وارداتی.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- بخش ۵: قطعات خودروهای وارداتی -->
    <section class="py-20 px-6 bg-slate-900 text-white">
        <div class="max-w-5xl mx-auto bg-gradient-to-r from-blue-900 to-slate-900 rounded-3xl p-10 md:p-16 text-center border border-blue-500/20 shadow-2xl shadow-blue-900/50">
            <div class="text-5xl mb-6">⚙️</div>
            <h2 class="text-3xl md:text-4xl font-black mb-4">قطعات خودروهای وارداتی را از ما بخواهید</h2>
            <p class="text-slate-300 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">تامین قطعات اصل برای خودروهای وارداتی می‌تواند سخت باشد. تیم ما با ارتباط مستقیم با تامین‌کنندگان، قطعه مورد نیاز شما را پیدا و ارسال می‌کند.</p>
            <a href="{{ route('part-search') }}" class="inline-block bg-white text-slate-900 font-black py-4 px-10 rounded-full hover:bg-blue-50 transition shadow-lg">
                جستجوی قطعه با شماره شاسی
            </a>
        </div>
    </section>

    <!-- بخش ۶: معرفی شهر نواخودرو -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-blue-600 font-bold tracking-wider text-sm mb-2 block">BIG PROJECT</span>
                <h2 class="text-3xl md:text-4xl font-black text-slate-800 mb-6 leading-tight">شهر نواخودرو، بزرگترین مرکز خودرویی شمال کشور</h2>
                <p class="text-slate-600 leading-loose mb-8">
                    با وسعتی بالغ بر ۱۵,۰۰۰ متر مربع، شهر نواخودرو میزبان ۱۶ نمایشگاه فروش، سالن خدمات ۳,۵۰۰ متر مربعی و ۱۵ برند رسمی خودرویی است. تمامی خدمات خرید، فروش و پس از فروش در یک مجموعه یکپارچه.
                </p>
                <a href="{{ route('about') }}" class="inline-block border-2 border-slate-800 text-slate-800 font-bold py-3 px-8 rounded-full hover:bg-slate-800 hover:text-white transition">
                    بیشتر بدانید
                </a>
            </div>
            <div class="bg-slate-100 h-80 rounded-3xl flex items-center justify-center text-8xl relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/10 to-transparent"></div>
                🏢
            </div>
        </div>
    </section>

    <!-- بخش ۷: بلاگ -->
    <section class="py-20 px-6 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-4">
                <div>
                    <h2 class="text-3xl font-black text-slate-800 mb-2">اخبار و مقالات</h2>
                    <p class="text-slate-500">آخرین خبرها از واردات خودرو و منطقه آزاد مازندران</p>
                </div>
                <a href="{{ route('blog') }}" class="text-blue-600 font-bold hover:text-blue-700 transition">مشاهده همه مقالات ←</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="#" class="bg-white p-6 rounded-2xl border border-slate-100 hover:shadow-lg transition">
                    <div class="text-xs text-blue-600 font-bold mb-3">منطقه آزاد</div>
                    <h3 class="text-lg font-black text-slate-800 mb-2">شرایط جدید واردات خودرو به منطقه آزاد مازندران</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">جزئیات جدیدترین مصوبه هیئت وزیران درباره واردات خودرو به منطقه آزاد.</p>
                </a>
                <a href="#" class="bg-white p-6 rounded-2xl border border-slate-100 hover:shadow-lg transition">
                    <div class="text-xs text-blue-600 font-bold mb-3">راهنمای خرید</div>
                    <h3 class="text-lg font-black text-slate-800 mb-2">چگونه خودروی وارداتی مناسب خود را انتخاب کنیم؟</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">نکات کلیدی برای انتخاب خودروی وارداتی با توجه به بودجه و نیاز شما.</p>
                </a>
                <a href="#" class="bg-white p-6 rounded-2xl border border-slate-100 hover:shadow-lg transition">
                    <div class="text-xs text-blue-600 font-bold mb-3">قطعات</div>
                    <h3 class="text-lg font-black text-slate-800 mb-2">تامین قطعات خودروهای وارداتی چرا چالش‌برانگیز است؟</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">بررسی دلایل کمیابی قطعات وارداتی و راهکارهای تیم نواخودرو.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- بخش ۸: فرم استعلام سریع -->
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
