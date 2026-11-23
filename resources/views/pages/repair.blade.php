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
            <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">خدمات <span class="text-blue-400">تعمیرگاهی</span></h1>
            <p class="text-lg text-slate-300 leading-relaxed">
                رزرو نوبت، پیگیری وضعیت و دسترسی به اطلاعات خودرو در یک مجموعه معتبر.
            </p>
        </div>
    </section>

    <!-- بخش اصلی (باکس‌های تعمیرگاه به صورت افقی) -->
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-16">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- کارت ۱: ثبت نوبت -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-lg hover:border-blue-200 transition-all flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center text-3xl mb-4 group-hover:bg-blue-100 transition-colors">
                    📅
                </div>
                <h2 class="text-lg font-black text-slate-800 mb-2">رزرو نوبت سرویس</h2>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 flex-1">برای سرویس دوره‌ای یا تعمیرات تخصصی، نوبت خود را به صورت آنلاین رزرو کنید.</p>
                <a href="{{ route('booking') }}" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-100 font-bold py-2.5 rounded-xl transition-all text-sm mt-auto border border-blue-100">
                    دریافت نوبت
                </a>
            </div>

            <!-- کارت ۲: پیگیری خودرو -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-lg hover:border-indigo-200 transition-all flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-indigo-50 text-indigo-500 rounded-2xl flex items-center justify-center text-3xl mb-4 group-hover:bg-indigo-100 transition-colors">
                    🚗
                </div>
                <h2 class="text-lg font-black text-slate-800 mb-2">پیگیری وضعیت خودرو</h2>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 flex-1">با وارد کردن کد رهگیری، از آخرین وضعیت تعمیر خودروی خود مطلع شوید.</p>
                <a href="{{ route('track-car') }}" class="w-full bg-indigo-50 text-indigo-600 hover:bg-indigo-100 font-bold py-2.5 rounded-xl transition-all text-sm mt-auto border border-indigo-100">
                    مشاهده وضعیت
                </a>
            </div>

            <!-- کارت ۳: اطلاعات خودرو -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-lg hover:border-emerald-200 transition-all flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-emerald-50 text-emerald-500 rounded-2xl flex items-center justify-center text-3xl mb-4 group-hover:bg-emerald-100 transition-colors">
                    📋
                </div>
                <h2 class="text-lg font-black text-slate-800 mb-2">سوابق و اطلاعات خودرو</h2>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 flex-1">تاریخچه کامل سرویس‌ها و وضعیت گارانتی خودروی خود را مشاهده کنید.</p>
                <a href="{{ route('car-info') }}" class="w-full bg-emerald-50 text-emerald-600 hover:bg-emerald-100 font-bold py-2.5 rounded-xl transition-all text-sm mt-auto border border-emerald-100">
                    مشاهده سوابق
                </a>
            </div>

            <!-- کارت ۴: ثبت شکایت -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-lg hover:border-rose-200 transition-all flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-rose-50 text-rose-500 rounded-2xl flex items-center justify-center text-3xl mb-4 group-hover:bg-rose-100 transition-colors">
                    📣
                </div>
                <h2 class="text-lg font-black text-slate-800 mb-2">ثبت شکایت و بازخورد</h2>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 flex-1">نظرات، پیشنهادات یا شکایات خود را در مورد کیفیت خدمات با ما در میان بگذارید.</p>
                <a href="{{ route('complaints') }}" class="w-full bg-rose-50 text-rose-600 hover:bg-rose-100 font-bold py-2.5 rounded-xl transition-all text-sm mt-auto border border-rose-100">
                    ثبت بازخورد
                </a>
            </div>
        </div>

        <!-- ۶. بخش توضیحات و سئو -->
        <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm mt-8">
            <h2 class="text-xl font-black text-slate-800 mb-4 pb-3 border-b border-slate-100">خدمات تخصصی تعمیرگاه نواسرویس</h2>

            <div class="space-y-6 text-sm text-slate-600 leading-relaxed text-justify">

                <p>
                    مجموعه <strong>نواسرویس</strong> با بهره‌گیری از مجهزترین تجهیزات و متخصصان مجرب، آماده ارائه خدمات جامع تعمیرگاهی و سرویس دوره‌ای به خودروی شماست. ما در نواسرویس می‌دانیم که سلامت خودرو شما، یعنی آرامش خاطر شما. بنابراین تمامی خدمات را با بالاترین استانداردها و با استفاده از قطعات اصلی انجام می‌دهیم.
                </p>

                <h3 class="text-lg font-bold text-slate-800 mt-6 mb-3">رزرو نوبت آنلاین و بدون معطلی</h3>
                <p>
                    دیگر نیازی به انتظار در صف‌های طولانی تعمیرگاه نیست. با استفاده از سیستم رزرو نوبت آنلاین نواسرویس، می‌توانید در چند دقیقه زمان و مکان مراجعه خود را مشخص کنید. تیم ما در زمان مقرر آماده پذیرایی از شما و خودرویتان خواهد بود.
                </p>

                <h3 class="text-lg font-bold text-slate-800 mt-6 mb-3">پیگیری لحظه‌ای وضعیت تعمیرات</h3>
                <p>
                    ما شفافیت را سرلوحه کار خود قرار داده‌ایم. با کد رهگیری که در اختیار شما قرار می‌گیرد، می‌توانید در هر لحظه از وضعیت پیشرفت تعمیر خودروی خود مطلع شوید. این امر به شما کمک می‌کند تا برنامه‌ریزی دقیق‌تری برای امور روزانه خود داشته باشید.
                </p>

                <h3 class="text-lg font-bold text-slate-800 mt-6 mb-3">دسترسی به تاریخچه کامل خودرو</h3>
                <p>
                    با عضویت در سیستم نواسرویس، به آرشیوی از تمام سرویس‌ها و تعمیرات انجام شده بر روی خودروی خود دسترسی خواهید داشت. این اطلاعات ارزشمند نه تنها برای نگهداری بهتر خودرو مفید است، بلکه در زمان فروش نیز می‌تواند ارزش خودروی شما را افزایش دهد.
                </p>

                <!-- بخش خدمات تخصصی (به صورت متن جایگزین کارت‌ها) -->
                <h3 class="text-lg font-bold text-slate-800 mt-6 mb-3">خدمات تخصصی ما شامل:</h3>
                <ul class="list-disc list-inside space-y-3 pr-2 text-slate-600">
                    <li><strong>تعمیرگاه‌های مجاز برای هر برند:</strong> با همکاری با برندهای معتبر خودرویی، خدمات تعمیراتی تخصصی را مطابق با استانداردهای کارخانه ارائه می‌دهیم.</li>
                    <li><strong>خدمات صافکاری و نقاشی:</strong> رفع ضربه‌خوردگی، رنگ‌آمیزی و بازسازی بدنه با استفاده از بهترین متریال و تجهیزات روز.</li>
                    <li><strong>سرویس‌های دوره‌ای:</strong> انجام سرویس‌های منظم و پیشگیرانه برای حفظ عملکرد بهینه خودرو و افزایش طول عمر آن.</li>
                    <li><strong>دیتیلینگ خودرو:</strong> شامل پولیش، سرامیک، نظافت داخلی و خارجی با دقت بالا برای جلوه‌ای نو و درخشان.</li>
                </ul>

                <h3 class="text-lg font-bold text-slate-800 mt-6 mb-3">تعهد ما به کیفیت و رضایت شما</h3>
                <ul class="list-disc list-inside space-y-2 pr-2">
                    <li><strong>تضمین کیفیت:</strong> تمامی خدمات با ضمانت و پشتیبانی کامل ارائه می‌شوند.</li>
                    <li><strong>قطعات اصل:</strong> ما فقط از قطعات یدکی اورجینال و باکیفیت استفاده می‌کنیم.</li>
                    <li><strong>قیمت شفاف:</strong> هزینه‌ها پیش از شروع کار به طور کامل به شما اعلام می‌شود.</li>
                    <li><strong>پرسنل متخصص:</strong> تیم فنی ما از میان مجرب‌ترین متخصصان صنعت خودرو انتخاب شده‌اند.</li>
                </ul>

                <p class="mt-4">
                    ما در نواسرویس همواره در تلاشیم تا تجربه‌ای متفاوت و لذت‌بخش از نگهداری خودرو را برای شما رقم بزنیم. با ما همراه باشید و مطمئن باشید که خودروی شما در بهترین دست‌هاست.
                </p>
            </div>
        </div>
    </div>
@endsection
