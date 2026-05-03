<div>
    <!-- TopAppBar Shell -->
    <header class="bg-white dark:bg-gray-950 shadow-sm dark:shadow-none border-b border-gray-200 dark:border-gray-800 sticky top-0 z-50">
        <!-- Tier 1: Utility & Actions -->
        <div class="border-b border-gray-100">
            <div class="max-w-[1280px] mx-auto px-6 h-12 flex items-center justify-between">
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2 text-gray-600 font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-[18px]">language</span>
                        <span>Bahasa Indonesia</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600 font-label-sm text-label-sm cursor-pointer hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-[18px]">map</span>
                        <span>Peta Situs</span>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <button class="p-2 text-gray-600 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                    <div class="h-4 w-[1px] bg-gray-200"></div>
                    <a href="/pendaftaran" wire:navigate class="bg-secondary-container text-on-secondary-container px-4 py-2 rounded-lg font-button text-label-sm hover:opacity-90 transition-opacity">
                        Pendaftaran Peserta Diklat
                    </a>
                    <a href="/login" wire:navigate class="bg-primary text-on-primary px-4 py-2 rounded-lg font-button text-label-sm hover:opacity-90 transition-opacity">
                        Login
                    </a>
                </div>
            </div>
        </div>
        <!-- Tier 2: Branding & Main Nav -->
        <div class="max-w-[1280px] mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" wire:navigate class="text-2xl font-bold text-blue-700 dark:text-blue-500 cursor-pointer select-none">SIDIA</a>
            </div>
            <nav class="hidden md:flex items-center gap-8" id="main-nav">
                <a wire:navigate class="nav-link font-medium text-label-sm {{ request()->is('/') ? 'text-primary border-b-2 border-primary' : 'text-gray-600 hover:text-primary' }}" href="/">Home</a>
                <a wire:navigate class="nav-link font-medium text-label-sm {{ request()->is('berita') ? 'text-primary border-b-2 border-primary' : 'text-gray-600 hover:text-primary' }}" href="/berita">Berita</a>
                <a wire:navigate class="nav-link font-medium text-label-sm {{ request()->is('satuan-kerja') ? 'text-primary border-b-2 border-primary' : 'text-gray-600 hover:text-primary' }}" href="/satuan-kerja">Satuan Kerja</a>
                <a wire:navigate class="nav-link font-medium text-label-sm {{ request()->is('statistik') ? 'text-primary border-b-2 border-primary' : 'text-gray-600 hover:text-primary' }}" href="/statistik">Statistik</a>
                <a wire:navigate class="nav-link font-medium text-label-sm {{ request()->is('diklat') ? 'text-primary border-b-2 border-primary' : 'text-gray-600 hover:text-primary' }}" href="/diklat">Diklat</a>
                <div class="relative group h-full flex items-center">
                    <a wire:navigate class="nav-link font-medium text-label-sm flex items-center gap-1 cursor-pointer {{ request()->is('infrastruktur') ? 'text-primary border-b-2 border-primary' : 'text-gray-600 hover:text-primary' }}" href="/infrastruktur">
                        Infrastruktur Kompetensi
                        <span class="material-symbols-outlined text-sm">expand_more</span>
                    </a>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 top-[100%] w-64 bg-white shadow-xl border border-gray-100 rounded-b-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-[100]">
                        <a wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors" href="/infrastruktur?tab=kompetensi-sdm">Kompetensi SDM Industri</a>
                        <a wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors" href="/infrastruktur?tab=skkni">Standar Kompetensi Kerja Nasional Indonesia (SKKNI)</a>
                        <a wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors" href="/infrastruktur?tab=kkni">Kerangka Kualifikasi Nasional Indonesia (KKNI)</a>
                        <a wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors" href="/infrastruktur?tab=lsp">Lembaga Sertifikasi Profesi (LSP)</a>
                        <a wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors" href="/infrastruktur?tab=asesor">Asesor Kompetensi</a>
                        <a wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors" href="/infrastruktur?tab=tuk">Tempat Uji Kompetensi (TUK)</a>
                        <a wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors" href="/infrastruktur?tab=skema">Skema Kompetensi</a>
                        <a wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors" href="/infrastruktur?tab=pbk">Standar PBK</a>
                    </div>
                </div>
            </nav>
            <button class="md:hidden p-2">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </header>
    <!-- Breaking News Ticker -->
    <div class="bg-primary-container text-white py-2 overflow-hidden">
        <div class="max-w-[1280px] mx-auto px-6 flex items-center">
            <div class="flex-shrink-0 bg-white/20 px-3 py-0.5 rounded text-xs font-bold uppercase tracking-wider mr-4">Terbaru</div>
            <div class="whitespace-nowrap font-label-sm text-sm opacity-90 italic">
                Pendaftaran Diklat Kepemimpinan Nasional Tingkat II Tahun 2024 resmi dibuka mulai hari ini &mdash; Peresmian Fasilitas Laboratorium Industri 4.0 di Pusat Pelatihan Teknik &mdash;
            </div>
        </div>
    </div>
</div>
