<x-app-layout title="Form Validasi Kasus" is-header-blur="true" >
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        <!-- <div class="flex justiy-content-center gap-1 mb-2" style="background:red;">
            <div class="dark:bg-navy-700 p-2">
                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100 mb-2">
                        PENGAJUAN KASUS BARU 2
                    </p>
            </div>
        </div> -->
        <div class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 flex justify-center mb-5">
                <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700 w-auto flex justify-center">
                    <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                        VALIDASI LAPORAN
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center" style="position:absolute;">
                <div class="bg-blue-500 text-white p-4 rounded">
                    <a class="font-medium text-white" href="/pengajuan-kasus-baru" role="button">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                </div>
            </div>

            <form method="POST" action="/create-pengajuan-kasus-baru" class="grid grid-cols-12 col-span-12">
                @csrf
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NOMOR LAPORAN KEPOLISIAN</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NIK"
                            type="text"
                        />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                            <i class="far fa-user text-base"></i>
                        </span>
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NOMOR LAPORAN POLISI MILITER</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NIK"
                            type="text"
                        />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                            <i class="far fa-user text-base"></i>
                        </span>
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NOMOR LAPORAN LAINNYA</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NIK"
                            type="text"
                        />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                            <i class="far fa-user text-base"></i>
                        </span>
                        </span>
                    </label>
                </div>
                <div class="col-span-12">
                    <span>FOTO / VIDEO</span>
                    <div class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]">
                        <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                    </div>
                </div>
                <div class="col-span-12 flex justify-center p-1">
                    <button class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" type="submit">
                        Lanjutkan
                    </button>
                    <!-- <button type="submit"
                        class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                        Lanjutkan
                    </button> -->
                </div>
            </form>




            
        </div>
    </main>
</x-app-layout>
