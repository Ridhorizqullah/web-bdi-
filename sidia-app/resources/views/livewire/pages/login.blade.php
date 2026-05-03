<div class="flex-grow relative flex items-center justify-center py-xl px-4 overflow-hidden min-h-[calc(100vh-160px)]">
    <!-- Industrial Theme Background with Overlay -->
    <div class="absolute inset-0 z-0">
        <img alt="Modern industrial facility background" class="w-full h-full object-cover grayscale opacity-10" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZgh01M_aDxlMdP-08ejm5t3p_6oUXV1UqrmtBoskreMHjeoDSCq5kCvy0BMymL0eU6XtP-dIkfb7ACCxUxgHsleIUGxGIXl19nXMG6p3DOIVwwuk5k7i_WXIcRfL-JsKm32sujv_kEYZMW9vmRiHL3D4BHinAUAZqj3W4AHFBRiOJ6mzQLlbnYLDegoOpDennPMWtZM3ScuhDDRP-sVsWMWO3x3S7QdRQ3aB-mpzSfQOZS7jmkWdAY6ioSNhj0ZwAtio8-oC1Qg"/>
        <div class="absolute inset-0 bg-gradient-to-tr from-surface-container-low/80 to-transparent"></div>
    </div>

    <!-- Login Card Container -->
    <div class="relative z-10 w-full max-w-[440px]">
        <div class="bg-surface-container-lowest border border-outline-variant shadow-lg rounded-xl p-md md:p-lg">
            <div class="text-center mb-md">
                <h1 class="font-h1 text-h2 text-on-surface mb-xs">Selamat Datang</h1>
                <p class="font-body-md text-on-surface-variant">Silakan masuk ke akun SIDIA Anda</p>
            </div>
            
            <form wire:submit.prevent="login" class="space-y-md">
                <!-- Username/NIP Field -->
                <div class="space-y-xs">
                    <label class="font-label-sm text-on-surface-variant block" for="username">NIP / Username</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]" data-icon="person">person</span>
                        <input wire:model="username" class="w-full pl-10 pr-4 py-3 bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded transition-all font-body-md" id="username" type="text" placeholder="Masukkan NIP atau Username"/>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="space-y-xs">
                    <label class="font-label-sm text-on-surface-variant block" for="password">Password</label>
                    <div class="relative" x-data="{ show: false }">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]" data-icon="lock">lock</span>
                        <input wire:model="password" :type="show ? 'text' : 'password'" class="w-full pl-10 pr-10 py-3 bg-surface border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary rounded transition-all font-body-md" id="password" placeholder="Masukkan Password"/>
                        <button type="button" @click="show = !show" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-primary">
                            <span class="material-symbols-outlined text-[20px]" x-text="show ? 'visibility_off' : 'visibility'">visibility</span>
                        </button>
                    </div>
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input wire:model="remember" class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary" type="checkbox"/>
                        <span class="font-label-sm text-on-surface-variant">Ingat saya</span>
                    </label>
                    <a class="font-label-sm text-primary hover:underline" href="#">Lupa kata sandi?</a>
                </div>

                <!-- Primary Action -->
                <button type="submit" class="w-full py-4 bg-primary text-on-primary font-button rounded shadow-sm hover:opacity-90 active:opacity-80 transition-all flex items-center justify-center gap-2">
                    Masuk Ke Sistem
                    <span class="material-symbols-outlined text-[20px]" data-icon="login">login</span>
                </button>

                <!-- SSO Option -->
                <div class="relative flex items-center py-4">
                    <div class="flex-grow border-t border-outline-variant"></div>
                    <span class="flex-shrink mx-4 font-label-sm text-outline">Atau masuk dengan</span>
                    <div class="flex-grow border-t border-outline-variant"></div>
                </div>

                <button class="w-full py-3 border border-outline-variant bg-white text-on-surface font-button rounded hover:bg-surface transition-colors flex items-center justify-center gap-3" type="button">
                    <img alt="SSO Icon" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNCRJdKfbi37JAIN97nEVvWyokii4uIKw8mJK9zvHHq75c3qO1612UV8JbOzZMI8AWD-fVaDfhAqfDTFoVQq2ZtgCHemMXMr9n3stCZp-d0SwVMV4VWfyon8u-E94Tmwt523YyCOGIjmz0s8uPaawjYW1iYbyPIryHkA2TQgmeNYn1T2TMx9mPxnpO-1PnqsvebWh5_d6cBxj6rxT4x2vmhh8SEXRLRZqSxYLQmblFMiALqf-0zkgUnZLu_JH-yhmZGnxAoNffTA"/>
                    SSO Kemenperin
                </button>
            </form>

            <div class="mt-lg text-center">
                <p class="font-label-sm text-on-surface-variant">
                    Belum punya akun? 
                    <a class="text-secondary font-bold hover:underline" href="#">Daftar Sekarang</a>
                </p>
            </div>
        </div>
    </div>
</div>
