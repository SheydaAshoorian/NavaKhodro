@extends('layouts.app')

@section('title', 'اکسسوری و تجهیزات خودرو | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <x-hero />

    <!-- چیدمان اصلی (سایدبار فیلتر و لیست محصولات) -->
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-10">
        <x-categories />
        <div class="flex flex-col lg:flex-row gap-8 items-start">

            <!-- سایدبار فیلترها (سمت راست) -->
            <aside class="w-full lg:w-80 flex-shrink-0 bg-white rounded-2xl border border-slate-200 p-6 sticky top-24 shadow-sm">
                <div class="flex justify-between items-center mb-6 pb-4 border-b border-slate-100">
                    <h3 class="text-lg font-black text-slate-800">فیلتر اکسسوری‌ها</h3>
                    <button onclick="resetFilters()" class="text-sm text-blue-600 font-bold hover:text-blue-800">پاک کردن</button>
                </div>

                <div class="space-y-5">
                    <!-- نوع اکسسوری -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">نوع اکسسوری</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded" checked> لوازم جانبی داخلی</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> لوازم جانبی خارجی</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> سیستم صوتی و تصویری</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> ابزار و تجهیزات</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> مراقبت و نظافت</label>
                        </div>
                    </div>

                    <!-- برند -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">برند</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> Bosch</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> Pioneer</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> Sony</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> Armor All</label>
                        </div>
                    </div>

                    <!-- محدوده قیمت -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">محدوده قیمت</h4>
                        <div class="flex gap-2 mb-2">
                            <input type="number" placeholder="از" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-2 py-1.5 text-xs outline-none focus:border-blue-500">
                            <input type="number" placeholder="تا" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-2 py-1.5 text-xs outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </aside>

            <!-- بخش لیست محصولات (سمت چپ) -->
            <main class="flex-1 w-full">

                <!-- نوار مرتب‌سازی -->
                <div class="bg-white rounded-xl border border-slate-200 p-3 flex items-center justify-between mb-6 shadow-sm">
                    <div class="text-sm text-slate-500 hidden sm:block">۶ کالا</div>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-500">مرتب‌سازی:</span>
                        <select class="bg-transparent font-bold text-slate-800 outline-none cursor-pointer">
                            <option>پرفروش‌ترین</option>
                            <option>ارزان‌ترین</option>
                            <option>گران‌ترین</option>
                            <option>جدیدترین</option>
                        </select>
                    </div>
                </div>

                <!-- گرید محصولات -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">

                    <!-- محصول ۱: سیستم صوتی -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col relative">
                        <span class="absolute top-2 right-2 bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded z-10">جدید</span>
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/accessories/stereo.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="سیستم صوتی">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">سیستم صوتی پایونیر مدل AVH-X8890BT</h3>
                        <div class="text-xs text-slate-400 mb-3">Pioneer</div>
                        <div class="mt-auto">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-slate-400 line-through text-xs">۲۵٬۰۰۰٬۰۰۰</span>
                            </div>
                            <div class="text-blue-600 font-black text-base mb-3">۲۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('سیستم صوتی پایونیر', 'Pioneer', '۲۰٬۰۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۲: روکش صندلی -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/accessories/seat-cover.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="روکش صندلی">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">روکش صندلی چرمی مدل اسپرت</h3>
                        <div class="text-xs text-slate-400 mb-3">Armor All</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۴٬۵۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('روکش صندلی چرمی', 'Armor All', '۴٬۵۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۳: دوربین ثبت وقایع -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/accessories/dashcam.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="دوربین ثبت وقایع">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">دوربین ثبت وقایع خودرو مدل DDPai</h3>
                        <div class="text-xs text-slate-400 mb-3">DDPai</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۸٬۵۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('دوربین ثبت وقایع', 'DDPai', '۸٬۵۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۴: جاروبرقی خودرو -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/accessories/vacuum.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="جاروبرقی خودرو">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">جاروبرقی شارژی خودرو مدل مینی</h3>
                        <div class="text-xs text-slate-400 mb-3">Baseus</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۲٬۲۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('جاروبرقی خودرو', 'Baseus', '۲٬۲۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۵: رینگ -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/accessories/rim.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="رینگ خودرو">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">رینگ اسپرت ۱۸ اینچی مدل R17</h3>
                        <div class="text-xs text-slate-400 mb-3">BBS</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۶۸٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('رینگ اسپرت', 'BBS', '۶۸٬۰۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۶: لاستیک -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/accessories/tire.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="لاستیک">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">لاستیک میشلن مدل Pilot Sport 4</h3>
                        <div class="text-xs text-slate-400 mb-3">Michelin</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۱۲٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('لاستیک میشلن', 'Michelin', '۱۲٬۰۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <!-- مودال ثبت درخواست (بدون تغییر) -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="requestModal">
        <div class="bg-white rounded-3xl max-w-lg w-full max-h-[90vh] overflow-y-auto p-8 relative shadow-2xl">
            <button class="absolute top-4 left-4 text-slate-400 hover:text-slate-800 text-3xl leading-none" onclick="closeModal()">×</button>

            <div id="modalForm">
                <h2 class="text-2xl font-black text-blue-600 mb-2">ثبت درخواست خرید</h2>
                <p class="text-slate-500 font-semibold mb-6">اطلاعات خود را وارد کنید تا کارشناسان با شما تماس بگیرند.</p>

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4 mb-6">
                    <div class="font-bold text-slate-800 mb-1" id="spName">—</div>
                    <div class="text-sm text-slate-500 font-medium mb-2" id="spMeta">—</div>
                    <div class="text-blue-600 font-black" id="spPrice">—</div>
                </div>

                <form onsubmit="submitRequest(event)">
                    <div class="mb-4">
                        <label class="block text-sm text-slate-600 mb-2 font-bold">نام و نام خانوادگی *</label>
                        <input type="text" id="reqName" placeholder="مثال: علی رضایی" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm text-slate-600 mb-2 font-bold">شماره تماس *</label>
                        <input type="tel" id="reqPhone" placeholder="۰۹۱۲۳۴۵۶۷۸۹" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm text-slate-600 mb-2 font-bold">توضیحات (اختیاری)</label>
                        <textarea id="reqNote" placeholder="مثلاً: ترجیح می‌دهم برند اصلی باشد..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all resize-y min-h-[80px]"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5">
                        ارسال درخواست ←
                    </button>
                </form>
            </div>

            <div class="hidden text-center py-6" id="successMsg">
                <div class="text-6xl mb-4">✅</div>
                <h3 class="text-2xl font-black text-blue-600 mb-2">درخواست شما ثبت شد</h3>
                <p class="text-slate-500 font-medium leading-relaxed">کارشناسان نواسرویس در کمتر از ۲۴ ساعت با شما تماس می‌گیرند.</p>
                <button class="mt-8 w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all" onclick="closeModal()">بستن</button>
            </div>
        </div>
    </div>

    <!-- بخش برندها -->
    <x-brands />
@endsection

@push('scripts')
    <script>
        function openRequest(name, supplier, price) {
            document.getElementById('spName').textContent = name;
            document.getElementById('spMeta').textContent = supplier;
            document.getElementById('spPrice').textContent = price + ' تومان';
            document.getElementById('modalForm').classList.remove('hidden');
            document.getElementById('successMsg').classList.add('hidden');
            document.getElementById('requestModal').classList.remove('hidden');
            document.getElementById('requestModal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('requestModal').classList.add('hidden');
            document.getElementById('requestModal').classList.remove('flex');
            document.body.style.overflow = '';
        }

        function submitRequest(e) {
            e.preventDefault();
            document.getElementById('modalForm').classList.add('hidden');
            document.getElementById('successMsg').classList.remove('hidden');
        }

        document.getElementById('requestModal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });
    </script>
@endpush
