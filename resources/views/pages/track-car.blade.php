@extends('layouts.app')

@section('title', 'پیگیری خودرو | نواسرویس')

@section('content')
    <!-- بخش ۱: هیرو -->
    <x-hero />
    <!-- فرم پیگیری (کاملاً زیر بنر و بدون همپوشانی) -->
    <section class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-white rounded-3xl p-8 md:p-10 shadow-xl border border-slate-100">
            <form onsubmit="trackCar(event)" class="space-y-6">
                <div class="flex flex-col">
                    <label class="text-sm text-slate-600 mb-2 font-bold">کد رهگیری خودرو *</label>
                    <input type="text" id="carTrackInput" placeholder="مثال: NVC-12345" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-4 text-center text-lg font-bold text-slate-800 outline-none focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10 transition-all placeholder:font-normal placeholder:text-slate-400">
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    پیگیری خودرو
                </button>
            </form>

            <!-- نتیجه پیگیری -->
            <div class="hidden mt-8 bg-slate-50 border border-slate-200 rounded-2xl p-6" id="carTrackResult">
                <h4 class="text-lg font-black text-blue-600 mb-4 pb-3 border-b border-slate-200">وضعیت خودروی شما</h4>
                <div class="space-y-3">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500 font-bold">خودرو</span>
                        <span class="text-slate-800 font-black">BMW 320i — ۱۴۰۳</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500 font-bold">وضعیت فعلی</span>
                        <span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-md font-black text-xs">در حال تعمیر</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500 font-bold">شعبه</span>
                        <span class="text-slate-800 font-black">مرکز خدمات تهران</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500 font-bold">زمان تخمینی تحویل</span>
                        <span class="text-slate-800 font-black">۱۴۰۴/۰۸/۱۵</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500 font-bold">آخرین به‌روزرسانی</span>
                        <span class="text-slate-800 font-black">۲ ساعت پیش</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- بخش 4: برندها -->
    <x-brands />
@endsection

@push('scripts')
    <script>
        function trackCar(e) {
            e.preventDefault();
            const result = document.getElementById('carTrackResult');
            result.classList.remove('hidden');
            // اسکرول نرم به سمت نتیجه
            result.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    </script>
@endpush
