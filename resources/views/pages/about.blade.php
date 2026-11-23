@extends('layouts.app')

@section('title', 'درباره ما | نواسرویس')

@section('content')
    <!-- بنر لوگو (مشابه سایت اصلی) -->
    <section class="relative w-full h-[250px] md:h-[350px] bg-slate-900 flex items-center justify-center overflow-hidden">
        <!-- یک لوگوی بزرگ تایپوگرافی (متن جایگزین) -->
        <div class="absolute inset-0 flex items-center justify-center opacity-10 select-none pointer-events-none">
            <h1 class="text-[10vw] font-black text-white whitespace-nowrap tracking-tighter">NAVAKHODRO</h1>
        </div>
        <div class="relative z-10 text-center px-4">
            <h2 class="text-2xl md:text-4xl font-black text-white bg-slate-800 px-6 py-3 rounded-xl inline-block border border-slate-700">درباره نواخودرو</h2>
        </div>
    </section>

    <!-- محتوای اصلی -->
    <div class="max-w-[1000px] mx-auto px-4 md:px-8 py-12 space-y-12">

        <!-- بخش ۱: معرفی اولیه -->
        <div class="bg-white rounded-3xl p-6 md:p-10 border border-slate-200 shadow-sm">
            <h3 class="text-xl font-black text-blue-600 mb-4 border-b border-slate-100 pb-3">شرکت نواخودرو</h3>
            <div class="text-sm text-slate-600 leading-relaxed text-justify space-y-4">
                <p>
                    شرکت <strong>نواخودرو</strong> به عنوان بزرگترین مرکز خودرویی شمال کشور، فعالیت خود را از سال ۱۳۹۰ با هدف ارائه خدمات جامع و شفاف در حوزه خرید و فروش خودرو آغاز کرده است. ما با تکیه بر تجربه چندین ساله و همکاری با برندهای معتبر جهانی، توانسته‌ایم جایگاه ویژه‌ای در بازار خودرو کشور پیدا کنیم.
                </p>
                <p>
                    این مجموعه با داشتن بیش از ۱۷ شعبه فعال در سراسر کشور و شبکه‌ای از نمایندگی‌های رسمی، خدمات متنوعی از جمله فروش خودروهای صفر و کارکرده، خدمات پس از فروش (نواسرویس)، تامین قطعات یدکی و کارشناسی تخصصی را به مشتریان ارائه می‌دهد.
                </p>
            </div>
        </div>

        <!-- بخش ۲: دستاوردها و افتخارات -->
        <div class="bg-white rounded-3xl p-6 md:p-10 border border-slate-200 shadow-sm">
            <h3 class="text-xl font-black text-blue-600 mb-6 border-b border-slate-100 pb-3">دستاوردها و افتخارات</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="space-y-3 text-sm text-slate-600 leading-relaxed text-justify">
                    <p>
                        نواخودرو همواره در مسیر رشد و تعالی گام برداشته و در این مسیر موفق به دریافت افتخارات متعددی از جمله تندیس‌های بهترین نمایندگی فروش، خدمات پس از فروش برتر و لوح تقدیر از سازمان‌های مرتبط شده است.
                    </p>
                    <ul class="list-disc list-inside space-y-2 pr-2 mt-4 text-slate-700 font-semibold">
                        <li>نمایندگی برتر فروش مدیران خودرو</li>
                        <li>خدمات پس از فروش نمونه در استان مازندران</li>
                        <li>تقدیرنامه از سوی سازمان حمایت از مصرف‌کنندگان</li>
                        <li>واحد نمونه در رعایت حقوق مشتریان</li>
                    </ul>
                </div>

                <!-- گالری افتخارات (تصاویر فرضی) -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-slate-50 border border-slate-200 rounded-xl aspect-square flex items-center justify-center p-2">
                        <span class="text-4xl"><img src="{{asset('images/7b3eb9.jpg')}}" /></span>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-xl aspect-square flex items-center justify-center p-2">
                        <span class="text-4xl"><img src="{{asset('images/8ecc08.png')}}" /></span>
                    </div>

                    <div class="bg-slate-50 border border-slate-200 rounded-xl aspect-square flex items-center justify-center p-2">
                        <span class="text-4xl"><img src="{{asset('images/85d721.png')}}" /></span>
                    </div>

                    <div class="bg-slate-50 border border-slate-200 rounded-xl aspect-square flex items-center justify-center p-2">
                        <span class="text-4xl"><img src="{{asset('images/99f419.png')}}" /></span>
                    </div>

                    <div class="bg-slate-50 border border-slate-200 rounded-xl aspect-square flex items-center justify-center p-2">
                        <span class="text-4xl"><img src="{{asset('images/17d7bc.jpg')}}" /></span>
                    </div>

                    <div class="bg-slate-50 border border-slate-200 rounded-xl aspect-square flex items-center justify-center p-2">
                        <span class="text-4xl"><img src="{{asset('images/f81d81.png')}}" /></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- بخش ۳: برندهای همکار -->
        <div class="bg-white rounded-3xl p-6 md:p-10 border border-slate-200 shadow-sm">
            <h3 class="text-xl font-black text-blue-600 mb-6 border-b border-slate-100 pb-3">برندهای همکار ما</h3>
            <div class="text-sm text-slate-600 leading-relaxed text-justify space-y-4">
                <p>
                    ما مجموعه‌ای متنوع از خودروهای اقتصادی، لوکس و تجاری را با برندهای بزرگ و گواهی بر رشد پایدار و توسعه مستمر نواخودرو در صنعت خودرو ارائه می‌دهیم:
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-3 list-disc list-inside text-slate-700 font-semibold pr-4">
                    <li>مدیران خودرو (MVM, Fownix, Fownix NEV, XTRIM)</li>
                    <li>فردا موتورز (FMC, MG, Geely)</li>
                    <li>کرمان موتور (KTL هیوندای)</li>
                    <li>دیار خودرو (بایک)</li>
                    <li>کوشا خودرو (کیا)</li>
                    <li>نادین خودرو (آئودی)</li>
                    <li>ماموت خودرو (فولکس واگن، جتا، ارس)</li>
                    <li>آفتاب خودرو (مزدا و ولوو)</li>
                    <li>تیگارد خودرو (BYD)</li>
                    <li>نبکا خودرو (اسکای ول و BYD)</li>
                    <li>سروش خودرو</li>
                    <li>بینالود</li>
                </ul>
            </div>
        </div>

        <!-- بخش ۴: گسترش مرزهای خدمات -->
        <div class="bg-white rounded-3xl p-6 md:p-10 border border-slate-200 shadow-sm">
            <h3 class="text-xl font-black text-blue-600 mb-6 border-b border-slate-100 pb-3">گسترش مرزهای خدمات</h3>
            <div class="text-sm text-slate-600 leading-relaxed text-justify space-y-4">
                <p>
                    هم‌اکنون با شعب فعال در بابلسر، بابل، فریدون‌کنار و فریدون‌کنار، به‌طور مداوم در حال توسعه شبکه فروش نمایندگی‌های خود و همچنین افزایش تنوع خودروهای اقتصادی و خدمات پس از فروش هستیم. علاوه بر این، نواخودرو تنها طراح و مجری «شهر نواخودرو»، بزرگترین پروژه خودرویی کشور است که فاز اول آن پروژه آغاز به کار کرده و فاز دوم هم در حال ساخت است. این مجموعه کامل‌ترین و مجهزترین مرکز فروش و خدمات پس از فروش خواهد بود که ارائه‌دهنده مجموعه متنوع و ارزشمندی از برندهای خودرویی است.
                </p>
            </div>
        </div>

        <!-- بخش ۵: پروژه شهر نواخودرو -->
        <div class="bg-white rounded-3xl p-6 md:p-10 border border-slate-200 shadow-sm">
            <h3 class="text-xl font-black text-blue-600 mb-6 border-b border-slate-100 pb-3">پروژه شهر نواخودرو و ساختمان مدیران خودرو</h3>

            <!-- باکس ویدیو/تصویر پروژه -->
            <div class="relative rounded-2xl overflow-hidden mb-6 h-[300px] bg-slate-900 flex items-center justify-center group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=2000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-40 transition-opacity" alt="شهر نواخودرو">
                <div class="relative z-10 w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center border border-white/50 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                </div>
                <div class="absolute bottom-4 right-4 bg-black/60 backdrop-blur-sm text-white text-xs px-3 py-1.5 rounded-lg">معرفی پروژه‌های نواخودروی شمال</div>
            </div>
        </div>
        <!-- بخش ۴: نگاه ما به آینده -->
        <div class="bg-blue-50 rounded-3xl p-6 md:p-10 border border-blue-100 shadow-sm">
            <h3 class="text-xl font-black text-blue-700 mb-4">نگاه ما به آینده</h3>
            <p class="text-sm text-slate-600 leading-relaxed text-justify">
                نواخودرو در نظر دارد با توسعه زیرساخت‌های دیجیتال (پلتفرم نواسرویس) و گسترش شبکه نمایندگی‌ها در سراسر کشور، تبدیل به مرجع اصلی خرید و فروش خودرو و خدمات پس از فروش شود. ما متعهد به ارائه خدمات شفاف، باکیفیت و همراه با احترام به حقوق مشتریان هستیم تا انتخاب نواخودرو را برای همیشه به یک انتخاب هوشمندانه تبدیل کنیم.
            </p>
        </div>

    </div>
    <x-brands />
@endsection
