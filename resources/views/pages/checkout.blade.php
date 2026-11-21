@extends('layouts.app')

@section('title', 'ثبت درخواست خرید | نواسرویس')

@section('content')
    <div class="max-w-[1000px] mx-auto px-4 md:px-8 py-10">

        <!-- عنوان صفحه -->
        <div class="flex items-center gap-3 mb-8">
            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl">
                🛒
            </div>
            <div>
                <h1 class="text-2xl font-black text-slate-800">ثبت درخواست خرید</h1>
                <p class="text-sm text-slate-500 mt-1">اطلاعات خود را تکمیل کنید تا کارشناسان ما با شما تماس بگیرند.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

            <!-- فرم اطلاعات (سمت راست) -->
            <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm">
                <form id="checkoutForm" onsubmit="event.preventDefault(); window.location.href='{{ route('payment') }}';" class="space-y-6">
                    <div class="flex items-center gap-2 mb-2 pb-4 border-b border-slate-100">
                        <span class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold">۱</span>
                        <h2 class="text-lg font-black text-slate-800">اطلاعات مشتری</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm text-slate-600 mb-2 font-bold">نام و نام خانوادگی *</label>
                            <input type="text" placeholder="مثال: علی رضایی" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                        </div>
                        <div>
                            <label class="block text-sm text-slate-600 mb-2 font-bold">شماره تماس *</label>
                            <input type="tel" placeholder="۰۹۱۲۳۴۵۶۷۸۹" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm text-slate-600 mb-2 font-bold">شماره پلاک خودرو (اختیاری)</label>
                            <input type="text" placeholder="مثال: ۱۲ب۳۴۵ ایران ۱۱" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mb-2 pb-4 border-b border-slate-100 pt-4">
                        <span class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold">۲</span>
                        <h2 class="text-lg font-black text-slate-800">روش ارسال / تحویل</h2>
                    </div>

                    <div class="space-y-3">
                        <label class="flex items-center gap-3 p-4 border border-blue-200 bg-blue-50 rounded-xl cursor-pointer transition-all hover:bg-blue-100">
                            <input type="radio" name="delivery" checked class="accent-blue-600 w-4 h-4">
                            <div class="flex-1">
                                <div class="font-bold text-slate-800 text-sm">ارسال به آدرس (پست پیشتاز)</div>
                                <div class="text-xs text-slate-500 mt-0.5">تحویل درب منزل، ۲ تا ۴ روز کاری</div>
                            </div>
                            <div class="font-black text-blue-600 text-sm">رایگان</div>
                        </label>

                        <label class="flex items-center gap-3 p-4 border border-slate-200 rounded-xl cursor-pointer transition-all hover:bg-slate-50">
                            <input type="radio" name="delivery" class="accent-blue-600 w-4 h-4">
                            <div class="flex-1">
                                <div class="font-bold text-slate-800 text-sm">تحویل حضوری در تعمیرگاه</div>
                                <div class="text-xs text-slate-500 mt-0.5">مراجعه به مرکز خدمات نواسرویس</div>
                            </div>
                            <div class="font-black text-slate-600 text-sm">رایگان</div>
                        </label>
                    </div>
                    <!-- بخش ۳: روش پرداخت -->
                    <div class="flex items-center gap-2 mb-2 pb-4 border-b border-slate-100 pt-4">
                        <span class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold">۳</span>
                        <h2 class="text-lg font-black text-slate-800">روش پرداخت</h2>
                    </div>

                    <div class="space-y-3 mb-6">

                        <!-- درگاه بانکی -->
                        <label class="flex items-center gap-3 p-4 border border-slate-200 rounded-xl cursor-pointer transition-all hover:bg-slate-50">
                            <input type="radio" name="payment" class="accent-blue-600 w-4 h-4">
                            <div class="flex-1">
                                <div class="font-bold text-slate-800 text-sm">درگاه بانکی</div>
                            </div>
                        </label>

                        <!-- پرداخت آنلاین (اسنپ پی) -->
                        <label class="flex items-center gap-3 p-4 border border-blue-200 bg-blue-50 rounded-xl cursor-pointer transition-all hover:bg-blue-100">
                            <input type="radio" name="payment" checked class="accent-blue-600 w-4 h-4">
                            <div class="flex-1">
                                <div class="font-bold text-slate-800 text-sm">اسنپ پی</div>
                                <div class="text-xs text-slate-500 mt-0.5">پرداخت امن از طریق درگاه اسنپ پی</div>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Snapp_Pay_logo.svg/1200px-Snapp_Pay_logo.svg.png" alt="اسنپ پی" class="h-6 object-contain">
                        </label>
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="block text-sm text-slate-600 mb-2 font-bold">توضیحات تکمیلی (اختیاری)</label>
                        <textarea placeholder="هرگونه توضیح اضافه‌ای که فکر می‌کنید کمک‌کننده است..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all resize-y min-h-[100px]"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        تایید و ارسال درخواست
                    </button>
                </form>
            </div>

            <!-- خلاصه سفارش (سمت چپ) -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm sticky top-24">
                    <h2 class="text-lg font-black text-slate-800 mb-4 pb-4 border-b border-slate-100">خلاصه سفارش</h2>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-20 h-20 bg-slate-50 rounded-xl overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/ch.jpg') }}" class="w-full h-full object-cover" alt="چراغ جلو">
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-slate-800 leading-snug">چراغ جلو سمت راست MVM</h3>
                            <div class="text-xs text-slate-500 mt-1">MVM Original</div>
                        </div>
                    </div>

                    <div class="space-y-3 text-sm border-t border-slate-100 pt-4 mb-4">
                        <div class="flex justify-between text-slate-500">
                            <span>قیمت کالا</span>
                            <span class="font-bold text-slate-700">۲۰٬۰۰۰٬۰۰۰ تومان</span>
                        </div>
                        <div class="flex justify-between text-slate-500">
                            <span>هزینه ارسال</span>
                            <span class="font-bold text-emerald-600">رایگان</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center border-t border-slate-100 pt-4">
                        <span class="font-bold text-slate-800">مبلغ قابل پرداخت</span>
                        <span class="font-black text-blue-600 text-lg">۲۰٬۰۰۰٬۰۰۰ <span class="text-xs font-normal text-slate-500">تومان</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- مودال موفقیت (بعد از ثبت) -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="successModal">
        <div class="bg-white rounded-3xl max-w-md w-full p-8 text-center relative shadow-2xl">
            <div class="text-7xl mb-6">🎉</div>
            <h2 class="text-2xl font-black text-slate-800 mb-3">درخواست شما با موفقیت ثبت شد!</h2>
            <p class="text-slate-500 font-medium leading-relaxed mb-8">
                کارشناسان نواسرویس در کمتر از ۲۴ ساعت کاری با شما تماس خواهند گرفت تا هماهنگی‌های نهایی انجام شود.
            </p>
            <div class="bg-slate-50 rounded-xl p-4 mb-8">
                <div class="text-xs text-slate-500 mb-1">کد پیگیری درخواست</div>
                <div class="font-black text-lg text-blue-600 font-mono tracking-wider">REQ-98765</div>
            </div>
            <a href="{{ route('home') }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 rounded-xl shadow-lg transition-all">بازگشت به فروشگاه</a>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // تابع ارسال فرم و انتقال به درگاه
        function submitCheckout(e) {
            e.preventDefault(); // جلوگیری از ارسال پیش‌فرض فرم

            // انتقال به صفحه پرداخت
            window.location.href = "{{ route('payment') }}";
        }

        // اطمینان از اینکه دکمه به فرم متصل است
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('checkoutForm');
            form.addEventListener('submit', submitCheckout);
        });
    </script>
@endpush
