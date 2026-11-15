@extends('layouts.app')

@section('title', 'جستجوی قطعه | نواسرویس')

@section('content')
    <!-- بنر (Hero) -->
    <x-hero />

    <!-- محتوای اصلی -->
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20 pb-20">

        <!-- باکس راهنما (اولیه) -->
        <div id="initialState" class="bg-white rounded-3xl p-10 text-center border border-dashed border-slate-300 shadow-sm mb-8">
            <div class="text-5xl mb-4">🔍</div>
            <h3 class="text-xl font-black text-slate-900 mb-2">جستجو را شروع کنید</h3>
            <p class="text-slate-500 font-medium">برند، مدل و سال خودرو را انتخاب کنید تا قطعات موجود نمایش داده شوند.</p>
        </div>

        <!-- فرم جستجو -->
        <div class="bg-white rounded-3xl p-6 md:p-8 shadow-xl border border-slate-100 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="flex flex-col">
                    <label class="text-sm text-slate-600 mb-2 font-bold">برند خودرو *</label>
                    <select id="brandSelect" onchange="onBrandChange()" class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 font-semibold outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100 transition-all">
                        <option value="">انتخاب کنید...</option>
                        <option value="BMW">BMW</option>
                        <option value="مدیران خودرو">مدیران خودرو</option>
                        <option value="کرمان موتور">کرمان موتور</option>
                        <option value="ایرتویا">ایرتویا</option>
                        <option value="هیوندای">هیوندای</option>
                        <option value="بنز">بنز</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="text-sm text-slate-600 mb-2 font-bold">مدل خودرو *</label>
                    <select id="modelSelect" disabled class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 font-semibold outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100 transition-all disabled:opacity-50 disabled:cursor-not-allowed">
                        <option value="">اول برند را انتخاب کنید</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="text-sm text-slate-600 mb-2 font-bold">سال ساخت</label>
                    <select id="yearSelect" class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 font-semibold outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100 transition-all">
                        <option value="">همه سال‌ها</option>
                        <option value="1404">۱۴۰۴</option>
                        <option value="1403">۱۴۰۳</option>
                        <option value="1402">۱۴۰۲</option>
                        <option value="1401">۱۴۰۱</option>
                        <option value="1400">۱۴۰۰</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="text-sm text-slate-600 mb-2 font-bold">نام قطعه</label>
                    <input type="text" id="partNameInput" placeholder="مثال: چراغ جلو" class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 font-semibold outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100 transition-all">
                </div>
                <div class="flex flex-col md:col-span-2">
                    <label class="text-sm text-slate-600 mb-2 font-bold">کد فنی (اختیاری)</label>
                    <input type="text" id="partCodeInput" placeholder="مثال: 63117289123" class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 font-semibold outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-100 transition-all" style="direction:ltr; text-align:left;">
                </div>
                <button onclick="doSearch()" class="md:col-span-2 mt-2 bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    جستجوی قطعه
                </button>
            </div>
        </div>

        <!-- نتایج -->
        <div class="mt-8">
            <!-- حالت خالی -->
            <div id="emptyState" class="hidden bg-white rounded-3xl p-12 text-center border border-dashed border-slate-300 shadow-sm">
                <div class="text-5xl mb-4">📭</div>
                <h3 class="text-xl font-black text-slate-900 mb-2">قطعه‌ای با این مشخصات پیدا نشد</h3>
                <p class="text-slate-500 font-medium">فیلترها را تغییر دهید یا با پشتیبانی تماس بگیرید.</p>
            </div>

            <!-- لیست نتایج -->
            <div id="resultsArea" class="hidden">
                <div class="bg-white rounded-2xl p-4 flex flex-col sm:flex-row justify-between items-center gap-4 mb-6 border border-slate-100 shadow-sm">
                    <div class="text-slate-600 font-semibold"><strong id="resultCount" class="text-blue-600 font-black text-lg">0</strong> قطعه یافت شد</div>
                    <select id="sortSelect" onchange="applySort()" class="bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 text-sm font-semibold outline-none focus:border-blue-500 cursor-pointer">
                        <option value="cheapest">ارزان‌ترین</option>
                        <option value="expensive">گران‌ترین</option>
                        <option value="oem">اصلی (OEM) اول</option>
                    </select>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="partsGrid"></div>
            </div>
        </div>
    </div>

    <!-- مودال ثبت درخواست -->
    <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[3000] hidden items-center justify-center p-4" id="requestModal">
        <div class="bg-white rounded-3xl max-w-lg w-full max-h-[90vh] overflow-y-auto p-8 relative shadow-2xl">
            <button class="absolute top-4 left-4 text-slate-400 hover:text-slate-800 text-3xl leading-none" onclick="closeModal()">×</button>

            <div id="modalForm">
                <h2 class="text-2xl font-black text-blue-600 mb-2">ثبت درخواست خرید قطعه</h2>
                <p class="text-slate-500 font-semibold mb-6">اطلاعات خود را وارد کنید تا کارشناسان با شما تماس بگیرند.</p>

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-4 mb-6">
                    <div class="font-bold text-slate-800 mb-1" id="spName">—</div>
                    <div class="text-sm text-slate-500 font-medium mb-2" id="spMeta">—</div>
                    <div class="text-blue-600 font-black" id="spPrice">—</div>
                </div>

                <form onsubmit="submitRequest(event)">
                    <div class="mb-4">
                        <label class="block text-sm text-slate-600 mb-2 font-bold">نام و نام خانوادگی *</label>
                        <input type="text" id="reqName" placeholder="مثال: علی رضایی" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm text-slate-600 mb-2 font-bold">شماره تماس *</label>
                        <input type="tel" id="reqPhone" placeholder="۰۹۱۲۳۴۵۶۷۸۹" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all">
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm text-slate-600 mb-2 font-bold">توضیحات (اختیاری)</label>
                        <textarea id="reqNote" placeholder="مثلاً: ترجیح می‌دهم برند اصلی باشد..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-semibold outline-none focus:border-blue-500 focus:bg-white transition-all resize-y min-h-[80px]"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-0.5">
                        ارسال درخواست ←
                    </button>
                </form>
            </div>

            <div class="hidden text-center py-6" id="successMsg">
                <div class="text-6xl mb-4">✅</div>
                <h3 class="text-2xl font-black text-blue-600 mb-2">درخواست شما ثبت شد</h3>
                <p class="text-slate-500 font-medium leading-relaxed">کارشناسان نواسرویس در کمتر از ۲۴ ساعت با شما تماس می‌گیرند.</p>
                <button class="mt-8 w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-xl shadow-lg shadow-blue-500/30 transition-all" onclick="closeModal()">بستن</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        /* کدهای جستجوی قطعه */
        const brandModels = {
            'BMW': ['320i', 'X3', 'X5', '520i'],
            'مدیران خودرو': ['Tiggo 8', 'Tiggo 7', 'X22'],
            'کرمان موتور': ['K7', 'K5', 'J4'],
            'ایرتویا': ['Corolla', 'Camry', 'RAV4'],
            'هیوندای': ['Tucson', 'Santa Fe', 'Elantra'],
            'بنز': ['C200', 'E250', 'S500']
        };

        const allParts = [
            { name:'چراغ جلو سمت راست', brand:'BMW', model:'320i', year:1403, code:'63117289123', price:25000000, supplier:'BMW Original', stock:true, icon:'💡' },
            { name:'چراغ جلو سمت راست', brand:'BMW', model:'320i', year:1403, code:'63117289123', price:18500000, supplier:'Bosch', stock:true, icon:'💡' },
            { name:'چراغ جلو سمت راست', brand:'BMW', model:'320i', year:1403, code:'63117289123', price:12000000, supplier:'Hella', stock:true, icon:'💡' },
            { name:'لنت ترمز جلو', brand:'BMW', model:'320i', year:1403, code:'34116858671', price:4500000, supplier:'BMW Original', stock:true, icon:'🛞' },
            { name:'لنت ترمز جلو', brand:'BMW', model:'320i', year:1403, code:'34116858671', price:2800000, supplier:'ATE', stock:true, icon:'🛞' },
            { name:'فیلتر روغن', brand:'BMW', model:'320i', year:1403, code:'11427508969', price:850000, supplier:'BMW Original', stock:true, icon:'⚙️' },
            { name:'فیلتر روغن', brand:'BMW', model:'320i', year:1403, code:'11427508969', price:420000, supplier:'Mann-Filter', stock:true, icon:'⚙️' },
            { name:'چراغ جلو', brand:'ایرتویا', model:'Corolla', year:1402, code:'8113012A90', price:18500000, supplier:'Toyota Original', stock:true, icon:'💡' },
            { name:'چراغ جلو', brand:'ایرتویا', model:'Corolla', year:1402, code:'8113012A90', price:12000000, supplier:'TYC', stock:true, icon:'💡' },
            { name:'دیسک ترمز', brand:'هیوندای', model:'Tucson', year:1401, code:'517123K100', price:6800000, supplier:'Hyundai Original', stock:true, icon:'🛞' },
            { name:'دیسک ترمز', brand:'هیوندای', model:'Tucson', year:1401, code:'517123K100', price:4200000, supplier:'Brembo', stock:true, icon:'🛞' },
            { name:'فیلتر هوا', brand:'مدیران خودرو', model:'Tiggo 8', year:1402, code:'T1E-3707110', price:1200000, supplier:'Chery Original', stock:true, icon:'🌬️' },
            { name:'فیلتر هوا', brand:'مدیران خودرو', model:'Tiggo 8', year:1402, code:'T1E-3707110', price:680000, supplier:'Mann-Filter', stock:true, icon:'🌬️' }
        ];

        let currentResults = [];

        function onBrandChange() {
            const brand = document.getElementById('brandSelect').value;
            const modelSelect = document.getElementById('modelSelect');
            modelSelect.innerHTML = '';
            if (!brand) {
                modelSelect.innerHTML = '<option value="">اول برند را انتخاب کنید</option>';
                modelSelect.disabled = true;
                return;
            }
            modelSelect.disabled = false;
            modelSelect.innerHTML = '<option value="">انتخاب کنید...</option>';
            (brandModels[brand] || []).forEach(m => {
                const opt = document.createElement('option');
                opt.value = m;
                opt.textContent = m;
                modelSelect.appendChild(opt);
            });
        }

        function doSearch() {
            const brand = document.getElementById('brandSelect').value.trim();
            const model = document.getElementById('modelSelect').value.trim();
            const year = document.getElementById('yearSelect').value;
            const name = document.getElementById('partNameInput').value.trim().toLowerCase();
            const code = document.getElementById('partCodeInput').value.trim().toLowerCase().replace(/\s+/g,'');

            if (!brand || !model) {
                alert('لطفاً ابتدا برند و مدل خودرو را انتخاب کنید.');
                return;
            }

            currentResults = allParts.filter(p => {
                if (p.brand !== brand) return false;
                if (p.model !== model) return false;
                if (year && p.year !== parseInt(year)) return false;
                if (name && !p.name.toLowerCase().includes(name)) return false;
                if (code && !p.code.toLowerCase().replace(/\s+/g,'').includes(code)) return false;
                return true;
            });

            renderResults();
        }

        function renderResults() {
            document.getElementById('initialState').classList.add('hidden');
            const empty = document.getElementById('emptyState');
            const area = document.getElementById('resultsArea');

            if (currentResults.length === 0) {
                empty.classList.remove('hidden');
                area.classList.add('hidden');
                return;
            }
            empty.classList.add('hidden');
            area.classList.remove('hidden');
            document.getElementById('resultCount').textContent = currentResults.length;
            applySort();
        }

        function applySort() {
            const sortBy = document.getElementById('sortSelect').value;
            const sorted = [...currentResults].sort((a, b) => {
                if (sortBy === 'expensive') return b.price - a.price;
                if (sortBy === 'oem') {
                    const aO = a.supplier.includes('Original') ? 1 : 0;
                    const bO = b.supplier.includes('Original') ? 1 : 0;
                    return bO - aO;
                }
                return a.price - b.price;
            });

            const grid = document.getElementById('partsGrid');
            grid.innerHTML = '';
            sorted.forEach(part => {
                const card = document.createElement('div');
                card.className = 'bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group';
                card.innerHTML = `
      <div class="h-40 bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center text-6xl relative border-b border-slate-100">
        ${part.icon}
        <span class="absolute top-3 left-3 ${part.stock ? 'bg-emerald-500' : 'bg-slate-400'} text-white text-xs font-bold px-3 py-1 rounded-full shadow-sm">${part.stock ? 'موجود' : 'ناموجود'}</span>
      </div>
      <div class="p-5 flex-1 flex flex-col">
        <div class="text-xs text-blue-600 font-black mb-1 tracking-wider uppercase">${part.supplier}</div>
        <h3 class="text-lg font-black text-slate-800 mb-2 leading-snug group-hover:text-blue-600 transition-colors">${part.name}</h3>
        <div class="text-xs text-slate-400 font-mono mb-2 text-right dir-ltr" style="direction:ltr;">کد فنی: ${part.code}</div>
        <div class="text-sm text-slate-500 font-semibold mb-4">${part.brand} · ${part.model} · ${part.year}</div>

        <div class="mt-auto pt-4 border-t border-slate-100 flex items-center justify-between mb-4">
          <span class="text-blue-600 font-black">${part.price.toLocaleString('fa-IR')} تومان</span>
        </div>

        <button class="w-full ${part.stock ? 'bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white' : 'bg-slate-100 text-slate-400 cursor-not-allowed'} font-bold py-3 rounded-xl transition-all duration-300" ${!part.stock ? 'disabled' : ''} onclick="openRequest(${allParts.indexOf(part)})">
          ${part.stock ? 'ثبت درخواست خرید' : 'ناموجود'}
        </button>
      </div>
    `;
                grid.appendChild(card);
            });
        }

        function openRequest(idx) {
            const p = allParts[idx];
            document.getElementById('spName').textContent = p.name;
            document.getElementById('spMeta').textContent = `${p.supplier} · کد: ${p.code}`;
            document.getElementById('spPrice').textContent = p.price.toLocaleString('fa-IR') + ' تومان';
            document.getElementById('modalForm').classList.remove('hidden');
            document.getElementById('successMsg').classList.add('hidden');
            document.getElementById('requestModal').classList.remove('hidden');
            document.getElementById('requestModal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('requestModal').classList.add('hidden');
            document.getElementById('requestModal').classList.remove('flex');
            document.body.style.overflow = '';
        }

        function submitRequest(e) {
            e.preventDefault();
            document.getElementById('modalForm').classList.add('hidden');
            document.getElementById('successMsg').classList.remove('hidden');
        }

        document.getElementById('requestModal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });
    </script>
@endpush
