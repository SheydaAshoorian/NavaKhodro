
<section class="py-20 px-6 bg-slate-50">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-4">
            <div>
                <h2 class="text-3xl font-black text-slate-800 mb-2">خودروهای موجود</h2>
                <p class="text-slate-500">جدیدترین خودروهای وارداتی و داخلی موجود در منطقه آزاد</p>
            </div>
            <a href="{{ route('buy') }}" class="text-blue-600 font-bold hover:text-blue-700 transition">مشاهده همه خودروها ←</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- کارت نمونه ۱ -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition border border-slate-100 group">
                <div class="h-48 bg-slate-200 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center text-6xl opacity-50 group-hover:scale-110 transition duration-500">
                        <img src="{{ asset('images/touo.jpg') }}">
                    </div>
                    <span class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">صفر کیلومتر</span>
                    <span class="absolute top-4 left-4 bg-white/90 text-blue-600 text-xs font-bold px-3 py-1 rounded-full border border-blue-100">وارداتی</span>
                </div>
                <div class="p-6">
                    <div class="text-xs font-bold text-blue-600 mb-1">تویوتا</div>
                    <h3 class="text-lg font-black text-slate-800 mb-2">تویوتا کمری هیبرید ۲۰۲۴</h3>
                    <div class="text-sm text-slate-500 mb-4">اتوماتیک · بنزین · ۰ کیلومتر</div>
                    <div class="flex justify-between items-center pt-4 border-t border-slate-100">
                        <div class="text-blue-600 font-black">۳,۵۰۰,۰۰۰,۰۰۰ تومان</div>
                        <a href="#" class="text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 py-2 px-4 rounded-full transition">جزئیات</a>
                    </div>
                </div>
            </div>

            <!-- کارت نمونه ۲ -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition border border-slate-100 group">
                <div class="h-48 bg-slate-200 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center text-6xl opacity-50 group-hover:scale-110 transition duration-500">
                        <img src="{{ asset('images/tusan.jpg') }}">

                    </div>
                    <span class="absolute top-4 right-4 bg-slate-500 text-white text-xs font-bold px-3 py-1 rounded-full">کارکرده</span>
                    <span class="absolute top-4 left-4 bg-white/90 text-blue-600 text-xs font-bold px-3 py-1 rounded-full border border-blue-100">وارداتی</span>
                </div>
                <div class="p-6">
                    <div class="text-xs font-bold text-blue-600 mb-1">هیوندای</div>
                    <h3 class="text-lg font-black text-slate-800 mb-2">هیوندای توسان ۲۰۲۲</h3>
                    <div class="text-sm text-slate-500 mb-4">اتوماتیک · بنزین · ۴۵,۰۰۰ کیلومتر</div>
                    <div class="flex justify-between items-center pt-4 border-t border-slate-100">
                        <div class="text-blue-600 font-black">۲,۱۰۰,۰۰۰,۰۰۰ تومان</div>
                        <a href="#" class="text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 py-2 px-4 rounded-full transition">جزئیات</a>
                    </div>
                </div>
            </div>

            <!-- کارت نمونه ۳ -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition border border-slate-100 group">
                <div class="h-48 bg-slate-200 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center text-6xl opacity-50 group-hover:scale-110 transition duration-500">
                        <img src="{{ asset('images/Tiggo-8-Pro-PHEV.jpg') }}">
                    </div>
                    <span class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">صفر کیلومتر</span>
                    <span class="absolute top-4 left-4 bg-white/90 text-blue-600 text-xs font-bold px-3 py-1 rounded-full border border-blue-100">داخلی</span>
                </div>
                <div class="p-6">
                    <div class="text-xs font-bold text-blue-600 mb-1">مدیران خودرو</div>
                    <h3 class="text-lg font-black text-slate-800 mb-2">چری تیگو ۸ پرو ۱۴۰۳</h3>
                    <div class="text-sm text-slate-500 mb-4">اتوماتیک · بنزین · ۰ کیلومتر</div>
                    <div class="flex justify-between items-center pt-4 border-t border-slate-100">
                        <div class="text-blue-600 font-black">۲,۵۰۰,۰۰۰,۰۰۰ تومان</div>
                        <a href="#" class="text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 py-2 px-4 rounded-full transition">جزئیات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

