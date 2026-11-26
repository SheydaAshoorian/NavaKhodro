@extends('layouts.app')

@section('title', 'ثبت نام خودرو | نواخودرو')

@section('content')
    <div class="max-w-[1000px] mx-auto px-4 md:px-8 py-10">

        <!-- بردکرامب (مسیر صفحه) -->
        <nav class="flex text-xs text-slate-500 mb-6 font-semibold">
            <a href="{{ route('home') }}" class="hover:text-blue-600">خانه</a>
            <span class="mx-2">/</span>
            <a href="#" class="hover:text-blue-600">ثبت نام خودرو</a>
            <span class="mx-2">/</span>
            <span class="text-slate-800">MVM X77</span>
        </nav>

        <div class="flex flex-col lg:flex-row gap-10 items-start">

            <!-- تصویر و توضیحات (سمت چپ) -->
            <div class="w-full lg:w-1/2 flex flex-col">
                <div class="relative rounded-2xl overflow-hidden shadow-lg mb-6">
                    <img src="{{ asset('images/cars/mvm-x77.jpg') }}" class="w-full h-[300px] object-cover" alt="MVM X77">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-4 right-4">
                        <span class="text-white text-xl font-black bg-black/40 backdrop-blur-sm px-3 py-1 rounded-lg">MVM X77</span>
                    </div>
                </div>
                <p class="text-sm text-slate-600 leading-relaxed text-justify">
                    برای مشاهده مشخصات کامل خودروی MVM X77 روی <a href="{{ route('car-detail') }}" class="text-blue-600 font-bold hover:underline">لینک</a> کلیک کنید.
                    <br><br>
                    با تکمیل این فرم، درخواست شما برای ثبت نام خودرو ثبت شده و کارشناسان ما در اسرع وقت با شما تماس خواهند گرفت.
                </p>
            </div>

            <!-- فرم ثبت نام (سمت راست) -->
            <div class="w-full lg:w-1/2 bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm">
                <h1 class="text-2xl font-black text-slate-800 mb-6">ثبت نام MVM X77</h1>

                <!-- پیام موفقیت (در ابتدا مخفی است) -->
                <div id="successSection" class="hidden bg-emerald-50 border border-emerald-200 rounded-2xl p-6 mb-6 text-center">
                    <div class="text-5xl mb-3">✅</div>
                    <h3 class="text-lg font-black text-emerald-800 mb-2">ثبت‌نام شما با موفقیت انجام شد!</h3>
                    <p class="text-sm text-emerald-700 font-medium mb-4">درخواست شما در لیست سفارشات ثبت شد. برای پیگیری، روی دکمه زیر کلیک کنید.</p>
                    <a href="{{ route('orders') }}" class="inline-flex items-center justify-center bg-emerald-600 hover:bg-emerald-700 text-white font-black px-8 py-3 rounded-xl shadow-lg transition-all text-sm w-full">
                        مشاهده لیست سفارشات
                    </a>
                </div>

                <!-- فرم (در ابتدا نمایش داده می‌شود) -->
                <form id="registrationForm" onsubmit="event.preventDefault(); this.classList.add('hidden'); document.getElementById('successSection').classList.remove('hidden'); window.scrollTo({top: 0, behavior: 'smooth'});" class="space-y-4">
                    <!-- نام و نام خانوادگی -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-1 font-bold">نام و نام خانوادگی *</label>
                        <input type="text" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>

                    <!-- شماره موبایل -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-1 font-bold">شماره موبایل *</label>
                        <input type="tel" required placeholder="۰۹۱۲۳۴۵۶۷۸۹" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>

                    <!-- استان و شهر -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-1 font-bold">استان و شهر *</label>
                        <input type="text" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>

                    <!-- نام برند (غیرفعال) -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-1 font-bold">نام برند</label>
                        <input type="text" value="MVM | ام وی ام" disabled class="w-full bg-slate-100 border border-slate-200 rounded-xl px-4 py-3 font-semibold text-slate-500 cursor-not-allowed">
                    </div>

                    <!-- مدل خودرو (غیرفعال) -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-1 font-bold">مدل خودرو</label>
                        <input type="text" value="X77 | ایکس ۷۷" disabled class="w-full bg-slate-100 border border-slate-200 rounded-xl px-4 py-3 font-semibold text-slate-500 cursor-not-allowed">
                    </div>

                    <!-- نحوه پرداخت -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-1 font-bold">نحوه پرداخت *</label>
                        <select required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all cursor-pointer">
                            <option value="">انتخاب کنید...</option>
                            <option>نقدی</option>
                            <option>اقساطی</option>
                            <option>لیزینگ</option>
                        </select>
                    </div>

                    <!-- توضیحات -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-1 font-bold">توضیحات (اختیاری)</label>
                        <textarea rows="3" placeholder="اگر توضیحی درباره درخواست خود دارید در اینجا بنویسید" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all resize-y"></textarea>
                    </div>

                    <!-- تیک تست درایو -->
                    <div class="flex items-center gap-2 pt-2">
                        <input type="checkbox" id="testDrive" class="accent-blue-600 w-4 h-4 rounded cursor-pointer">
                        <label for="testDrive" class="text-sm font-semibold text-slate-700 cursor-pointer">اگر علاقه‌مند به شرکت در ایونت تست درایو خودرو هستید، این گزینه را تیک بزنید.</label>
                    </div>

                    <!-- دکمه‌ها -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5">
                            ارسال
                        </button>
                        <button type="reset" class="flex-1 bg-slate-100 text-slate-700 hover:bg-slate-200 font-black py-3.5 rounded-xl transition-all">
                            انصراف
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function submitRegistration(e) {
            e.preventDefault();

            // مخفی کردن فرم و نمایش پیام موفقیت
            document.getElementById('registrationForm').classList.add('hidden');
            document.getElementById('successSection').classList.remove('hidden');

            // اسکرول نرم به سمت بالای فرم
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
@endpush
