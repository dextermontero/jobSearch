@include("partials.r_header", [$title])   
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="mb-4 rounded bg-gray-50 p-4">
                <h2 class="text-xl font-bold font-poppins mb-4 px-2">Candidate Applicants</h2>
                <hr>
                <div class="hidden xl:flex justify-between items-center px-2 py-3 font-poppins">
                    <div class="text-lg font-medium uppercase px-3 py-4 text-gray-600 w-[40%]">
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
                <div class="px-2 py-2 divide-y">
                    <div class="group">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center rounded-md group-hover:bg-gray-100 transition duration-[300ms]">
                            <div class="px-2 py-2 md:px-3 md:py-4 text-gray-600 w-full md:w-[40%]">
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
                                <a href="/recruiter/applicants/1" data-tooltip-target="view_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-600 group-hover:bg-white">
                                    <i class="fa-solid fa-eye"></i>
                                    <div id="view_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-600">View Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="approve_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-teal-500 group-hover:bg-white">
                                    <i class="fa-solid fa-check"></i>
                                    <div id="approve_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-teal-400">Approve Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="reject_1"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-400 group-hover:bg-white">
                                    <i class="fa-solid fa-rotate"></i>
                                    <div id="reject_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-400">Reject Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="download_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-500 group-hover:bg-white">
                                    <i class="fa-solid fa-download"></i>
                                    <div id="download_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-400">Download CV</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <form >
                                    @csrf
                                    <button type="submit" id="archive" name="archive" data-tooltip-target="archive_1" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-500 group-hover:bg-white">
                                        <i class="fa-solid fa-x"></i>
                                    </button>
                                    <div id="archive_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-500">Remove</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center rounded-md group-hover:bg-gray-100 transition duration-[300ms]">
                            <div class="px-2 py-2 md:px-3 md:py-4 text-gray-600 w-full md:w-[40%]">
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
                                <a href="/recruiter/applicants/2" data-tooltip-target="view_2" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-600 group-hover:bg-white">
                                    <i class="fa-solid fa-eye"></i>
                                    <div id="view_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-600">View Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="approve_2" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-teal-500 group-hover:bg-white">
                                    <i class="fa-solid fa-check"></i>
                                    <div id="approve_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-teal-400">Approve Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="reject_2"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-400 group-hover:bg-white">
                                    <i class="fa-solid fa-rotate"></i>
                                    <div id="reject_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-400">Reject Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="download_2" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-500 group-hover:bg-white">
                                    <i class="fa-solid fa-download"></i>
                                    <div id="download_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-400">Download CV</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <form >
                                    @csrf
                                    <button type="submit" id="archive" name="archive" data-tooltip-target="archive_2" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-500 group-hover:bg-white">
                                        <i class="fa-solid fa-x"></i>
                                    </button>
                                    <div id="archive_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-500">Remove</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center rounded-md group-hover:bg-gray-100 transition duration-[300ms]">
                            <div class="px-2 py-2 md:px-3 md:py-4 text-gray-600 w-full md:w-[40%]">
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
                                <a href="/recruiter/applicants/3" data-tooltip-target="view_3" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-600 group-hover:bg-white">
                                    <i class="fa-solid fa-eye"></i>
                                    <div id="view_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-600">View Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="approve_3" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-teal-500 group-hover:bg-white">
                                    <i class="fa-solid fa-check"></i>
                                    <div id="approve_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-teal-400">Approve Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="reject_3"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-400 group-hover:bg-white">
                                    <i class="fa-solid fa-rotate"></i>
                                    <div id="reject_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-400">Reject Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="download_3" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-500 group-hover:bg-white">
                                    <i class="fa-solid fa-download"></i>
                                    <div id="download_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-400">Download CV</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <form>
                                    @csrf
                                    <button type="submit" id="archive" name="archive" data-tooltip-target="archive_3" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-500 group-hover:bg-white">
                                        <i class="fa-solid fa-x"></i>
                                    </button>
                                    <div id="archive_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-500">Remove</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center rounded-md group-hover:bg-gray-100 transition duration-[300ms]">
                            <div class="px-2 py-2 md:px-3 md:py-4 text-gray-600 w-full md:w-[40%]">
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
                                <span class="text-red-600 rounded-full font-bold tracking-wider">Rejected</span>
                            </div>
                            <div class="px-3 py-3 md:px-3 md:py-4 text-gray-600 w-full md:w-[20%] ">
                                <span class="text-gray-600 rounded-full font-medium tracking-wider group-hover:text-gray-800">November 9, 2023</span>
                            </div>
                            <div class="px-3 py-1 md:px-3 md:py-4 mb-2 flex items-center justify-start w-full md:w-[20%]">
                                <a href="/recruiter/applicants/4" data-tooltip-target="view_4" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-600 group-hover:bg-white">
                                    <i class="fa-solid fa-eye"></i>
                                    <div id="view_4" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-600">View Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="approve_4" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-teal-500 group-hover:bg-white">
                                    <i class="fa-solid fa-check"></i>
                                    <div id="approve_4" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-teal-400">Approve Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="reject_4"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-400 group-hover:bg-white">
                                    <i class="fa-solid fa-rotate"></i>
                                    <div id="reject_4" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-400">Undo Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="download_4" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-500 group-hover:bg-white">
                                    <i class="fa-solid fa-download"></i>
                                    <div id="download_4" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-400">Download CV</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <form>
                                    @csrf
                                    <button type="submit" id="archive" name="archive" data-tooltip-target="archive_3" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-500 group-hover:bg-white">
                                        <i class="fa-solid fa-x"></i>
                                    </button>
                                    <div id="archive_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-500">Remove</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center rounded-md group-hover:bg-gray-100 transition duration-[300ms]">
                            <div class="px-2 py-2 md:px-3 md:py-4 text-gray-600 w-full md:w-[40%]">
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
                                <span class="text-red-600 rounded-full font-bold tracking-wider">Removed</span>
                            </div>
                            <div class="px-3 py-3 md:px-3 md:py-4 text-gray-600 w-full md:w-[20%] ">
                                <span class="text-gray-600 rounded-full font-medium tracking-wider group-hover:text-gray-800">November 9, 2023</span>
                            </div>
                            <div class="px-3 py-1 md:px-3 md:py-4 mb-2 flex items-center justify-start w-full md:w-[20%]">
                                <a href="/recruiter/applicants/5" data-tooltip-target="view_5" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-600 group-hover:bg-white">
                                    <i class="fa-solid fa-eye"></i>
                                    <div id="view_5" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-600">View Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="approve_5" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-teal-500 group-hover:bg-white">
                                    <i class="fa-solid fa-check"></i>
                                    <div id="approve_5" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-teal-400">Approve Application</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="reject_5"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-400 group-hover:bg-white">
                                    <i class="fa-solid fa-rotate"></i>
                                    <div id="reject_5" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-400">Undo Remove</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="download_5" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-500 group-hover:bg-white">
                                    <i class="fa-solid fa-download"></i>
                                    <div id="download_5" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-blue-400">Download CV</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <form>
                                    @csrf
                                    <button type="submit" id="archive" name="archive" data-tooltip-target="archive_3" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-500 group-hover:bg-white">
                                        <i class="fa-solid fa-x"></i>
                                    </button>
                                    <div id="archive_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-500">Remove</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.r_footer')
    </body>
</html>