<div>
    <!-- Hero Banner -->
    <div class="w-full bg-gradient-to-r from-blue-500 to-blue-400 py-8 text-center">
        <h1 class="text-2xl md:text-3xl font-bold text-white">Big Picture Diklat 3 in 1 Tahun 2026</h1>
    </div>

    <!-- Filter & Tabs Section -->
    <div class="max-w-[1280px] mx-auto px-6 py-8">

        <!-- Filter Row -->
        <div class="flex items-center gap-4 mb-8">
            <span class="material-symbols-outlined text-on-surface text-2xl">calendar_month</span>
            <h2 class="text-xl font-bold text-on-surface mr-2">Tahun Diklat</h2>
            <div class="relative">
                <select id="tahun-select" class="appearance-none bg-white border border-outline-variant px-4 py-2 pr-8 rounded text-sm font-medium focus:ring-2 focus:ring-primary focus:outline-none">
                    <option>2026</option><option>2025</option><option>2024</option>
                </select>
                <span class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-sm">expand_more</span>
            </div>
            <div class="relative">
                <select id="penyelenggara-select" class="appearance-none bg-white border border-outline-variant px-4 py-2 pr-8 rounded text-sm font-medium focus:ring-2 focus:ring-primary focus:outline-none">
                    <option>Semua Penyelenggara</option><option>BDI Jakarta</option><option>BDI Surabaya</option><option>BDI Makassar</option>
                </select>
                <span class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-sm">expand_more</span>
            </div>
        </div>

        <!-- Tab Navigation -->
        <div class="flex flex-wrap gap-0 mb-8 border-b border-outline-variant">
            <button wire:click="$set('tab', 'sebaran')" class="px-5 py-3 text-sm font-medium border-b-2 {{ $tab === 'sebaran' ? 'border-primary text-primary' : 'border-transparent text-gray-500 hover:text-primary' }}">Sebaran Lulusan</button>
            <button wire:click="$set('tab', 'penyelenggara')" class="px-5 py-3 text-sm font-medium border-b-2 {{ $tab === 'penyelenggara' ? 'border-primary text-primary' : 'border-transparent text-gray-500 hover:text-primary' }}">Penyelenggara Diklat</button>
            <button wire:click="$set('tab', 'kompetensi')" class="px-5 py-3 text-sm font-medium border-b-2 {{ $tab === 'kompetensi' ? 'border-primary text-primary' : 'border-transparent text-gray-500 hover:text-primary' }}">Kompetensi</button>
            <button wire:click="$set('tab', 'skema')" class="px-5 py-3 text-sm font-medium border-b-2 {{ $tab === 'skema' ? 'border-primary text-primary' : 'border-transparent text-gray-500 hover:text-primary' }}">Skema</button>
            <button wire:click="$set('tab', 'penempatan')" class="px-5 py-3 text-sm font-medium border-b-2 {{ $tab === 'penempatan' ? 'border-primary text-primary' : 'border-transparent text-gray-500 hover:text-primary' }}">Penempatan Kerja</button>
        </div>

        <!-- Tab: Sebaran Lulusan -->
        @if($tab === 'sebaran')
        <div class="animate-fadeIn">
            <h3 class="text-base font-semibold text-on-surface mb-4">Sebaran Per Provinsi</h3>
            <div class="bg-white border border-outline-variant rounded-lg p-4 flex items-center justify-center min-h-[400px]">
                <svg viewBox="0 0 900 420" class="w-full max-w-3xl" style="font-family:inherit">
                    <!-- Simplified Indonesia map representation -->
                    <!-- Sumatera -->
                    <ellipse cx="160" cy="200" rx="70" ry="110" fill="#c7c7f7" stroke="#fff" stroke-width="1.5" opacity="0.8"/>
                    <text x="155" y="160" font-size="9" fill="#333" text-anchor="middle">Aceh</text>
                    <ellipse cx="175" cy="230" rx="55" ry="55" fill="#7c7ce8" stroke="#fff" stroke-width="1.5" opacity="0.9"/>
                    <text x="175" y="233" font-size="9" fill="#fff" text-anchor="middle">Sumatera Utara</text>
                    <ellipse cx="195" cy="295" rx="35" ry="25" fill="#c7c7f7" stroke="#fff" stroke-width="1.5"/>
                    <text x="195" y="298" font-size="8" fill="#333" text-anchor="middle">Riau</text>
                    <ellipse cx="170" cy="330" rx="32" ry="20" fill="#c7c7f7" stroke="#fff" stroke-width="1.5"/>
                    <text x="170" y="334" font-size="8" fill="#333" text-anchor="middle">Sumatera Barat</text>
                    <text x="155" y="360" font-size="8" fill="#555">Jambi</text>
                    <text x="155" y="375" font-size="8" fill="#555">Sumatera Selatan</text>
                    <text x="150" y="390" font-size="8" fill="#555">Bengkulu</text>
                    <text x="185" y="400" font-size="8" fill="#555">Lampung</text>
                    <!-- Kepulauan Riau -->
                    <text x="285" y="270" font-size="8" fill="#555">Kepulauan Riau</text>
                    <!-- Jawa -->
                    <ellipse cx="285" cy="375" rx="65" ry="20" fill="#c7c7f7" stroke="#fff" stroke-width="1.5"/>
                    <text x="265" y="370" font-size="9" fill="#333">Jakarta Raya</text>
                    <ellipse cx="355" cy="385" rx="40" ry="15" fill="#7c7ce8" stroke="#fff" stroke-width="1.5"/>
                    <text x="355" y="389" font-size="8" fill="#fff" text-anchor="middle">Jawa Barat</text>
                    <!-- Kalimantan -->
                    <ellipse cx="470" cy="260" rx="70" ry="80" fill="#c7c7f7" stroke="#fff" stroke-width="1.5"/>
                    <text x="430" y="220" font-size="8" fill="#555">Kalimantan Barat</text>
                    <text x="450" y="250" font-size="8" fill="#555">Kalimantan Tengah</text>
                    <text x="440" y="290" font-size="8" fill="#555">Kalimantan Selatan</text>
                    <text x="490" y="200" font-size="8" fill="#555">Kalimantan Utara</text>
                    <text x="490" y="230" font-size="8" fill="#555">Kalimantan Timur</text>
                    <!-- Sulawesi -->
                    <ellipse cx="620" cy="260" rx="40" ry="70" fill="#c7c7f7" stroke="#fff" stroke-width="1.5"/>
                    <text x="598" y="220" font-size="8" fill="#555">Sulawesi Utara</text>
                    <text x="590" y="245" font-size="8" fill="#555">Gorontalo</text>
                    <text x="595" y="270" font-size="8" fill="#555">Sulawesi Tengah</text>
                    <text x="595" y="295" font-size="8" fill="#555">Sulawesi Barat</text>
                    <text x="600" y="315" font-size="8" fill="#555">Sulawesi Selatan</text>
                    <!-- Maluku & Papua -->
                    <text x="710" y="200" font-size="8" fill="#555">Maluku Utara</text>
                    <text x="720" y="300" font-size="8" fill="#555">Maluku</text>
                    <text x="780" y="240" font-size="8" fill="#555">Papua Barat</text>
                    <ellipse cx="850" cy="280" rx="40" ry="50" fill="#c7c7f7" stroke="#fff" stroke-width="1.5"/>
                    <text x="850" y="283" font-size="9" fill="#333" text-anchor="middle">Papua</text>
                </svg>
            </div>
        </div>
        @endif

        <!-- Tab: Penyelenggara Diklat -->
        @if($tab === 'penyelenggara')
        <div class="animate-fadeIn">
            <h3 class="text-base font-semibold text-on-surface mb-4">Realisasi Diklat per Penyelenggara Tahun 2026</h3>
            <div class="overflow-x-auto bg-white border border-outline-variant rounded-lg">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">#</th>
                            <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">PENYELENGGARA</th>
                            <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">REALISASI</th>
                            <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">%</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        <tr class="hover:bg-gray-50"><td class="px-4 py-3">1</td><td class="px-4 py-3">BDI Jakarta</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                        <tr class="hover:bg-gray-50"><td class="px-4 py-3">2</td><td class="px-4 py-3">BDI Surabaya</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                        <tr class="hover:bg-gray-50"><td class="px-4 py-3">3</td><td class="px-4 py-3">BDI Makassar</td><td class="px-4 py-3">20</td><td class="px-4 py-3">34%</td></tr>
                        <tr class="hover:bg-gray-50"><td class="px-4 py-3">4</td><td class="px-4 py-3">BDI Medan</td><td class="px-4 py-3">39</td><td class="px-4 py-3">66%</td></tr>
                        <tr class="bg-gray-50 font-semibold"><td class="px-4 py-3"></td><td class="px-4 py-3">Total</td><td class="px-4 py-3">59</td><td class="px-4 py-3">100%</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <!-- Tab: Kompetensi -->
        @if($tab === 'kompetensi')
        <div class="animate-fadeIn">
            <h3 class="text-base font-semibold text-on-surface mb-4">Realisasi Diklat per Kompetensi Tahun 2026</h3>
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Pie chart SVG -->
                <div class="bg-white border border-outline-variant rounded-lg p-6 flex flex-col items-center justify-center min-w-[300px]">
                    <svg viewBox="0 0 200 200" class="w-48 h-48">
                        <path d="M100,100 L100,10 A90,90 0 0,1 176,145 Z" fill="#6b7de8"/>
                        <path d="M100,100 L176,145 A90,90 0 1,1 100,10 Z" fill="#f5a623"/>
                    </svg>
                    <div class="flex flex-wrap gap-3 mt-4 justify-center text-xs">
                        <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-[#6b7de8] inline-block"></span>Pengolahan Hasil Laut</span>
                        <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-[#f5a623] inline-block"></span>Pengolahan Produk Agro</span>
                    </div>
                </div>
                <!-- Table -->
                <div class="flex-1 overflow-x-auto bg-white border border-outline-variant rounded-lg">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">#</th>
                                <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">KOMPETENSI</th>
                                <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">REALISASI</th>
                                <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">%</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">1</td><td class="px-4 py-3">Alas Kaki</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">2</td><td class="px-4 py-3">Internet of Things</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">3</td><td class="px-4 py-3">Pengelasan</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">4</td><td class="px-4 py-3">Pengolahan Hasil Laut</td><td class="px-4 py-3">20</td><td class="px-4 py-3">34%</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">5</td><td class="px-4 py-3">Pengolahan Produk Agro</td><td class="px-4 py-3">39</td><td class="px-4 py-3">66%</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">6</td><td class="px-4 py-3">TPT</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                            <tr class="bg-gray-50 font-semibold"><td class="px-4 py-3"></td><td class="px-4 py-3">Total</td><td class="px-4 py-3">59</td><td class="px-4 py-3">100%</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

        <!-- Tab: Skema -->
        @if($tab === 'skema')
        <div class="animate-fadeIn">
            <h3 class="text-base font-semibold text-on-surface mb-4">Realisasi Diklat per Skema Tahun 2026</h3>
            <div class="flex flex-col lg:flex-row gap-6">
                <div class="bg-white border border-outline-variant rounded-lg p-6 flex flex-col items-center justify-center min-w-[300px]">
                    <svg viewBox="0 0 200 200" class="w-48 h-48">
                        <path d="M100,100 L100,10 A90,90 0 0,1 176,145 Z" fill="#7c3aed"/>
                        <path d="M100,100 L176,145 A90,90 0 0,1 24,145 Z" fill="#f5a623"/>
                        <path d="M100,100 L24,145 A90,90 0 0,1 100,10 Z" fill="#e11d48"/>
                    </svg>
                    <div class="flex flex-wrap gap-3 mt-4 justify-center text-xs">
                        <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-[#7c3aed] inline-block"></span>Assembling</span>
                        <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-[#f5a623] inline-block"></span>Aneka Olahan Ikan</span>
                        <span class="flex items-center gap-1"><span class="w-3 h-3 rounded-full bg-[#e11d48] inline-block"></span>Fillet Welder</span>
                    </div>
                </div>
                <div class="flex-1 overflow-x-auto bg-white border border-outline-variant rounded-lg">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">#</th>
                                <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">KOMPETENSI</th>
                                <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">SKEMA</th>
                                <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">REALISASI</th>
                                <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">%</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">1</td><td class="px-4 py-3">Alas Kaki</td><td class="px-4 py-3">Assembling</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">2</td><td class="px-4 py-3">Internet of Things</td><td class="px-4 py-3">Perekayasaan Perangkat Internet of Things (IoT)</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">3</td><td class="px-4 py-3">Pengelasan</td><td class="px-4 py-3">Fillet Welder</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">4</td><td class="px-4 py-3">Pengelasan</td><td class="px-4 py-3">Plate Welder</td><td class="px-4 py-3">0</td><td class="px-4 py-3">0%</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-3">5</td><td class="px-4 py-3">Pengolahan Hasil Laut</td><td class="px-4 py-3">Aneka Olahan Ikan</td><td class="px-4 py-3">20</td><td class="px-4 py-3">34%</td></tr>
                            <tr class="bg-gray-50 font-semibold"><td class="px-4 py-3"></td><td class="px-4 py-3" colspan="2">Total</td><td class="px-4 py-3">59</td><td class="px-4 py-3">100%</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

        <!-- Tab: Penempatan Kerja -->
        @if($tab === 'penempatan')
        <div class="animate-fadeIn">
            <h3 class="text-base font-semibold text-on-surface mb-4">Penempatan Kerja Tahun 2026</h3>
            <div class="overflow-x-auto bg-white border border-outline-variant rounded-lg">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">#</th>
                            <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">KOMPETENSI</th>
                            <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">PENEMPATAN KERJA</th>
                            <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">JUMLAH</th>
                            <th class="px-4 py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">%</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">1</td>
                            <td class="px-4 py-3 text-blue-600 font-medium cursor-pointer hover:underline">Pengolahan Hasil Laut</td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3">59</td>
                            <td class="px-4 py-3">100%</td>
                        </tr>
                        <tr class="bg-gray-50 font-semibold">
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3">Total</td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3">59</td>
                            <td class="px-4 py-3">100%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endif

    </div>
</div>
