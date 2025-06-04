<x-app-layout title="Form Transfer" is-header-blur="true" >
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
    <script src="https://cdn.tailwindcss.com"></script>
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

        <!-- <div class="flex justiy-content-center gap-1 mb-2" style="background:red;">
            <div class="dark:bg-navy-700 p-2">
                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100 mb-2">
                        PENGAJUAN KASUS BARU 2
                    </p>
            </div>
        </div> -->
        <div class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 flex justify-center mb-5">
                <div id="judul-halaman" class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700 w-auto flex justify-center">
                    <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                        HALAMAN TRANSFER 
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col justify-center items-center" style="position:absolute;">
                <div class=" text-white p-4 rounded">
                    <a class="font-medium text-white" href="/" role="button">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                </div>
            </div>
           

            

            <div class="col-span-12 flex justify-center">
                <div id="form">
                    <form method="GET" action="/form-pengajuan-kasus-baru" class="grid grid-cols-12 col-span-12">
                        @csrf
                        <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>NOMOR REKENING</span>
                                <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="5775361821 ( BCA )"
                                    type="text"
                                    name="nomor_rekening"
                                    id="nomor_rekening"
                                    value="{{ $qris->nomor_rekening }}"
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
                                <span>BANK</span>
                                <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="5775361821 ( BCA )"
                                    type="text"
                                    name="nama_bank"
                                    id="nama_bank"
                                    value="{{ $qris->nama_bank }}"
                                />
                                <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                >
                                    <i class="far fa-user text-base"></i>
                                </span>
                                </span>
                            </label>
                        </div>
                        <!-- <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                            <label class="block col-span-12">
                                <span>ID KASUS</span>
                                <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NAMA TARGET LENGKAP"
                                    type="text"
                                    name="id"
                                    id="id-kasus"
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
                                <span>ID TRANSFER</span>
                                <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NAMA TARGET LENGKAP"
                                    type="text"
                                    name="status"
                                    id="id-transfer"
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
                                <span>STATUS TRANSFER</span>
                                <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="NAMA TARGET LENGKAP"
                                    type="text"
                                    name="status"
                                    id="status-transfer"
                                />
                                <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                >
                                    <i class="far fa-user text-base"></i>
                                </span>
                                </span>
                            </label>
                        </div> -->
        
        
                        <div class="col-span-12 flex justify-center mb-5">
                        <span class="relative mt-1.5 flex">
                            <img src="{{ $qris->image}}" alt="Gambar dari database" class="" style="height:250px; width:250px;" /> 
                        </div>
        
        
        
        
                   
            
                       
                        <div class="col-span-12 flex justify-center p-1">
                            <button class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" type="button" onclick="submitTransfer()">
                                Lanjutkan
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
          



            
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            console.log('ready');
        });


        const kasus = `{{ session('id_kasus') }}`;
        const transfer = `{{ session('id_transfer') }}`;
        const statusTransfer = `{{ session('status_transfer') }}`;
        console.log('session transfer : '+ transfer);
        if (kasus && transfer && statusTransfer) {
            localStorage.clear();
            localStorage.setItem('id_kasus', kasus);
            localStorage.setItem('id_transfer', transfer);
            localStorage.setItem('status_transfer', statusTransfer);
        }
        // Tampilkan dari localStorage (meskipun refresh)
        const savedKasus = localStorage.getItem('id_kasus');
        const savedTransfer = localStorage.getItem('id_transfer');
        const savedStatusTransfer = localStorage.getItem('status_transfer');
        console.log('1 : '+savedKasus+' 2 : '+savedTransfer+' 3 : '+savedStatusTransfer)
        if (savedKasus && savedTransfer && savedStatusTransfer) {
            document.getElementById('id-kasus').value = savedKasus;
            document.getElementById('id-transfer').value = savedTransfer;
            document.getElementById('status-transfer').value = savedStatusTransfer;
        }

        function submitTransfer() {
            const nomorRekening = document.getElementById("nomor_rekening").value;
            const namaBank = document.getElementById("nama_bank").value;

            $('#judul-halaman').html(`
                <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                    STATUS PEMBAYARAN
                </p>
            `);
            // const newEl = $('#form').html(`
            //     <div class="loader fade-in"></div>
            // `);

            const newEl = $(`
                            <div class="loader fade-in"></div>
                            <div>
                                Dalam pengecekan..
                            </div>
                            `);
            $('#form').html(newEl);
            setTimeout(() => {
                newEl.addClass('show');
            }, 50); 

         
            setTimeout(function() {
                const newSucces = $(`
                            <div class="flex justify-center">
                                <svg class="h-64 w-64 text-green-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />  <polyline points="22 4 12 14.01 9 11.01" /></svg>
                            </div> 
                           <div class="flex justify-center">
                                Berhasil..
                            </div> 
                            <div class="flex justify-center">
                                Invoice code : #PD542524
                            </div> 
                             <div class="flex justify-center mb-5">
                                Pengajuan kasus dan pembayaran sudah berhasil
                            </div> 
                            <div class="col-span-12 flex justify-center p-1">
                                <a class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" href="/" role="button">
                                    Lanjutkan
                                </a>
                            </div>
                           `);
                if (newSucces.length >0){
                    $('#form').html(newSucces);
                }
            }, 3000); // jalan 1 detik kemudian
        }

        
        
    </script>
    

 
</x-app-layout>
