<!-- بخش شهر نواخودرو -->
<section class="bg-[#F8FAFC] py-20 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">


            <!-- بخش متن -->
            <div class="w-full lg:w-1/2 text-center lg:text-right">
                <span class="inline-block bg-blue-50 text-blue-600 text-sm font-bold px-4 py-1.5 rounded-full mb-4">
                    BIG PROJECT
                </span>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6 leading-tight">
                    شهر نواخودرو، بزرگترین مرکز خودرویی <br class="hidden md:block"> شمال کشور
                </h2>
                <p class="text-slate-500 text-lg leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                    با وسعتی بالغ بر ۱۵٬۰۰۰ متر مربع، شهر نواخودرو میزبان ۱۶ نمایشگاه فروش، سالن خدمات ۳٬۵۰۰ متر مربعی و ۱۵ برند رسمی خودرویی است. تمامی خدمات خرید، فروش و پس از فروش در یک مجموعه یکپارچه.
                </p>
                <a href="#" class="inline-flex items-center justify-center px-8 py-3.5 border-2 border-slate-200 text-slate-700 font-bold rounded-full hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-all duration-300">
                    بیشتر بدانید
                </a>
            </div>


            <!-- بخش عکس (کارت) -->
            <div class="w-full lg:w-1/2">
                <div class="relative bg-white p-4 rounded-3xl shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] border border-slate-100 hover:shadow-2xl transition-all duration-500 group">
                    {{-- عکس --}}
                    <div class="relative overflow-hidden rounded-2xl h-[300px] lg:h-[400px]">
                        <img src="{{ asset('images/mazda.jpg') }}" alt="شهر نواخودرو" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        {{-- یک لایه گرادیانت ملایم روی عکس برای زیبایی بیشتر --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
