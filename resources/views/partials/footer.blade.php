<footer class="bg-slate-900 text-slate-300 py-12 border-t border-slate-800 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 lg:gap-12">

            <div class="col-span-1 md:col-span-1">
                <a href="{{ route('home') }}" class="text-2xl font-black text-white">نوا<span class="text-blue-500">خودرو</span></a>
                <p class="mt-4 text-sm leading-relaxed text-slate-400">
                    شبکه رسمی خرید و فروش خودرو و خدمات پس از فروش نوا — از خودروهای کلاسیک تا مدرن.
                </p>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-white tracking-wider uppercase mb-4">دسترسی سریع</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('buy') }}" class="text-sm hover:text-blue-400 transition-colors">خرید خودرو</a></li>
                    <li><a href="{{ route('sell') }}" class="text-sm hover:text-blue-400 transition-colors">فروش خودرو</a></li>
                    <li><a href="{{ route('nava_service') }}" class="text-sm hover:text-blue-400 transition-colors">نواسرویس</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-white tracking-wider uppercase mb-4">خدمات</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('part-search') }}" class="text-sm hover:text-blue-400 transition-colors">جستجوی قطعه</a></li>
                    <li><a href="{{ route('booking') }}" class="text-sm hover:text-blue-400 transition-colors">ثبت نوبت</a></li>
                    <li><a href="{{ route('track-car') }}" class="text-sm hover:text-blue-400 transition-colors">پیگیری خودرو</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-white tracking-wider uppercase mb-4">تماس با ما</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span dir="ltr">۰۱۱-۹۱۰۰۱۲۵۲</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        بابلسر، کیلومتر ۴ جاده بابل
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-slate-800 text-center text-sm text-slate-500">
            &copy; ۱۴۰۴ نواخودرو — تمامی حقوق محفوظ است.
        </div>
    </div>
</footer>
