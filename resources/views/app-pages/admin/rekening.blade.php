<x-app-layout title="Form Rekening" is-header-blur="true" >
   
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 flex justify-center mb-5">
                <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700 w-auto flex justify-center">
                    <p class="text-sm font-semibold text-slate-700 dark:text-navy-100">
                        HALAMAN BANK
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
         
            <form method="POST" action="/create-rekening" enctype="multipart/form-data" class="grid grid-cols-12 col-span-12">
                @csrf

             
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NAMA BANK</span>
                        <select class="form-select mt-1.5 w-full rounded-full border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent" name="nama_bank">
                            <option value="BCA">BCA</option>
                            <option value="BRI">BRI</option>
                            <option value="MANDIRI">MANDIRI</option>
                        </select>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                    <label class="block col-span-12">
                        <span>NOMOR REKENING</span>
                        <span class="relative mt-1.5 flex">
                        <input
                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="NOMOR REKENING"
                            type="text"
                            name="nomor_rekening"
                        />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                            <i class="far fa-user text-base"></i>
                        </span>
                        </span>
                    </label>
                </div>
                <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                    <label class="block col-span-12 mb-2">
                        <span>QRIS</span>
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

                            <input id="upload_image_background" name="qris[]" class="position-absolute hidden" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />

                            <label class="btn btn-upload btn-primary mb-3" for="upload_image_background">Pilih Gambar</label>

                            <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                        </fieldset>
                    </div>
                </div>
                <div class="col-span-12 flex justify-center p-1">
                    <button class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" type="submit">
                        Submit
                    </button>
                    <!-- <button type="submit"
                        class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                        Lanjutkan
                    </button> -->
                </div>
            </form>




            
        </div>
    </main>

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
