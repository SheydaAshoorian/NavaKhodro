
<!-- ۱. دسته‌بندی‌ها (اسلایدر افقی شبیه دیجی‌کالا) -->
<div class="bg-white rounded-2xl border border-slate-200 p-5 mb-6 shadow-sm">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-black text-slate-800 flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            دسته‌بندی‌ها
        </h3>
    </div>

    <div class="relative group">
        <button class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 shadow-md border border-slate-100 rounded-full p-2 text-slate-600 opacity-0 group-hover:opacity-100 transition-opacity hidden md:block hover:text-blue-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>

        <div class="flex overflow-x-auto gap-4 pb-2 scrollbar-hide scroll-smooth" style="scrollbar-width: none; -ms-overflow-style: none;">
            <!-- دسته ۱ -->
            <a href="#" class="flex flex-col items-center justify-center min-w-[160px] w-[180px] h-[160px] border border-slate-200 rounded-xl hover:shadow-md hover:border-blue-300 transition-all bg-white p-3 group/cat">
                <img src="{{asset('images/yadaki.jpg')}}" alt="لوازم یدکی" >
                <span class="text-xs font-bold text-slate-700 text-center leading-tight">لوازم یدکی خودرو</span>
            </a>
            <!-- دسته ۲ -->
            <a href="#" class="flex flex-col items-center justify-center min-w-[160px] w-[180px] h-[160px] border border-slate-200 rounded-xl hover:shadow-md hover:border-blue-300 transition-all bg-white p-3 group/cat">
                <img src="{{asset('images/ms.jpg')}}" alt="لوازم مصرفی" >
                <span class="text-xs font-bold text-slate-700 text-center leading-tight">لوازم مصرفی خودرو</span>
            </a>
            <!-- دسته ۳ -->
            <a href="#" class="flex flex-col items-center justify-center min-w-[160px] w-[180px] h-[160px] border border-slate-200 rounded-xl hover:shadow-md hover:border-blue-300 transition-all bg-white p-3 group/cat">
                <img src="{{asset('images/ss.jpg')}}" alt="سیستم صوتی" >
                <span class="text-xs font-bold text-slate-700 text-center leading-tight">سیستم صوتی و تصویری</span>
            </a>
            <!-- دسته ۴ -->
            <a href="#" class="flex flex-col items-center justify-center min-w-[160px] w-[180px] h-[160px] border border-slate-200 rounded-xl hover:shadow-md hover:border-blue-300 transition-all bg-white p-3 group/cat">
                <img src="{{asset('images/ll.jpg')}}" alt="لاستیک و رینگ" >
                <span class="text-xs font-bold text-slate-700 text-center leading-tight">لاستیک و رینگ</span>
            </a>
            <!-- دسته ۵ -->
            <a href="{{ route('oils') }}" class="flex flex-col items-center justify-center min-w-[160px] w-[180px] h-[160px] border border-slate-200 rounded-xl hover:shadow-md hover:border-blue-300 transition-all bg-white p-3 group/cat">
                <img src="{{asset('images/rr.jpg')}}" alt="روغن و مایعات" >
                <span class="text-xs font-bold text-slate-700 text-center leading-tight">روغن و مایعات</span>
            </a>
            <!-- دسته ۶ -->
            <a href="{{ route('tools') }}" class="flex flex-col items-center justify-center min-w-[160px] w-[180px] h-[160px] border border-slate-200 rounded-xl hover:shadow-md hover:border-blue-300 transition-all bg-white p-3 group/cat">
                <img src="{{asset('images/tt.jpg')}}" alt="ابزار و تجهیزات" >
                <span class="text-xs font-bold text-slate-700 text-center leading-tight">ابزار و تجهیزات</span>
            </a>
            <!-- دسته ۷ -->
            <a href="{{ route('accessories') }}" class="flex flex-col items-center justify-center min-w-[160px] w-[180px] h-[160px] border border-slate-200 rounded-xl hover:shadow-md hover:border-blue-300 transition-all bg-white p-3 group/cat">
                <img src="{{asset('images/jj.jpg')}}" alt="لوازم جانبی" >
                <span class="text-xs font-bold text-slate-700 text-center leading-tight">لوازم جانبی خودرو</span>
            </a>
        </div>

        <button class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 shadow-md border border-slate-100 rounded-full p-2 text-slate-600 opacity-0 group-hover:opacity-100 transition-opacity hidden md:block hover:text-blue-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
    </div>
</div>
