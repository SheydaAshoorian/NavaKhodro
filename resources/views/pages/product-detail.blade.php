@extends('layouts.app')

@section('title', 'جزئیات قطعه | نواسرویس')

@section('content')
    <div class="max-w-[1300px] mx-auto px-4 md:px-8 py-6">

        <!-- بردکرامب (مسیر صفحه) -->
        <nav class="flex text-xs text-slate-500 mb-6 font-semibold">
            <a href="{{ route('home') }}" class="hover:text-blue-600">خانه</a>
            <span class="mx-2">/</span>
            <a href="{{ route('part-search') }}" class="hover:text-blue-600">فروشگاه قطعات</a>
            <span class="mx-2">/</span>
            <span class="text-slate-800">چراغ جلو MVM</span>
        </nav>

        <!-- بخش اصلی (گالری و اطلاعات خرید) -->
        <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-sm flex flex-col lg:flex-row gap-10 mb-8">

            <!-- گالری عکس (سمت راست) -->
            <div class="w-full lg:w-[450px] flex-shrink-0 flex flex-col-reverse md:flex-row gap-4">
                <!-- تصاویر کوچک -->
                <div class="flex md:flex-col gap-3 overflow-x-auto md:overflow-visible">
                    <button class="w-16 h-16 border-2 border-blue-500 rounded-lg p-1 bg-white">
                        <img src="{{ asset('images/ch.jpg') }}" class="w-full h-full object-contain" alt="چراغ جلو">
                    </button>
                    <button class="w-16 h-16 border border-slate-200 rounded-lg p-1 bg-white hover:border-blue-300 transition-colors">
                        <img src="{{ asset('images/chh.jpg') }}" class="w-full h-full object-contain" alt="چراغ جلو ۲">
                    </button>
                    <button class="w-16 h-16 border border-slate-200 rounded-lg p-1 bg-white hover:border-blue-300 transition-colors">
                        <img src="{{ asset('images/f.jpg') }}" class="w-full h-full object-contain" alt="چراغ جلو ۳">
                    </button>
                </div>
                <!-- تصویر اصلی -->
                <div class="flex-1 bg-slate-50 rounded-2xl flex items-center justify-center p-4 relative">
                    <img src="{{ asset('images/ch.jpg') }}" class="w-full max-h-[400px] object-contain" alt="چراغ جلو MVM">
                </div>
            </div>

            <!-- اطلاعات محصول (سمت چپ) -->
            <div class="flex-1 flex flex-col">
                <h1 class="text-2xl font-black text-slate-800 mb-2 leading-relaxed">چراغ جلو سمت راست MVM مدل اورجینال</h1>
                <div class="text-sm text-slate-500 mb-4">برند: <span class="text-blue-600 font-bold">MVM Original</span> | کد کالا: <span class="font-mono text-slate-600">63117289123</span></div>

                <!-- امتیاز و نظرات -->
                <div class="flex items-center gap-2 mb-6 pb-6 border-b border-slate-100">
                    <div class="flex text-amber-400">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current text-slate-300" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <span class="text-xs text-slate-500 font-bold">(۱۲۰ نظر)</span>
                </div>

                <!-- مشخصات کلیدی -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-slate-600">ضمانت اصالت و سلامت فیزیکی کالا</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        <span class="text-slate-600">ارسال رایگان به سراسر کشور</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        <span class="text-slate-600">۷ روز ضمانت بازگشت کالا</span>
                    </div>
                </div>

                <!-- قیمت و دکمه خرید -->
                <div class="mt-auto bg-slate-50 rounded-2xl p-6">
                    <div class="flex items-end justify-between">
                        <div>
                            <div class="text-xs text-slate-400 line-through mb-1">۲۵٬۰۰۰٬۰۰۰ تومان</div>
                            <div class="text-3xl font-black text-blue-600">۲۰٬۰۰۰٬۰۰۰ <span class="text-sm font-normal text-slate-600">تومان</span></div>
                        </div>
                        <a href="{{ route('checkout') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-black px-10 py-3.5 rounded-xl shadow-lg shadow-blue-500/30 transition-all transform hover:-translate-y-0.5">
                            <button onclick="openRequest()" class="bg-blue-600 hover:bg-blue-700 text-white font-black px-10 py-3.5 rounded-xl shadow-lg shadow-blue-500/30 transition-all transform hover:-translate-y-0.5">
                                ثبت درخواست خرید
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- بخش مشخصات فنی و توضیحات -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- ستون مشخصات -->
            <div class="lg:col-span-2 space-y-8">
                <!-- مشخصات فنی -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                    <h2 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        مشخصات فنی
                    </h2>
                    <div class="space-y-4 text-sm">
                        <div class="flex justify-between items-center py-2 border-b border-slate-50">
                            <span class="text-slate-500">برند سازنده</span>
                            <span class="font-bold text-slate-800">MVM Original</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-slate-50">
                            <span class="text-slate-500">کد فنی قطعه</span>
                            <span class="font-bold text-slate-800 font-mono" dir="ltr">63117289123</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-slate-50">
                            <span class="text-slate-500">سازگاری</span>
                            <span class="font-bold text-slate-800">MVM 315, MVM 550</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-slate-50">
                            <span class="text-slate-500">سمت نصب</span>
                            <span class="font-bold text-slate-800">جلو راست</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-500">نوع محصول</span>
                            <span class="font-bold text-slate-800">اورجینال (OEM)</span>
                        </div>
                    </div>
                </div>

                <!-- توضیحات -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                    <h2 class="text-lg font-black text-slate-800 mb-4 flex items-center gap-2">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        توضیحات محصول
                    </h2>
                    <div class="text-sm text-slate-600 leading-relaxed text-justify space-y-4">
                        <p>چراغ جلوی سمت راست MVM یکی از قطعات مهم و حساس در سیستم روشنایی خودرو است که نقش بسزایی در ایمنی رانندگی شبانه دارد. این محصول با استفاده از مواد اولیه باکیفیت و مطابق با استانداردهای کارخانه MVM تولید شده است و کاملاً با خودروهای MVM 315 و MVM 550 سازگار است.</p>
                        <p>طراحی این چراغ به گونه‌ای است که نور را به صورت یکنواخت و بدون خیرگی به مسیر مقابل پخش می‌کند. لنز استفاده شده در این چراغ از نوع پلی‌کربنات مقاوم در برابر خط و خش و ضربه است و در برابر اشعه UV نیز مقاومت بالایی دارد.</p>
                        <p>توصیه می‌شود برای نصب این قطعه حتماً به تعمیرگاه‌های مجاز و متخصص مراجعه کنید تا تنظیمات نور چراغ به درستی انجام شود.</p>
                    </div>
                </div>
            </div>

            <!-- ستون نظرات (خلاصه) -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm sticky top-24">
                    <h2 class="text-lg font-black text-slate-800 mb-4 flex items-center gap-2">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        نظرات کاربران
                    </h2>
                    <div class="text-center py-8">
                        <div class="text-4xl font-black text-slate-800 mb-2">۴.۵</div>
                        <div class="flex justify-center text-amber-400 mb-2">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 fill-current text-slate-300" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <p class="text-sm text-slate-500 mb-4">از ۱۲۰ نظر ثبت شده</p>
                        <button class="w-full bg-slate-100 text-slate-700 font-bold py-2.5 rounded-xl hover:bg-slate-200 transition-colors">مشاهده همه نظرات</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

