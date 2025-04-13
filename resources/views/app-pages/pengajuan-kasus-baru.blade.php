<x-app-layout title="CRM Analytics Dashboard" is-header-blur="true" >
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        <div class="flex justiy-content-center gap-1 mb-2" style="background:red;">
            <div class="dark:bg-navy-700 p-2">
                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100 mb-2">
                        PENGAJUAN KASUS BARU
                    </p>
            </div>
        </div>
        <div class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12">
                <div class="gap-1">
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700 w-auto" style="background:red;">
                        <p class="text-xl font-semibold text-slate-700 dark:text-navy-100 mb-2">
                            PENGAJUAN KASUS BARU
                        </p>
                    </div>
                </div>
            </div>



            <div class="col-span-12 lg:col-span-8">
                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100 mb-2">
                    Layanan
                </p>
                <div class="grid grid-cols-3 gap-3 sm:grid-cols-3 sm:gap-5 lg:grid-cols-3">
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700" style="height: 100px !important;">
                        <div class="flex justify-between space-x-1">
                            <a href="/pengajuan-kasus-baru" class="text-blue-600 dark:text-blue-400 no-underline">
                                <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                    Pengajuan Kasus Baru
                                </p>
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary dark:text-accent"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between">
                            <a href="#" class="text-blue-600 dark:text-blue-400 no-underline">
                                <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                    Cek Status
                                </p>
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-success" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between">
                            <a href="#" class="text-blue-600 dark:text-blue-400 no-underline">
                                <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                    Billing
                                </p>
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-warning" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-12">
                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100 mb-2">
                    Fitur
                </p>
                <div class="grid grid-cols-4 gap-3 sm:grid-cols-4 sm:gap-5 lg:grid-cols-4">
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between space-x-1">
                            <a href="#" class="text-blue-600 dark:text-blue-400 no-underline">
                                <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                    Profile
                                </p>
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary dark:text-accent"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between">
                            <a href="#" class="text-blue-600 dark:text-blue-400 no-underline">
                                <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                    Pekerjaan
                                </p>
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-success" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between">
                            <a href="#" class="text-blue-600 dark:text-blue-400 no-underline">
                                <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                    Progress
                                </p>
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-warning" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between">
                            <a href="#" class="text-blue-600 dark:text-blue-400 no-underline">
                                <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                    Layanan
                                </p>
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-warning" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
           
            <a href="#" class="col-span-12 text-blue-600 dark:text-blue-400 no-underline text-blue-600 hover:bg-red-500">
                <div class="col-span-12">
                    <div class="grid grid-cols-1 gap-1">
                        <div class="flex justify-between bg-slate-150 p-4 dark:bg-navy-700">
                            <div class="flex">
                                <div class="flex justify-between space-x-1 mr-2">
                                    <div class="rounded-full" style="background:white;">
                                        <img src="data:image/png;base64,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" 
                                        alt="Gambar dari internet" 
                                        class="h-20 w-20 rounded-lg shadow-md mx-auto" />
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 mb-2">
                                    <div style="background:red;">
                                        <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                            Pelacakan Nomor +6282234448861
                                        </p>
                                        <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                            18-03-2022
                                        </p>
                                        <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                                            IDR 2.5m
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fa-solid fa-right-to-bracket fa-fade fa-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </main>
</x-app-layout>
