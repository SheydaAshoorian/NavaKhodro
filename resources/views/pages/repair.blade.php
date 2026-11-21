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

        <!-- ۵. خدمات و تضمین‌ها -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white rounded-2xl border border-slate-200 p-4 text-center shadow-sm hover:shadow-md transition-shadow">
                <span class="text-3xl block mb-2">🚚</span>
                <h4 class="text-sm font-bold text-slate-800">ارسال سریع</h4>
                <p class="text-xs text-slate-500 mt-1">به سراسر کشور</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200 p-4 text-center shadow-sm hover:shadow-md transition-shadow">
                <span class="text-3xl block mb-2">🛡️</span>
                <h4 class="text-sm font-bold text-slate-800">ضمانت اصالت</h4>
                <p class="text-xs text-slate-500 mt-1">کالای اورجینال</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200 p-4 text-center shadow-sm hover:shadow-md transition-shadow">
                <span class="text-3xl block mb-2">🔄</span>
                <h4 class="text-sm font-bold text-slate-800">۷ روز ضمانت بازگشت</h4>
                <p class="text-xs text-slate-500 mt-1">بدون قید و شرط</p>
            </div>
            <div class="bg-white rounded-2xl border border-slate-200 p-4 text-center shadow-sm hover:shadow-md transition-shadow">
                <span class="text-3xl block mb-2">📞</span>
                <h4 class="text-sm font-bold text-slate-800">پشتیبانی ۲۴/۷</h4>
                <p class="text-xs text-slate-500 mt-1">همیشه در دسترس</p>
            </div>
        </div>
        <!-- ۶. بخش توضیحات و سئو (مثل دیجی‌کالا) -->
        <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm mt-8">
            <h2 class="text-xl font-black text-slate-800 mb-4 pb-3 border-b border-slate-100">خرید لوازم یدکی و اکسسوری خودرو از نواسرویس</h2>

            <div class="space-y-6 text-sm text-slate-600 leading-relaxed text-justify">
                <p>
                    امروزه با افزایش تعداد خودروها و تنوع برندهای خودرویی در کشور، نیاز به قطعات یدکی و لوازم مصرفی اصیل بیش از پیش احساس می‌شود. مجموعه <strong>نواسرویس</strong> به عنوان یک مرجع تخصصی در حوزه قطعات خودرو، تلاش کرده است تا بستری امن و مطمئن برای خرید آنلاین قطعات یدکی فراهم کند. ما در نواسرویس تمامی قطعات را با ضمانت اصالت و کیفیت بالا به دست شما می‌رسانیم تا خودروی شما همیشه در بهترین وضعیت ممکن باشد.
                </p>

                <h3 class="text-lg font-bold text-slate-800 mt-6 mb-3">تنوع بی‌نظیر قطعات یدکی خودرو</h3>
                <p>
                    در فروشگاه نواسرویس، شما می‌توانید طیف گسترده‌ای از قطعات یدکی را برای برندهای مختلف خودرویی پیدا کنید. از قطعات موتوری و انتقال قدرت گرفته تا سیستم‌های ترمز، روشنایی و لوازم مصرفی مانند فیلترها و روغن‌ها. ما با تامین مستقیم از برندهای معتبری مانند بوش، برمبو و هیلا، این اطمینان را به شما می‌دهیم که محصولی اورجینال و باکیفیت را دریافت خواهید کرد.
                </p>

                <h3 class="text-lg font-bold text-slate-800 mt-6 mb-3">اکسسوری‌های خودرویی برای راحتی و زیبایی</h3>
                <p>
                    علاوه بر قطعات یدکی، نواسرویس مجموعه‌ای کامل از اکسسوری‌های خودرویی را نیز ارائه می‌دهد. از لوازم جانبی داخلی مانند صندلی‌های مخصوص، کف‌پوش‌ها و سیستم‌های صوتی گرفته تا اکسسوری‌های خارجی مثل رینگ‌ها و لاستیک‌ها. اگر به دنبال ارتقاء ظاهر یا افزایش راحتی خودروی خود هستید، می‌توانید روی تنوع محصولات ما حساب کنید.
                </p>

                <h3 class="text-lg font-bold text-slate-800 mt-6 mb-3">چرا از نواسرویس خرید کنیم؟</h3>
                <ul class="list-disc list-inside space-y-2 pr-2">
                    <li><strong>ضمانت اصالت:</strong> تمامی قطعات با ضمانت اصالت و سلامت فیزیکی ارسال می‌شوند.</li>
                    <li><strong>ارسال سریع:</strong> ما سفارشات شما را در سریع‌ترین زمان ممکن به سراسر کشور ارسال می‌کنیم.</li>
                    <li><strong>قیمت‌های رقابتی:</strong> با حذف واسطه‌ها، تلاش کرده‌ایم تا محصولات را با مناسب‌ترین قیمت به شما ارائه دهیم.</li>
                    <li><strong>پشتیبانی تخصصی:</strong> تیم پشتیبانی ما آماده است تا در انتخاب و خرید قطعات به شما مشاوره رایگان بدهد.</li>
                    <li><strong>۷ روز ضمانت بازگشت:</strong> اگر از خرید خود راضی نبودید، می‌توانید کالا را بازگردانید.</li>
                </ul>
                <p class="mt-4">
                    ما در نواسرویس باور داریم که نگهداری صحیح از خودرو، هزینه‌های بلندمدت را کاهش می‌دهد. با خرید قطعات باکیفیت و اصیل، عمر مفید خودروی خود را افزایش دهید و از رانندگی با خیال راحت لذت ببرید.
                </p>
            </div>
        </div>
        <footer class="bg-white border-t border-slate-200 mt-auto">

            <!-- بخش بالایی فوتر (خدمات و لینک‌ها) -->
            <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-8">

                <!-- آیکون‌های خدمات بالا -->
                <div class="flex flex-wrap justify-center md:justify-between items-center gap-6 pb-8 border-b border-slate-200">
                    <div class="flex flex-col items-center text-center gap-2">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-xs font-bold text-slate-700">ضمانت اصل بودن کالا</span>
                    </div>
                    <div class="flex flex-col items-center text-center gap-2">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        <span class="text-xs font-bold text-slate-700">۷ روز ضمانت بازگشت</span>
                    </div>
                    <div class="flex flex-col items-center text-center gap-2">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                        <span class="text-xs font-bold text-slate-700">امکان پرداخت در محل</span>
                    </div>
                    <div class="flex flex-col items-center text-center gap-2">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <span class="text-xs font-bold text-slate-700">پشتیبانی ۲۴ ساعته</span>
                    </div>
                    <div class="flex flex-col items-center text-center gap-2">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        <span class="text-xs font-bold text-slate-700">امکان تحویل اکسپرس</span>
                    </div>
                </div>

                <!-- لینک‌های فوتر -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-8 border-b border-slate-200">
                    <!-- ستون ۱ -->
                    <div>
                        <h4 class="text-sm font-black text-slate-800 mb-4">با نواسرویس</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">اتاق خبر نواسرویس</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">فروش در نواسرویس</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">فرصت‌های شغلی</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">گزارش تخلف در نواسرویس</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">تماس با نواسرویس</a></li>
                        </ul>
                    </div>
                    <!-- ستون ۲ -->
                    <div>
                        <h4 class="text-sm font-black text-slate-800 mb-4">خدمات مشتریان</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">پاسخ به پرسش‌های متداول</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">رویه‌های بازگرداندن کالا</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">شرایط استفاده</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">حریم خصوصی</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">گزارش باگ</a></li>
                        </ul>
                    </div>
                    <!-- ستون ۳ -->
                    <div>
                        <h4 class="text-sm font-black text-slate-800 mb-4">راهنمای خرید</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">نحوه ثبت سفارش</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">رویه ارسال سفارش</a></li>
                            <li><a href="#" class="text-xs text-slate-500 hover:text-blue-600 transition-colors">شیوه‌های پرداخت</a></li>
                        </ul>
                    </div>
                    <!-- ستون ۴ (خبرنامه و شبکه‌های اجتماعی) -->
                    <div>
                        <h4 class="text-sm font-black text-slate-800 mb-4">همراه ما باشید!</h4>
                        <p class="text-xs text-slate-500 mb-3">با ثبت ایمیل، از جدیدترین تخفیف‌ها باخبر شوید.</p>
                        <div class="flex gap-2 mb-6">
                            <input type="email" placeholder="ایمیل شما" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 text-xs outline-none focus:border-blue-500">
                            <button class="bg-slate-200 text-slate-600 text-xs font-bold px-4 rounded-lg hover:bg-slate-300 transition-colors">ثبت</button>
                        </div>
                        <div class="flex items-center gap-4 text-slate-400">
                            <a href="#" class="hover:text-blue-600 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                            <a href="#" class="hover:text-blue-600 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                            <a href="#" class="hover:text-blue-600 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                        </div>
                    </div>
                </div>

                <!-- بخش پایینی (لوگو و نمادها) -->
                <div class="flex flex-col md:flex-row justify-between items-center pt-8 gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                            <span class="text-blue-600 font-black text-xl">ن</span>
                        </div>
                        <div class="text-xs text-slate-500 leading-relaxed">
                            <p class="font-bold text-slate-700 mb-1">نواسرویس، بزرگترین فروشگاه اینترنتی قطعات خودرو</p>
                            <p>کلیه حقوق این سایت متعلق به شرکت نواسرویس می‌باشد.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-16 h-16 bg-slate-50 border border-slate-200 rounded-xl flex items-center justify-center text-xs text-slate-400">نماد ۱</div>
                        <div class="w-16 h-16 bg-slate-50 border border-slate-200 rounded-xl flex items-center justify-center text-xs text-slate-400">نماد ۲</div>
                        <div class="w-16 h-16 bg-slate-50 border border-slate-200 rounded-xl flex items-center justify-center text-xs text-slate-400">نماد ۳</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection
