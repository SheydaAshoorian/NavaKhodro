@extends('layouts.app')

@section('title', 'محصولات برند | نواسرویس')

@section('content')
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-10">

        <!-- بردکرامب (مسیر صفحه) -->
        <nav class="flex text-xs text-slate-500 mb-6 font-semibold items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-blue-600">خانه</a>
            <span>/</span>
            <a href="{{ route('brands') }}" class="hover:text-blue-600">فروشگاه قطعات</a>
            <span>/</span>
            <span class="text-slate-800">فردا موتورز (FMC)</span> <!-- این متن باید بر اساس برند انتخاب شده داینامیک بشه -->
        </nav>

        <div class="flex flex-col lg:flex-row gap-8 items-start">

            <!-- سایدبار فیلترها (سمت راست) -->
            <aside class="w-full lg:w-72 flex-shrink-0 bg-white rounded-2xl border border-slate-200 p-5 sticky top-24 shadow-sm">
                <div class="flex justify-between items-center mb-5 pb-4 border-b border-slate-100">
                    <h3 class="text-base font-black text-slate-800 flex items-center gap-2">
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                        فیلتر قطعات
                    </h3>
                    <button onclick="resetFilters()" class="text-xs text-blue-600 font-bold hover:text-blue-800">پاک کردن</button>
                </div>

                <div class="space-y-5">
                    <!-- برند -->
                    <div>
                        <label class="text-sm font-bold text-slate-800 mb-2 block">برند خودرو</label>
                        <select id="brandSelect" onchange="onBrandChange()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 text-sm font-semibold outline-none focus:border-blue-500">
                            <option value="">انتخاب کنید...</option>
                            <option value="BMW">BMW</option>
                            <option value="مدیران خودرو">مدیران خودرو</option>
                            <option value="کرمان موتور">کرمان موتور</option>
                            <option value="ایرتویا">ایرتویا</option>
                            <option value="هیوندای">هیوندای</option>
                            <option value="بنز">بنز</option>
                        </select>
                    </div>

                    <!-- مدل -->
                    <div>
                        <label class="text-sm font-bold text-slate-800 mb-2 block">مدل خودرو</label>
                        <select id="modelSelect" disabled class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 text-sm font-semibold outline-none focus:border-blue-500 disabled:opacity-50">
                            <option value="">اول برند را انتخاب کنید</option>
                        </select>
                    </div>

                    <!-- سال ساخت -->
                    <div>
                        <label class="text-sm font-bold text-slate-800 mb-2 block">سال ساخت</label>
                        <select id="yearSelect" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 text-sm font-semibold outline-none focus:border-blue-500">
                            <option value="">همه سال‌ها</option>
                            <option value="1404">۱۴۰۴</option>
                            <option value="1403">۱۴۰۳</option>
                            <option value="1402">۱۴۰۲</option>
                            <option value="1401">۱۴۰۱</option>
                            <option value="1400">۱۴۰۰</option>
                        </select>
                    </div>

                    <!-- نام قطعه -->
                    <div>
                        <label class="text-sm font-bold text-slate-800 mb-2 block">نام قطعه</label>
                        <input type="text" id="partNameInput" placeholder="مثال: چراغ جلو" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 text-sm font-semibold outline-none focus:border-blue-500">
                    </div>

                    <!-- کد فنی -->
                    <div>
                        <label class="text-sm font-bold text-slate-800 mb-2 block">کد فنی (اختیاری)</label>
                        <input type="text" id="partCodeInput" placeholder="مثال: 63117289123" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 text-sm font-semibold outline-none focus:border-blue-500" style="direction:ltr; text-align:left;">
                    </div>

                    <!-- دکمه جستجو -->
                    <button onclick="doSearch()" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3 rounded-xl shadow-lg shadow-blue-500/20 transition-all mt-4 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        جستجوی قطعه
                    </button>
                </div>
            </aside>
            <!-- بخش لیست نتایج (سمت چپ) -->
            <main class="flex-1 w-full">

                <!-- نوار مرتب‌سازی -->
                <div class="bg-white rounded-xl border border-slate-200 p-3 flex items-center justify-between mb-6 shadow-sm">
                    <div class="text-sm text-slate-500 hidden sm:block"><strong class="text-blue-600">۶</strong> کالا یافت شد</div>
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
                    <a href="{{ route('product-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/f.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="فیلتر روغن">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">فیلتر روغن هیوندای مدل Hyundai Original مناسب FMC</h3>
                        <div class="text-xs text-slate-400 mb-3">Hyundai Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base">۸۵۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                        </div>
                    </a>

                    <!-- محصول ۲ -->
                    <a href="{{ route('product-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/ch.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="چراغ جلو">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">چراغ جلو سمت راست MVM مدل اورجینال مناسب FMC</h3>
                        <div class="text-xs text-slate-400 mb-3">MVM Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base">۲۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                        </div>
                    </a>

                    <!-- محصول ۳ -->
                    <a href="{{ route('product-detail') }}" class="bg-white rounded-xl border border-slate-200 p-4 hover:shadow-lg transition-shadow group flex flex-col">
                        <div class="h-48 bg-slate-50 rounded-lg mb-4 overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/l.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="لنت ترمز">
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 mb-2 leading-relaxed line-clamp-2 h-10">لنت ترمز جلو فونیکس مدل Fownix Original مناسب FMC</h3>
                        <div class="text-xs text-slate-400 mb-3">Fownix Original</div>
                        <div class="mt-auto">
                            <div class="text-blue-600 font-black text-base">۴٬۵۰۰٬۰۰۰ <span class="text-xs font-normal">تومان</span></div>
                        </div>
                    </a>

                </div>
            </main>
        </div>
    </div>

    @push('scripts')
        <script>
            // دیتابیس برندها و مدل‌ها
            const brandModels = {
                'BMW': ['320i', 'X3', 'X5', '520i'],
                'مدیران خودرو': ['Tiggo 8', 'Tiggo 7', 'X22'],
                'کرمان موتور': ['K7', 'K5', 'J4'],
                'ایرتویا': ['Corolla', 'Camry', 'RAV4'],
                'هیوندای': ['Tucson', 'Santa Fe', 'Elantra'],
                'بنز': ['C200', 'E250', 'S500']
            };

            // تابع تغییر برند و پر کردن مدل‌ها
            window.onBrandChange = function() {
                const brand = document.getElementById('brandSelect').value;
                const modelSelect = document.getElementById('modelSelect');

                modelSelect.innerHTML = '';

                if (!brand) {
                    modelSelect.innerHTML = '<option value="">اول برند را انتخاب کنید</option>';
                    modelSelect.disabled = true;
                    return;
                }

                modelSelect.disabled = false;
                modelSelect.innerHTML = '<option value="">انتخاب کنید...</option>';

                const models = brandModels[brand] || [];
                models.forEach(m => {
                    const opt = document.createElement('option');
                    opt.value = m;
                    opt.textContent = m;
                    modelSelect.appendChild(opt);
                });
            };

            // تابع جستجو (اختیاری - اگر بخواهی فیلتر کنی)
            window.doSearch = function() {
                const brand = document.getElementById('brandSelect').value;
                const model = document.getElementById('modelSelect').value;

                if (!brand || !model) {
                    alert('لطفاً ابتدا برند و مدل خودرو را انتخاب کنید.');
                    return;
                }

                // اینجا می‌توانی منطق فیلتر کردن محصولات را اضافه کنی
                alert('جستجو برای: ' + brand + ' - ' + model);
            };

            // تابع پاک کردن فیلترها
            window.resetFilters = function() {
                document.getElementById('brandSelect').value = '';
                document.getElementById('modelSelect').innerHTML = '<option value="">اول برند را انتخاب کنید</option>';
                document.getElementById('modelSelect').disabled = true;
                document.getElementById('yearSelect').value = '';
                document.getElementById('partNameInput').value = '';
                document.getElementById('partCodeInput').value = '';
            };
        </script>
    @endpush
@endsection
