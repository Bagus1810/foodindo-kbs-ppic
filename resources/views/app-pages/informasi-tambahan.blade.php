<x-app-layout title="Informasi Tambahan" is-header-blur="true" >
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 flex justify-center mb-5">
                <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700 w-auto flex justify-center">
                    <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                        INFORMASI TAMBAHAN
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center" style="position:absolute;">
                <div class="bg-blue-500 text-white p-4 rounded">
                    <a class="font-medium text-white" href="/" role="button">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                </div>
            </div>

            @if (session('error'))
                <div class="col-span-12  alert flex overflow-hidden rounded-lg bg-warning/10 text-warning dark:bg-warning/15">
                    <div class="flex flex-1 items-center space-x-3 p-4">
                        <div>
                            <div class="flex me-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                                    />
                                </svg>
                                <strong>Ada beberapa kesalahan:</strong>
                            </div>
                            <div>
                                {{ session('error') }}
                            </div>
                        </div>
                    </div>
                    <div class="w-1.5 bg-warning"></div>
                </div>
            @endif

 
            <form method="POST" action="/create-informasi-tambahan" class="grid grid-cols-12 col-span-12" enctype="multipart/form-data" >
                @csrf
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                    <label class="block col-span-12">
                        <!-- <span>ID</span> -->
                        <!-- <span class="relative mt-1.5 flex"> -->
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="ID"
                            type="text"
                            name="id_verifikasi_latar_belakang"
                            id="id-verifikasi-latar-belakang"
                            hidden
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                    <label class="block col-span-12">
                        <!-- <span>JENIS KASUS</span> -->
                        <!-- <span class="relative mt-1.5 flex"> -->
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="JENIS KASUS"
                            type="text"
                            name="jenis_kasus"
                            id="jenis-kasus"
                            hidden
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NIK</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NIK"
                            type="text"
                            name="nik"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>EMAIL</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="EMAIL"
                            type="text"
                            name="email"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>SOSIAL MEDIA</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="SOSIAL MEDIA"
                            type="text"
                            name="sosial_media"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>TEMPAT TANGGAL LAHIR</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="Ex : Jakarta, 5 Januari 1989"
                            type="text"
                            name="tempat_tanggal_lahir"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NKK</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NKK"
                            type="text"
                            name="nkk"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>ALAMAT DOMISILI</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="ALAMAT DOMISILI"
                            type="text"
                            name="alamat_domisili"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NO BPJS</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NO BPJS"
                            type="text"
                            name="no_bpjs"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NO NPWP</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NO NPWP"
                            type="text"
                            name="no_npwp"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NO SIM</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NO SIM"
                            type="text"
                            name="no_sim"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>JENIS SIM</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="JENIS SIM"
                            type="text"
                            name="jenis_sim"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>PLAT KENDARAAN</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="PLAT KENDARAAN"
                            type="text"
                            name="plat_kendaraan"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>LULUSAN PENDIDIKAN</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="LULUSAN PENDIDIKAN"
                            type="text"
                            name="lulusan_pendidikan"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NO REKENING</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NO REKENING"
                            type="text"
                            name="no_rekening"
                        />
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NO PASPOR</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NO PASPOR"
                            type="text"
                            name="no_paspor"
                        />
                        </span>
                    </label>
                </div>
               
                <div class="col-span-12 flex justify-center p-1">
                    <button class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" type="submit">
                        Lanjutkan
                    </button>
                </div>
            </form>
        </div>
    </main>


    <script>
        var id = `{{ session('id') }}`;
        var jenisKasus = `{{ session('jenisKasus') }}`;
        if (id && jenisKasus) {
            localStorage.clear();
            localStorage.setItem('id', id);
            localStorage.setItem('jenisKasus', jenisKasus);
        }
        var  id = localStorage.getItem('id');
        var  jenisKasus = localStorage.getItem('jenisKasus');
        // Tampilkan dari localStorage (meskipun refresh)
        if (id && jenisKasus) {
            document.getElementById('id-verifikasi-latar-belakang').value = id;
            document.getElementById('jenis-kasus').value = jenisKasus;
        }
    </script>





      

 
</x-app-layout>
