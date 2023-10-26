@include("partials.r_header", [$title])   
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="rounded py-4">
                @if (DB::table('companies')->join('recruiters', 'recruiters.id', '=', 'companies.company_uid')->where('companies.status', '=', '0')->where('recruiters.id', '=', Auth::id())->count() > 0)
                    <a href="{{ route('recruiter_jobpost') }}" class="bg-indigo-600 text-white p-3 rounded-full">
                        Create Job a post
                    </a>
                @else
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="bg-indigo-600 text-white p-3 rounded-full" type="button">
                        Create Job a post
                    </button>
                    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6 text-center">
                                    <h3 class="inline-flex items-center justify-center text-xl font-semibold text-gray-900 mb-4">
                                        <i class="fa-solid fa-circle-info mr-3 text-blue-700"></i>
                                        Ooppss
                                    </h3>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Company Information not complete, <b>Setup now!</b></h3>
                                    <a href="{{ route('recruiter_createCompany') }}" data-modal-hide="popup-modal"  class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Update now
                                    </a>
                                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="bg-gray-50 rounded p-4 mt-4">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400" id="tabExample" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="all-tabs" type="button" role="tab" aria-controls="allTabs" aria-selected="false">All</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="active-tabs" type="button" role="tab" aria-controls="activeTabs" aria-selected="false">Active</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="inactive-tabs" type="button" role="tab" aria-controls="inactiveTabs" aria-selected="false">Inactive</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="archive-tabs" type="button" role="tab" aria-controls="archiveTabs" aria-selected="false">Archive</button>
                        </li>
                    </ul>
                </div>
                <div id="tabContentExample">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="allTabs" role="tabpanel" aria-labelledby="all-tabs">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="edit_tooltip_1_1" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="edit_tooltip_1_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_1_2" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye-slash"></i>
                                                <div id="inactive_tooltip_1_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to inactive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_1_3" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="inactive_tooltip_1_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="edit_tooltip_2_1" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="edit_tooltip_2_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_2_2" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye"></i>
                                                <div id="inactive_tooltip_2_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_2_3" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="inactive_tooltip_2_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-teal-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Archived</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_3_2" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-arrow-rotate-left"></i>
                                                <div id="inactive_tooltip_3_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to re-active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_3_3" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <div id="inactive_tooltip_3_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to permanent delete post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="edit_tooltip_4_1" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="edit_tooltip_4_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_4_2" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye"></i>
                                                <div id="inactive_tooltip_4_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to inactive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_4_3" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="inactive_tooltip_4_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="edit_tooltip_2_1" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="edit_tooltip_2_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_2_2" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye"></i>
                                                <div id="inactive_tooltip_2_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_2_3" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="inactive_tooltip_2_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="edit_tooltip_3_1" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="edit_tooltip_3_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_3_2" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye-slash"></i>
                                                <div id="inactive_tooltip_3_2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to inactive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="inactive_tooltip_3_3" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="inactive_tooltip_3_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Active --}}

                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="activeTabs" role="tabpanel" aria-labelledby="active-tabs">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_7" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_7" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_8" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye-slash"></i>
                                                <div id="tooltip_8" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to inactive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_9" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_9" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_10" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_10" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_11" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye-slash"></i>
                                                <div id="tooltip_11" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to inactive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_12" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_12" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_13" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_13" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_14" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye-slash"></i>
                                                <div id="tooltip_14" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to inactive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_15" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_15" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_16" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_16" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_17" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye-slash"></i>
                                                <div id="tooltip_17" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to inactive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_18" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_18" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_19" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_19" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_20" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye-slash"></i>
                                                <div id="tooltip_20" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to inactive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_21" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_21" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_22" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_22" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_23" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye-slash"></i>
                                                <div id="tooltip_23" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to inactive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_24" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_24" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Inactive --}}

                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="inactiveTabs" role="tabpanel" aria-labelledby="inactive-tabs">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_25" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_25" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_26" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye"></i>
                                                <div id="tooltip_26" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_27" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_27" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_28" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_28" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_29" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye"></i>
                                                <div id="tooltip_29" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_30" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_30" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_31" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_31" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_32" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye"></i>
                                                <div id="tooltip_32" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_33" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_33" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_34" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_34" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_35" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye"></i>
                                                <div id="tooltip_35" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_36" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_36" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_37" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_37" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_38" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye"></i>
                                                <div id="tooltip_38" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_39" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_39" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <a href="#edit" data-tooltip-target="tooltip_40" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <div id="tooltip_40" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to edit post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </a>
                                            <button type="submit" data-tooltip-target="tooltip_41" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-eye"></i>
                                                <div id="tooltip_41" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_42" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-box-archive"></i>
                                                <div id="tooltip_42" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to archive post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- Archived --}}


                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="archiveTabs" role="tabpanel" aria-labelledby="archive-tabs">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-teal-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Archived</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <button type="submit" data-tooltip-target="tooltip_45" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-arrow-rotate-left"></i>
                                                <div id="tooltip_45" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to re-active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_46" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <div id="tooltip_46" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to permanent delete post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-teal-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Archived</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <button type="submit" data-tooltip-target="tooltip_48" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-arrow-rotate-left"></i>
                                                <div id="tooltip_48" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to re-active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_49" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <div id="tooltip_49" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to permanent delete post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-teal-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Archived</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <button type="submit" data-tooltip-target="tooltip_52" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-arrow-rotate-left"></i>
                                                <div id="tooltip_52" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to re-active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_53" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <div id="tooltip_53" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to permanent delete post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-teal-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Archived</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <button type="submit" data-tooltip-target="tooltip_55" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-arrow-rotate-left"></i>
                                                <div id="tooltip_55" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to re-active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_56" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <div id="tooltip_56" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to permanent delete post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-teal-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Archived</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <button type="submit" data-tooltip-target="tooltip_58" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-arrow-rotate-left"></i>
                                                <div id="tooltip_58" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to re-active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_59" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <div id="tooltip_59" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to permanent delete post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                <div class="flex flex-col items-start justify-start px-8 py-4">
                                    <div class="inline-flex items-start mb-2">
                                        <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">Credit Analyst</h2>
                                            <p class="text-sm font-medium text-gray-700">Company Name</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                                        <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 105) }}<p>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="font-poppins ">
                                            <span class="bg-teal-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Archived</span>
                                            <span class="ml-2 text-gray-600 text-sm">1 day ago</span>
                                        </div>
                                        <div>
                                            <button type="submit" data-tooltip-target="tooltip_61" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                <i class="fa-solid fa-arrow-rotate-left"></i>
                                                <div id="tooltip_61" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to re-active post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                            <button type="submit" data-tooltip-target="tooltip_62" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <div id="tooltip_62" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    Click to permanent delete post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.r_footer')
    </div>
</div>
</body>
</html>