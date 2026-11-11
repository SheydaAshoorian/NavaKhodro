<section class="py-16 px-6 bg-slate-50">
    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-12">
            <h2 class="text-3xl font-black text-slate-800 mb-3">نواخودرو در یک نگاه</h2>
            <p class="text-slate-500">دو مسیر اصلی برای تمام نیازهای خودرویی شما</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- کارت ۱: بخش خودرو (خرید و فروش) -->
            <a href="{{ route('buy') }}" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-100 hover:border-blue-200 flex flex-col h-full">
                <!-- بخش بالایی کارت با عکس یا گرادیانت -->
                <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-700 relative overflow-hidden flex items-center justify-center">
                    <!-- لایه تزئینی -->
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20"></div>
                    <div class="relative z-10 text-7xl group-hover:scale-110 transition-transform duration-500">🚗</div>
                    <!-- بج گوشه -->
                    <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-md text-white text-xs font-bold px-3 py-1 rounded-full border border-white/30">
                        بازار خودرو
                    </div>
                </div>
                <!-- محتوای کارت -->
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-black text-slate-800 mb-3 group-hover:text-blue-600 transition">خرید و فروش خودرو</h3>
                    <p class="text-slate-500 leading-relaxed mb-6 flex-1">
                        مشاهده موجودی خودروهای وارداتی و داخلی، استعلام قیمت، و ثبت درخواست فروش خودروی شما با کارشناسی دقیق.
                    </p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100">
                        <span class="font-bold text-blue-600 group-hover:underline">ورود به بازار خودرو</span>
                        <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </div>
                    </div>
                </div>
            </a>

            <!-- کارت ۲: بخش نواسرویس (خدمات و قطعات) -->
            <a href="{{ route('nava_service') }}" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-100 hover:border-slate-300 flex flex-col h-full">
                <!-- بخش بالایی کارت با عکس یا گرادیانت -->
                <div class="h-48 bg-gradient-to-br from-slate-700 to-slate-900 relative overflow-hidden flex items-center justify-center">
                    <!-- لایه تزئینی -->
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20"></div>
                    <div class="relative z-10 text-7xl group-hover:scale-110 transition-transform duration-500">🔧</div>
                    <!-- بج گوشه -->
                    <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-md text-white text-xs font-bold px-3 py-1 rounded-full border border-white/30">
                        خدمات پس از فروش
                    </div>
                </div>
                <!-- محتوای کارت -->
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-black text-slate-800 mb-3 group-hover:text-slate-900 transition">نواسرویس</h3>
                    <p class="text-slate-500 leading-relaxed mb-6 flex-1">
                        جستجوی قطعات اصلی خودروهای وارداتی، رزرو نوبت تعمیرگاهی، پیگیری وضعیت خودرو و دریافت مشاوره تخصصی.
                    </p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100">
                        <span class="font-bold text-slate-800 group-hover:underline">ورود به خدمات پس از فروش</span>
                        <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-800 group-hover:bg-slate-800 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>
