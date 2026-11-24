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
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                    <img src="{{asset('images/mvm.jpg')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">ام وی ام (MVM)</span>
            </a>
            <!-- برند ۲ -->
            <a href="{{ route('brand-products', ['brand' => 'Fownix']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                    <img src="{{asset('images/fonix.png')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">فونیکس (Fownix)</span>
            </a>
            <!-- برند ۳ -->
            <a href="{{ route('brand-products', ['brand' => 'FMC']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">

                    <img src="{{asset('images/fmc.png')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">فردا موتورز (FMC)</span>
            </a>
            <!-- برند ۴ -->
            <a href="{{ route('brand-products', ['brand' => 'KMC']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                    <img src="{{asset('images/fonix.png')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">کرمان موتور (KMC)</span>
            </a>
            <!-- برند ۵ -->
            <a href="{{ route('brand-products', ['brand' => 'Hyundai']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                    <img src="{{asset('images/hyundai.webp')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">هیوندای (Hyundai)</span>
            </a>
            <!-- برند ۶ -->
            <a href="{{ route('brand-products', ['brand' => 'BMW']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                        <img src="{{asset('images/hyundai.webp')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">بی ام و (BMW)</span>
            </a>
            <!-- برند ۷ -->
            <a href="{{ route('brand-products', ['brand' => 'MG']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                    <img src="{{asset('images/MG.png')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">ام جی (MG)</span>
            </a>
            <!-- برند ۸ -->
            <a href="{{ route('brand-products', ['brand' => 'Jetta']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                    <img src="{{asset('images/jetta.webp')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">جتا (Jetta)</span>
            </a>
            <!-- برند ۹ -->
            <a href="{{ route('brand-products', ['brand' => 'Geely']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                     <img src="{{asset('images/geely.webp')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">جیلی (Geely)</span>
            </a>
            <!-- برند ۱۰ -->
            <a href="{{ route('brand-products', ['brand' => 'Kia']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                    <img src="{{asset('images/kia.webp')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">کیا (Kia)</span>
            </a>
            <!-- برند ۱۱ -->
            <a href="{{ route('brand-products', ['brand' => 'Mazda']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                    <img src="{{asset('images/mazda.webp')}}" />
                </span>
                <span class="text-sm font-bold text-slate-700">مزدا (Mazda)</span>
            </a>
            <!-- برند ۱۲ -->
            <a href="{{ route('brand-products', ['brand' => 'BYD']) }}" class="bg-slate-50 rounded-2xl border border-slate-200 p-6 flex flex-col items-center justify-center hover:shadow-md hover:border-blue-300 hover:bg-white transition-all group">
                <span class="text-4xl mb-3 group-hover:scale-110 transition-transform">
                    <img src="{{asset('images/byd.jpg')}}" />
                 ️</span>
                <span class="text-sm font-bold text-slate-700">بی وای دی (BYD)</span>
            </a>
        </div>
    </div>

    <!-- بخش توضیحات و سئو -->
    <div class="bg-white border-t border-slate-200 py-16 mt-12">
        <div class="max-w-[1000px] mx-auto px-4 md:px-8">
            <div class="space-y-6 text-sm text-slate-600 leading-relaxed text-justify">
                <h2 class="text-2xl font-black text-slate-800 mb-6 text-center">راهنمای خرید قطعات یدکی خودرو از نواسرویس</h2>

                <p>
                    انتخاب قطعه مناسب برای خودرو، یکی از مهم‌ترین دغدغه‌های هر راننده‌ای است. در بازار پرتنوع قطعات یدکی، پیدا کردن قطعه‌ای که هم اصیل باشد، هم با خودروی شما سازگار باشد و هم قیمت منصفانه‌ای داشته باشد، کار ساده‌ای نیست. اینجاست که <strong>نواسرویس</strong> به عنوان یک مرجع تخصصی و قابل اعتماد وارد عمل می‌شود.
                </p>

                <p>
                    ما در نواسرویس با همکاری مستقیم با برندهای معتبر خودروسازی مانند مدیران خودرو (MVM)، فونیکس (Fownix)، فردا موتورز (FMC)، کرمان موتور (KMC)، هیوندای، بی‌ام‌و و سایر برندهای مطرح، بستری امن و شفاف را برای خرید آنلاین قطعات یدکی فراهم کرده‌ایم. تمامی محصولات ما با ضمانت اصالت و کیفیت بالا به دست شما می‌رسند.
                </p>

                <h3 class="text-lg font-bold text-slate-800 mt-8 mb-3">چرا خرید قطعات از نواسرویس را انتخاب کنیم؟</h3>
                <ul class="list-disc list-inside space-y-3 pr-2">
                    <li><strong>تنوع بی‌نظیر برندها:</strong> ما تمامی برندهای خودرویی موجود در بازار ایران را پوشش می‌دهیم تا شما بتوانید قطعه مورد نیاز خودروی خود را بدون جستجوی فراوان پیدا کنید.</li>
                    <li><strong>ضمانت اصالت کالا:</strong> تمامی قطعات اورجینال (OEM) و باکیفیت هستند و با فاکتور رسمی و ضمانت اصالت به شما تحویل داده می‌شوند.</li>
                    <li><strong>قیمت‌های رقابتی:</strong> با حذف واسطه‌ها و تامین مستقیم از تولیدکنندگان و واردکنندگان معتبر، تلاش کرده‌ایم تا محصولات را با مناسب‌ترین قیمت به شما ارائه دهیم.</li>
                    <li><strong>مشاوره تخصصی:</strong> تیم پشتیبانی فنی ما آماده است تا در انتخاب قطعه مناسب و بررسی سازگاری آن با خودروی شما، شما را راهنمایی کند.</li>
                    <li><strong>ارسال سریع:</strong> ما می‌دانیم که توقف خودرو یعنی توقف زندگی شما. بنابراین سفارشات را در سریع‌ترین زمان ممکن به سراسر کشور ارسال می‌کنیم.</li>
                </ul>

                <h3 class="text-lg font-bold text-slate-800 mt-8 mb-3">دسته‌بندی قطعات یدکی</h3>
                <p>
                    در فروشگاه نواسرویس، قطعات یدکی در دسته‌بندی‌های مختلفی ارائه می‌شوند تا جستجوی شما آسان‌تر شود. این دسته‌بندی‌ها شامل <strong>قطعات موتوری و انتقال قدرت</strong> (مانند فیلترها، واشرها، تسمه‌ها)، <strong>سیستم ترمز و تعلیق</strong> (لنت ترمز، دیسک، کمک‌فنر)، <strong>قطعات بدنه و روشنایی</strong> (چراغ‌ها، آینه‌ها، سپرها) و <strong>لوازم مصرفی</strong> (روغن موتور، مایعات خنک‌کننده و شیشه‌شور) می‌شود.
                </p>

                <p class="mt-6 font-bold text-slate-700">
                    ما در نواسرویس باور داریم که نگهداری صحیح از خودرو، هزینه‌های بلندمدت را کاهش می‌دهد. با خرید قطعات باکیفیت و اصیل، عمر مفید خودروی خود را افزایش دهید و از رانندگی با خیال راحت لذت ببرید. برای شروع، برند خودروی خود را از لیست بالا انتخاب کنید و قطعه مورد نظر خود را جستجو کنید.
                </p>
            </div>
        </div>
    </div>
@endsection
