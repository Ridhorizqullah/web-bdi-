<div>
    <div class="max-w-[1280px] mx-auto px-6 py-10">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Navigation -->
            <aside class="w-full lg:w-1/4">
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm sticky top-24">
                    <div class="p-5 border-b border-gray-100 bg-gray-50">
                        <h2 class="font-bold text-on-background flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">account_tree</span>
                            Infrastruktur Kompetensi
                        </h2>
                    </div>
                    <nav class="flex flex-col py-2">
                        <button wire:click="$set('tab', 'overview')" class="text-left px-5 py-3 text-sm transition-colors {{ $tab === 'overview' ? 'bg-surface-container text-primary font-bold border-r-4 border-primary' : 'text-gray-600 hover:bg-gray-50' }}">Overview</button>
                        <button wire:click="$set('tab', 'kompetensi-sdm')" class="text-left px-5 py-3 text-sm transition-colors {{ $tab === 'kompetensi-sdm' ? 'bg-surface-container text-primary font-bold border-r-4 border-primary' : 'text-gray-600 hover:bg-gray-50' }}">Kompetensi SDM Industri</button>
                        <button wire:click="$set('tab', 'skkni')" class="text-left px-5 py-3 text-sm transition-colors {{ $tab === 'skkni' ? 'bg-surface-container text-primary font-bold border-r-4 border-primary' : 'text-gray-600 hover:bg-gray-50' }}">SKKNI</button>
                        <button wire:click="$set('tab', 'kkni')" class="text-left px-5 py-3 text-sm transition-colors {{ $tab === 'kkni' ? 'bg-surface-container text-primary font-bold border-r-4 border-primary' : 'text-gray-600 hover:bg-gray-50' }}">KKNI</button>
                        <button wire:click="$set('tab', 'lsp')" class="text-left px-5 py-3 text-sm transition-colors {{ $tab === 'lsp' ? 'bg-surface-container text-primary font-bold border-r-4 border-primary' : 'text-gray-600 hover:bg-gray-50' }}">LSP</button>
                        <button wire:click="$set('tab', 'asesor')" class="text-left px-5 py-3 text-sm transition-colors {{ $tab === 'asesor' ? 'bg-surface-container text-primary font-bold border-r-4 border-primary' : 'text-gray-600 hover:bg-gray-50' }}">Asesor Kompetensi</button>
                        <button wire:click="$set('tab', 'tuk')" class="text-left px-5 py-3 text-sm transition-colors {{ $tab === 'tuk' ? 'bg-surface-container text-primary font-bold border-r-4 border-primary' : 'text-gray-600 hover:bg-gray-50' }}">Tempat Uji Kompetensi (TUK)</button>
                        <button wire:click="$set('tab', 'skema')" class="text-left px-5 py-3 text-sm transition-colors {{ $tab === 'skema' ? 'bg-surface-container text-primary font-bold border-r-4 border-primary' : 'text-gray-600 hover:bg-gray-50' }}">Skema Kompetensi</button>
                        <button wire:click="$set('tab', 'pbk')" class="text-left px-5 py-3 text-sm transition-colors {{ $tab === 'pbk' ? 'bg-surface-container text-primary font-bold border-r-4 border-primary' : 'text-gray-600 hover:bg-gray-50' }}">Standar PBK</button>
                    </nav>
                </div>
            </aside>

            <!-- Main Content Panels -->
            <div class="flex-1 min-w-0">
                <!-- Tab: Overview -->
                @if($tab === 'overview')
                <div class="animate-fadeIn">
                    <div class="mb-8">
                        <h1 class="text-3xl font-extrabold tracking-tight">Overview Infrastruktur</h1>
                        <p class="text-gray-500 mt-2">Pusat data monitoring infrastruktur standardisasi kompetensi kerja nasional.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm flex items-center justify-between col-span-1 md:col-span-2">
                            <div>
                                <span class="text-xs font-bold text-primary uppercase tracking-wider">Total Sertifikasi Terbit</span>
                                <div class="text-4xl font-extrabold mt-2">1.248.902</div>
                                <p class="text-gray-500 text-sm mt-2">Data akumulasi dari 450+ LSP yang terdaftar resmi.</p>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-full text-primary">
                                <span class="material-symbols-outlined !text-4xl">military_tech</span>
                            </div>
                        </div>
                    </div>
                    <!-- Mini Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                            <span class="text-xs text-gray-400 block mb-1">Total SKKNI</span>
                            <span class="text-xl font-bold">1.840</span>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                            <span class="text-xs text-gray-400 block mb-1">Asesor</span>
                            <span class="text-xl font-bold">12.405</span>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                            <span class="text-xs text-gray-400 block mb-1">TUK</span>
                            <span class="text-xl font-bold">3.120</span>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                            <span class="text-xs text-gray-400 block mb-1">LSP</span>
                            <span class="text-xl font-bold">452</span>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Tab: Kompetensi SDM -->
                @if($tab === 'kompetensi-sdm')
                <div class="animate-fadeIn">
                    <div class="mb-8">
                        <h1 class="text-3xl font-extrabold tracking-tight">Kompetensi SDM Industri</h1>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm prose max-w-none">
                        <p>Dalam rangka mengurangi terjadinya kesenjangan (gap) kompetensi antara lulusan pendidikan/pelatihan dengan kebutuhan pada sektor industri di Indonesia, maka orientasi pendidikan/pelatihan yang selama ini supply driven harus diubah menjadi demand driven.</p>
                        <p>Oleh karena itu, para praktisi di industri harus terlibat langsung untuk menginformasikan kebutuhan kompetensi yang ada pada bidangnya masing-masing dalam bentuk Standar Kompetensi Kerja Nasional Indonesia (SKKNI).</p>
                        <h3 class="text-lg font-bold mt-6 mb-4">SKKNI tersebut nantinya akan digunakan sebagai acuan untuk:</h3>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Penyusunan Program Pendidikan/Pelatihan Berbasis Kompetensi (sampai dengan modul-modul pembelajarannya) untuk proses pembelajaran pada lembaga pendidikan/pelatihan.</li>
                            <li>Penyusunan Skema Sertifikasi untuk proses uji kompetensi pada Lembaga Sertifikasi Profesi (LSP).</li>
                        </ul>
                        <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-primary my-6">
                            <p class="text-sm italic">"Kemampuan lulusan lembaga pendidikan/pelatihan akan sesuai dengan kebutuhan industri dan para lulusan nantinya juga dapat memiliki sertifikat kompetensi setelah melalui uji kompetensi di LSP."</p>
                        </div>
                        <h3 class="text-lg font-bold mt-8 mb-4">Prinsip Dasar Pelatihan Berbasis Kompetensi (PBK):</h3>
                        <ul class="list-decimal pl-5 space-y-2 text-sm">
                            <li>Dilaksanakan berdasarkan hasil identifikasi kebutuhan pelatihan (gap competency) yang dilakukan melalui Uji Kompetensi.</li>
                            <li>Adanya pengakuan terhadap kompetensi yang telah dimiliki.</li>
                            <li>Berpusat pada peserta pelatihan dan bersifat individual.</li>
                            <li>Sistem articulated (Multi-entry/multi-exit).</li>
                            <li>Dinilai berdasarkan pencapaian standar kompetensi.</li>
                        </ul>
                    </div>
                </div>
                @endif

                <!-- Tab: KKNI -->
                @if($tab === 'kkni')
                <div class="animate-fadeIn">
                    <div class="mb-8">
                        <h1 class="text-3xl font-extrabold tracking-tight">Kerangka Kualifikasi Nasional Indonesia (KKNI)</h1>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm">
                                <thead class="bg-gray-50 border-b border-gray-200">
                                    <tr>
                                        <th class="px-6 py-4 font-bold text-gray-700">Nomor KKNI</th>
                                        <th class="px-6 py-4 font-bold text-gray-700">Judul KKNI</th>
                                        <th class="px-6 py-4 font-bold text-gray-700">Level</th>
                                        <th class="px-6 py-4 font-bold text-gray-700">Instansi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">KKNI 79 2024</td><td class="px-6 py-4">Industri Pembuatan Molds and Dies</td><td class="px-6 py-4">2-7</td><td class="px-6 py-4">Kemenperin</td></tr>
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">KKNI 77 2024</td><td class="px-6 py-4">Industri Petrokimia</td><td class="px-6 py-4">3-7</td><td class="px-6 py-4">Kemenperin</td></tr>
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">KKNI 80 2024</td><td class="px-6 py-4">Industri Manufaktur Otomotif Roda Empat</td><td class="px-6 py-4">2-7</td><td class="px-6 py-4">Kemenperin</td></tr>
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">KKNI 16 2023</td><td class="px-6 py-4">Industri Mi Instan Area Produksi</td><td class="px-6 py-4">2</td><td class="px-6 py-4">Kemenperin</td></tr>
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">KKNI 18 2023</td><td class="px-6 py-4">Industri Perajutan</td><td class="px-6 py-4">2-8</td><td class="px-6 py-4">Kemenperin</td></tr>
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">KKNI 50 2018</td><td class="px-6 py-4">Pengelasan</td><td class="px-6 py-4">2-6</td><td class="px-6 py-4">Kemenperin</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Tab: Skema -->
                @if($tab === 'skema')
                <div class="animate-fadeIn">
                    <div class="mb-8">
                        <h1 class="text-3xl font-extrabold tracking-tight">Skema Kompetensi</h1>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm">
                                <thead class="bg-gray-50 border-b border-gray-200">
                                    <tr>
                                        <th class="px-6 py-4 font-bold text-gray-700">Nama Skema</th>
                                        <th class="px-6 py-4 font-bold text-gray-700">Jenis</th>
                                        <th class="px-6 py-4 font-bold text-gray-700">Kode</th>
                                        <th class="px-6 py-4 font-bold text-gray-700">LSP</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">1F-1G SMAW</td><td class="px-6 py-4">Klaster</td><td class="px-6 py-4 font-mono text-[10px]">SKM/0024/...</td><td class="px-6 py-4">LSP LAS</td></tr>
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">2D Layout Artist</td><td class="px-6 py-4">Okupasi</td><td class="px-6 py-4 font-mono text-[10px]">SKM/1435/...</td><td class="px-6 py-4">AINAKI</td></tr>
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">3D Animation</td><td class="px-6 py-4">Klaster</td><td class="px-6 py-4 font-mono text-[10px]">SKM/0018/...</td><td class="px-6 py-4">TIK Indonesia</td></tr>
                                    <tr class="hover:bg-gray-50 transition-colors"><td class="px-6 py-4">Ahli Cloud Computing</td><td class="px-6 py-4">Okupasi</td><td class="px-6 py-4 font-mono text-[10px]">SKM/1565/...</td><td class="px-6 py-4">LSP P3 Teknologi Digital</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Tab: Standar PBK -->
                @if($tab === 'pbk')
                <div class="animate-fadeIn">
                    <div class="mb-8">
                        <h1 class="text-3xl font-extrabold tracking-tight">Standar PBK</h1>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl p-12 text-center shadow-sm">
                        <span class="material-symbols-outlined text-gray-300 !text-6xl mb-4">upcoming</span>
                        <h3 class="text-xl font-bold text-gray-800">Program dan Modul Pelatihan PBK</h3>
                        <p class="text-gray-500 mt-2">Maaf, data belum tersedia untuk saat ini.</p>
                    </div>
                </div>
                @endif

                <!-- Tab: SKKNI -->
                @if($tab === 'skkni')
                <div class="animate-fadeIn">
                    <div class="mb-10">
                        <h1 class="text-4xl font-bold text-on-background tracking-tight">Standar Kompetensi Kerja Nasional Indonesia (SKKNI)</h1>
                        <p class="text-lg text-gray-500 mt-2 max-w-3xl">Daftar standar kompetensi yang telah ditetapkan secara nasional untuk berbagai sektor industri di Indonesia.</p>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 border-b border-gray-200">
                                <tr>
                                    <th class="px-6 py-4 text-xs font-bold text-outline uppercase">Kode SKKNI</th>
                                    <th class="px-6 py-4 text-xs font-bold text-outline uppercase">Judul Standar</th>
                                    <th class="px-6 py-4 text-xs font-bold text-outline uppercase">Sektor</th>
                                    <th class="px-6 py-4 text-xs font-bold text-outline uppercase text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="px-6 py-4 font-medium text-blue-600">SKKNI 2024-001</td>
                                    <td class="px-6 py-4">Cyber Security Specialist</td>
                                    <td class="px-6 py-4 text-gray-500 text-sm">TIK</td>
                                    <td class="px-6 py-4 text-center"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-medium text-blue-600">SKKNI 2024-002</td>
                                    <td class="px-6 py-4">Manajemen Logistik Industri</td>
                                    <td class="px-6 py-4 text-gray-500 text-sm">Manufaktur</td>
                                    <td class="px-6 py-4 text-center"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-medium text-blue-600">SKKNI 2023-145</td>
                                    <td class="px-6 py-4">Teknisi Otomasi PLC</td>
                                    <td class="px-6 py-4 text-gray-500 text-sm">Elektronika</td>
                                    <td class="px-6 py-4 text-center"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-medium text-blue-600">SKKNI 2023-089</td>
                                    <td class="px-6 py-4">Digital Marketing Executive</td>
                                    <td class="px-6 py-4 text-gray-500 text-sm">Bisnis &amp; Manajemen</td>
                                    <td class="px-6 py-4 text-center"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase">Aktif</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif

                <!-- Tab: LSP -->
                @if($tab === 'lsp')
                <div class="animate-fadeIn">
                    <div class="mb-10">
                        <h1 class="text-4xl font-bold text-on-background tracking-tight">Lembaga Sertifikasi Profesi (LSP)</h1>
                        <p class="text-lg text-gray-500 mt-2 max-w-3xl">Pusat informasi lembaga yang memiliki lisensi untuk menyelenggarakan uji kompetensi dan sertifikasi.</p>
                    </div>
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm flex items-start gap-6">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-blue-600 text-3xl">corporate_fare</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-on-surface">LSP Logam Mesin</h3>
                                <p class="text-sm text-gray-500 mt-1">LSP P3 - Terdaftar sejak 2018</p>
                                <div class="mt-4 flex gap-2">
                                    <span class="px-2 py-0.5 bg-blue-50 text-blue-600 text-[10px] font-bold rounded">12 Skema</span>
                                    <span class="px-2 py-0.5 bg-green-50 text-green-600 text-[10px] font-bold rounded">Terakreditasi</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm flex items-start gap-6">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-blue-600 text-3xl">corporate_fare</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-on-surface">LSP Digital Ekonomi</h3>
                                <p class="text-sm text-gray-500 mt-1">LSP P2 - Terdaftar sejak 2021</p>
                                <div class="mt-4 flex gap-2">
                                    <span class="px-2 py-0.5 bg-blue-50 text-blue-600 text-[10px] font-bold rounded">8 Skema</span>
                                    <span class="px-2 py-0.5 bg-green-50 text-green-600 text-[10px] font-bold rounded">Terakreditasi</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @endif

                <!-- Tab: Asesor -->
                @if($tab === 'asesor')
                <div class="animate-fadeIn">
                    <div class="mb-10">
                        <h1 class="text-4xl font-bold text-on-background tracking-tight">Asesor Kompetensi</h1>
                        <p class="text-lg text-gray-500 mt-2 max-w-3xl">Daftar tenaga ahli yang tersertifikasi untuk melakukan asesmen kompetensi dalam uji kompetensi.</p>
                    </div>
                    <section class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                            <h3 class="font-bold">Direktori Asesor Terdaftar</h3>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm">search</span>
                                <input type="text" class="pl-9 pr-4 py-2 border border-gray-200 rounded-lg text-xs" placeholder="Cari Nama Asesor...">
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="p-4 hover:bg-gray-50 flex items-center justify-between transition-all rounded-lg">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                                        <span class="material-symbols-outlined text-gray-500">person</span>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold">Budi Santoso, M.T.</h4>
                                        <p class="text-[10px] text-gray-400">Bidang: Teknik Mesin & Industri</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-[10px] font-bold rounded-full">MET.000.001.2024</span>
                            </div>
                            <div class="p-4 hover:bg-gray-50 flex items-center justify-between transition-all rounded-lg">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                                        <span class="material-symbols-outlined text-gray-500">person</span>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold">Siti Aminah, S.Kom.</h4>
                                        <p class="text-[10px] text-gray-400">Bidang: Teknologi Informasi (TIK)</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-[10px] font-bold rounded-full">TIK.120.005.2023</span>
                            </div>
                        </div>
                    </section>
                </div>
                @endif

                <!-- Tab: TUK -->
                @if($tab === 'tuk')
                <div class="animate-fadeIn">
                    <div class="mb-10">
                        <h1 class="text-4xl font-bold text-on-background tracking-tight">Tempat Uji Kompetensi (TUK)</h1>
                        <p class="text-lg text-gray-500 mt-2 max-w-3xl">Sarana dan prasarana yang digunakan untuk menyelenggarakan asesmen kompetensi.</p>
                    </div>
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                            <div class="h-40 bg-slate-100 flex items-center justify-center">
                                <span class="material-symbols-outlined text-gray-300 text-5xl">image</span>
                            </div>
                            <div class="p-6">
                                <h3 class="font-bold text-on-surface">TUK Mandiri Balai Industri Jawa Barat</h3>
                                <p class="text-xs text-gray-500 mt-1">Bandung, Jawa Barat</p>
                                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                                    <span class="text-green-600 text-[10px] font-bold uppercase tracking-tight">Terverifikasi</span>
                                    <button class="text-blue-600 text-[10px] font-bold">Detail Lokasi</button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                            <div class="h-40 bg-slate-100 flex items-center justify-center">
                                <span class="material-symbols-outlined text-gray-300 text-5xl">image</span>
                            </div>
                            <div class="p-6">
                                <h3 class="font-bold text-on-surface">TUK Sewaktu Politeknik Surabaya</h3>
                                <p class="text-xs text-gray-500 mt-1">Surabaya, Jawa Timur</p>
                                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                                    <span class="text-green-600 text-[10px] font-bold uppercase tracking-tight">Terverifikasi</span>
                                    <button class="text-blue-600 text-[10px] font-bold">Detail Lokasi</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
