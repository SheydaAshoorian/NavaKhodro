@extends('layouts.app')

@section('title', 'درباره ما | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[350px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 max-w-3xl mt-8">
            <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">درباره <span class="text-blue-500">نواسرویس</span></h1>
            <p class="text-lg text-slate-300 leading-relaxed">
                ما در نواسرویس تلاش می‌کنیم تا تجربه‌ای مطمئن و شفاف از خرید قطعات خودرو و خدمات پس از فروش را برای شما رقم بزنیم.
            </p>
        </div>
    </section>

    <!-- بخش داستان ما -->
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-16">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- متن -->
            <div class="flex-1 space-y-6">
                <h2 class="text-2xl md:text-3xl font-black text-slate-800 leading-snug">
                    داستان ما از <span class="text-blue-600">یک باور ساده</span> شروع شد
                </h2>
                <p class="text-slate-600 leading-relaxed text-justify">
                    بازار قطعات یدکی خودرو در ایران همیشه با چالش‌هایی مثل عدم اصالت کالا، قیمت‌های نامتعارف و نبود اطلاعات دقیق فنی مواجه بوده است. ما در نواسرویس تصمیم گرفتیم تا این چرخه را تغییر دهیم.
                </p>
                <p class="text-slate-600 leading-relaxed text-justify">
                    با تکیه بر سال‌ها تجربه در صنعت خودرو و با همکاری با برندهای معتبر جهانی، بستری فراهم کرده‌ایم که در آن هر راننده بتواند با اطمینان کامل، قطعه مورد نیاز خودروی خود را پیدا کند، قیمت آن را بداند و با ضمانت اصالت آن را دریافت کند. ما فقط یک فروشگاه نیستیم، ما همراه شما در نگهداری از خودرویتان هستیم.
                </p>
            </div>

            <!-- تصویر -->
            <div class="flex-1 w-full">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1625047509168-a7026f36de04?q=80&w=1000&auto=format&fit=crop" alt="تیم نواسرویس" class="w-full h-[400px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- بخش آمار (ارقام کلیدی) -->
    <div class="bg-slate-50 border-y border-slate-200 py-12">
        <div class="max-w-[1300px] mx-auto px-4 md:px-8 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-black text-blue-600 mb-2">+۱۰</div>
                <div class="text-sm font-bold text-slate-600">سال تجربه در صنعت خودرو</div>
            </div>
            <div>
                <div class="text-4xl font-black text-blue-600 mb-2">+۵۰۰۰</div>
                <div class="text-sm font-bold text-slate-600">مشتری راضی در سراسر کشور</div>
            </div>
            <div>
                <div class="text-4xl font-black text-blue-600 mb-2">+۱۰۰۰</div>
                <div class="text-sm font-bold text-slate-600">قطعه اورجینال موجود در انبار</div>
            </div>
            <div>
                <div class="text-4xl font-black text-blue-600 mb-2">۲۴/۷</div>
                <div class="text-sm font-bold text-slate-600">پشتیبانی و پاسخگویی</div>
            </div>
        </div>
    </div>

    <!-- بخش ارزش‌های ما -->
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-black text-slate-800 mb-4">ارزش‌های ما</h2>
            <p class="text-slate-500 max-w-2xl mx-auto">ما به سه اصل اساسی پایبند هستیم که چراغ راه تصمیم‌گیری‌های ما هستند.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- ارزش ۱ -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm text-center hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg font-black text-slate-800 mb-3">اصالت تضمین‌شده</h3>
                <p class="text-slate-500 text-sm leading-relaxed">تمامی کالاهای عرضه شده در نواسرویس با ضمانت اصالت و با فاکتور رسمی به دست شما می‌رسند.</p>
            </div>
            <!-- ارزش ۲ -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm text-center hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-lg font-black text-slate-800 mb-3">پشتیبانی تخصصی</h3>
                <p class="text-slate-500 text-sm leading-relaxed">تیم پشتیبانی ما از میان افراد متخصص در حوزه خودرو انتخاب شده‌اند تا بهترین مشاوره را به شما بدهند.</p>
            </div>
            <!-- ارزش ۳ -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm text-center hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-lg font-black text-slate-800 mb-3">ارسال سریع</h3>
                <p class="text-slate-500 text-sm leading-relaxed">ما می‌دانیم که توقف خودرو یعنی توقف زندگی شما. بنابراین سفارشات را در سریع‌ترین زمان ممکن ارسال می‌کنیم.</p>
            </div>
        </div>
    </div>

    <!-- بخش دعوت به همکاری -->
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 pb-16">
        <div class="bg-blue-600 rounded-3xl p-8 md:p-12 text-center relative overflow-hidden">
            <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
            <div class="relative z-10">
                <h2 class="text-2xl md:text-3xl font-black text-white mb-4">آماده‌اید تا خودروی خود را ارتقا دهید؟</h2>
                <p class="text-blue-100 mb-8 max-w-2xl mx-auto">همین حالا جستجوی قطعه را شروع کنید و بهترین کیفیت را با مناسب‌ترین قیمت تجربه کنید.</p>
                <a href="{{ route('part-search') }}" class="inline-flex items-center justify-center px-8 py-3.5 bg-white text-blue-600 font-black rounded-xl shadow-lg hover:bg-slate-50 transition-all transform hover:-translate-y-0.5">
                    شروع خرید
                </a>
            </div>
        </div>
    </div>
@endsection
