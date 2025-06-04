
<x-base-layout title="Dashboard" is-sidebar-open="true" is-header-blur="true" has-min-sidebar="true">
    <!-- JQUERY  -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- datatables  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <!-- Sidebar -->
    <div class="sidebar print:hidden">
        <!-- Main Sidebar -->
        <x-app-partials.main-sidebar></x-app-partials.main-sidebar>

        <!-- Sidebar Panel -->
        <div class="sidebar-panel">
            <div class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750">
                <!-- Sidebar Panel Header -->
                <div class="flex h-18 w-full items-center justify-between pl-4 pr-1">
                    <div class="flex items-center">
                        <div class="avatar mr-3 hidden h-9 w-9 lg:flex">
                            <div
                                class="is-initial rounded-full bg-primary/10 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-lg font-medium tracking-wider text-slate-800 line-clamp-1 dark:text-navy-100">
                            My Cloud
                        </p>
                    </div>
                    <button @click="$store.global.isSidebarExpanded = false"
                        class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>

                <!-- Sidebar Panel Body -->
                <div class="flex h-[calc(100%-4.5rem)] grow flex-col">
                    <div class="is-scrollbar-hidden grow overflow-y-auto">
                        <div class="mt-2 px-4">
                            <button
                                class="btn w-full space-x-2 rounded-full border border-slate-200 py-2 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-500 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                                <span> Create New </span>
                            </button>
                        </div>

                        <div x-data="{ expanded: true }">
                            <div class="mt-4 flex items-center justify-between px-4">
                                <span class="text-xs font-medium uppercase">MY FILES </span>
                                <div class="-mr-1.5 flex">
                                    <button
                                        class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                    <button @click="expanded =! expanded"
                                        class="btn h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                            :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div x-show="expanded" x-collapse>
                                <ul class="mt-1 space-y-1 px-2 font-inter text-xs+ font-medium">
                                    <li x-data="{ expanded: false }">
                                        <div tabindex="0"
                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                            <button @click="expanded = !expanded"
                                                class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4.5 w-4.5 transition-transform"
                                                    :class="expanded && 'rotate-90'" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6 text-warning"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                            </svg>
                                            <span>Design</span>
                                        </div>
                                        <ul x-show="expanded" x-collapse class="pl-4">
                                            <li>
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>Web Apps</span>
                                                </div>
                                            </li>
                                            <li x-data="{ expanded: false }">
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <button @click="expanded = !expanded"
                                                        class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4.5 w-4.5 transition-transform"
                                                            :class="expanded && 'rotate-90'" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>CRM Apps</span>
                                                </div>
                                                <ul x-show="expanded" x-collapse class="pl-4">
                                                    <li>
                                                        <div tabindex="0"
                                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                            <div class="mr-1 flex h-5 w-5 items-center justify-center">
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                            </svg>
                                                            <span>LMS App</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div tabindex="0"
                                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                            <div class="mr-1 flex h-5 w-5 items-center justify-center">
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                            </svg>
                                                            <span>Ecommerce</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div tabindex="0"
                                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                            <div class="mr-1 flex h-5 w-5 items-center justify-center">
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                            </svg>
                                                            <span>Dashboard</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>Desktop Apps</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>Mobile Apps</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div tabindex="0"
                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                            <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6 text-warning"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                            </svg>
                                            <span>Backup Files</span>
                                        </div>
                                    </li>
                                    <li x-data="{ expanded: false }">
                                        <div tabindex="0"
                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                            <button @click="expanded = !expanded"
                                                class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4.5 w-4.5 transition-transform"
                                                    :class="expanded && 'rotate-90'" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6 text-warning"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                            </svg>
                                            <span>Documents</span>
                                        </div>
                                        <ul x-show="expanded" x-collapse class="pl-4">
                                            <li>
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>Sheets</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>Slides</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>Words</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li x-data="{ expanded: false }">
                                        <div tabindex="0"
                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                            <button @click="expanded = !expanded"
                                                class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4.5 w-4.5 transition-transform"
                                                    :class="expanded && 'rotate-90'" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6 text-warning"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                            </svg>
                                            <span>Application</span>
                                        </div>
                                        <ul x-show="expanded" x-collapse class="pl-4">
                                            <li>
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>Web Apps</span>
                                                </div>
                                            </li>
                                            <li x-data="{ expanded: false }">
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <button @click="expanded = !expanded"
                                                        class="btn mr-1 h-5 w-5 rounded-lg p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4.5 w-4.5 transition-transform"
                                                            :class="expanded && 'rotate-90'" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>CRM Apps</span>
                                                </div>
                                                <ul x-show="expanded" x-collapse class="pl-4">
                                                    <li>
                                                        <div tabindex="0"
                                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                            <div class="mr-1 flex h-5 w-5 items-center justify-center">
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                            </svg>
                                                            <span>LMS App</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div tabindex="0"
                                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                            <div class="mr-1 flex h-5 w-5 items-center justify-center">
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                            </svg>
                                                            <span>Ecommerce</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div tabindex="0"
                                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                            <div class="mr-1 flex h-5 w-5 items-center justify-center">
                                                            </div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                            </svg>
                                                            <span>Dashboard</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>Desktop Apps</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div tabindex="0"
                                                    class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                                    <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-3 h-6 w-6 text-warning" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    <span>Mobile Apps</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div tabindex="0"
                                            class="flex cursor-pointer items-center rounded px-2 py-1 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:text-navy-100 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                            <div class="mr-1 flex h-5 w-5 items-center justify-center"></div>

                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6 text-warning"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                            </svg>
                                            <span>Archives</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>

                        <ul class="space-y-1.5 px-2 font-inter text-xs+ font-medium">
                            <li>
                                <a class="group flex space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                    </svg>
                                    <span class="text-slate-800 dark:text-navy-100">Shared Folders</span>
                                </a>
                            </li>
                            <li>
                                <a class="group flex space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                    <span class="text-slate-800 dark:text-navy-100">Important</span>
                                </a>
                            </li>
                            <li>
                                <a class="group flex space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-slate-800 dark:text-navy-100">Recent</span>
                                </a>
                            </li>
                            <li>
                                <a class="group flex space-x-2 rounded-lg p-2 tracking-wide text-slate-800 outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:text-navy-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                    </svg>
                                    <span class="text-slate-800 dark:text-navy-100">Tags</span>
                                </a>
                            </li>
                            <li>
                                <a class="group flex space-x-2 rounded-lg p-2 tracking-wide text-error outline-none transition-all hover:bg-error/20 focus:bg-error/20"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    <span>Trash</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="flex flex-col p-4">
                        <div class="flex items-center justify-between">
                            <p>
                                <span class="font-medium text-slate-600 dark:text-navy-100">35GB</span>
                                of 1TB
                            </p>
                            <a href="#"
                                class="text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">Upgrade</a>
                        </div>

                        <div class="progress mt-2 h-2 bg-slate-150 dark:bg-navy-500">
                            <div class="w-7/12 rounded-full bg-info"></div>
                        </div>
                    </div>
                </div>



                
            </div>
        </div>

        <!-- Minimized Sidebar Panel -->
        <div class="sidebar-panel-min">
            <div class="flex h-full flex-col items-center bg-white dark:bg-navy-750">
                <div class="flex h-18 shrink-0 items-center justify-center">
                    <div
                        class="avatar flex h-10 w-10 rounded-full bg-primary/10 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                        <div class="is-initial">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex h-[calc(100%-4.5rem)] grow flex-col">
                    <div class="is-scrollbar-hidden flex grow flex-col overflow-y-auto">
                        <ul class="mt-4 space-y-1">
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                        <ul class="space-y-1">
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="btn h-10 w-10 p-0 text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="py-3">
                        <div x-data="usePopper({ placement: 'right-start', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn h-10 w-10 rounded-full border border-slate-200 p-0 font-medium hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-500 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>

                            <template x-teleport="#x-teleport-target">
                                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                    <div
                                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                    Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                    else</a>
                                            </li>
                                        </ul>
                                        <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                    Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- App Header -->
    <x-app-partials.header></x-app-partials.header>

    <!-- Mobile Searchbar -->
    <x-app-partials.mobile-searchbar></x-app-partials.mobile-searchbar>

    <!-- Right Sidebar -->
    <x-app-partials.right-sidebar></x-app-partials.right-sidebar>

    <!-- Main Content Wrapper -->
    <main class="main-content filemanager-app w-full pb-6">
        <div>
            @if(session('success'))
                <div class="space-y-4 m-2">
                    <div
                    x-data="{isShow:true}"
                    :class="!isShow && 'opacity-0 transition-opacity duration-300'"
                    class="alert flex items-center justify-between overflow-hidden rounded-lg border border-info text-info"
                    >
                    <div class="flex">
                        <div class="bg-info p-3 text-white">
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
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                        </div>
                        <div class="px-4 py-3 sm:px-5"> {{ session('success') }}</div>
                    </div>
                    <div class="px-2">
                        <button
                        @click="isShow = false; setTimeout(()=>$root.remove(),300)"
                        class="btn h-7 w-7 rounded-full p-0 font-medium text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                        </button>
                    </div>
                </div>
            @endif
            @if(session('warning'))
                <div class="space-y-4 m-2">
                    <div
                    x-data="{isShow:true}"
                    :class="!isShow && 'opacity-0 transition-opacity duration-300'"
                    class="alert flex items-center justify-between overflow-hidden rounded-lg border border-warning text-warning"
                    >
                    <div class="flex">
                        <div class="bg-warning p-3 text-white">
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
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                        </div>
                        <div class="px-4 py-3 sm:px-5"> {{ session('warning') }}</div>
                    </div>
                    <div class="px-2">
                        <button
                        @click="isShow = false; setTimeout(()=>$root.remove(),300)"
                        class="btn h-7 w-7 rounded-full p-0 font-medium text-warning hover:bg-warning/20 focus:bg-warning/20 active:bg-warning/25"
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                        </button>
                    </div>
                </div>
            @endif
        </div>
        <div
            class="flex items-center justify-between space-x-2 px-[var(--margin-x)] pb-4 pt-5 transition-all duration-[.25s]">
            <div class="flex items-center space-x-1">
                <h3 class="text-lg font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                    Lead Time
                </h3>
            </div>
            <div class="flex">
                <button @click="$dispatch('show-drawer', { drawerId: 'filemanager-activity-drawer' })"
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
                <a href="{{ route('layouts/help-1') }}"
                    class="btn h-8 w-8 rounded-full p-0 text-slate-500 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- <div class="col-span-12">
            tes
        </div> -->
      
      
        <div
            class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:gap-6">
            <div class="col-span-12">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Tambah Lead Time
                    </h2>
                    <div class="flex">
                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            </button>
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div
                                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto p-3">
                        <form action="/create-lead-time" method="post">
                            @csrf
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                                <label class="block col-span-12">
                                    <span>KODE</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="KODE"
                                            type="text"
                                            name="KODE"
                                            id="kode"
                                            required
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                                <label class="block col-span-12">
                                    <span>NAMA</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="NAMA"
                                            type="text"
                                            name="NAMA"
                                            id="nama"
                                            required
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                                <label class="block col-span-12">
                                    <span>TYPE</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="TYPE"
                                            type="text"
                                            name="TYPE"
                                            id="type"
                                            required
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center">
                                <label class="block col-span-12">
                                    <span>HARI</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="HARI"
                                            type="text"
                                            name="HARI"
                                            id="hari"
                                            required
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-12 col-span-12 p-1 flex justify-center mb-2">
                                <label class="block col-span-12">
                                    <span>QUANTITY</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="QUANTITY"
                                            type="text"
                                            name="QUANTITY"
                                            id="quantity"
                                            required
                                        />
                                    </span>
                                </label>
                            </div>
                            <div class="col-span-12 flex justify-center p-1">
                                <button class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="col-span-12 lg:col-span-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Tags
                    </h2>

                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </button>
                        <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                            <div
                                class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                            Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                            else</a>
                                    </li>
                                </ul>
                                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                            Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 space-y-3.5 p-4 text-xs+">
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white dark:bg-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Image</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>654 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>1.5 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-secondary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Video</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>135 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>14 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-info text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
                                    <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Documents</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>5477 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>1.2 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-success text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#adminui</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>120 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>166 MB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-warning text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#chatUI</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>54 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>121 MB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-error text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#uiux</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>565 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>756 MB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white dark:bg-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Image</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>654 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>1.5 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-secondary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Video</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>135 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>14 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-info text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
                                    <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Documents</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>5477 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>1.2 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div> -->
        </div>
        <div
            class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:gap-6">
            <div class="col-span-12">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Daftar Lead Time
                    </h2>
                    <div class="flex">
                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            </button>
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div
                                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto p-3">
                        <table class="is-hoverable w-full text-left" id="myTable2">
                            <thead>
                                <tr>
                                    <th
                                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5" hidden>
                                        ID
                                    </th>
                                    <th
                                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        KODE
                                    </th>
                                    <th
                                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        NAMA
                                    </th>
                                    <th
                                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        TYPE
                                    </th>
                                    <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        HARI
                                    </th>
                                    <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        QUANITY
                                    </th>
                                    <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Action
                                    </th>

                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($leadTimes as $leadTime)
                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5" id="id-{{$loop->iteration}}" hidden>
                                            {{$leadTime->id}}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5" id="kode-{{$loop->iteration}}">
                                            {{$leadTime->KODE}}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5" id="nama-{{$loop->iteration}}">
                                            {{$leadTime->NAMA}}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5" id="type-{{$loop->iteration}}">
                                            {{$leadTime->TYPE}}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5" id="hari-{{$loop->iteration}}">
                                            {{$leadTime->HARI}}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 text-slate-700 dark:text-navy-100 sm:px-5" id="quantity-{{$loop->iteration}}">
                                            {{$leadTime->QUANTITY}}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5 flex">
                                            <!-- <button
                                                class="btn bg-primary font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90"
                                            >
                                                Kirim PO
                                            </button> -->

                                            <div x-data="{ showModal: false, modalId:'', modalKode: '', modalNama:'', modalType:'', modalHari:'', modalQuantity:'', modalCategory: '' }">
                                                <button @click="
                                                showModal = true;
                                                modalId = document.getElementById('id-{{$loop->iteration}}').innerText;
                                                modalKode = document.getElementById('kode-{{$loop->iteration}}').innerText;
                                                modalNama = document.getElementById('nama-{{$loop->iteration}}').innerText;
                                                modalType = document.getElementById('type-{{$loop->iteration}}').innerText;
                                                modalHari = document.getElementById('hari-{{$loop->iteration}}').innerText;
                                                modalQuantity = document.getElementById('quantity-{{$loop->iteration}}').innerText;
                                                "
                                                    class="btn bg-primary font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                                                    Edit
                                                </button>
                                                <template x-teleport="#x-teleport-target">
                                                    <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                                        x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                                        <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                                            @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                                            x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                                            x-transition:leave-end="opacity-0"></div>
                                                        <div class="relative w-full flex flex-col overflow-hidden max-w-lg origin-top rounded-lg bg-white transition-all duration-300 dark:bg-navy-700"
                                                            x-show="showModal" x-transition:enter="easy-out"
                                                            x-transition:enter-start="opacity-0 scale-95"
                                                            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in"
                                                            x-transition:leave-start="opacity-100 scale-100"
                                                            x-transition:leave-end="opacity-0 scale-95">
                                                            <div
                                                                class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5">
                                                                <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                                                    Lead Time {{$leadTime->NAMA}}
                                                                </h3>
                                                                <button @click="showModal = !showModal"
                                                                    class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                                        stroke-width="2">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M6 18L18 6M6 6l12 12" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="overflow-y-auto px-4 py-4 sm:px-5">
                                                                <form method="POST" action="/update-lead-time">
                                                                    @csrf
                                                                    <div class="space-y-4">
                                                                        <input
                                                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                        type="text" name="ID" :value="modalId" hidden/>
                                                                    </div>
                                                                    <div class="space-y-4 mb-2">
                                                                        <span>Kode</span>
                                                                        <input
                                                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                        type="text" name="KODE" :value="modalKode"/>
                                                                    </div>
                                                                    <div class="space-y-4 mb-2">
                                                                        <span class="mt-5">Nama</span>
                                                                        <input
                                                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                        type="text" name="NAMA" :value="modalNama"/>
                                                                    </div> 
                                                                    <div class="space-y-4 mb-2">
                                                                        <span>Type</span>
                                                                        <input
                                                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                        type="text" name="TYPE" :value="modalType"/>
                                                                    </div> 
                                                                    <div class="space-y-4 mb-2">
                                                                        <span>Hari</span>
                                                                        <input
                                                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                        type="text" name="HARI" :value="modalHari"/>
                                                                    </div> 
                                                                    <div class="space-y-4 mb-2">
                                                                        <span>Quantity</span>
                                                                        <input
                                                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                                        type="text" name="QUANTITY" :value="modalQuantity"/>
                                                                    </div> 
                                                                    <div class="space-x-2 text-right">
                                                                        <button @click="showModal = false"
                                                                            class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                                                            Apply
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>




                                            <form method="POST" action="/delete-lead-time" onsubmit="return confirm('Yakin ingin menghapus lead time ini?')">
                                                @csrf
                                                <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                type="text" name="ID" value="{{$leadTime->id}}" hidden/>
                                                <button
                                                    class="ml-2 btn bg-secondary font-medium text-white shadow-lg shadow-secondary/50 hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90"
                                                >
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="col-span-12 lg:col-span-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Tags
                    </h2>

                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </button>
                        <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                            <div
                                class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                            Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                            else</a>
                                    </li>
                                </ul>
                                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                            Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 space-y-3.5 p-4 text-xs+">
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white dark:bg-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Image</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>654 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>1.5 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-secondary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Video</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>135 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>14 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-info text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
                                    <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Documents</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>5477 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>1.2 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-success text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#adminui</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>120 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>166 MB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-warning text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#chatUI</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>54 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>121 MB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-error text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#uiux</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>565 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>756 MB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-white dark:bg-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Image</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>654 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>1.5 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-secondary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Video</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>135 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>14 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="group flex items-center justify-between">
                        <div class="flex space-x-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-info text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
                                    <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="text-slate-600 dark:text-navy-100">#Documents</a>
                                <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                    <p>5477 Files</p>
                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                                    <p>1.2 GB</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn -mr-2 h-8 w-8 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div> -->
        </div>
    </main>

    <div x-show="showDrawer" x-data="{ showDrawer: false }"
        x-on:show-drawer.window="($event.detail.drawerId === 'filemanager-activity-drawer') && (showDrawer = true)"
        @keydown.window.escape="showDrawer = false">
        <div class="fixed inset-0 z-[100] bg-slate-900/60 transition-opacity duration-200"
            @click="showDrawer = false" x-show="showDrawer" x-transition:enter="ease-out"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
        <div class="fixed right-0 top-0 z-[101] h-full w-full sm:w-80">
            <div class="flex h-full w-full transform-gpu flex-col bg-white transition-transform duration-200 dark:bg-navy-700"
                x-show="showDrawer" x-transition:enter="ease-out" x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0" x-transition:leave="ease-in"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                <div class="flex h-14 items-center justify-between bg-slate-150 p-4 dark:bg-navy-800">
                    <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                        Activity
                    </h3>
                    <div class="-mr-1.5 flex">
                        <button @click="showDrawer=false"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div x-init="$el._x_simplebar = new SimpleBar($el)" class="flex grow flex-col overflow-y-auto overscroll-contain p-4"
                    x-data="{ activeTab: 'tab-recent' }">
                    <div class="flex space-x-2">
                        <button @click="activeTab = 'tab-recent'" class="btn h-8 rounded-full text-xs+ font-medium"
                            :class="activeTab === 'tab-recent' ?
                                'bg-primary/10 text-primary dark:bg-accent-light/10 dark:text-accent-light' :
                                'hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 hover:text-slate-800 focus:text-slate-800 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 dark:hover:text-navy-100 dark:focus:text-navy-100'">
                            Recent
                        </button>
                        <button @click="activeTab = 'tab-activity'"
                            class="btn h-8 rounded-full text-xs+ font-medium"
                            :class="activeTab === 'tab-activity' ?
                                'bg-primary/10 text-primary dark:bg-accent-light/10 dark:text-accent-light' :
                                'hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 hover:text-slate-800 focus:text-slate-800 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 dark:hover:text-navy-100 dark:focus:text-navy-100'">
                            Activity
                        </button>
                    </div>
                    <div class="tab-content mt-5">
                        <div x-show="activeTab === 'tab-recent'"
                            x-transition:enter="transition-all duration-500 easy-in-out"
                            x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                            x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                            <ol class="timeline line-space">
                                <li class="timeline-item">
                                    <div
                                        class="timeline-item-point rounded-full border-2 border-slate-300 dark:border-navy-400">
                                    </div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between sm:flex-row">
                                            <p class="font-medium leading-none text-slate-600 dark:text-navy-100">
                                                2 minute ago
                                            </p>
                                        </div>
                                        <div class="mt-4 grid grid-cols-3 gap-2">
                                            <img src="{{ asset('images/800x600.png') }}"
                                                class="rounded-lg object-cover object-center" alt="image" />
                                            <img src="{{ asset('images/800x600.png') }}"
                                                class="rounded-lg object-cover object-center" alt="image" />
                                            <img src="{{ asset('images/800x600.png') }}"
                                                class="rounded-lg object-cover object-center" alt="image" />
                                        </div>
                                        <div class="mt-3 flex items-center space-x-2">
                                            <div class="avatar h-6 w-6">
                                                <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                    alt="avatar" />
                                            </div>
                                            <p class="text-xs+">
                                                <span class="font-medium">Mores Clarke</span>
                                                <span class="text-slate-400 dark:text-navy-300">added 3 new
                                                    Photo</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-item">
                                    <div
                                        class="timeline-item-point rounded-full border-2 border-secondary dark:border-secondary-light">
                                    </div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between sm:flex-row">
                                            <p class="font-medium leading-none text-slate-600 dark:text-navy-100">
                                                a hour ago
                                            </p>
                                        </div>
                                        <div class="mt-4 flex items-center space-x-3">
                                            <div
                                                class="mask is-squircle flex h-11 w-11 items-center justify-center bg-secondary text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                                    Slow Music
                                                </p>
                                                <div class="flex text-xs text-slate-400 dark:text-navy-300">
                                                    <span>03:12</span>
                                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                                                    <span>8.32 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 flex items-center space-x-2">
                                            <div class="avatar h-6 w-6">
                                                <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                    alt="avatar" />
                                            </div>
                                            <p class="text-xs+">
                                                <span class="font-medium">Bill Musk </span>
                                                <span class="text-slate-400 dark:text-navy-300">
                                                    added a new Music</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-item">
                                    <div class="timeline-item-point rounded-full border-2 border-info"></div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between sm:flex-row">
                                            <p class="font-medium leading-none text-slate-600 dark:text-navy-100">
                                                a day ago
                                            </p>
                                        </div>
                                        <div class="mt-4 flex items-center space-x-3">
                                            <div
                                                class="mask is-squircle flex h-11 w-11 items-center justify-center bg-info text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                                    Final.fig
                                                </p>
                                                <div class="flex text-xs text-slate-400 dark:text-navy-300">
                                                    <span>45 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 flex items-center space-x-2">
                                            <div class="avatar h-6 w-6">
                                                <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                    alt="avatar" />
                                            </div>
                                            <p class="text-xs+">
                                                <span class="font-medium">John Doe </span>
                                                <span class="text-slate-400 dark:text-navy-300">
                                                    added a new file</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-item">
                                    <div
                                        class="timeline-item-point rounded-full border-2 border-slate-300 dark:border-navy-400">
                                    </div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between sm:flex-row">
                                            <p class="font-medium leading-none text-slate-600 dark:text-navy-100">
                                                2 day ago
                                            </p>
                                        </div>
                                        <div class="mt-4 grid grid-cols-3 gap-2">
                                            <img src="{{ asset('images/800x600.png') }}"
                                                class="rounded-lg object-cover object-center" alt="image" />
                                            <img src="{{ asset('images/800x600.png') }}"
                                                class="rounded-lg object-cover object-center" alt="image" />
                                            <img src="{{ asset('images/800x600.png') }}"
                                                class="rounded-lg object-cover object-center" alt="image" />
                                        </div>
                                        <div class="mt-3 flex items-center space-x-2">
                                            <div class="avatar h-6 w-6">
                                                <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                    alt="avatar" />
                                            </div>
                                            <p class="text-xs+">
                                                <span class="font-medium">Mores Clarke</span>
                                                <span class="text-slate-400 dark:text-navy-300">added 3 new
                                                    Photo</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-item">
                                    <div
                                        class="timeline-item-point rounded-full border-2 border-secondary dark:border-secondary-light">
                                    </div>
                                    <div class="timeline-item-content flex-1 pl-4">
                                        <div class="flex flex-col justify-between sm:flex-row">
                                            <p class="font-medium leading-none text-slate-600 dark:text-navy-100">
                                                a month ago
                                            </p>
                                        </div>
                                        <div class="mt-4 flex items-center space-x-3">
                                            <div
                                                class="mask is-squircle flex h-11 w-11 items-center justify-center bg-secondary text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium text-slate-700 dark:text-navy-100">
                                                    Slow Music
                                                </p>
                                                <div class="flex text-xs text-slate-400 dark:text-navy-300">
                                                    <span>03:12</span>
                                                    <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                                                    <span>8.32 MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 flex items-center space-x-2">
                                            <div class="avatar h-6 w-6">
                                                <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                    alt="avatar" />
                                            </div>
                                            <p class="text-xs+">
                                                <span class="font-medium">Bill Musk </span>
                                                <span class="text-slate-400 dark:text-navy-300">
                                                    added a new Music</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div x-show="activeTab === 'tab-activity'"
                            x-transition:enter="transition-all duration-500 easy-in-out"
                            x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                            x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                            <div class="mt-20 text-center">
                                <img class="mx-auto w-40"
                                    src="{{ asset('images/illustrations/empty-girl-box.svg') }}" alt="image" />
                                <div class="mt-5">
                                    <p class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                                        No any activity
                                    </p>
                                    <p class="text-slate-400 dark:text-navy-300">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed right-3 bottom-3 rounded-full bg-white dark:bg-navy-700">
        <button
            class="btn h-14 w-14 rounded-full bg-primary p-0 font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent-focus/90 sm:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
            </svg>
        </button>
    </div>

   

    <!-- datatables js  -->
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>

    <script>
        let table2 = new DataTable('#myTable2');
    </script>
</x-base-layout>
