@extends('layouts.app')

@section('title', 'استخدام در نواسرویس | فرصت‌های شغلی')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[350px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 max-w-3xl mt-8">
        <span class="inline-flex items-center gap-2 bg-blue-500/20 text-blue-300 border border-blue-500/30 text-sm font-bold px-4 py-1.5 rounded-full mb-4 backdrop-blur-sm">
            💼 فرصت‌های شغلی
        </span>
            <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">به تیم <span class="text-blue-500">نواسرویس</span> بپیوندید</h1>
            <p class="text-lg text-slate-300 leading-relaxed">
                ما در نواسرویس به دنبال افراد بااستعداد، خلاق و علاقه‌مند به صنعت خودرو هستیم تا در مسیر رشد خود به ما ملحق شوند.
            </p>
        </div>
    </section>

    <!-- بخش اصلی -->
    <div class="max-w-[1000px] mx-auto px-4 md:px-8 py-16">

        <!-- توضیحات بالا -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-black text-slate-800 mb-4">چرا نواسرویس؟</h2>
            <p class="text-slate-500 max-w-2xl mx-auto leading-relaxed">ما محیطی پویا، صمیمی و رو به رشد را برای کارکنان خود فراهم کرده‌ایم تا بتوانند استعدادهای خود را شکوفا کنند.</p>
        </div>

        <!-- مزایای شغلی -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm text-center">
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-base font-black text-slate-800 mb-2">حقوق و مزایای رقابتی</h3>
                <p class="text-sm text-slate-500 leading-relaxed">ما به کارکنان خود ارزش می‌گذاریم و حقوق و مزایایی متناسب با مهارت‌هایشان ارائه می‌دهیم.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm text-center">
                <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <h3 class="text-base font-black text-slate-800 mb-2">فرصت‌های رشد</h3>
                <p class="text-sm text-slate-500 leading-relaxed">ما مسیر پیشرفت شغلی را برای شما هموار می‌کنیم و از یادگیری مستمر حمایت می‌کنیم.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm text-center">
                <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h3 class="text-base font-black text-slate-800 mb-2">محیط کاری صمیمی</h3>
                <p class="text-sm text-slate-500 leading-relaxed">در نواسرویس، ما یک خانواده هستیم و در کنار هم به اهدافمان می‌رسیم.</p>
            </div>
        </div>

        <!-- فرم ارسال رزومه -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 md:p-10">
            <div class="text-center mb-8">
                <h2 class="text-xl font-black text-slate-800 mb-2">فرم ارسال رزومه</h2>
                <p class="text-sm text-slate-500">اگر در لیست موقعیت‌های شغلی زیر جای شما خالی است، می‌توانید رزومه خود را برای ما ارسال کنید.</p>
            </div>

            <form onsubmit="submitResume(event)" class="space-y-5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm text-slate-600 mb-2 font-bold">نام و نام خانوادگی *</label>
                        <input type="text" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>
                    <div>
                        <label class="block text-sm text-slate-600 mb-2 font-bold">شماره تماس *</label>
                        <input type="tel" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>
                </div>
                <div>
                    <label class="block text-sm text-slate-600 mb-2 font-bold">عنوان شغلی مورد نظر *</label>
                    <select required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all cursor-pointer">
                        <option value="">انتخاب کنید...</option>
                        <option>کارشناس فروش قطعات خودرو</option>
                        <option>مشاور خدمات پس از فروش</option>
                        <option>تعمیرکار خودرو</option>
                        <option>کارشناس فنی و مهندسی</option>
                        <option>کارشناس پشتیبانی آنلاین</option>
                        <option>سایر</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm text-slate-600 mb-2 font-bold">آپلود رزومه (PDF یا Word) *</label>
                    <div class="w-full bg-slate-50 border-2 border-dashed border-slate-300 rounded-xl p-6 text-center hover:border-blue-500 transition-colors cursor-pointer">
                        <svg class="w-10 h-10 text-slate-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <span class="text-sm text-slate-500 font-medium">برای انتخاب فایل کلیک کنید یا فایل را اینجا بکشید</span>
                        <input type="file" class="hidden" accept=".pdf,.doc,.docx">
                    </div>
                </div>
                <div class="pt-2">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        ارسال رزومه
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- مودال موفقیت -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="successModal">
        <div class="bg-white rounded-3xl max-w-md w-full p-8 text-center relative shadow-2xl">
            <div class="text-7xl mb-4">📄</div>
            <h2 class="text-2xl font-black text-slate-800 mb-2">رزومه شما ارسال شد!</h2>
            <p class="text-slate-500 font-medium leading-relaxed mb-6">تیم منابع انسانی نواسرویس در اسرع وقت رزومه شما را بررسی کرده و با شما تماس خواهد گرفت.</p>
            <button onclick="closeModal()" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 rounded-xl shadow-lg transition-all">بستن</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function submitResume(e) {
            e.preventDefault();
            document.getElementById('successModal').classList.remove('hidden');
            document.getElementById('successModal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
            document.getElementById('successModal').classList.remove('flex');
            document.body.style.overflow = '';
        }
    </script>
@endpush
