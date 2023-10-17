@include("partials.r_header", [$title])   
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="bg-gray-50 rounded flex flex-col">
                    <div class="flex flex-wrap items-center place-content-center md:justify-between px-8 py-4">
                        <i class="fa-solid fa-file-circle-check text-4xl text-green-800"></i>
                        <div class="flex flex-col items-center">
                            <h2 class="mt-2 text-2xl sm:text-3xl font-bold font-mono">10</h2>
                            <span class="text-green-600 text-xl font-medium">Active</span>
                        </div>
                    </div>
                    <hr>
                    <a href="#" class="text-center p-2 text-blue-600 font-medium text-md hover:text-blue-800 hover:underline"><i class="fa-solid fa-eye"></i> View</a>
                </div>
                <div class="bg-gray-50 rounded flex flex-col">
                    <div class="flex flex-wrap items-center place-content-center md:justify-between px-8 py-4">
                        <i class="fa-solid fa-file-circle-xmark text-4xl text-red-800"></i>
                        <div class="flex flex-col items-center">
                            <h2 class="mt-2 text-2xl sm:text-3xl font-bold font-mono">10</h2>
                            <span class="text-red-600 text-xl font-medium">Inactive</span>
                        </div>
                    </div>
                    <hr>
                    <a href="#" class="text-center p-2 text-blue-600 font-medium text-md hover:text-blue-800 hover:underline"><i class="fa-solid fa-eye"></i> View</a>
                </div>
                <div class="bg-gray-50 rounded flex flex-col">
                    <div class="flex flex-wrap items-center place-content-center md:justify-between px-8 py-4">
                        <i class="fa-solid fa-box-archive text-4xl text-blue-800"></i>
                        <div class="flex flex-col items-center">
                            <h2 class="mt-2 text-2xl sm:text-3xl font-bold font-mono">10</h2>
                            <span class="text-blue-600 text-xl font-medium">Archive</span>
                        </div>
                    </div>
                    <hr>
                    <a href="#" class="text-center p-2 text-blue-600 font-medium text-md hover:text-blue-800 hover:underline"><i class="fa-solid fa-eye"></i> View</a>
                </div>
            </div>
            {{-- <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                </p>
            </div> --}}
            <div class="grid md:grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-44 col-span-2">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-44 col-span-2 md:col-span-1">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </p>
                </div>
            </div>
        </div>
        @include('partials.r_footer')
    </div>
</div>
