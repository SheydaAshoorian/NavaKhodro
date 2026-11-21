@extends('layouts.app')

@section('title', 'درگاه پرداخت امن | نواسرویس')

@section('content')
    <div class="min-h-[80vh] flex items-center justify-center bg-slate-50 py-10 px-4">
        <div class="max-w-md w-full bg-white rounded-3xl shadow-xl border border-slate-200 overflow-hidden">

            <!-- هدر درگاه -->
            <div class="bg-gradient-to-l from-blue-600 to-blue-800 p-6 text-center text-white relative">
                <div class="absolute top-4 right-4 bg-white/20 text-xs px-2 py-1 rounded-md backdrop-blur-sm">درگاه امن</div>
                <svg class="w-12 h-12 mx-auto mb-3 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <h1 class="text-xl font-black mb-1">پرداخت امن</h1>
                <p class="text-xs text-blue-100">از طریق درگاه پرداخت الکترونیک</p>
            </div>

            <!-- اطلاعات پرداخت -->
            <div class="p-6 md:p-8">
                <div class="flex items-center justify-between mb-6 pb-6 border-b border-slate-100">
                    <div>
                        <div class="text-sm text-slate-500 mb-1">مبلغ قابل پرداخت</div>
                        <div class="text-2xl font-black text-slate-800">۲۰٬۰۰۰٬۰۰۰ <span class="text-sm font-normal">تومان</span></div>
                    </div>
                    <div class="text-left">
                        <div class="text-sm text-slate-500 mb-1">شماره سفارش</div>
                        <div class="font-mono font-bold text-blue-600 text-sm">ORD-98765</div>
                    </div>
                </div>

                <!-- انتخاب روش پرداخت -->
                <div class="space-y-3 mb-8">
                    <label class="flex items-center gap-3 p-3 border border-blue-200 bg-blue-50 rounded-xl cursor-pointer">
                        <input type="radio" name="gateway" checked class="accent-blue-600 w-4 h-4">
                        <div class="flex-1">
                            <div class="font-bold text-slate-800 text-sm">اسنپ پی (Snapp Pay)</div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Snapp_Pay_logo.svg/1200px-Snapp_Pay_logo.svg.png" alt="اسنپ پی" class="h-5 object-contain">
                    </label>

                    <label class="flex items-center gap-3 p-3 border border-slate-200 rounded-xl cursor-pointer hover:bg-slate-50 transition-colors">
                        <input type="radio" name="gateway" class="accent-blue-600 w-4 h-4">
                        <div class="flex-1">
                            <div class="font-bold text-slate-800 text-sm">درگاه بانکی (شاپرک)</div>
                        </div>
                        <div class="w-8 h-5 bg-gradient-to-r from-amber-400 to-amber-600 rounded-sm"></div>
                    </label>
                </div>

                <!-- دکمه پرداخت -->
                <a href="{{ route('invoice') }}" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    پرداخت و تکمیل خرید
                </a>

                <p class="text-center text-xs text-slate-400 mt-4 leading-relaxed">
                    با کلیک بر روی دکمه پرداخت، به درگاه امن منتقل می‌شوید.
                </p>
            </div>
        </div>
    </div>

    <!-- مودال موفقیت (بعد از پرداخت) -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="successModal">
        <div class="bg-white rounded-3xl max-w-md w-full p-8 text-center relative shadow-2xl">
            <div class="text-7xl mb-6">✅</div>
            <h2 class="text-2xl font-black text-slate-800 mb-3">پرداخت با موفقیت انجام شد!</h2>
            <p class="text-slate-500 font-medium leading-relaxed mb-6">
                درخواست شما با موفقیت ثبت و پرداخت شد. کد پیگیری برای شما پیامک خواهد شد.
            </p>
            <div class="bg-slate-50 rounded-xl p-4 mb-6">
                <div class="text-xs text-slate-500 mb-1">شماره پیگیری تراکنش</div>
                <div class="font-black text-lg text-blue-600 font-mono tracking-wider">TXN-123456789</div>
            </div>
            <a href="{{ route('home') }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 rounded-xl shadow-lg transition-all">بازگشت به فروشگاه</a>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function processPayment() {
            function processPayment() {
                // انتقال به صفحه فاکتور
                window.location.href = "{{ route('invoice') }}";
            }
        }
    </script>
@endpush
