<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-xl border-b border-slate-200/60 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            {{-- لوگو --}}
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="block">
                    <img src="{{ asset('images/logo.png') }}" alt="نواخودرو" class="h-20 w-auto object-contain">
                </a>
            </div>

            {{-- منوی اصلی --}}
            <nav class="hidden md:flex items-center gap-1">
                <a href="{{ route('buy') }}" class="px-4 py-2 rounded-full text-sm font-medium text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200">
                    می‌خواهم بخرم
                </a>
                <a href="{{ route('sell') }}" class="px-4 py-2 rounded-full text-sm font-medium text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200">
                    می‌خواهم بفروشم
                </a>

                {{-- منوی کشویی --}}
                <div class="relative group">
                    <a href="{{ route('nava_service') }}" class="flex items-center gap-1 px-4 py-2 rounded-full text-sm font-medium text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200 cursor-pointer">
                        نواسرویس
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <div class="absolute right-0 top-full pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-2 group-hover:translate-y-0 w-64 z-50">
                        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-2">
                            <a href="{{ route('part-search') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                                <span class="text-xl">🔍</span> جستجوی قطعه
                            </a>
                            <a href="{{ route('booking') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                                <span class="text-xl">📅</span> ثبت نوبت
                            </a>
                            <a href="{{ route('track-car') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                                <span class="text-xl">🚗</span> پیگیری خودرو
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            {{-- دکمه تماس --}}
            <div class="hidden md:flex items-center">
                <a href="{{ route('nava_service') }}#contact" class="inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-sm font-semibold rounded-full text-white bg-blue-600 hover:bg-blue-700 shadow-sm hover:shadow transition-all duration-200">
                    تماس با ما
                </a>
            </div>

            {{-- دکمه موبایل --}}
            <button class="md:hidden p-2 text-slate-600 hover:bg-slate-100 rounded-lg" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </div>
</header>
