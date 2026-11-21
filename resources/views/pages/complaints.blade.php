@extends('layouts.app')

@section('title', 'ثبت شکایات مشتریان | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <section class="relative w-full h-[250px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center text-center px-4 max-w-2xl mt-8">
            <h1 class="text-3xl md:text-4xl font-black text-white mb-4 tracking-tight">شکایات <span class="text-blue-500">مشتریان</span></h1>
            <p class="text-lg text-slate-300 leading-relaxed">
                در صورتی که هرگونه شکایت نسبت به مجموعه دارید از طریق این فرم ما را مطلع کنید.
            </p>
        </div>
    </section>

    <!-- فرم ثبت شکایت -->
    <div class="max-w-3xl mx-auto px-4 md:px-8 py-16">
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 md:p-10">
            <form onsubmit="submitComplaint(event)" class="space-y-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- نام و نام خانوادگی -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-2 font-bold">نام و نام خانوادگی *</label>
                        <input type="text" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>

                    <!-- شماره تماس -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-2 font-bold">شماره تماس *</label>
                        <input type="tel" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all" placeholder="۰۹۱۲۳۴۵۶۷۸۹">
                    </div>

                    <!-- استان و شهر -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-2 font-bold">استان و شهر *</label>
                        <input type="text" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>

                    <!-- ایمیل -->
                    <div>
                        <label class="block text-sm text-slate-600 mb-2 font-bold">ایمیل (اختیاری)</label>
                        <input type="email" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all" style="direction:ltr; text-align:left;">
                    </div>
                </div>

                <!-- موضوع -->
                <div>
                    <label class="block text-sm text-slate-600 mb-2 font-bold">موضوع شکایت *</label>
                    <select required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all cursor-pointer">
                        <option value="">انتخاب کنید...</option>
                        <option>کیفیت قطعات</option>
                        <option>تاخیر در ارسال</option>
                        <option>رفتار پرسنل</option>
                        <option>عدم تطابق کالا با سفارش</option>
                        <option>مشکل در گارانتی</option>
                        <option>سایر موارد</option>
                    </select>
                </div>

                <!-- توضیحات -->
                <div>
                    <label class="block text-sm text-slate-600 mb-2 font-bold">توضیحات شکایت *</label>
                    <textarea required rows="5" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all resize-y" placeholder="لطفاً جزئیات کامل شکایت خود را بنویسید..."></textarea>
                </div>

                <!-- آپلود مستندات -->
                <div>
                    <label class="block text-sm text-slate-600 mb-2 font-bold">آپلود مستندات (اختیاری)</label>
                    <div class="relative border-2 border-dashed border-slate-300 rounded-2xl p-8 text-center hover:border-blue-500 hover:bg-blue-50/50 transition-all cursor-pointer">
                        <input type="file" id="fileUpload" multiple accept="image/*,.pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                        <div class="pointer-events-none">
                            <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <p class="text-sm font-bold text-slate-700 mb-1">برای آپلود فایل کلیک کنید یا فایل را اینجا بکشید</p>
                            <p class="text-xs text-slate-500">فرمت‌های مجاز: JPG, PNG, PDF (حداکثر ۵ مگابایت)</p>
                        </div>
                    </div>
                    <!-- پیش‌نمایش فایل‌های آپلود شده -->
                    <div id="filePreview" class="mt-3 flex flex-wrap gap-2 hidden"></div>
                </div>

                <!-- دکمه‌ها -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5">
                        ارسال شکایت
                    </button>
                    <button type="button" onclick="document.getElementById('complaintForm').reset()" class="flex-1 bg-slate-100 text-slate-700 hover:bg-slate-200 font-black py-4 rounded-xl transition-all">
                        انصراف
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- مودال موفقیت -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="successModal">
        <div class="bg-white rounded-3xl max-w-md w-full p-8 text-center relative shadow-2xl">
            <div class="text-7xl mb-4">✅</div>
            <h2 class="text-2xl font-black text-slate-800 mb-2">شکایت شما ثبت شد!</h2>
            <p class="text-slate-500 font-medium leading-relaxed mb-6">کارشناسان ما در اسرع وقت شکایت شما را بررسی و با شما تماس خواهند گرفت.</p>
            <button onclick="closeModal()" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 rounded-xl shadow-lg transition-all">بستن</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function submitComplaint(e) {
            e.preventDefault();
            document.getElementById('successModal').classList.remove('hidden');
            document.getElementById('successModal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
            document.getElementById('successModal').classList.remove('flex');
            document.body.style.overflow = '';
        }

        // نمایش نام فایل‌های انتخاب شده (پیش‌نمایش ساده)
        document.getElementById('fileUpload').addEventListener('change', function(e) {
            const preview = document.getElementById('filePreview');
            preview.innerHTML = '';
            const files = Array.from(e.target.files);

            if (files.length > 0) {
                preview.classList.remove('hidden');
                files.forEach(file => {
                    const div = document.createElement('div');
                    div.className = 'bg-slate-100 text-slate-700 text-xs px-3 py-1.5 rounded-lg font-semibold flex items-center gap-1 border border-slate-200';
                    div.innerHTML = `
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                    ${file.name}
                `;
                    preview.appendChild(div);
                });
            } else {
                preview.classList.add('hidden');
            }
        });
    </script>
@endpush
