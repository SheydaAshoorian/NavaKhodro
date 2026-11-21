@extends('layouts.app')

@section('title', 'تماس با ما | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[300px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 max-w-2xl mt-8">
            <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">تماس <span class="text-blue-500">با ما</span></h1>
            <p class="text-lg text-slate-300 leading-relaxed">
                تیم پشتیبانی نواسرویس همیشه آماده پاسخگویی به سوالات و درخواست‌های شماست.
            </p>
        </div>
    </section>

    <!-- بخش اصلی -->
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- اطلاعات تماس (سمت راست) -->
            <div class="space-y-6">
                <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm flex items-start gap-5">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-black text-slate-800 mb-2">آدرس دفتر مرکزی</h3>
                        <p class="text-slate-500 font-medium leading-relaxed text-sm">
                            مازندران، بابلسر، کیلومتر ۴ جاده بابل — شهر نواخودرو، ساختمان نواسرویس
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm flex items-start gap-5">
                    <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-black text-slate-800 mb-2">شماره تماس</h3>
                        <p class="text-slate-500 font-medium leading-relaxed text-sm mb-1">
                            پشتیبانی: <a href="tel:01191001252" class="text-blue-600 font-bold hover:underline" dir="ltr">۰۱۱-۹۱۰۰۱۲۵۲</a>
                        </p>
                        <p class="text-slate-500 font-medium leading-relaxed text-sm">
                            فروش: <a href="tel:01191001050" class="text-blue-600 font-bold hover:underline" dir="ltr">۰۱۱-۹۱۰۰۱۰۵۰</a>
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm flex items-start gap-5">
                    <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-black text-slate-800 mb-2">ایمیل</h3>
                        <p class="text-slate-500 font-medium leading-relaxed text-sm">
                            <a href="mailto:info@navakhodro.com" class="text-blue-600 font-bold hover:underline">info@navakhodro.com</a>
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm flex items-start gap-5">
                    <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-black text-slate-800 mb-2">ساعات کاری</h3>
                        <p class="text-slate-500 font-medium leading-relaxed text-sm">
                            شنبه تا پنجشنبه، از ساعت ۸:۰۰ تا ۱۸:۰۰
                        </p>
                    </div>
                </div>
            </div>

            <!-- فرم تماس (سمت چپ) -->
            <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm h-fit sticky top-24">
                <h2 class="text-xl font-black text-slate-800 mb-6">ارسال پیام</h2>
                <form onsubmit="submitContact(event)" class="space-y-5">
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
                        <label class="block text-sm text-slate-600 mb-2 font-bold">موضوع *</label>
                        <input type="text" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>
                    <div>
                        <label class="block text-sm text-slate-600 mb-2 font-bold">متن پیام *</label>
                        <textarea required rows="5" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all resize-y"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        ارسال پیام
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- مودال موفقیت -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="successModal">
        <div class="bg-white rounded-3xl max-w-md w-full p-8 text-center relative shadow-2xl">
            <div class="text-7xl mb-4">✉️</div>
            <h2 class="text-2xl font-black text-slate-800 mb-2">پیام شما ارسال شد!</h2>
            <p class="text-slate-500 font-medium leading-relaxed mb-6">همکاران ما در اسرع وقت با شما تماس خواهند گرفت.</p>
            <button onclick="closeModal()" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 rounded-xl shadow-lg transition-all">بستن</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function submitContact(e) {
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
