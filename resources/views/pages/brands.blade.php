@extends('layouts.app')

@section('title', 'فروشگاه قطعات و اکسسوری خودرو | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[250px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1625047509168-a7026f36de04?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center px-4 mt-8">
            <h1 class="text-3xl md:text-4xl font-black text-white mb-3 tracking-tight">فروشگاه <span class="text-blue-400">قطعات</span></h1>
            <p class="text-base text-slate-300">برند خودروی خود را انتخاب کنید.</p>
        </div>
    </section>

    <!-- بخش برندها -->
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-16">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-black text-slate-800 mb-2">برندهای نواخودرو</h2>
            <p class="text-slate-500 text-sm">مولتی برند نواخودرو ارائه دهنده فروش و خدمات پس از فروش برندهای مطرح خودروسازی</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            <!-- برند ۱ -->
            <a href="{{ route('brand-products', ['brand' => 'MVM']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚗</span>
                <span class="text-sm font-bold text-slate-700">ام وی ام (MVM)</span>
            </a>
            <!-- برند ۲ -->
            <a href="{{ route('brand-products', ['brand' => 'Fownix']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚙</span>
                <span class="text-sm font-bold text-slate-700">فونیکس (Fownix)</span>
            </a>
            <!-- برند ۳ -->
            <a href="{{ route('brand-products', ['brand' => 'FMC']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚐</span>
                <span class="text-sm font-bold text-slate-700">فردا موتورز (FMC)</span>
            </a>
            <!-- برند ۴ -->
            <a href="{{ route('brand-products', ['brand' => 'KMC']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚕</span>
                <span class="text-sm font-bold text-slate-700">کرمان موتور (KMC)</span>
            </a>
            <!-- برند ۵ -->
            <a href="{{ route('brand-products', ['brand' => 'Hyundai']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚘</span>
                <span class="text-sm font-bold text-slate-700">هیوندای (Hyundai)</span>
            </a>
            <!-- برند ۶ -->
            <a href="{{ route('brand-products', ['brand' => 'BMW']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🏎️</span>
                <span class="text-sm font-bold text-slate-700">بی ام و (BMW)</span>
            </a>
            <!-- برند ۷ -->
            <a href="{{ route('brand-products', ['brand' => 'MG']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚗</span>
                <span class="text-sm font-bold text-slate-700">ام جی (MG)</span>
            </a>
            <!-- برند ۸ -->
            <a href="{{ route('brand-products', ['brand' => 'Jetta']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚙</span>
                <span class="text-sm font-bold text-slate-700">جتا (Jetta)</span>
            </a>
            <!-- برند ۹ -->
            <a href="{{ route('brand-products', ['brand' => 'Geely']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚐</span>
                <span class="text-sm font-bold text-slate-700">جیلی (Geely)</span>
            </a>
            <!-- برند ۱۰ -->
            <a href="{{ route('brand-products', ['brand' => 'Kia']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚕</span>
                <span class="text-sm font-bold text-slate-700">کیا (Kia)</span>
            </a>
            <!-- برند ۱۱ -->
            <a href="{{ route('brand-products', ['brand' => 'Mazda']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🚘</span>
                <span class="text-sm font-bold text-slate-700">مزدا (Mazda)</span>
            </a>
            <!-- برند ۱۲ -->
            <a href="{{ route('brand-products', ['brand' => 'BYD']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">🏎️</span>
                <span class="text-sm font-bold text-slate-700">بی وای دی (BYD)</span>
            </a>
        </div>
    </div>
@endsection
