<x-base-layout title="Login">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
        <a href="#" class="flex items-center space-x-2">
            <img class="h-12 w-12" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
            <p class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100">
                {{ config('app.name') }}
            </p>
        </a>
    </div>
    <div class="hidden w-full place-items-center lg:grid">
        <div class="w-full max-w-lg p-6">
            <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/dashboard-check.svg') }}" alt="image" />
            <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/dashboard-check-dark.svg') }}" alt="image" />
        </div>
    </div>
    <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
        <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
            <div class="text-center">
                <img class="mx-auto h-16 w-16 lg:hidden" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                        Welcome Back
                    </h2>
                    <p class="text-slate-400 dark:text-navy-300">
                        Please sign in to continue
                    </p>
                </div>
            </div>
            <form class="mt-16" action="{{ route('register') }}" method="post">
            <!-- <form class="mt-16" action="{{ route('login') }}" method="post"> -->
                <div>
                    <div class="flex flex-col items-center mb-5">
                        <label class="relative flex">Balas pesan berikut</label>
                    </div>
                    <label class="relative flex">
                    <!-- <span onclick="copyToClipboard(this)" data-copy="KodePromo123" style="cursor:pointer; color:blue;">
                        📋 Klik untuk salin kode promo
                    </span> -->
                    
                        @if(session('codename'))
                            <input
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="No Whatsapp" type="text" name="telp" id="copyInput"
                                value="{{ session('codename') }}" />
                                <!-- value="{{ session('codename') }}" onclick="copyToClipboard(this)" data-copy="{{ session('codename') }}" /> -->
                        @else
                            <input
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Kembali untuk mendapatkan kode" type="text" name="telp" id="copyInput"
                                />
                        @endif
                       
                        <!-- <span 
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg> 

                        </span> -->
                    </label>
                     <div>
                            <button  id="buttonCopy" type="button" onclick="copyToClipboard()"  class="px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 active:scale-95 transition">
                                 Copy
                            </button>
                            <!-- Bubble animasi -->
                            <div 
                                id="copiedBubble"
                                class="absolute -top-8 right-0 bg-green-500 text-white text-sm px-2 py-1 rounded-lg opacity-0 scale-90 transition-all duration-300 pointer-events-none"
                            >
                                ✅ Tersalin!
                            </div>
                        </div>
                    @error('email')
                        <span class="text-tiny+ text-error">{{ $message }}</span>
                    @enderror
                </div>
                <!-- <div class="mt-4">
                    <label class="relative flex">
                        <input
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Password" type="password" name="password"
                            value="{{ old('password') ?? 'password' }}" />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                    </label>
                    @error('password')
                        <span class="text-tiny+ text-error">{{ $message }}</span>
                    @enderror
                </div> -->

                <!-- <div class="mt-4 flex items-center justify-between space-x-2">
                    <label class="inline-flex items-center space-x-2">
                        <input
                            class="form-checkbox is-outline h-5 w-5 rounded border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                            type="checkbox" />
                        <span class="line-clamp-1">Remember me</span>
                    </label>
                    <a href="#"
                        class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100">Forgot
                        Password?</a>
                </div> -->
                <button type="button"
                    class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    Lanjutkan
                </button>
                <div class="mt-4 text-center text-xs+">
                    <p class="line-clamp-1">
                        <span>Dont have Account?</span>

                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="{{ route('registerView') }}">Create account</a>
                    </p>
                </div>
                <div class="my-7 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>OR</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>
                <div class="flex space-x-4">
                    <button
                        class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                        <img class="h-5.5 w-5.5" src="{{ asset('images/100x100.png') }}" alt="logo" />
                        <span>Google</span>
                    </button>
                    <button
                        class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                        <img class="h-5.5 w-5.5" src="{{ asset('images/100x100.png') }}" alt="logo" />
                        <span>Github</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="my-5 flex justify-center text-xs text-slate-400 dark:text-navy-300">
            <a href="#">Privacy Notice</a>
            <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
            <a href="#">Term of service</a>
        </div>
    </main>

    <script>
        function copyToClipboard() {
            const input = document.getElementById('copyInput');
            const buttonCopy = document.getElementById('buttonCopy');
            const bubble = document.getElementById('copiedBubble');

            input.select();
            input.setSelectionRange(0, 99999); // for mobile
            navigator.clipboard.writeText(input.value).then(() => {
                // Tampilkan animasi
                buttonCopy.classList.remove('opacity-100', 'scale-100');
                buttonCopy.classList.add('opacity-0', 'scale-90');
                bubble.classList.remove('opacity-0', 'scale-90');
                bubble.classList.add('opacity-100', 'scale-100');

                // Tampilkan kembali
                setTimeout(() => {
                    buttonCopy.classList.add('opacity-100', 'scale-100');
                }, 1500);
               

                // Sembunyikan kembali
                setTimeout(() => {
                    bubble.classList.remove('opacity-100', 'scale-100');
                    bubble.classList.add('opacity-0', 'scale-90');
                }, 1500);
            });
        }

        var code = `{{ session('codename') }}`
        var telp = `{{ session('telp') }}`
        setInterval(async () => {
            // di fetch ini, lempar data berupa nomor telp dan kode, tembak ke api, cek status row ini, apakah sudah done atua belum
            // kalau done, langsung pindahkan lagi fetch lagi, dengan nomor telp, untu proses login 
    
            const res = await fetch(`https://e18a-2001-448a-2003-3c3b-51cb-6e3a-2a37-9df6.ngrok-free.app/check/login?code=${code}&&telp=${telp}`);
            const data = await res.json();
            console.log('liat statusnya login atau tidak',data.hasil[0].status);
            if (data.hasil[0].status == 'login'){
                const res = await fetch(`https://e18a-2001-448a-2003-3c3b-51cb-6e3a-2a37-9df6.ngrok-free.app/login-wa?code=${code}&&telp=${telp}`);
                const data = await res.json();
                console.log('di luar if redirect disini',data.message);
                if (data.message = 'berhasil'){
                    console.log('di dalam redirect disini');
                    window.location.href = data.redirect; 
                }
            
            
            }
            // if (data.reply = 'ok') {
            //     window.location.href = 'https://e18a-2001-448a-2003-3c3b-51cb-6e3a-2a37-9df6.ngrok-free.app';
            // }
        }, 5000);
    </script>


</x-base-layout>
