<div class="max-w-7xl mx-auto px-4 md:px-8 py-xl">
    <!-- Hero Title Section -->
    <div class="mb-lg">
        <h1 class="font-h1 text-h1 text-primary mb-xs">Formulir Pendaftaran Peserta</h1>
        <p class="font-body-lg text-body-lg text-outline max-w-3xl">Silakan lengkapi data diri Anda untuk mengikuti program pelatihan di Balai Diklat Industri Kementerian Perindustrian.</p>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter items-start">
        <!-- Left Column: Form Sections -->
        <div class="lg:col-span-2 space-y-md">
            <!-- Section 1: Data Pribadi -->
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-xl shadow-sm">
                <div class="flex items-center gap-sm mb-md pb-sm border-b border-outline-variant">
                    <span class="material-symbols-outlined text-primary" data-icon="person">person</span>
                    <h3 class="font-h3 text-h3">Data Pribadi</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Nomor Induk Kependudukan (NIK)</label>
                        <input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md" placeholder="16 digit NIK sesuai KTP" type="text"/>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Nama Lengkap (Sesuai Ijazah)</label>
                        <input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md" placeholder="Masukkan nama lengkap" type="text"/>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Tempat Lahir</label>
                        <input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md" placeholder="Kota/Kabupaten" type="text"/>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Tanggal Lahir</label>
                        <input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md" type="date"/>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Jenis Kelamin</label>
                        <select class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Agama</label>
                        <select class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Section 2: Kontak & Media Sosial -->
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-xl shadow-sm">
                <div class="flex items-center gap-sm mb-md pb-sm border-b border-outline-variant">
                    <span class="material-symbols-outlined text-primary" data-icon="contact_page">contact_page</span>
                    <h3 class="font-h3 text-h3">Informasi Kontak</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Alamat Email Aktif</label>
                        <input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md" placeholder="contoh@email.com" type="email"/>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Nomor WhatsApp</label>
                        <input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md" placeholder="08xxxxxxxxx" type="tel"/>
                    </div>
                    <div class="md:col-span-2 space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Alamat Lengkap (Sesuai Domisili)</label>
                        <textarea class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md" placeholder="Jl. Nama Jalan No. XX, Kelurahan, Kecamatan..." rows="3"></textarea>
                    </div>
                </div>
            </div>

            <!-- Section 3: Informasi Pelatihan -->
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-xl shadow-sm">
                <div class="flex items-center gap-sm mb-md pb-sm border-b border-outline-variant">
                    <span class="material-symbols-outlined text-primary" data-icon="school">school</span>
                    <h3 class="font-h3 text-h3">Pilihan Pelatihan</h3>
                </div>
                <div class="space-y-md">
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Balai Diklat Industri (BDI) Tujuan</label>
                        <select class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md">
                            <option value="">Pilih Balai Diklat</option>
                            <option value="BDI Jakarta">BDI Jakarta - Fashion &amp; Tekstil</option>
                            <option value="BDI Medan">BDI Medan - Sawit &amp; Karet</option>
                            <option value="BDI Padang">BDI Padang - Bordir &amp; Fashion</option>
                            <option value="BDI Yogyakarta">BDI Yogyakarta - Plastik, Logam &amp; Furnitur</option>
                            <option value="BDI Surabaya">BDI Surabaya - Elektronika &amp; Telematika</option>
                            <option value="BDI Denpasar">BDI Denpasar - Animasi &amp; Kerajinan</option>
                            <option value="BDI Makassar">BDI Makassar - Pangan &amp; Kakao</option>
                        </select>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Program Diklat</label>
                        <select class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md">
                            <option value="">Pilih Program (Pilih Balai Terlebih Dahulu)</option>
                        </select>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface">Sumber Informasi</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-sm mt-xs">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox"/>
                                <span class="font-body-md text-body-md">Instagram</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox"/>
                                <span class="font-body-md text-body-md">Facebook</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox"/>
                                <span class="font-body-md text-body-md">Website BDI</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox"/>
                                <span class="font-body-md text-body-md">Teman/Alumni</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button Area -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-md pt-md">
                <label class="flex items-start gap-3 cursor-pointer group">
                    <input class="mt-1 rounded text-primary focus:ring-primary" type="checkbox"/>
                    <span class="font-label-sm text-label-sm text-outline group-hover:text-on-surface transition-colors">
                        Saya menyatakan bahwa data yang saya isikan adalah benar dan dapat dipertanggungjawabkan sesuai dengan peraturan yang berlaku.
                    </span>
                </label>
                <button class="w-full md:w-auto px-12 py-4 bg-primary text-white font-button text-button rounded-xl hover:shadow-lg hover:-translate-y-0.5 transition-all">
                    Kirim Pendaftaran
                </button>
            </div>
        </div>

        <!-- Right Column: Sidebar / Instruction -->
        <div class="space-y-md">
            <!-- Info Card -->
            <div class="bg-primary text-white p-md rounded-xl shadow-md">
                <h4 class="font-h3 text-h3 mb-sm">Alur Pendaftaran</h4>
                <ul class="space-y-md">
                    <li class="flex gap-sm">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-white text-primary flex items-center justify-center font-bold text-xs">1</span>
                        <p class="font-label-sm text-label-sm">Isi data diri dengan lengkap dan benar sesuai KTP &amp; Ijazah.</p>
                    </li>
                    <li class="flex gap-sm">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-white text-primary flex items-center justify-center font-bold text-xs">2</span>
                        <p class="font-label-sm text-label-sm">Pilih program pelatihan yang tersedia sesuai minat Anda.</p>
                    </li>
                    <li class="flex gap-sm">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-white text-primary flex items-center justify-center font-bold text-xs">3</span>
                        <p class="font-label-sm text-label-sm">Unggah berkas pendukung (jika diminta pada tahap selanjutnya).</p>
                    </li>
                    <li class="flex gap-sm">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-white text-primary flex items-center justify-center font-bold text-xs">4</span>
                        <p class="font-label-sm text-label-sm">Pantau status pendaftaran secara berkala melalui email atau dashboard.</p>
                    </li>
                </ul>
            </div>

            <!-- Support Card -->
            <div class="bg-surface-container-high border border-outline-variant p-md rounded-xl">
                <div class="flex items-center gap-sm mb-sm">
                    <span class="material-symbols-outlined text-primary" data-icon="help">help</span>
                    <h4 class="font-h3 text-h3">Bantuan</h4>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant mb-md">Mengalami kendala saat mengisi formulir? Hubungi layanan dukungan kami.</p>
                <div class="space-y-sm">
                    <div class="flex items-center gap-sm text-primary">
                        <span class="material-symbols-outlined text-lg" data-icon="mail">mail</span>
                        <span class="font-label-sm text-label-sm">pusdiklat@kemenperin.go.id</span>
                    </div>
                    <div class="flex items-center gap-sm text-primary">
                        <span class="material-symbols-outlined text-lg" data-icon="call">call</span>
                        <span class="font-label-sm text-label-sm">(021) 5255509 Ext. 2225</span>
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="relative h-64 rounded-xl overflow-hidden shadow-sm group">
                <img alt="Training Center" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmc4R0R0r6l7IezY-OSNarUweOkqMKl7vIlbEKCspuRD0t8ayhjAFyCnxFi7RuE9mJuKfD0ZorooEQ38GjvoDSC0wTuz4YtSBzYraX2O7uUgQCzZ7Z3w8J4LNm7AfchSFc8UnizWH0kPn20kVVxEjRx7ESvfE6mD4ZHgPUaFyHFsW9vQIXkHQ0dnCAbnG1QNWOiFa3tprFjR4o-W_cWeJ1k_KIuBnTb8kIZpUDGxe-e2eqa83jW8COw-VYtzKPA2L-8GoheAJI9A"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-md">
                    <p class="text-white font-bold text-lg">Wujudkan Karir di Industri</p>
                    <p class="text-white/80 text-xs">Bersertifikat Nasional &amp; Internasional</p>
                </div>
            </div>
        </div>
    </div>
</div>
