@extends('layouts.app')

@section('title', 'محصولات مدیران خودرو | نواخودرو')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[250px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 mt-8">
            <span class="inline-flex items-center gap-2 bg-blue-500/20 text-blue-300 border border-blue-500/30 text-sm font-bold px-4 py-1.5 rounded-full mb-4 backdrop-blur-sm">
                🚗 محصولات مدیران خودرو
            </span>
            <h1 class="text-3xl md:text-4xl font-black text-white mb-3 tracking-tight">لیست خودروها</h1>
            <p class="text-base text-slate-300 leading-relaxed">
                جدیدترین خودروهای وارداتی و داخلی مدیران خودرو
            </p>
        </div>
    </section>

    <!-- محتوای اصلی (سایدبار و لیست خودروها) -->
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-10">
        <div class="flex flex-col lg:flex-row gap-6 items-start">

            <!-- سایدبار فیلترها (سمت راست) -->
            <aside class="w-full lg:w-72 flex-shrink-0 bg-white rounded-2xl border border-slate-200 p-5 sticky top-24 shadow-sm">
                <div class="flex justify-between items-center mb-5 pb-4 border-b border-slate-100">
                    <h3 class="text-base font-black text-slate-800">فیلترها</h3>
                    <button class="text-xs text-blue-600 font-bold hover:text-blue-800">حذف همه</button>
                </div>

                <div class="space-y-4">
                    <!-- دسته‌بندی -->
                    <div class="border-b border-slate-100 pb-4">
                        <div class="flex items-center justify-between cursor-pointer mb-3">
                            <h4 class="text-sm font-bold text-slate-800">دسته‌بندی</h4>
                            <svg class="w-4 h-4 text-slate-400 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer hover:text-blue-600"><input type="radio" name="cat" class="accent-blue-600" checked> ام وی ام | MVM</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer hover:text-blue-600"><input type="radio" name="cat" class="accent-blue-600"> فونیکس | Fownix</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer hover:text-blue-600"><input type="radio" name="cat" class="accent-blue-600"> فونیکس نوانرژی | Fownix NEV</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer hover:text-blue-600"><input type="radio" name="cat" class="accent-blue-600"> اکستریم | XTRIM</label>
                        </div>
                    </div>

                    <!-- فیلترهای آکاردئونی (سایر موارد) -->
                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">برند</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">نوع خودرو</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">تعداد سیلندر</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">حجم موتور</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">سیستم انتقال قدرت</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">گیربکس</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">سیستم تعلیق جلو / عقب</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">حداکثر قدرت</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">حداکثر گشتاور</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">طول/عرض/ارتفاع</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">فاصله محوری</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="border-b border-slate-100 pb-4">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">وزن خالص</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                    <div class="pb-2">
                        <button class="flex items-center justify-between w-full text-right">
                            <span class="text-sm font-bold text-slate-800">ظرفیت مخزن سوخت</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>
            </aside>

            <!-- لیست خودروها (سمت چپ) -->
            <main class="flex-1 w-full">
                <!-- نوار مرتب‌سازی -->
                <div class="bg-white rounded-xl border border-slate-200 p-3 flex items-center justify-between mb-6 shadow-sm">
                    <div class="text-sm text-slate-500 hidden sm:block"><strong class="text-blue-600">۱۴</strong> خودرو یافت شد</div>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-500">مرتب‌سازی:</span>
                        <select class="bg-transparent font-bold text-slate-800 outline-none cursor-pointer">
                            <option>جدیدترین</option>
                            <option>ارزان‌ترین</option>
                            <option>گران‌ترین</option>
                        </select>
                    </div>
                </div>

                <!-- گرید خودروها -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">

                    <!-- خودرو ۱ -->
                    <a href="{{ route('car-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/x55.webp') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="MVM X55">
                            <span class="absolute top-2 right-2 bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">جدید</span>
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">MVM X55 Pro</h3>
                        <div class="text-xs text-slate-400 mb-3">شاسی‌بلند - اتوماتیک</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۱٬۲۰۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- خودرو ۲ -->
                    <a href="{{ route('car-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/x22.webp') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="MVM X22">
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">MVM X22 Pro</h3>
                        <div class="text-xs text-slate-400 mb-3">شاسی‌بلند - اتوماتیک</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۸۵۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- خودرو ۳ -->
                    <a href="{{ route('car-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/x33.webp') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="Fownix FX">
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">Fownix FX</h3>
                        <div class="text-xs text-slate-400 mb-3">سدان - اتوماتیک</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۱٬۵۰۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- خودرو ۴ -->
                    <a href="{{ route('car-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/x33 cvt.webp') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="XTRIM">
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">XTRIM</h3>
                        <div class="text-xs text-slate-400 mb-3">شاسی‌بلند - اتوماتیک</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۲٬۸۰۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- خودرو ۵ -->
                    <a href="{{ route('car-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/xyy.webp') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="MVM 315">
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">MVM 315</h3>
                        <div class="text-xs text-slate-400 mb-3">سدان - اتوماتیک</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۶۵۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                                <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- خودرو ۶ -->
                    <a href="{{ route('car-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/x55.webp') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="Fownix NEV">
                            <span class="absolute top-2 right-2 bg-emerald-500 text-white text-xs font-bold px-2 py-1 rounded">برقی</span>
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">Fownix NEV</h3>
                        <div class="text-xs text-slate-400 mb-3">سدان برقی - اتوماتیک</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۲٬۲۰۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                               <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>

                        </div>
                    </a>

                </div>

                <!-- صفحه‌بندی -->
                <div class="flex justify-center items-center gap-2 mt-10">
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-blue-600 text-white font-bold">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 transition-colors font-bold">2</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                </div>
            </main>
        </div>
    </div>
@endsection
