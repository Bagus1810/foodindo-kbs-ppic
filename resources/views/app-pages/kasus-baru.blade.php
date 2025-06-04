<x-app-layout title="Informasi Tambahan" is-header-blur="true" >
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
    <style>
        .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }

        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .fade-in.show {
            opacity: 1;
        }
    </style>
        <div class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 flex justify-center mb-5">
                <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700 w-auto flex justify-center">
                    <p id="judul-kasus" class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                        KASUS BARU
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

 
            <form method="POST" action="/create-kasus-baru" class="grid grid-cols-12 col-span-12" enctype="multipart/form-data" >
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
                <!-- <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>JENIS KASUS </span>
                        <select id="jenis-kasus" class="form-select mt-1.5 w-full rounded-full border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent" name="jenis_kasus" onchange="jenisKasus(this.value)">
                            <option value="Pilih Jenis Kasus">PILIH JENIS KASUS</option>
                            <option value="investigasi case">INVESTIGASI CASE</option>
                            <option value="perselingkuhan">PERSELINGKUHAN</option>
                            <option value="keluarga">KELUARGA</option>
                            <option value="bisnis">BISNIS</option>
                        </select>
                    </label>
                </div> -->
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>OPSI KASUS</span>
                        <select id="opsi-kasus" class="form-select mt-1.5 w-full rounded-full border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent" name="opsi_kasus" onchange="opsiKasus(this.value)">
                            <!-- <option value="Pilih Opsi Kasus">PILIH OPSI KASUS</option>
                            <option value="riwayat pelamar kerja / karyawan">RIWAYAT PELAMAR KERJA / KARYAWAN</option>
                            <option value="melakukan pemeriksaan pranikah">MELAKUKAN PEMERIKSAAN PRANIKAH</option>
                            <option value="aset bergerak">ASET BERGERAK</option>
                            <option value="aset tidak bergerak">ASET TIDAK BERGERAK</option>
                            <option value="media sosial">MEDIA SOSIAL</option>
                            <option value="badan usaha">BADAN USAHA</option> -->
                        </select>
                    </label>
                </div>
                <div id="div-form" class="grid grid-cols-12 col-span-12">
                    <!-- <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
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
                    </div> -->
                </div>
               
                <div class="col-span-12 flex justify-center p-1">
                    <button class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" type="submit">
                        Lanjutkan
                    </button>
                </div>
            </form>
        </div>
       
    </main>

    <!-- JQUERY  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JQUERY  -->


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
            document.getElementById('judul-kasus').innerHTML = jenisKasus.toUpperCase();
            if ( jenisKasus === 'verifikasi latar belakang'){
                $('#opsi-kasus').html(`
                    <option value="riwayat pelamar kerja / karyawan">RIWAYAT PELAMAR KERJA / KARYAWAN</option>
                    <option value="melakukan pemeriksaan pranikah">MELAKUKAN PEMERIKSAAN PRANIKAH</option>
                    <option value="aset bergerak">ASET BERGERAK</option>
                    <option value="aset tidak bergerak">ASET TIDAK BERGERAK</option>
                    <option value="media sosial">MEDIA SOSIAL</option>
                    <option value="badan usaha">BADAN USAHA</option>
                `);
                // $('#div-form').html(`
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>NIK</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="NIK"
                //                     type="text"
                //                     name="nik"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>EMAIL</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="EMAIL"
                //                     type="text"
                //                     name="email"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>SOSIAL MEDIA</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="SOSIAL MEDIA"
                //                     type="text"
                //                     name="sosial_media"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>TEMPAT TANGGAL LAHIR</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="TEMPAT TANGGAL LAHIR"
                //                     type="text"
                //                     name="tempat_tanggal_lahir"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>ALAMAT DOMISILI</span>
                //             <span class="relative mt-1.5 flex">
                //                 <textarea
                //                     rows="4"
                //                     placeholder="ALAMAT DOMISILI"
                //                     class="form-textarea w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     name="alamat_domisili"
                //                 >
                //                 </textarea>
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>NO BPJS</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="NO BPJS"
                //                     type="text"
                //                     name="no_bpjs"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>NO NPWP</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="NO NPWP"
                //                     type="text"
                //                     name="no_npwp"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>NO SIM</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="NO SIM"
                //                     type="text"
                //                     name="no_sim"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>JENIS SIM</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="JENIS SIM"
                //                     type="text"
                //                     name="jenis_sim"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>PLAT KENDARAAN</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="PLAT KENDARAAN"
                //                     type="text"
                //                     name="plat_kendaraan"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>LULUSAN PENDIDIKAN</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="LULUSAN PENDIDIKAN"
                //                     type="text"
                //                     name="lulusan_pendidikan"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>NO REKENING</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="NO REKENING"
                //                     type="text"
                //                     name="no_rekening"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                //     <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                //         <label class="block col-span-12">
                //             <span>NO PASPOR</span>
                //             <span class="relative mt-1.5 flex">
                //                 <input
                //                     class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                //                     placeholder="NO PASPOR"
                //                     type="text"
                //                     name="no_paspor"
                //                 />
                //             </span>
                //         </label>
                //     </div>
                // `);
            }
            if ( jenisKasus === 'investigasi case'){
                $('#opsi-kasus').html(`
                    <option value="perselingkuhan dalam perkawinan">PERSELINGKUHAN DALAM PERKAWINAN</option>
                    <option value="perselingkuhan di luar perkawinan">PERPSELINGKUHAN DI LUAR PERKAWINAN</option>
                    <option value="kehilangan">KEHILANGAN</option>
                    <option value="kasus kebakaran">KASUS KEBAKARAN</option>
                    <option value="kasus penipuan">KASUS PENIPUAN</option>
                    <option value="penipuan online">PENIPUAN ONLINE</option>
                    <option value="kasus penggelapan">KASUS PENGGELAPAN</option>
                    <option value="kasus penggelapan dalam jabatan">KASUS PENGGELAPAN DALAM JABATAN</option>
                    <option value="kasus penggelapan pajak">KASUS PENGGELAPAN PAJAK</option>
                    <option value="kasus laka lantas">KASUS LAKA LANTAS</option>
                    <option value="kasus klaim asuransi">KASUS KLAIM ASURANSI</option>
                    <option value="penggunaan narkoba">PENGGUNAAN NARKOBA</option>
                    <option value="pencarian orang hilang">PENCARIAN ORANG HILANG</option>
                    <option value="kasus pencurian barang">KASUS PENCURIAN BARANG</option>
                    <option value="cyber">CYBER</option>
                    <option value="TPPU">TPPU</option>
                    <option value="TPPO">TPPO</option>
                    <option value="pelecehan dan cabul">PELECEHAN DAN CABUL</option>
                `);
                $('#div-form').html(`
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                        <label class="block col-span-12 mb-2">
                            <span>BUKTI GAMBAR</span>
                            <span class="relative mt-1.5 flex">
                        </label>
                        <div class="filepond fp-bordered col-span-12">
                            <fieldset class="upload_dropZone text-center border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent mb-2">

                                <legend class="visually-hidden">Image uploader</legend>
                                <div class="flex justify-center">
                                    <svg class="upload_svg" width="60" height="60" aria-hidden="true">
                                        <use href="#icon-imageUpload"></use>
                                    </svg>
                                </div>

                                <p class="small my-2">Drag &amp; Drop background image(s) inside dashed region<br><i>or</i></p>

                                <input id="upload_image_background" name="bukti_gambar[]" class="position-absolute hidden" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />

                                <label class="btn btn-upload btn-primary mb-3" for="upload_image_background">Pilih Gambar</label>

                                <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                            </fieldset>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                        <label class="block col-span-12 mb-2">
                            <span>BUKTI VIDEO</span>
                            <span class="relative mt-1.5 flex">
                        </label>
                        <div class="filepond fp-bordered col-span-12">
                            <div class="grid col-span-12" for="bukti-video">
                                <div style="z-index:11; padding-top:3px;">
                                    <label class="btn btn-upload btn-primary" for="bukti-video">    
                                            <i class="fa-solid fa-cloud-arrow-up text-base" for="bukti-video"></i>
                                            <span for="bukti-video">Pilih Video</span>
                                        </label>
                                </div>
                                <div lass="grid col-span-12" style="position:absolute;">
                                    <input class="col-span-12 form-input peer w-full  border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" id="bukti-video" name="bukti_video" type="file" style="padding-left:64px; z-index:10;">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                        <label class="block col-span-12 mb-2">
                            <span>BUKTI DOKUMEN</span>
                            <span class="relative mt-1.5 flex">
                        </label>
                        <div class="filepond fp-bordered col-span-12">
                            <div class="grid col-span-12" for="bukti-dokumen">
                                <div style="z-index:11; padding-top:3px;">
                                    <label class="btn btn-upload btn-primary" for="bukti-dokumen">    
                                            <i class="fa-solid fa-cloud-arrow-up text-base" for="bukti-dokumen"></i>
                                            <span for="bukti-dokumen">Pilih Dokumen</span>
                                        </label>
                                </div>
                                <div lass="grid col-span-12" style="position:absolute;">
                                    <input class="col-span-12 form-input peer w-full  border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" id="bukti-dokumen" name="bukti_dokumen" type="file" style="padding-left:92px; z-index:10;">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <span>KRONOLOGI KASUS</span>
                            <span class="relative mt-1.5 flex">
                            <textarea
                            rows="4"
                            placeholder=" Enter Text"
                            class="form-textarea w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            name="kronologi_kasus"
                            ></textarea>
                            <!-- <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                            >
                            <i class="fa-regular fa-building text-base"></i>
                            </span> -->
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <span>NO RESI</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NO RESI"
                                    type="text"
                                    name="no_resi"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <span>NOMOR REGISTRASI PENGADILAN</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NOMOR REGISTRASI PENGADILAN"
                                    type="text"
                                    name="no_registrasi_pengadilan"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <span>NOMOR PUTUSAN PENGADILAN</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="NOMOR PUTUSAN PENGADILAN"
                                type="text"
                                name="no_putusan_pengadilan"
                                />
                            </span>
                        </label>
                    </div>
                `);
            }
            if ( jenisKasus === 'perselingkuhan'){
                $('#opsi-kasus').html(`
                    <option value="perselingkuhan dalam perkawinan">PERSELINGKUHAN DALAM PERKAWINAN</option>
                    <option value="perselingkuhan di luar perkawinan">PERPSELINGKUHAN DI LUAR PERKAWINAN</option>
                `);
            }
            if ( jenisKasus === 'bisnis'){
                $('#opsi-kasus').html(`
                <option value="investigasi bisnis export">INVESTIGASI BISNIS EXPORT</option>
                <option value="investigasi bisnis import">INVESTIGASI BISNIS IMPORT</option>
                <option value="investigasi industri">INVESTIGASI INDUSTRI</option>
                <option value="investigasi perdagangan">INVESTIGASI PERDAGANGAN</option>
                <option value="investigasi travel">INVESTIGASI TRAVEL</option>
                `);
                $('#div-form').html(`
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>NOMOR IZIN EKSPOR</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NOMOR IZIN EKSPOR"
                                    type="text"
                                    name="nomor_izin_ekspor"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>DOKUMEN JENIS KOMODITI</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="DOKUMEN JENIS KOMODITI"
                                    type="text"
                                    name="dokumen_jenis_komoditi"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>NEGARA TUJUAN EKSPOR</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NEGARA TUJUAN EKSPOR"
                                    type="text"
                                    name="negara_tujuan_ekspor"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>PARTNER EKSPEDISI</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="PARTNER EKSPEDISI"
                                    type="text"
                                    name="partner_ekspedisi"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>NAMA PENGIRIM</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NAMA PENGIRIM"
                                    type="text"
                                    name="nama_pengirim"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>ALAMAT PENGIRIM</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="ALAMAT PENGIRIM"
                                    type="text"
                                    name="alamat_pengirim"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>NAMA PENERIMA</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NAMA PENERIMA"
                                    type="text"
                                    name="nama_penerima"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>ALAMAT PENERIMA</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="ALAMAT PENERIMA"
                                    type="text"
                                    name="alamat_penerima"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>DOKUMEN BEA CUKAI</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="DOKUMEN BEA CUKAI"
                                    type="text"
                                    name="dokumen_bea_cukai"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>DOKUMEN PAJAK</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="DOKUMEN PAJAK"
                                    type="text"
                                    name="dokumen_pajak"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>NO AIRWAY BILL</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NO AIRWAY BILL"
                                    type="text"
                                    name="no_airway_bill"
                                />
                            </span>
                        </label>
                    </div>
                `);
            }

            if ( jenisKasus === 'keluarga'){
                $('#opsi-kasus').html(`
                    <option value="kasus hak asuh">KASUS HAK ASUH</option>
                    <option value="perlindungan anak / orang tua / pasangan">PERLINDUNGAN ANAK / ORANG TUA / PASANGAN</option>
                    <option value="keberadaan anak / orang tua / pasangan">KEBERADAAN ANAK / ORANG TUA / PASANGAN</option>
                `);
                $('#div-form').html(`
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>DOKUMEN AKTA NIKAH</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="DOKUMEN AKTA NIKAH"
                                    type="text"
                                    name="dokumen_akta_nikah"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>DOKUMEN AKTA CERAI</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="DOKUMEN AKTA CERAI"
                                    type="text"
                                    name="dokumen_akta_cerai"
                                />
                            </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                        <label class="block col-span-12">
                            <!-- <span>NAMA TARGET LENGKAP</span> -->
                            <span>DOKUMEN AKTA KELAHIRAN ATAU DINAS SOSIAL</span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="DOKUMEN AKTA KELAHIRAN ATAU DINAS SOSIAL"
                                    type="text"
                                    name="dokumen_akta_kelahiran_atau_dinas_sosial"
                                />
                            </span>
                        </label>
                    </div>
                `);
            }
        }

        // ---------------------------------------------------------------------------
        // dibawhe ini ga kepake
        function jenisKasus(value) {
            $("#opsi-kasus").html(`<option>Loading...</option>`);
            $("#div-form").html(``);
            if (value === 'investigasi case'){
                setTimeout(function() {
                    const newSucces = $(`
                    <option value="perselingkuhan dalam perkawinan">PERSELINGKUHAN DALAM PERKAWINAN</option>
                    <option value="perselingkuhan di luar perkawinan">PERPSELINGKUHAN DI LUAR PERKAWINAN</option>
                    <option value="kasus kebakaran">KASUS KEBAKARAN</option>
                    <option value="kasus penipuan">KASUS PENIPUAN</option>
                    <option value="penipuan online">PENIPUAN ONLINE</option>
                    <option value="kasus penggelapan">KASUS PENGGELAPAN</option>
                    <option value="kasus penggelapan dalam jabatan">KASUS PENGGELAPAN DALAM JABATAN</option>
                    <option value="kasus penggelapan pajak">KASUS PENGGELAPAN PAJAK</option>
                    <option value="kasus laka lantas">KASUS LAKA LANTAS</option>
                    <option value="kasus klaim asuransi">KASUS KLAIM ASURANSI</option>
                    <option value="penggunaan narkoba">PENGGUNAAN NARKOBA</option>
                    <option value="pencarian orang hilang">PENCARIAN ORANG HILANG</option>
                    <option value="kasus pencurian barang">KASUS PENCURIAN BARANG</option>
                    <option value="cyber">CYBER</option>
                    <option value="TPPU">TPPU</option>
                    <option value="TPPO">TPPO</option>
                    <option value="pelecehan dan cabul">PELECEHAN DAN CABUL</option>`);
                    if (newSucces.length >0){
                        $('#opsi-kasus').html(newSucces);
                    }
                }, 1000); // jalan 1 detik kemudian

                setTimeout(function() {
                    $('#div-form').fadeOut(200, function () {
                        $(this).html(`
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                                <label class="block col-span-12 mb-2">
                                    <span>BUKTI GAMBAR</span>
                                    <span class="relative mt-1.5 flex">
                                </label>
                                <div class="filepond fp-bordered col-span-12">
                                    <fieldset class="upload_dropZone text-center border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent mb-2">

                                        <legend class="visually-hidden">Image uploader</legend>
                                        <div class="flex justify-center">
                                            <svg class="upload_svg" width="60" height="60" aria-hidden="true">
                                                <use href="#icon-imageUpload"></use>
                                            </svg>
                                        </div>

                                        <p class="small my-2">Drag &amp; Drop background image(s) inside dashed region<br><i>or</i></p>

                                        <input id="upload_image_background" name="bukti_gambar[]" class="position-absolute hidden" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />

                                        <label class="btn btn-upload btn-primary mb-3" for="upload_image_background">Pilih Gambar</label>

                                        <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                                    </fieldset>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                                <label class="block col-span-12 mb-2">
                                    <span>BUKTI VIDEO</span>
                                    <span class="relative mt-1.5 flex">
                                </label>
                                <div class="filepond fp-bordered col-span-12">
                                    <div class="grid col-span-12" for="upload_video_background">
                                        <div style="z-index:11; padding-top:3px;">
                                            <label class="btn btn-upload btn-primary" for="upload_video_background">    
                                                    <i class="fa-solid fa-cloud-arrow-up text-base" for="upload_video_background"></i>
                                                    <span for="upload_video_background">Pilih Video</span>
                                                </label>
                                        </div>
                                        <div lass="grid col-span-12" style="position:absolute;">
                                            <input class="col-span-12 form-input peer w-full  border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" id="upload_video_background" name="bukti_video" type="file" style="padding-left:62px; z-index:10;">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                                <label class="block col-span-12 mb-2">
                                    <span>BUKTI DOKUMEN</span>
                                    <span class="relative mt-1.5 flex">
                                </label>
                                <div class="filepond fp-bordered col-span-12">
                                    <div class="grid col-span-12" for="upload_video_background">
                                        <div style="z-index:11; padding-top:3px;">
                                            <label class="btn btn-upload btn-primary" for="upload_video_background">    
                                                    <i class="fa-solid fa-cloud-arrow-up text-base" for="upload_video_background"></i>
                                                    <span for="upload_video_background">Pilih Dokumen</span>
                                                </label>
                                        </div>
                                        <div lass="grid col-span-12" style="position:absolute;">
                                            <input class="col-span-12 form-input peer w-full  border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" id="upload_video_background" name="bukti_dokumen" type="file" style="padding-left:90px; z-index:10;">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>KRONOLOGI KASUS</span>
                                    <span class="relative mt-1.5 flex">
                                    <textarea
                                    rows="4"
                                    placeholder=" Enter Text"
                                    class="form-textarea w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    name="kronologi_kasus"
                                    ></textarea>
                                    <!-- <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                    >
                                    <i class="fa-regular fa-building text-base"></i>
                                    </span> -->
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NO RESI</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NO RESI"
                                            type="text"
                                            name="no_resi"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NOMOR REGISTRASI PENGADILAN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NOMOR REGISTRASI PENGADILAN"
                                            type="text"
                                            name="no_registrasi_pengadilan"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NOMOR PUTUSAN PENGADILAN</span>
                                    <span class="relative mt-1.5 flex">
                                    <input
                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="NO PASPOR"
                                        type="text"
                                        name="no_paspor"
                                    />
                                    <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                    >
                                    <i class="fa-regular fa-building text-base"></i>
                                    </span>
                                    </span>
                                </label>
                            </div>
                        `).fadeIn(200);
                    });
                }, 1500); // jalan 1.5 detik kemudian
             
            }
            if (value === 'perselingkuhan'){
                setTimeout(function() {
                    const newSucces = $(`<option value="perselingkuhan dalam perkawinan">PERSELINGKUHAN DALAM PERKAWINAN</option>
                                         <option value="perselingkuhan di luar perkawinan">PERPSELINGKUHAN DI LUAR PERKAWINAN</option>`);
                    if (newSucces.length >0){
                        $('#opsi-kasus').html(newSucces);
                    }
                }, 1000); // jalan 1 detik kemudian
            
            }
            if (value === 'keluarga'){
                setTimeout(function() {
                    const newSucces = $(`<option value="kasus hak asuh">KASUS HAK ASUH</option>
                                         <option value="perlindungan anak / orang tua / pasangan">PERLINDUNGAN ANAK / ORANG TUA / PASANGAN</option>
                                         <option value="keberadaan anak / orang tua / pasangan">KEBERADAAN ANAK / ORANG TUA / PASANGAN</option>`);
                    if (newSucces.length >0){
                        $('#opsi-kasus').html(newSucces);
                    }
                }, 1000); // jalan 1 detik kemudian
                setTimeout(function() {
                    $('#div-form').fadeOut(200, function () {
                        $(this).html(`
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>DOKUMEN AKTA NIKAH</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="DOKUMEN AKTA NIKAH"
                                            type="text"
                                            name="dokumen_akta_nikah"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>DOKUMEN AKTA CERAI</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="DOKUMEN AKTA CERAI"
                                            type="text"
                                            name="dokumen_akta_cerai"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>DOKUMEN AKTA KELAHIRAN ATAU DINAS SOSIAL</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="DOKUMEN AKTA KELAHIRAN ATAU DINAS SOSIAL"
                                            type="text"
                                            name="dokumen_akta_kelahiran_atau_dinas_sosial"
                                        />
                                    </span>
                                </label>
                            </div>
                        `).fadeIn(200);
                    });
                }, 1500); // jalan 1.5 detik kemudian
            }
            if (value === 'bisnis'){
                setTimeout(function() {
                    const newSucces = $(`<option value="investigasi bisnis export">INVESTIGASI BISNIS EXPORT </option>
                                         <option value="investigasi bisnis import">INVESTIGASI BISNIS IMPORT</option>
                                         <option value="investigasi industri">INVESTIGASI INDUSTRI</option>
                                         <option value="investigasi perdagangan">INVESTIGASI PERDAGANGAN</option>
                                         <option value="investigasi travel">INVESTIGASI TRAVEL</option>`);
                    if (newSucces.length >0){
                        $('#opsi-kasus').html(newSucces);
                    }
                }, 1000); // jalan 1 detik kemudian
                setTimeout(function() {
                    $('#div-form').fadeOut(200, function () {
                        $(this).html(`
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>NOMOR IZIN EKSPOR</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NOMOR IZIN EKSPOR"
                                            type="text"
                                            name="nomor_izin_ekspor"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>DOKUMEN JENIS KOMODITI</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="DOKUMEN JENIS KOMODITI"
                                            type="text"
                                            name="dokumen_jenis_komoditi"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>NEGARA TUJUAN EKSPOR</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NEGARA TUJUAN EKSPOR"
                                            type="text"
                                            name="negara_tujuan_ekspor"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>PARTNER EKSPEDISI</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="PARTNER EKSPEDISI"
                                            type="text"
                                            name="partner_ekspedisi"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>NAMA PENGIRIM</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NAMA PENGIRIM"
                                            type="text"
                                            name="nama_pengirim"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>ALAMAT PENGIRIM</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="ALAMAT PENGIRIM"
                                            type="text"
                                            name="alamat_pengirim"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>NAMA PENERIMA</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NAMA PENERIMA"
                                            type="text"
                                            name="nama_penerima"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>ALAMAT PENERIMA</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="ALAMAT PENERIMA"
                                            type="text"
                                            name="alamat_penerima"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>DOKUMEN BEA CUKAI</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="DOKUMEN BEA CUKAI"
                                            type="text"
                                            name="dokumen_bea_cukai"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>DOKUMEN PAJAK</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="DOKUMEN PAJAK"
                                            type="text"
                                            name="dokumen_pajak"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <!-- <span>NAMA TARGET LENGKAP</span> -->
                                    <span>NO AIRWAY BILL</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NO AIRWAY BILL"
                                            type="text"
                                            name="no_airway_bill"
                                        />
                                    </span>
                                </label>
                            </div>
                        `).fadeIn(200);
                    });
                }, 1500); // jalan 1.5 detik kemudian
            }
        }

        function opsiKasus(value){
            if (jenisKasus === 'verifikasi latar belakang'){
                if (value === 'badan usaha'){
                        $('#div-form').html(`
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NAMA PERUSAHAAN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NAMA PERUSAHAAN"
                                            type="text"
                                            name="nama_perusahaan"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>JENIS USAHA</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="JENIS USAHA"
                                            type="text"
                                            name="jenis_usaha"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>ALAMAT PERUSAHAAN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="ALAMAT PERUSAHAAN"
                                            type="text"
                                            name="alamat_perusahaan"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NAMA DIREKSI / KOMISARIS</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NAMA DIREKSI / KOMISARIS"
                                            type="text"
                                            name="nama_direksi"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NO NIB</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NO NIB"
                                            type="text"
                                            name="no_nib"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NO IUP</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NO IUP"
                                            type="text"
                                            name="no_iup"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NOMOR AKTE PERUSAHAAN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NOMOR AKTE PERUSAHAAN"
                                            type="text"
                                            name="no_akte_perusahaan"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NOMOR NPWP PERUSAHAAN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NOMOR NPWP PERUSAHAAN"
                                            type="text"
                                            name="no_npwp_perusahaan"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>NOMOR TELP PERUSAHAAN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NOMOR TELP PERUSAHAAN"
                                            type="text"
                                            name="no_telp_perusahaan"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>WEBSITE PERUSAHAAN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="WEBSITE PERUSAHAAN"
                                            type="text"
                                            name="website_perusahaan"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>EMAIL PERUSAHAAN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="EMAIL PERUSAHAAN"
                                            type="text"
                                            name="email_perusahaan"
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>SOSIAL MEDIA PERUSAHAAN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="SOSIAL MEDIA PERUSAHAAN"
                                            type="text"
                                            name="sosial_media_perusahaan"
                                        />
                                    </span>
                                </label>
                            </div>
                        `);
                }else{
                    $('#div-form').html(``);
                }
            }
            if (jenisKasus === 'investigasi case'){
                if (value === 'TPPO'){
                    $('#div-form').html(`
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>DOKUMEN DAFTAR KORBAN</span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                        class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="DOKUMEN DAFTAR KORBAN"
                                        type="text"
                                        name="dokumen_daftar_korban"
                                    />
                                </span>
                            </label>
                        </div>
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>NOMOR TIKET</span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                        class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="NOMOR TIKET"
                                        type="text"
                                        name="nomor_tiket"
                                    />
                                </span>
                            </label>
                        </div>
                    `);
                }else if(value ==='kehilangan'){
                    $('#div-form').html(`
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>SERIAL NUMBER ASET</span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="SERIAL NUMBER ASET"
                                    type="text"
                                    name="serial_number_aset"
                                    />
                                </span>
                            </label>
                        </div>
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>NOMOR MESIN KENDARAAN</span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NOMOR MESIN KENDARAAN"
                                    type="text"
                                    name="nomor_mesin_kendaraan"
                                    />
                                </span>
                            </label>
                        </div>
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>NOMOR RANGKA KENDARAAN</span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NOMOR RANGKA KENDARAAN"
                                    type="text"
                                    name="nomor_rangka_kendaraan"
                                    />
                                </span>
                            </label>
                        </div>
                    `);
                }else{
                    $('#div-form').html(`
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                            <label class="block col-span-12 mb-2">
                                <span>BUKTI GAMBAR</span>
                                <span class="relative mt-1.5 flex">
                            </label>
                            <div class="filepond fp-bordered col-span-12">
                                <fieldset class="upload_dropZone text-center border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent mb-2">

                                    <legend class="visually-hidden">Image uploader</legend>
                                    <div class="flex justify-center">
                                        <svg class="upload_svg" width="60" height="60" aria-hidden="true">
                                            <use href="#icon-imageUpload"></use>
                                        </svg>
                                    </div>

                                    <p class="small my-2">Drag &amp; Drop background image(s) inside dashed region<br><i>or</i></p>

                                    <input id="upload_image_background" name="bukti_gambar[]" class="position-absolute hidden" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />

                                    <label class="btn btn-upload btn-primary mb-3" for="upload_image_background">Pilih Gambar</label>

                                    <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                                </fieldset>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                            <label class="block col-span-12 mb-2">
                                <span>BUKTI VIDEO</span>
                                <span class="relative mt-1.5 flex">
                            </label>
                            <div class="filepond fp-bordered col-span-12">
                                <div class="grid col-span-12" for="bukti-video">
                                    <div style="z-index:11; padding-top:3px;">
                                        <label class="btn btn-upload btn-primary" for="bukti-video">    
                                                <i class="fa-solid fa-cloud-arrow-up text-base" for="bukti-video"></i>
                                                <span for="bukti-video">Pilih Video</span>
                                            </label>
                                    </div>
                                    <div lass="grid col-span-12" style="position:absolute;">
                                        <input class="col-span-12 form-input peer w-full  border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" id="bukti-video" name="bukti_video" type="file" style="padding-left:64px; z-index:10;">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                            <label class="block col-span-12 mb-2">
                                <span>BUKTI DOKUMEN</span>
                                <span class="relative mt-1.5 flex">
                            </label>
                            <div class="filepond fp-bordered col-span-12">
                                <div class="grid col-span-12" for="bukti-dokumen">
                                    <div style="z-index:11; padding-top:3px;">
                                        <label class="btn btn-upload btn-primary" for="bukti-dokumen">    
                                                <i class="fa-solid fa-cloud-arrow-up text-base" for="bukti-dokumen"></i>
                                                <span for="bukti-dokumen">Pilih Dokumen</span>
                                            </label>
                                    </div>
                                    <div lass="grid col-span-12" style="position:absolute;">
                                        <input class="col-span-12 form-input peer w-full  border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" id="bukti-dokumen" name="bukti_dokumen" type="file" style="padding-left:92px; z-index:10;">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>KRONOLOGI KASUS</span>
                                <span class="relative mt-1.5 flex">
                                <textarea
                                rows="4"
                                placeholder=" Enter Text"
                                class="form-textarea w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                name="kronologi_kasus"
                                ></textarea>
                                <!-- <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                >
                                <i class="fa-regular fa-building text-base"></i>
                                </span> -->
                                </span>
                            </label>
                        </div>
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>NO RESI</span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                        class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="NO RESI"
                                        type="text"
                                        name="no_resi"
                                    />
                                </span>
                            </label>
                        </div>
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>NOMOR REGISTRASI PENGADILAN</span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                        class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="NOMOR REGISTRASI PENGADILAN"
                                        type="text"
                                        name="no_registrasi_pengadilan"
                                    />
                                </span>
                            </label>
                        </div>
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>NOMOR PUTUSAN PENGADILAN</span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                    class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NOMOR PUTUSAN PENGADILAN"
                                    type="text"
                                    name="no_putusan_pengadilan"
                                    />
                                </span>
                            </label>
                        </div>
                `);
                }
            }
        }
    </script>


    <script>
        /* Bootstrap 5 JS included */

        console.clear();
        ('use strict');


        // Drag and drop - single or multiple image files
        // https://www.smashingmagazine.com/2018/01/drag-drop-file-uploader-vanilla-js/
        // https://codepen.io/joezimjs/pen/yPWQbd?editors=1000
        (function () {

        'use strict';
        
        // Four objects of interest: drop zones, input elements, gallery elements, and the files.
        // dataRefs = {files: [image files], input: element ref, gallery: element ref}

        const preventDefaults = event => {
            event.preventDefault();
            event.stopPropagation();
        };

        const highlight = event =>
            event.target.classList.add('highlight');
        
        const unhighlight = event =>
            event.target.classList.remove('highlight');

        const getInputAndGalleryRefs = element => {
            const zone = element.closest('.upload_dropZone') || false;
            const gallery = zone.querySelector('.upload_gallery') || false;
            const input = zone.querySelector('input[type="file"]') || false;
            return {input: input, gallery: gallery};
        }

        const handleDrop = event => {
            const dataRefs = getInputAndGalleryRefs(event.target);
            dataRefs.files = event.dataTransfer.files;
            handleFiles(dataRefs);
        }


        const eventHandlers = zone => {

            const dataRefs = getInputAndGalleryRefs(zone);

            if (!dataRefs.input) return;

            // Prevent default drag behaviors
            ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
            zone.addEventListener(event, preventDefaults, false);
            document.body.addEventListener(event, preventDefaults, false);
            });

            // Highlighting drop area when item is dragged over it
            ;['dragenter', 'dragover'].forEach(event => {
            zone.addEventListener(event, highlight, false);
            });
            ;['dragleave', 'drop'].forEach(event => {
            zone.addEventListener(event, unhighlight, false);
            });

            // Handle dropped files
            zone.addEventListener('drop', handleDrop, false);

            // Handle browse selected files
            dataRefs.input.addEventListener('change', event => {
            dataRefs.files = event.target.files;
            handleFiles(dataRefs);
            }, false);

        }


        // Initialise ALL dropzones
        const dropZones = document.querySelectorAll('.upload_dropZone');
        for (const zone of dropZones) {
            eventHandlers(zone);
        }


        // No 'image/gif' or PDF or webp allowed here, but it's up to your use case.
        // Double checks the input "accept" attribute
        const isImageFile = file => 
            ['image/jpeg', 'image/png', 'image/svg+xml'].includes(file.type);


        function previewFiles(dataRefs) {
            if (!dataRefs.gallery) return;
            for (const file of dataRefs.files) {
            let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onloadend = function() {
                let img = document.createElement('img');
                img.className = 'upload_img mt-2';
                img.setAttribute('alt', file.name);
                img.src = reader.result;
                dataRefs.gallery.appendChild(img);
            }
            }
        }

        // Based on: https://flaviocopes.com/how-to-upload-files-fetch/
        const imageUpload = dataRefs => {

            // Multiple source routes, so double check validity
            if (!dataRefs.files || !dataRefs.input) return;

            const url = dataRefs.input.getAttribute('data-post-url');
            if (!url) return;

            const name = dataRefs.input.getAttribute('data-post-name');
            if (!name) return;

            const formData = new FormData();
            formData.append(name, dataRefs.files);

            fetch(url, {
            method: 'POST',
            body: formData
            })
            .then(response => response.json())
            .then(data => {
            console.log('posted: ', data);
            if (data.success === true) {
                previewFiles(dataRefs);
            } else {
                console.log('URL: ', url, '  name: ', name)
            }
            })
            .catch(error => {
            console.error('errored: ', error);
            });
        }


        // Handle both selected and dropped files
        const handleFiles = dataRefs => {

            let files = [...dataRefs.files];

            // Remove unaccepted file types
            files = files.filter(item => {
            if (!isImageFile(item)) {
                console.log('Not an image, ', item.type);
            }
            return isImageFile(item) ? item : null;
            });

            if (!files.length) return;
            dataRefs.files = files;

            previewFiles(dataRefs);
            imageUpload(dataRefs);
        }

        })();

    </script>





      

 
</x-app-layout>
