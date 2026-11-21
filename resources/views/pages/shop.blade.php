@extends('layouts.app')

@section('title', 'لیست محصولات | نواسرویس')

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
                    <h3 class="text-lg font-black text-slate-800">فیلتر قطعات</h3>
                    <button onclick="resetFilters()" class="text-sm text-blue-600 font-bold hover:text-blue-800">پاک کردن</button>
                </div>

                <div class="space-y-5">
                    <!-- برند -->
                    <div>
                        <label class="text-sm font-bold text-slate-800 mb-2 block">برند خودرو</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 text-sm font-semibold outline-none focus:border-blue-500">
                            <option value="">همه برندها</option>
                            <option value="BMW">BMW</option>
                            <option value="مدیران خودرو">مدیران خودرو</option>
                            <option value="کرمان موتور">کرمان موتور</option>
                        </select>
                    </div>

                    <!-- مدل -->
                    <div>
                        <label class="text-sm font-bold text-slate-800 mb-2 block">مدل خودرو</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 text-sm font-semibold outline-none focus:border-blue-500">
                            <option value="">همه مدل‌ها</option>
                            <option value="320i">320i</option>
                            <option value="Tiggo 8">Tiggo 8</option>
                        </select>
                    </div>

                    <!-- دسته‌بندی -->
                    <div>
                        <h4 class="text-sm font-bold text-slate-800 mb-3">دسته‌بندی</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> موتور و انتقال</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> سیستم ترمز</label>
                            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer"><input type="checkbox" class="accent-blue-600 rounded"> روشنایی</label>
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
                        </select>
                    </div>
                </div>

                <!-- گرید محصولات -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">

                    <!-- محصول ۱ -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col relative">
                        <span class="absolute top-2 right-2 bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded z-10">٪۲۰</span>
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/ch.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="چراغ جلو">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">چراغ جلو سمت راست MVM مدل اورجینال</h3>
                        <div class="text-xs text-slate-400 mb-3">MVM Original</div>
                        <div class="mt-auto">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-slate-400 line-through text-xs">۲۵٬۰۰۰٬۰۰۰</span>
                            </div>
                            <div class="text-blue-600 font-black text-base mb-3">۲۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('چراغ جلو', 'MVM Original', '۲۰٬۰۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۲ -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/l.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="لنت ترمز">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">لنت ترمز جلو فونیکس مدل Fownix Original</h3>
                        <div class="text-xs text-slate-400 mb-3">Fownix Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۴٬۵۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('لنت ترمز جلو', 'Fownix Original', '۴٬۵۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۳ -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/f.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="فیلتر روغن">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">فیلتر روغن هیوندای مدل Hyundai Original مناسب KTL</h3>
                        <div class="text-xs text-slate-400 mb-3">Hyundai Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۸۵۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('فیلتر روغن', 'Hyundai Original', '۸۵۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۴ -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/chh.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="چراغ جلو">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">چراغ جلو MG مدل MG Original مناسب MG6</h3>
                        <div class="text-xs text-slate-400 mb-3">MG Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۱۸٬۵۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('چراغ جلو', 'MG Original', '۱۸٬۵۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۵ -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/disc.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="دیسک ترمز">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">دیسک ترمز فولکس واگن مدل VW Original مناسب جتا</h3>
                        <div class="text-xs text-slate-400 mb-3">VW Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۶٬۸۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('دیسک ترمز', 'VW Original', '۶٬۸۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                    <!-- محصول ۶ -->
                    <div class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{asset('images/ff.jpg')}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="فیلتر هوا">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">فیلتر هوا فونیکس مدل Chery Original مناسب تیگو ۸</h3>
                        <div class="text-xs text-slate-400 mb-3">Chery Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base mb-3">۱٬۲۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                            <button onclick="openRequest('فیلتر هوا', 'Chery Original', '۱٬۲۰۰٬۰۰۰')" class="w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 rounded-lg transition-colors text-sm">ثبت درخواست</button>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <!-- مودال ثبت درخواست -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="requestModal">
        <div class="bg-white rounded-3xl max-w-lg w-full max-h-[90vh] overflow-y-auto p-8 relative shadow-2xl">
            <button class="absolute top-4 left-4 text-slate-400 hover:text-slate-800 text-3xl leading-none" onclick="closeModal()">×</button>

            <div id="modalForm">
                <h2 class="text-2xl font-black text-blue-600 mb-2">ثبت درخواست خرید قطعه</h2>
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
