
@extends('layouts.app')

@section('title', 'خرید موتورسیکلت | نواخودرو')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[250px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1558981403-c5f9899a28bc?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-40"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 mt-8">
            <span class="inline-flex items-center gap-2 bg-blue-500/20 text-blue-300 border border-blue-500/30 text-sm font-bold px-4 py-1.5 rounded-full mb-4 backdrop-blur-sm">
                🏍️ خرید موتورسیکلت
            </span>
            <h1 class="text-3xl md:text-4xl font-black text-white mb-3 tracking-tight">لیست موتورسیکلت‌ها</h1>
            <p class="text-base text-slate-300 leading-relaxed">
                جدیدترین موتورسیکلت‌های وارداتی و داخلی
            </p>
        </div>
    </section>

    <!-- محتوای اصلی (سایدبار و لیست موتورها) -->
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-10">
        <div class="flex flex-col lg:flex-row gap-6 items-start">

            <!-- سایدبار فیلترها (سمت راست) -->
            <aside class="w-full lg:w-64 flex-shrink-0 bg-white rounded-2xl border border-slate-200 p-5 sticky top-24 shadow-sm">
                <div class="flex justify-between items-center mb-5 pb-4 border-b border-slate-100">
                    <h3 class="text-base font-black text-slate-800">فیلترها</h3>
                    <button class="text-xs text-blue-600 font-bold hover:text-blue-800">حذف همه</button>
                </div>

                <div class="space-y-5">
                    <!-- برند -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">برند</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded" checked> هوندا (Honda)</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> یاماها (Yamaha)</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> کویر موتور</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> بنلی (Benelli)</label>
                        </div>
                    </div>

                    <!-- نوع موتور -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">نوع موتور</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> اسکوتر</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> اسپرت</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> تورینگ</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> آفرود</label>
                        </div>
                    </div>

                    <!-- حجم موتور -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">حجم موتور (سی سی)</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> ۱۲۵ سی سی</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> ۱۵۰ سی سی</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> ۲۵۰ سی سی</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> ۴۰۰ سی سی به بالا</label>
                        </div>
                    </div>

                    <!-- محدوده قیمت -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">محدوده قیمت (تومان)</h4>
                        <div class="flex gap-2 mb-2">
                            <input type="number" placeholder="از" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-2 py-1.5 text-xs outline-none focus:border-blue-500">
                            <input type="number" placeholder="تا" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-2 py-1.5 text-xs outline-none focus:border-blue-500">
                        </div>
                    </div>

                    <!-- سال ساخت -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">سال ساخت</h4>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 text-sm font-semibold outline-none focus:border-blue-500">
                            <option value="">همه سال‌ها</option>
                            <option>۱۴۰۴</option>
                            <option>۱۴۰۳</option>
                            <option>۱۴۰۲</option>
                            <option>۱۴۰۱</option>
                        </select>
                    </div>
                </div>
            </aside>

            <!-- لیست موتورها (سمت چپ) -->
            <main class="flex-1 w-full">
                <!-- نوار مرتب‌سازی -->
                <div class="bg-white rounded-xl border border-slate-200 p-3 flex items-center justify-between mb-6 shadow-sm">
                    <div class="text-sm text-slate-500 hidden sm:block"><strong class="text-blue-600">۸</strong> موتور یافت شد</div>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-500">مرتب‌سازی:</span>
                        <select class="bg-transparent font-bold text-slate-800 outline-none cursor-pointer">
                            <option>جدیدترین</option>
                            <option>ارزان‌ترین</option>
                            <option>گران‌ترین</option>
                        </select>
                    </div>
                </div>

                <!-- گرید موتورها -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">

                    <!-- موتور ۱ -->
                    <a href="#" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/motorcycles/honda-cb150.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="Honda CB150">
                            <span class="absolute top-2 right-2 bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">جدید</span>
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">هوندا CB150</h3>
                        <div class="text-xs text-slate-400 mb-3">اسپرت - ۱۵۰ سی سی</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۲۵۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- موتور ۲ -->
                    <a href="#" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/motorcycles/yamaha-nmax.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="Yamaha NMAX">
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">یاماها NMAX</h3>
                        <div class="text-xs text-slate-400 mb-3">اسکوتر - ۱۵۵ سی سی</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۳۸۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- موتور ۳ -->
                    <a href="#" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/motorcycles/benelli-302s.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="Benelli 302S">
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">بنلی 302S</h3>
                        <div class="text-xs text-slate-400 mb-3">اسپرت - ۳۰۰ سی سی</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۴۵۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- موتور ۴ -->
                    <a href="#" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/motorcycles/kavir-125.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="Kavir 125">
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">کویر ۱۲۵</h3>
                        <div class="text-xs text-slate-400 mb-3">اسکوتر - ۱۲۵ سی سی</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۸۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- موتور ۵ -->
                    <a href="#" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/motorcycles/honda-cbr500.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="Honda CBR500">
                            <span class="absolute top-2 right-2 bg-rose-500 text-white text-xs font-bold px-2 py-1 rounded">اسپرت</span>
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">هوندا CBR500</h3>
                        <div class="text-xs text-slate-400 mb-3">اسپرت - ۵۰۰ سی سی</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۷۵۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2 py-1 rounded">مشاهده جزئیات</span>
                        </div>
                    </a>

                    <!-- موتور ۶ -->
                    <a href="#" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('images/motorcycles/yamaha-mt07.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="Yamaha MT-07">
                        </div>
                        <h3 class="text-base font-black text-slate-800 mb-1">یاماها MT-07</h3>
                        <div class="text-xs text-slate-400 mb-3">اسپرت - ۷۰۰ سی سی</div>
                        <div class="mt-auto pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black">۹۵۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></span>
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
