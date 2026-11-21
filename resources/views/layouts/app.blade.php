<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'نواخودرو')</title>

    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-slate-800 min-h-screen flex flex-col">
@include('partials.header')

<main class="flex-1">
    @yield('content')
</main>

@include('partials.footer')
<!-- کشوی سبد خرید (Cart Drawer) -->
<div id="cartDrawerOverlay" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-[4000] hidden transition-opacity" onclick="closeCartDrawer()"></div>

<div id="cartDrawer" class="fixed top-0 left-0 h-full w-full max-w-md bg-white z-[4001] shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
    <!-- هدر کشو -->
    <div class="flex items-center justify-between p-5 border-b border-slate-100">
        <h2 class="text-lg font-black text-slate-800 flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            سبد خرید شما
        </h2>
        <button onclick="closeCartDrawer()" class="text-slate-400 hover:text-slate-800 p-2 rounded-lg hover:bg-slate-50 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>

    <!-- لیست محصولات -->
    <div class="flex-1 overflow-y-auto p-5 space-y-4">
        <!-- محصول ۱ -->
        <div class="flex gap-4 border-b border-slate-100 pb-4">
            <div class="w-20 h-20 bg-slate-50 rounded-xl overflow-hidden flex-shrink-0">
                <img src="{{ asset('images/ch.jpg') }}" class="w-full h-full object-cover" alt="چراغ جلو">
            </div>
            <div class="flex-1">
                <h3 class="text-sm font-bold text-slate-800 mb-1">چراغ جلو سمت راست MVM</h3>
                <div class="text-xs text-slate-500 mb-2">MVM Original</div>
                <div class="flex items-center justify-between">
                    <div class="text-sm font-black text-blue-600">۲۰٬۰۰۰٬۰۰۰ <span class="text-[10px] font-normal text-slate-500">تومان</span></div>
                    <div class="flex items-center gap-2">
                        <button class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-slate-600 hover:bg-slate-200">-</button>
                        <span class="text-xs font-bold">۱</span>
                        <button class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-slate-600 hover:bg-slate-200">+</button>
                    </div>
                </div>
            </div>
            <button class="text-rose-500 hover:text-rose-700 h-fit">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
            </button>
        </div>

        <!-- محصول ۲ -->
        <div class="flex gap-4 border-b border-slate-100 pb-4">
            <div class="w-20 h-20 bg-slate-50 rounded-xl overflow-hidden flex-shrink-0">
                <img src="{{ asset('images/l.jpg') }}" class="w-full h-full object-cover" alt="لنت ترمز">
            </div>
            <div class="flex-1">
                <h3 class="text-sm font-bold text-slate-800 mb-1">لنت ترمز جلو فونیکس</h3>
                <div class="text-xs text-slate-500 mb-2">Fownix Original</div>
                <div class="flex items-center justify-between">
                    <div class="text-sm font-black text-blue-600">۴٬۵۰۰٬۰۰۰ <span class="text-[10px] font-normal text-slate-500">تومان</span></div>
                    <div class="flex items-center gap-2">
                        <button class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-slate-600 hover:bg-slate-200">-</button>
                        <span class="text-xs font-bold">۱</span>
                        <button class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-slate-600 hover:bg-slate-200">+</button>
                    </div>
                </div>
            </div>
            <button class="text-rose-500 hover:text-rose-700 h-fit">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
            </button>
        </div>
    </div>

    <!-- فوتر کشو (جمع کل و دکمه) -->
    <div class="p-5 border-t border-slate-100 bg-slate-50">
        <div class="flex justify-between items-center mb-4">
            <span class="text-sm font-bold text-slate-600">مبلغ قابل پرداخت:</span>
            <span class="text-lg font-black text-blue-600">۲۴٬۵۰۰٬۰۰۰ <span class="text-xs font-normal text-slate-500">تومان</span></span>
        </div>
        <a href="{{ route('checkout') }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-black py-3.5 rounded-xl shadow-lg shadow-blue-500/30 transition-all">
            ادامه فرآیند خرید
        </a>
    </div>
</div>

<script>
    function openCartDrawer() {
        document.getElementById('cartDrawerOverlay').classList.remove('hidden');
        document.getElementById('cartDrawer').classList.remove('-translate-x-full');
    }
    function closeCartDrawer() {
        document.getElementById('cartDrawerOverlay').classList.add('hidden');
        document.getElementById('cartDrawer').classList.add('-translate-x-full');
    }
</script>
</body>
</html>
