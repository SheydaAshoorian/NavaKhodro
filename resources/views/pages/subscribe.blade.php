
@extends('layouts.app')

@section('title', 'عضویت در اطلاع‌رسانی | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[300px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 max-w-2xl mt-8">
            <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">عضویت در <span class="text-blue-500">اطلاع‌رسانی</span></h1>
            <p class="text-lg text-slate-300 leading-relaxed">
                از آخرین اخبار، تخفیف‌ها و شرایط فروش خودرو مطلع شوید.
            </p>
        </div>
    </section>

    <!-- بخش اصلی -->
    <div class="max-w-[800px] mx-auto px-4 md:px-8 py-16">

        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 md:p-10">
            <div class="text-center mb-8">
                <h2 class="text-xl font-black text-slate-800 mb-2">فرم عضویت</h2>
                <p class="text-sm text-slate-500 leading-relaxed">
                    در صورتی که می‌خواهید از آخرین اخبار نواخودرو مانند شرایط فروش، زمان و شرایط ایتون‌ها مطلع شوید، فرم زیر را پر کنید.
                </p>
            </div>

            <form onsubmit="submitSubscribe(event)" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm text-slate-600 mb-2 font-bold">نام و نام خانوادگی *</label>
                        <input type="text" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>
                    <div>
                        <label class="block text-sm text-slate-600 mb-2 font-bold">شماره موبایل *</label>
                        <input type="tel" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all" placeholder="۰۹۱۲۳۴۵۶۷۸۹">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm text-slate-600 mb-2 font-bold">استان و شهر *</label>
                        <input type="text" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>
                </div>

                <!-- علاقه‌مندی‌ها -->
                <div class="pt-2">
                    <label class="block text-sm text-slate-600 mb-3 font-bold">علاقه‌مندی‌های خود را انتخاب کنید:</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <label class="flex items-center gap-3 p-3 border border-slate-200 rounded-xl cursor-pointer hover:bg-slate-50 transition-colors">
                            <input type="checkbox" class="accent-blue-600 w-4 h-4 rounded">
                            <span class="text-sm font-bold text-slate-700">تست درایو خودرو</span>
                        </label>
                        <label class="flex items-center gap-3 p-3 border border-slate-200 rounded-xl cursor-pointer hover:bg-slate-50 transition-colors">
                            <input type="checkbox" class="accent-blue-600 w-4 h-4 rounded">
                            <span class="text-sm font-bold text-slate-700">ایتون‌های ورزشی</span>
                        </label>
                        <label class="flex items-center gap-3 p-3 border border-slate-200 rounded-xl cursor-pointer hover:bg-slate-50 transition-colors">
                            <input type="checkbox" class="accent-blue-600 w-4 h-4 rounded">
                            <span class="text-sm font-bold text-slate-700">ایتون‌های خیریه</span>
                        </label>
                        <label class="flex items-center gap-3 p-3 border border-slate-200 rounded-xl cursor-pointer hover:bg-slate-50 transition-colors">
                            <input type="checkbox" class="accent-blue-600 w-4 h-4 rounded">
                            <span class="text-sm font-bold text-slate-700">ایتون‌های خانوادگی</span>
                        </label>
                        <label class="flex items-center gap-3 p-3 border border-slate-200 rounded-xl cursor-pointer hover:bg-slate-50 transition-colors">
                            <input type="checkbox" class="accent-blue-600 w-4 h-4 rounded">
                            <span class="text-sm font-bold text-slate-700">ایتون‌های تفریحی</span>
                        </label>
                    </div>
                </div>

                <!-- دکمه‌ها -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5">
                        ثبت نام
                    </button>
                    <button type="button" onclick="document.getElementById('subscribeForm').reset()" class="flex-1 bg-slate-100 text-slate-700 hover:bg-slate-200 font-black py-4 rounded-xl transition-all">
                        انصراف
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- مودال موفقیت -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="successModal">
        <div class="bg-white rounded-3xl max-w-md w-full p-8 text-center relative shadow-2xl">
            <div class="text-7xl mb-4">📧</div>
            <h2 class="text-2xl font-black text-slate-800 mb-2">عضویت شما ثبت شد!</h2>
            <p class="text-slate-500 font-medium leading-relaxed mb-6">از این پس از آخرین اخبار و تخفیف‌های نواسرویس باخبر خواهید شد.</p>
            <button onclick="closeModal()" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 rounded-xl shadow-lg transition-all">بستن</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function submitSubscribe(e) {
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
