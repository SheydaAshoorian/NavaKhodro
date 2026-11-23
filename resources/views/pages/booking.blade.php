@extends('layouts.app')

@section('title', 'رزرو نوبت تعمیرگاهی | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[250px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 max-w-2xl mt-8">
            <h1 class="text-3xl md:text-4xl font-black text-white mb-3 tracking-tight">رزرو <span class="text-blue-400">نوبت</span></h1>
            <p class="text-base text-slate-300 leading-relaxed">
                برای دریافت خدمات تخصصی، فرم زیر را تکمیل کنید.
            </p>
        </div>
    </section>

    <!-- فرم رزرو نوبت -->
    <div class="max-w-4xl mx-auto px-4 md:px-8 py-12">

        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 md:p-10">
            <form onsubmit="submitBooking(event)" class="space-y-8">

                <!-- مرحله ۱: انتخاب خودرو -->
                <div>
                    <div class="flex items-center gap-3 mb-5 border-b border-slate-100 pb-4">
                        <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-black text-sm">۱</div>
                        <h2 class="text-lg font-black text-slate-800">انتخاب خودرو</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm text-slate-600 mb-2 font-bold">برند خودرو *</label>
                            <select id="brandSelect" onchange="updateModels()" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 transition-all">
                                <option value="">انتخاب برند...</option>
                                <option value="MVM">مدیران خودرو (MVM)</option>
                                <option value="Fownix">فونیکس</option>
                                <option value="KMC">کرمان موتور</option>
                                <option value="Toyota">تویوتا</option>
                                <option value="Hyundai">هیوندای</option>
                                <option value="BMW">بی‌ام‌و</option>
                                <option value="Benz">بنز</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm text-slate-600 mb-2 font-bold">مدل خودرو *</label>
                            <select id="modelSelect" required disabled class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 transition-all disabled:opacity-50">
                                <option value="">اول برند را انتخاب کنید</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- اسکریپت تعریف تابع در همین‌جا تا PhpStorm خطا نده --}}
                <script>
                    function updateModels() {
                        const carData = {
                            'MVM': ['Tiggo 8', 'Tiggo 7', 'X22', '315'],
                            'Fownix': ['FX', 'Arrizo 6', 'Arrizo 8'],
                            'KMC': ['K7', 'K5', 'J4'],
                            'Toyota': ['Corolla', 'Camry', 'RAV4'],
                            'Hyundai': ['Tucson', 'Santa Fe', 'Elantra'],
                            'BMW': ['320i', 'X3', 'X5'],
                            'Benz': ['C200', 'E250', 'S500']
                        };

                        const brand = document.getElementById('brandSelect').value;
                        const modelSelect = document.getElementById('modelSelect');

                        modelSelect.innerHTML = '<option value="">انتخاب کنید...</option>';

                        if (!brand) {
                            modelSelect.disabled = true;
                            modelSelect.innerHTML = '<option value="">اول برند را انتخاب کنید</option>';
                            return;
                        }

                        modelSelect.disabled = false;
                        const models = carData[brand] || [];
                        models.forEach(model => {
                            const opt = document.createElement('option');
                            opt.value = model;
                            opt.textContent = model;
                            modelSelect.appendChild(opt);
                        });
                    }
                </script>
                <!-- پایان اسکریپت -->
                <!-- مرحله ۲: انتخاب نوع خدمت -->
                <div>
                    <div class="flex items-center gap-3 mb-5 border-b border-slate-100 pb-4">
                        <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-black text-sm">۲</div>
                        <h2 class="text-lg font-black text-slate-800">نوع خدمت مورد نیاز</h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <label class="relative flex flex-col items-center p-5 border-2 border-slate-200 rounded-2xl cursor-pointer hover:border-blue-400 hover:bg-blue-50/50 transition-all has-[:checked]:border-blue-500 has-[:checked]:bg-blue-50">
                            <input type="radio" name="service" value="سرویس دوره‌ای" checked class="hidden peer">
                            <span class="text-3xl mb-3">🛠️</span>
                            <span class="text-sm font-black text-slate-800 text-center">سرویس دوره‌ای</span>
                            <span class="text-xs text-slate-500 text-center mt-1">تعویض روغن، فیلترها و...</span>
                        </label>

                        <label class="relative flex flex-col items-center p-5 border-2 border-slate-200 rounded-2xl cursor-pointer hover:border-blue-400 hover:bg-blue-50/50 transition-all has-[:checked]:border-blue-500 has-[:checked]:bg-blue-50">
                            <input type="radio" name="service" value="تعمیرگاه و صافکاری" class="hidden peer">
                            <span class="text-3xl mb-3">🚗</span>
                            <span class="text-sm font-black text-slate-800 text-center">تعمیرگاه و صافکاری</span>
                            <span class="text-xs text-slate-500 text-center mt-1">رفع ضربه، رنگ و بدنه</span>
                        </label>

                        <label class="relative flex flex-col items-center p-5 border-2 border-slate-200 rounded-2xl cursor-pointer hover:border-blue-400 hover:bg-blue-50/50 transition-all has-[:checked]:border-blue-500 has-[:checked]:bg-blue-50">
                            <input type="radio" name="service" value="دیتیلینگ" class="hidden peer">
                            <span class="text-3xl mb-3">✨</span>
                            <span class="text-sm font-black text-slate-800 text-center">دیتیلینگ</span>
                            <span class="text-xs text-slate-500 text-center mt-1">پولیش، سرامیک و نظافت</span>
                        </label>
                    </div>
                </div>

                <!-- مرحله ۳: زمان و اطلاعات تماس -->
                <div>
                    <div class="flex items-center gap-3 mb-5 border-b border-slate-100 pb-4">
                        <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-black text-sm">۳</div>
                        <h2 class="text-lg font-black text-slate-800">زمان مراجعه و اطلاعات تماس</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm text-slate-600 mb-2 font-bold">تاریخ مراجعه *</label>
                            <input type="date" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 transition-all">
                        </div>
                        <div>
                            <label class="block text-sm text-slate-600 mb-2 font-bold">ساعت مراجعه *</label>
                            <select required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 transition-all">
                                <option value="">انتخاب ساعت...</option>
                                <option>۸:۰۰</option><option>۹:۰۰</option><option>۱۰:۰۰</option>
                                <option>۱۱:۰۰</option><option>۱۲:۰۰</option><option>۱۴:۰۰</option>
                                <option>۱۵:۰۰</option><option>۱۶:۰۰</option><option>۱۷:۰۰</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm text-slate-600 mb-2 font-bold">نام و نام خانوادگی *</label>
                            <input type="text" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 transition-all">
                        </div>
                        <div>
                            <label class="block text-sm text-slate-600 mb-2 font-bold">شماره تماس *</label>
                            <input type="tel" required placeholder="۰۹۱۲۳۴۵۶۷۸۹" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 transition-all">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm text-slate-600 mb-2 font-bold">توضیحات تکمیلی (اختیاری)</label>
                            <textarea rows="3" placeholder="هرگونه توضیح اضافه‌ای که فکر می‌کنید کمک‌کننده است..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 transition-all resize-y"></textarea>
                        </div>
                    </div>
                </div>

                <!-- دکمه ارسال -->
                <div class="pt-4">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/20 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        ثبت نهایی نوبت
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- مودال موفقیت -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="successModal">
        <div class="bg-white rounded-3xl max-w-md w-full p-8 text-center relative shadow-2xl">
            <div class="text-7xl mb-4">✅</div>
            <h2 class="text-2xl font-black text-slate-800 mb-3">نوبت شما با موفقیت ثبت شد!</h2>
            <p class="text-slate-500 font-medium leading-relaxed mb-6">همکاران ما پیش از زمان مراجعه برای تایید نهایی با شما تماس خواهند گرفت.</p>
            <div class="bg-slate-50 rounded-xl p-4 mb-6">
                <div class="text-xs text-slate-500 mb-1">کد پیگیری نوبت</div>
                <div class="font-black text-lg text-blue-600 font-mono tracking-wider">BKG-98765</div>
            </div>
            <a href="{{ route('repair') }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 rounded-xl shadow-lg transition-all">بازگشت به خدمات تعمیرگاه</a>
        </div>
    </div>
@endsection


