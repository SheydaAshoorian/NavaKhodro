<section class="py-20 px-6 bg-slate-900 text-white">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-black mb-4">برای مشاوره، شماره خود را بگذارید</h2>
        <p class="text-slate-400 mb-8">کارشناسان ما در سریع‌ترین زمان با شما تماس می‌گیرند.</p>
        <form action="#" method="POST" class="flex flex-col md:flex-row gap-4 justify-center">
            @csrf
            <input type="text" name="name" placeholder="نام و نام خانوادگی" class="w-full md:w-64 bg-white/10 border border-white/20 rounded-full py-4 px-6 text-white placeholder-slate-400 focus:outline-none focus:border-blue-400 transition text-right" dir="rtl" required>
            <input type="tel" name="phone" placeholder="شماره تماس" class="w-full md:w-64 bg-white/10 border border-white/20 rounded-full py-4 px-6 text-white placeholder-slate-400 focus:outline-none focus:border-blue-400 transition text-right" dir="rtl" required>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-black py-4 px-8 rounded-full transition shadow-lg shadow-blue-500/30 whitespace-nowrap">
                ارسال درخواست
            </button>
        </form>
    </div>
</section>
