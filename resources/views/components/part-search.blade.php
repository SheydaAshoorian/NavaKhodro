<div x-data="partSearch()" class="max-w-5xl mx-auto my-12 px-4">

    <!-- بخش فرم جستجو -->
    <div class="bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden">

        <!-- هدر بنر کوچک بالای فرم -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 p-8 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20"></div>
            <h2 class="text-white text-2xl font-black relative z-10">جستجوی قطعات خودرو</h2>
            <p class="text-blue-100 text-sm mt-2 relative z-10">مدل خودرو، نام قطعه یا کد فنی را وارد کنید</p>
        </div>

        <!-- بدنه فرم -->
        <div class="p-6 md:p-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- برند -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">برند خودرو *</label>
                    <select x-model="form.brand" @change="updateModels()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
                        <option value="">انتخاب کنید...</option>
                        <template x-for="brand in brands" :key="brand">
                            <option :value="brand" x-text="brand"></option>
                        </template>
                    </select>
                </div>

                <!-- مدل -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">مدل خودرو *</label>
                    <select x-model="form.model" :disabled="!form.brand" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition disabled:opacity-50 disabled:cursor-not-allowed">
                        <option value="">ابتدا برند را انتخاب کنید</option>
                        <template x-for="model in availableModels" :key="model">
                            <option :value="model" x-text="model"></option>
                        </template>
                    </select>
                </div>

                <!-- نام قطعه -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">نام قطعه (اختیاری)</label>
                    <input type="text" x-model="form.name" placeholder="مثال: چراغ جلو" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
                </div>

                <!-- کد فنی -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">کد فنی (اختیاری)</label>
                    <input type="text" x-model="form.code" placeholder="مثال: 63117289123" dir="ltr" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-left">
                </div>

                <!-- سال ساخت -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">سال ساخت (اختیاری)</label>
                    <select x-model="form.year" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
                        <option value="">همه سال‌ها</option>
                        <template x-for="year in [1404, 1403, 1402, 1401, 1400]" :key="year">
                            <option :value="year" x-text="year"></option>
                        </template>
                    </select>
                </div>

                <!-- دکمه جستجو -->
                <div class="flex items-end">
                    <button @click="searchParts()" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 px-6 rounded-xl transition shadow-lg shadow-blue-500/30 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        جستجو
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- بخش نتایج جستجو (داینامیک) -->
    <div x-show="searched" x-transition.opacity.duration.500ms class="mt-10">

        <!-- هدر نتایج -->
        <div class="flex flex-col md:flex-row justify-between items-center bg-white p-4 rounded-2xl border border-slate-100 shadow-sm mb-6">
            <div class="text-slate-600 font-bold text-sm mb-4 md:mb-0">
                <span class="text-blue-600 text-lg" x-text="results.length"></span> قطعه یافت شد
            </div>
            <div class="flex items-center gap-2 text-sm">
                <span class="text-slate-500">مرتب‌سازی:</span>
                <select x-model="sortBy" @change="sortResults()" class="bg-slate-50 border border-slate-200 rounded-lg px-3 py-1.5 font-bold text-slate-700 focus:outline-none focus:border-blue-500">
                    <option value="cheapest">ارزان‌ترین</option>
                    <option value="expensive">گران‌ترین</option>
                    <option value="oem">اصلی (OEM) اول</option>
                </select>
            </div>
        </div>

        <!-- حالت خالی -->
        <div x-show="results.length === 0" class="text-center py-20 bg-white rounded-3xl border border-dashed border-slate-300">
            <div class="text-6xl mb-4 opacity-50">📭</div>
            <h3 class="text-xl font-black text-slate-800 mb-2">قطعه‌ای با این مشخصات پیدا نشد</h3>
            <p class="text-slate-500">لطفاً فیلترها را تغییر دهید یا با پشتیبانی تماس بگیرید.</p>
        </div>

        <!-- گرید نتایج -->
        <div x-show="results.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <template x-for="part in sortedResults" :key="part.id">
                <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <!-- تصویر -->
                    <div class="h-48 bg-slate-100 relative flex items-center justify-center text-6xl group-hover:bg-slate-200 transition-colors">
                        <span x-text="part.icon"></span>
                        <!-- بج موجودی -->
                        <span class="absolute top-4 right-4 text-xs font-black px-3 py-1 rounded-full"
                              :class="part.stock ? 'bg-green-500 text-white' : 'bg-slate-400 text-white'"
                              x-text="part.stock ? 'موجود' : 'ناموجود'">
                        </span>
                    </div>
                    <!-- اطلاعات -->
                    <div class="p-6">
                        <div class="text-blue-600 text-xs font-bold mb-1" x-text="part.supplier"></div>
                        <h3 class="text-lg font-black text-slate-800 mb-2" x-text="part.name"></h3>
                        <div class="text-xs text-slate-500 mb-3 font-mono" dir="ltr" x-text="'کد فنی: ' + part.code"></div>
                        <div class="text-sm text-slate-500 mb-4" x-text="part.brand + ' · ' + part.model + ' · ' + part.year"></div>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-100 mt-auto">
                            <div class="text-blue-600 font-black" x-text="part.price.toLocaleString('fa-IR') + ' تومان'"></div>
                            <button @click="openModal(part)" :disabled="!part.stock" class="bg-slate-100 hover:bg-blue-600 hover:text-white text-slate-700 text-sm font-bold py-2 px-4 rounded-xl transition disabled:opacity-50 disabled:cursor-not-allowed">
                                ثبت درخواست
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- مودال ثبت درخواست (Alpine.js) -->
    <div x-show="modalOpen" style="display: none;" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/70 backdrop-blur-sm">
        <div @click.away="modalOpen = false" class="bg-white rounded-3xl shadow-2xl max-w-md w-full overflow-hidden transform transition-all">

            <!-- هدر مودال -->
            <div class="bg-slate-50 p-6 border-b border-slate-100 flex justify-between items-center relative">
                <div>
                    <h3 class="text-lg font-black text-slate-800">ثبت درخواست خرید</h3>
                    <p class="text-sm text-slate-500 mt-1">اطلاعات خود را وارد کنید</p>
                </div>
                <button @click="modalOpen = false" class="text-slate-400 hover:text-slate-700 transition absolute left-6 top-6 text-2xl">&times;</button>
            </div>

            <!-- بدنه مودال -->
            <div class="p-6">
                <!-- اطلاعات قطعه انتخاب شده -->
                <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 mb-6">
                    <div class="font-bold text-slate-800" x-text="selectedPart ? selectedPart.name : ''"></div>
                    <div class="text-xs text-slate-500 mt-1" x-text="selectedPart ? selectedPart.supplier + ' - کد: ' + selectedPart.code : ''"></div>
                    <div class="text-blue-600 font-black mt-2" x-text="selectedPart ? selectedPart.price.toLocaleString('fa-IR') + ' تومان' : ''"></div>
                </div>

                <form @submit.prevent="submitRequest()" class="space-y-4">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">نام و نام خانوادگی *</label>
                        <input type="text" x-model="requestForm.name" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">شماره تماس *</label>
                        <input type="tel" x-model="requestForm.phone" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 text-left" dir="ltr">
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3.5 rounded-xl transition shadow-lg shadow-blue-500/30">ارسال درخواست</button>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- اسکریپت Alpine.js -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('partSearch', () => ({
            // داده‌های اولیه
            brands: ['BMW', 'مدیران خودرو', 'کرمان موتور', 'ایرتویا', 'هیوندای', 'بنز'],
            modelsMap: {
                'BMW': ['320i', 'X3', 'X5', '520i'],
                'مدیران خودرو': ['Tiggo 8', 'Tiggo 7', 'X22'],
                'کرمان موتور': ['K7', 'K5', 'J4'],
                'ایرتویا': ['Corolla', 'Camry', 'RAV4'],
                'هیوندای': ['Tucson', 'Santa Fe', 'Elantra'],
                'بنز': ['C200', 'E250', 'S500']
            },
            availableModels: [],

            // داده‌های نمونه (در نسخه واقعی از دیتابیس می‌آید)
            allParts: [
                { id:1, name:'چراغ جلو سمت راست', brand:'BMW', model:'320i', year:1403, code:'63117289123', price:25000000, supplier:'BMW Original', stock:true, icon:'💡' },
                { id:2, name:'چراغ جلو سمت راست', brand:'BMW', model:'320i', year:1403, code:'63117289123', price:18500000, supplier:'Bosch', stock:true, icon:'💡' },
                { id:3, name:'لنت ترمز جلو', brand:'BMW', model:'320i', year:1403, code:'34116858671', price:4500000, supplier:'BMW Original', stock:true, icon:'🛞' },
                { id:4, name:'فیلتر روغن', brand:'BMW', model:'320i', year:1403, code:'11427508969', price:850000, supplier:'BMW Original', stock:true, icon:'⚙️' },
                { id:5, name:'چراغ جلو', brand:'ایرتویا', model:'Corolla', year:1402, code:'8113012A90', price:18500000, supplier:'Toyota Original', stock:true, icon:'💡' },
                { id:6, name:'دیسک ترمز', brand:'هیوندای', model:'Tucson', year:1401, code:'517123K100', price:6800000, supplier:'Hyundai Original', stock:true, icon:'🛞' },
                { id:7, name:'فیلتر هوا', brand:'مدیران خودرو', model:'Tiggo 8', year:1402, code:'T1E-3707110', price:1200000, supplier:'Chery Original', stock:true, icon:'🌬️' }
            ],
            results: [],
            sortedResults: [],

            // فرم‌ها
            form: { brand: '', model: '', name: '', code: '', year: '' },
            sortBy: 'cheapest',
            searched: false,

            // مودال
            modalOpen: false,
            selectedPart: null,
            requestForm: { name: '', phone: '' },

            // متدها
            updateModels() {
                this.form.model = '';
                this.availableModels = this.modelsMap[this.form.brand] || [];
            },

            searchParts() {
                if (!this.form.brand || !this.form.model) {
                    alert('لطفاً برند و مدل خودرو را انتخاب کنید.');
                    return;
                }

                this.results = this.allParts.filter(p => {
                    if (p.brand !== this.form.brand) return false;
                    if (p.model !== this.form.model) return false;
                    if (this.form.year && p.year !== parseInt(this.form.year)) return false;
                    if (this.form.name && !p.name.includes(this.form.name)) return false;
                    if (this.form.code && !p.code.includes(this.form.code)) return false;
                    return true;
                });

                this.searched = true;
                this.sortResults();
            },

            sortResults() {
                let sorted = [...this.results];
                if (this.sortBy === 'cheapest') sorted.sort((a,b) => a.price - b.price);
                if (this.sortBy === 'expensive') sorted.sort((a,b) => b.price - a.price);
                if (this.sortBy === 'oem') sorted.sort((a,b) => {
                    const aO = a.supplier.includes('Original') ? 1 : 0;
                    const bO = b.supplier.includes('Original') ? 1 : 0;
                    return bO - aO;
                });
                this.sortedResults = sorted;
            },

            openModal(part) {
                this.selectedPart = part;
                this.modalOpen = true;
                this.requestForm = { name: '', phone: '' };
            },

            submitRequest() {
                alert('درخواست شما با موفقیت ثبت شد.');
                this.modalOpen = false;
            }
        }));
    });
</script>
