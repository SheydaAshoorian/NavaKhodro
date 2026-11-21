@extends('layouts.app')

@section('title', 'ابزار و تجهیزات خودرو | نواسرویس')

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
                    <h3 class="text-lg font-black text-slate-800">فیلتر ابزارآلات</h3>
                    <button onclick="resetFilters()" class="text-sm text-blue-600 font-bold hover:text-blue-800">پاک کردن</button>
                </div>

                <div class="space-y-5">
                    <!-- دسته‌بندی ابزار -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">دسته‌بندی</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded" checked> جعبه ابزار و آچار</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> بالابر و جک</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> دستگاه دیاگ</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> تجهیزات شست‌وشو</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> لوازم ایمنی</label>
                        </div>
                    </div>

                    <!-- برند -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">برند</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> Bosch</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> Karcher</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> Total</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> Makita</label>
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

                    <!-- محصول ۱: جعبه ابزار -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col relative">
                        <span class="absolute top-2 right-2 bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded z-10">پرفروش</span>
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/tools/toolbox.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="جعبه ابزار">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">جعبه ابزار ۱۰۸ پارچه‌ای مدل Total</h3>
                        <div class="text-xs text-slate-400 mb-3">Total</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۸٬۵۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('جعبه ابزار ۱۰۸ پارچه‌ای', 'Total', '۸٬۵۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۲: جک هیدرولیک -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/tools/jack.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="جک هیدرولیک">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">جک هیدرولیک ۲ تن مدل قورباغه‌ای</h3>
                        <div class="text-xs text-slate-400 mb-3">Total</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۴٬۵۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('جک هیدرولیک ۲ تن', 'Total', '۴٬۵۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۳: دیاگ خودرو -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col relative">
                        <span class="absolute top-2 right-2 bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded z-10">جدید</span>
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/tools/diagnostic.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="دستگاه دیاگ">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">دستگاه دیاگ خودرو مدل Launch X431</h3>
                        <div class="text-xs text-slate-400 mb-3">Launch</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۴۵٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('دستگاه دیاگ خودرو', 'Launch', '۴۵٬۰۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۴: کارواش -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/tools/washer.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="کارواش">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">کارواش خانگی کارچر مدل K5</h3>
                        <div class="text-xs text-slate-400 mb-3">Karcher</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۱۲٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('کارواش خانگی کارچر', 'Karcher', '۱۲٬۰۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۵: آچار بکس -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/tools/wrench.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="آچار بکس">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">ست آچار بکس ۴۶ پارچه‌ای مدل Makita</h3>
                        <div class="text-xs text-slate-400 mb-3">Makita</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۶٬۸۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('ست آچار بکس ۴۶ پارچه‌ای', 'Makita', '۶٬۸۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۶: چراغ سیار -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/tools/worklight.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="چراغ سیار">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">چراغ سیار شارژی تعمیرگاهی مدل LED</h3>
                        <div class="text-xs text-slate-400 mb-3">Bosch</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۱٬۲۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('چراغ سیار شارژی', 'Bosch', '۱٬۲۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
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
