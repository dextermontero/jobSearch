@include("partials.r_header", [$title])   
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
                <div class="bg-gray-50 rounded flex flex-col">
                    <div class="flex flex-row items-center place-content-center justify-start md:justify-between px-4 py-4">
                        <i class="fa-solid fa-briefcase text-4xl text-green-800"></i>
                        <div class="flex flex-col md:items-center justify-start ml-5 md:ml-0">
                            <h2 class="text-gray-700 mt-2 text-2xl sm:text-3xl font-bold font-mono">100</h2>
                            <span class="text-gray-700 text-xl font-medium">Posted Jobs</span>
                        </div>
                    </div>
                    <hr>
                    <a href="{{ route('recruiter_post') }}" class="text-center p-2 text-blue-600 font-medium text-md hover:text-blue-800 hover:underline"><i class="fa-solid fa-eye"></i> View</a>
                </div>
                <div class="bg-gray-50 rounded flex flex-col">
                    <div class="flex flex-row items-center place-content-center justify-start md:justify-between px-4 py-4">
                        <i class="fa-solid fa-file text-4xl text-red-800"></i>
                        <div class="flex flex-col md:items-center justify-start ml-5 md:ml-0">
                            <h2 class="text-gray-700 mt-2 text-2xl sm:text-3xl font-bold font-mono">20</h2>
                            <span class="text-gray-700 text-xl font-medium">Applicants</span>
                        </div>
                    </div>
                    <hr>
                    <a href="{{ route('recruiter_post') }}" class="text-center p-2 text-blue-600 font-medium text-md hover:text-blue-800 hover:underline"><i class="fa-solid fa-eye"></i> View</a>
                </div>
                <div class="bg-gray-50 rounded flex flex-col">
                    <div class="flex flex-row items-center place-content-center justify-start md:justify-between px-4 py-4">
                        <i class="fa-solid fa-file-circle-check text-4xl text-green-800"></i>
                        <div class="flex flex-col md:items-center justify-start ml-5 md:ml-0">
                            <h2 class="text-gray-700 mt-2 text-2xl sm:text-3xl font-bold font-mono">10</h2>
                            <span class="text-gray-700 text-xl font-medium">Active Posted</span>
                        </div>
                    </div>
                    <hr>
                    <a href="{{ route('recruiter_post') }}" class="text-center p-2 text-blue-600 font-medium text-md hover:text-blue-800 hover:underline"><i class="fa-solid fa-eye"></i> View</a>
                </div>
                <div class="bg-gray-50 rounded flex flex-col">
                    <div class="flex flex-row items-center place-content-center justify-start md:justify-between px-4 py-4">
                        <i class="fa-solid fa-file-circle-xmark text-4xl text-red-800"></i>
                        <div class="flex flex-col md:items-center justify-start ml-5 md:ml-0">
                            <h2 class="text-gray-700 mt-2 text-2xl sm:text-3xl font-bold font-mono">5</h2>
                            <span class="text-gray-700 text-xl font-medium">Inactive Posted</span>
                        </div>
                    </div>
                    <hr>
                    <a href="{{ route('recruiter_post') }}" class="text-center p-2 text-blue-600 font-medium text-md hover:text-blue-800 hover:underline"><i class="fa-solid fa-eye"></i> View</a>
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
            {{-- Recent Applicants --}}
            <div class="mb-4 rounded bg-gray-50 p-4">
                <h2 class="text-xl font-bold font-poppins mb-4 px-2">Recent Applicants</h2>
                <hr>
                <div class="hidden xl:flex justify-between items-center px-2 py-3 font-poppins">
                    <div class="text-lg font-medium uppercase px-3 py-4 text-gray-600 w-[60%]">
                        Candidates
                    </div>
                    <div class="text-lg font-medium uppercase px-3 py-4 text-gray-600 w-[20%]">
                        Status
                    </div>
                    <div class="text-lg font-medium uppercase px-3 py-4 text-gray-600 w-[20%]">
                        Applied Date
                    </div>
                    <div class="text-lg text-center font-medium uppercase px-3 py-4 text-gray-600 w-[20%]">
                        Action
                    </div>
                </div>
                <hr class="hidden md:mb-4 md:block">
                <div class="px-2 py-2">
                    <div class="group">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center rounded-md group-hover:bg-gray-100 transition duration-[300ms]">
                            <div class="px-2 py-2 md:px-3 md:py-4 text-gray-600 w-full md:w-[60%]">
                                <div class="inline-flex items-center whitespace-wrap">
                                    <img src="{{ asset('assets/company/logo/default.png') }}" class="h-24 w-24 mr-2">
                                    <div class="flex flex-col">
                                        <p class="text-2xl font-bold group-hover:text-indigo-700">Dexter Montero</p>
                                        <p class="text-lg font-medium text-indigo-600">Social Media Marketing</p>
                                        <p class="text-sm"><i class="fa-solid fa-location-dot mr-2"></i>Philippines</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-1 md:px-3 md:py-4 text-gray-600 w-full md:w-[20%]">
                                <span class="text-blue-600 rounded-full font-bold tracking-wider">Applied</span>
                            </div>
                            <div class="px-3 py-3 md:px-3 md:py-4 text-gray-600 w-full md:w-[20%] ">
                                <span class="text-gray-600 rounded-full font-medium tracking-wider group-hover:text-gray-800">November 9, 2023</span>
                            </div>
                            <div class="px-3 py-1 md:px-3 md:py-4 mb-2 flex items-center justify-start w-full md:w-[20%]">
                                <a href="#" data-tooltip-target="approve_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-check"></i>
                                    <div id="approve_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Approve Applicantion
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="reject_1"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-rotate"></i>
                                    <div id="reject_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Reject Applicantion
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="download_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-download"></i>
                                    <div id="download_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Download CS
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="remove_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-x"></i>
                                    <div id="remove_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Remove
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="group">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center rounded-md group-hover:bg-gray-100 transition duration-[300ms]">
                            <div class="px-2 py-2 md:px-3 md:py-4 text-gray-600 w-full md:w-[60%]">
                                <div class="inline-flex items-center whitespace-wrap">
                                    <img src="{{ asset('assets/company/logo/default.png') }}" class="h-24 w-24 mr-2">
                                    <div class="flex flex-col">
                                        <p class="text-2xl font-bold group-hover:text-indigo-700">Dexter Montero</p>
                                        <p class="text-lg font-medium text-indigo-600">Social Media Marketing</p>
                                        <p class="text-sm"><i class="fa-solid fa-location-dot mr-2"></i>Philippines</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-1 md:px-3 md:py-4 text-gray-600 w-full md:w-[20%]">
                                <span class="text-green-600 rounded-full font-bold tracking-wider">Approved</span>
                            </div>
                            <div class="px-3 py-3 md:px-3 md:py-4 text-gray-600 w-full md:w-[20%] ">
                                <span class="text-gray-600 rounded-full font-medium tracking-wider group-hover:text-gray-800">November 9, 2023</span>
                            </div>
                            <div class="px-3 py-1 md:px-3 md:py-4 mb-2 flex items-center justify-start w-full md:w-[20%]">
                                <a href="#" data-tooltip-target="approve_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-check"></i>
                                    <div id="approve_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Approve Applicantion
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="reject_1"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-arrow-rotate-left"></i>
                                    <div id="reject_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Undo Approved
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="download_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-download"></i>
                                    <div id="download_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Download CS
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="remove_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-x"></i>
                                    <div id="remove_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Remove
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="group">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center rounded-md group-hover:bg-gray-100 transition duration-[300ms]">
                            <div class="px-2 py-2 md:px-3 md:py-4 text-gray-600 w-full md:w-[60%]">
                                <div class="inline-flex items-center whitespace-wrap">
                                    <img src="{{ asset('assets/company/logo/default.png') }}" class="h-24 w-24 mr-2">
                                    <div class="flex flex-col">
                                        <p class="text-2xl font-bold group-hover:text-indigo-700">Dexter Montero</p>
                                        <p class="text-lg font-medium text-indigo-600">Social Media Marketing</p>
                                        <p class="text-sm"><i class="fa-solid fa-location-dot mr-2"></i>Philippines</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-1 md:px-3 md:py-4 text-gray-600 w-full md:w-[20%]">
                                <span class="text-blue-600 rounded-full font-bold tracking-wider">Applied</span>
                            </div>
                            <div class="px-3 py-3 md:px-3 md:py-4 text-gray-600 w-full md:w-[20%] ">
                                <span class="text-gray-600 rounded-full font-medium tracking-wider group-hover:text-gray-800">November 9, 2023</span>
                            </div>
                            <div class="px-3 py-1 md:px-3 md:py-4 mb-2 flex items-center justify-start w-full md:w-[20%]">
                                <a href="#" data-tooltip-target="approve_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-check"></i>
                                    <div id="approve_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Approve Applicantion
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="reject_1"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-rotate"></i>
                                    <div id="reject_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Reject Applicantion
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="download_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-download"></i>
                                    <div id="download_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Download CS
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="remove_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 ">
                                    <i class="fa-solid fa-x"></i>
                                    <div id="remove_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Remove
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
</body>
</html>