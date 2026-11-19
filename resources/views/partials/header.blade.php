<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-[100] bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-sm">
    <div class="max-w-[1400px] mx-auto px-4 md:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- لوگو -->
            <div class="flex-shrink-0 flex items-center gap-3">
                @if(request()->is('service/*') || request()->routeIs('nava_service'))
                    {{-- وقتی در صفحات نواسرویس هستیم --}}

                    <a href="{{ route('nava_service') }}" class="flex items-center gap-2">
                        <img src="{{ asset('images/logo.png') }}" alt="نواسرویس" class="h-10 w-auto object-contain">
                    </a>
                @else
                    {{-- حالت عادی (صفحات نواخودرو) --}}
                    <a href="{{ route('home') }}" class="opacity-80 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('images/navakhodro-logo.jpg') }}" alt="نواخودرو" class="h-8 w-auto object-contain">
                    </a>
                @endif
            </div>

            <!-- منوی دسکتاپ -->
            <nav class="hidden lg:flex items-center gap-1 h-full">

                <!-- خانه -->
                <a href="{{ route('home') }}" class="px-4 py-2 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">خانه</a>

                <!-- محصولات (منوی چندلایه) -->
                <div class="relative group h-full flex items-center">
                    <button class="flex items-center gap-1 px-4 py-2 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                        محصولات
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>

                    <!-- منوی کشویی سطح ۱ -->
                    <div class="absolute top-full left-0 pt-2 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <!-- کانتینر سفید: overflow-visible برای اینکه زیرمنو بتونه از کادر بیرون بزنه -->
                        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-2 flex flex-col gap-1 overflow-visible">

                            <!-- مدیران خودرو -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    مدیران خودرو
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <!-- زیرمنوی سطح ۲: حالا به سمت راست باز میشه (right-full) -->
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">MVM</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">فونیکس</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">فونیکس NEV</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">اکستریم</a>
                                    </div>
                                </div>
                            </div>

                            <!-- فردا موتورز -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    فردا موتورز
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">FMC</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">MG</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">چانگان</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">جیلی</a>
                                    </div>
                                </div>
                            </div>

                            <!-- کرمان موتور -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    کرمان موتور
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">هیوندای (KTL)</a>
                                    </div>
                                </div>
                            </div>

                            <!-- دیار خودرو -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    دیار خودرو
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">بایک</a>
                                    </div>
                                </div>
                            </div>

                            <!-- کوشا خودرو -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    کوشا خودرو
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">کیا</a>
                                    </div>
                                </div>
                            </div>

                            <!-- ماموت خودرو -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    ماموت خودرو
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">فولکس واگن</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">جتا</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">ارس</a>
                                    </div>
                                </div>
                            </div>

                            <!-- آفتاب خودرو -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    آفتاب خودرو
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">مزدا</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">ولوو</a>
                                    </div>
                                </div>
                            </div>

                            <!-- خودروی برقی نبکا -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    خودروی برقی نبکا
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">اسکای ول</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">BYD</a>
                                    </div>
                                </div>
                            </div>

                            <!-- تیگارد موتور (بدون زیرمنو) -->
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">تیگارد موتور</a>

                            <!-- آرین پارس موتور -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    آرین پارس موتور
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">لاماری</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">لاماکو</a>
                                    </div>
                                </div>
                            </div>

                            <!-- آرینا درایو -->
                            <div class="relative group/sub">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    آرینا درایو
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="hidden group-hover/sub:block absolute top-0 right-full pr-4 w-56 z-[999]">
                                    <div class="bg-white rounded-xl shadow-2xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">هوندا</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">میتسوبیشی</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">نیسان</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">یونی</a>
                                    </div>
                                </div>
                            </div>

                            <!-- بقیه موارد بدون زیرمنو -->
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">آرشام موتور</a>
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">بینالود</a>
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">مکث موتور (لوکانو)</a>

                        </div>
                    </div>
                </div>
                <!-- خرید و فروش خودرو -->
                <div class="relative group h-full flex items-center">
                    <button class="flex items-center gap-1 px-4 py-2 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                        خرید و فروش خودرو
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute top-full left-0 pt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-2 flex flex-col gap-1">
                            <a href="{{ route('buy') }}" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">خرید خودرو</a>
                            <a href="{{ route('sell') }}" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">فروش خودرو</a>

                            <!-- ثبت نام و شرایط فروش (زیرمنو) -->
                            <div class="group/sub relative">
                                <a href="#" class="flex items-center justify-between px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                                    ثبت نام و شرایط فروش
                                    <svg class="w-4 h-4 transform group-hover/sub:-rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                </a>
                                <div class="absolute top-0 right-full pr-2 w-56 opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all z-50">
                                    <div class="bg-white rounded-xl shadow-xl border border-slate-100 p-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">MVM</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">فونیکس</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">اکستریم</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">FMC</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">MG</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">دیار</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">لوکانو</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- خرید موتور سیکلت  -->
                <div class="relative group h-full flex items-center">
                    <button class="flex items-center gap-1 px-4 py-2 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                        خرید موتورسیکلت
                    </button>
                </div>

                <!-- نواسرویس (منوی کشویی) -->
                <div class="relative group h-full flex items-center">
                    <a href="{{ route('nava_service') }}" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                        <button class="flex items-center gap-1 px-4 py-2 text-sm font-bold text-blue-600 bg-blue-50 rounded-xl transition">
                            نواسرویس
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="absolute top-full left-0 pt-2 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-2 flex flex-col gap-1">
                            <a href="{{ route('part-search') }}" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition"> جسنجوی قطعه  </a>
                            <a href="{{ route('buy') }}" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition"> فروشگاه قطعات  </a>
                            <a href="{{ route('track-order') }}" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition"> وضعیت درخواست / پیگیری سفارش   </a>
                            <a href="{{ route('repair') }}" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition"> تعمیرگاه و خدمات پس از فروش </a>
                        </div>

                        </div>
                     </a>
                </div>

                <!-- نمایندگی‌ها و شعب -->
                <div class="relative group h-full flex items-center">
                    <a href="{{ route('blog') }}" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                        <button class="flex items-center gap-1 px-4 py-2 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                         وبلاگ
                        </button>
                    </a>
                </div>

                <!-- ارتباط با ما -->
                <div class="relative group h-full flex items-center">
                    <button class="flex items-center gap-1 px-4 py-2 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">
                        ارتباط با ما
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute top-full left-0 pt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-2 flex flex-col gap-1">
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">درباره ما</a>
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">تماس با ما</a>
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">استخدام</a>
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">شکایات مشتری</a>
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition">عضویت در اطلاع‌رسانی</a>
                        </div>
                    </div>
                </div>

            </nav>

            <!-- دکمه CTA و آیکون‌های کاربر -->
            <div class="flex items-center gap-3">
                <!-- دکمه تماس با ما -->
                <a href="{{ route('nava_service') }}#contact" class="hidden lg:inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-sm font-semibold rounded-full text-white bg-blue-600 hover:bg-blue-700 shadow-sm hover:shadow transition-all duration-200 whitespace-nowrap">
                    تماس با ما
                </a>
                <!-- سبد خرید -->
                <a href="#" class="relative p-2.5 text-slate-600 hover:text-blue-600 hover:bg-slate-50 rounded-xl transition-all group">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <!-- نشانگر تعداد (Badge) -->
                    <span class="absolute top-1.5 right-1.5 bg-red-500 text-white text-[10px] font-black w-4 h-4 flex items-center justify-center rounded-full border-2 border-white">2</span>
                </a>

                <!-- پروفایل مشتری (منوی کشویی) -->
                <div class="relative group h-full flex items-center">
                    <button class="flex items-center gap-2 p-2.5 text-slate-600 hover:text-blue-600 hover:bg-slate-50 rounded-xl transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="text-sm font-bold hidden xl:block">حساب کاربری</span>
                    </button>

                    <!-- منوی کشویی پروفایل -->
                    <div class="absolute top-full left-0 pt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-2 flex flex-col gap-1">
                            <div class="px-4 py-3 border-b border-slate-100 mb-1">
                                <p class="text-sm font-black text-slate-800">علی رضایی</p>
                                <p class="text-xs text-slate-500 mt-0.5" dir="ltr">۰۹۱۲۳۴۵۶۷۸۹</p>
                            </div>
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-colors">
                                اکانت من
                            </a>
                            <a href="#" class="block px-4 py-2.5 text-sm font-bold text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-colors">
                                لیست سفارشات
                            </a>
                            <div class="border-t border-slate-100 mt-1 pt-1">
                                <a href="#" class="block px-4 py-2.5 text-sm font-bold text-red-600 hover:text-red-700 hover:bg-red-50 rounded-xl transition-colors flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                    خروج
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- دکمه منوی موبایل -->
                <button class="lg:hidden p-2 text-slate-600 hover:bg-slate-100 rounded-lg" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>

        </div>
    </div>

    <!-- منوی موبایل -->
    <div x-show="mobileMenuOpen" x-transition class="lg:hidden absolute top-full left-0 w-full bg-white border-t border-slate-100 shadow-xl max-h-[80vh] overflow-y-auto" style="display: none;">
        <nav class="flex flex-col p-4">
            <a href="{{ route('home') }}" class="py-3 px-4 text-slate-700 font-bold hover:bg-slate-50 rounded-xl">خانه</a>

            <!-- آکاردئون محصولات (موبایل) -->
            <div x-data="{ open: false }" class="flex flex-col">
                <button @click="open = !open" class="flex items-center justify-between py-3 px-4 text-slate-700 font-bold hover:bg-slate-50 rounded-xl w-full text-right">
                    محصولات
                    <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" class="flex flex-col pr-4 bg-slate-50 rounded-xl mb-2 gap-1" style="display: none;">
                    <!-- مدیران خودرو (آکاردئون سطح ۲) -->
                    <div x-data="{ subOpen: false }">
                        <button @click="subOpen = !subOpen" class="flex items-center justify-between py-2 px-4 text-sm text-slate-600 w-full text-right">
                            مدیران خودرو
                            <svg :class="{'rotate-180': subOpen}" class="w-3 h-3 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="subOpen" class="flex flex-col pr-4" style="display: none;">
                            <a href="#" class="py-1.5 px-4 text-xs text-slate-500">MVM</a>
                            <a href="#" class="py-1.5 px-4 text-xs text-slate-500">فونیکس</a>
                            <a href="#" class="py-1.5 px-4 text-xs text-slate-500">فونیکس NEV</a>
                            <a href="#" class="py-1.5 px-4 text-xs text-slate-500">اکستریم</a>
                        </div>
                    </div>
                    <!-- فردا موتورز (آکاردئون سطح ۲) -->
                    <div x-data="{ subOpen: false }">
                        <button @click="subOpen = !subOpen" class="flex items-center justify-between py-2 px-4 text-sm text-slate-600 w-full text-right">
                            فردا موتورز
                            <svg :class="{'rotate-180': subOpen}" class="w-3 h-3 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="subOpen" class="flex flex-col pr-4" style="display: none;">
                            <a href="#" class="py-1.5 px-4 text-xs text-slate-500">FMC</a>
                            <a href="#" class="py-1.5 px-4 text-xs text-slate-500">MG</a>
                            <a href="#" class="py-1.5 px-4 text-xs text-slate-500">چانگان</a>
                            <a href="#" class="py-1.5 px-4 text-xs text-slate-500">جیلی</a>
                        </div>
                    </div>
                    <a href="#" class="py-2 px-4 text-sm text-slate-600">کرمان موتور</a>
                    <a href="#" class="py-2 px-4 text-sm text-slate-600">دیار خودرو</a>
                    <a href="#" class="py-2 px-4 text-sm text-slate-600">ماموت خودرو</a>
                    <a href="#" class="py-2 px-4 text-sm text-slate-600">آفتاب خودرو</a>
                    <a href="#" class="py-2 px-4 text-sm text-slate-600">خودروی برقی نبکا</a>
                    <a href="#" class="py-2 px-4 text-sm text-slate-600">تیگارد موتور</a>
                    <a href="#" class="py-2 px-4 text-sm text-slate-600">بینالود</a>
                </div>
            </div>

            <!-- خرید و فروش خودرو (موبایل) -->
            <div x-data="{ open: false }" class="flex flex-col">
                <button @click="open = !open" class="flex items-center justify-between py-3 px-4 text-slate-700 font-bold hover:bg-slate-50 rounded-xl w-full text-right">
                    خرید و فروش خودرو
                    <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" class="flex flex-col pr-4 bg-slate-50 rounded-xl mb-2 gap-1" style="display: none;">
                    <a href="{{ route('buy') }}" class="py-2 px-4 text-sm text-slate-600">خرید خودرو</a>
                    <a href="{{ route('sell') }}" class="py-2 px-4 text-sm text-slate-600">فروش خودرو</a>
                    <a href="#" class="py-2 px-4 text-sm text-slate-600">ثبت نام و شرایط فروش</a>
                </div>
            </div>

            <!-- نواسرویس (موبایل) -->
            <div x-data="{ open: false }" class="flex flex-col">
                <button @click="open = !open" class="flex items-center justify-between py-3 px-4 text-blue-600 bg-blue-50 font-bold rounded-xl w-full text-right">
                    نواسرویس
                    <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" class="flex flex-col pr-4 mt-2 mb-2 gap-1" style="display: none;">
                    <a href="{{ route('part-search') }}" class="py-2 px-4 text-sm text-slate-600 hover:text-blue-600">جستجوی قطعه</a>
                    <a href="{{ route('booking') }}" class="py-2 px-4 text-sm text-slate-600 hover:text-blue-600">ثبت نوبت تعمیرگاهی</a>
                    <a href="{{ route('track-car') }}" class="py-2 px-4 text-sm text-slate-600 hover:text-blue-600">پیگیری خودرو</a>
                    <a href="{{ route('track-order') }}" class="py-2 px-4 text-sm text-slate-600 hover:text-blue-600">پیگیری سفارشات</a>
                    <a href="{{ route('car-info') }}" class="py-2 px-4 text-sm text-slate-600 hover:text-blue-600">اطلاعات خودرو</a>
                    <a href="{{ route('complaints') }}" class="py-2 px-4 text-sm text-slate-600 hover:text-blue-600">شکایات</a>
                </div>
            </div>

            <a href="#" class="py-3 px-4 text-slate-700 font-bold hover:bg-slate-50 rounded-xl">ارتباط با ما</a>

            <a href="#" class="mt-4 bg-blue-600 text-white text-center font-bold py-3 rounded-xl">تماس با ما</a>
        </nav>
    </div>
</header>
