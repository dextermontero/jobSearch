@include("partials.r_header", [$title])   
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="rounded">
                @if (DB::table('companies')->join('recruiters', 'recruiters.id', '=', 'companies.company_uid')->where('companies.status', '=', 0, 'AND', 'recruiters.id', '=', Auth::id())->count() > 0)
                    <div class="flex justify-end mb-4">
                        <button type="button" data-modal-target="add-more-company" data-modal-toggle="add-more-company" class="bg-blue-500 px-3 py-2 text-white rounded-lg">
                            <i class="fa-solid fa-plus"></i>
                            Add Company
                        </button>
                    </div>
                    <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>

                    <!-- Main modal -->
                    <div id="add-more-company" tabindex="-1" data-modal-backdrop="static" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-more-company">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-5 py-2 lg:px-5">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Search Company</h3>
                                    <form class="space-y-1 mb-4" action="#">
                                        <div>
                                            <label for="company_name" class="block mb-2 text-md font-medium text-gray-900 ">Company Name</label>
                                            <input type="company_name" name="company_name" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" placeholder="Company Name">
                                        </div>
                                    </form>
                                    <div class="h-80 overflow-y-auto mb-4 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100 scrollbar-rounded-full p-2">
                                        <a href="#1" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name asdasdasdas asdasdsadasdas asdas</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600 whitespace-nowrap">
                                                        <i class="fa-solid fa-plus"></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#2" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600">
                                                        <i class="fa-solid fa-plus "></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#3" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600">
                                                        <i class="fa-solid fa-plus "></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#4" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600">
                                                        <i class="fa-solid fa-plus "></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#5" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600">
                                                        <i class="fa-solid fa-plus "></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex justify-end divide-y-2 mb-2">
                                        <a href="{{ route('recruiter_createCompany') }}" class="bg-blue-500 text-gray-100 py-2 px-3 rounded-full font-medium hover:bg-blue-600">
                                            <i class="fa-solid fa-plus mr-2"></i>Add other Company
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex justify-end">
                        <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-green-500 px-3 py-2 text-white rounded-lg">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Search Company
                        </button>
                    </div>
                    <div class="flex items-center justify-center h-[28rem] mb-4 rounded dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            No Company Data
                        </p>
                    </div>
                    {{-- Modal --}}
                    <!-- Main modal -->
                    <div id="authentication-modal" tabindex="-1" data-modal-backdrop="static" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-5 py-2 lg:px-5">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Search Company</h3>
                                    <form class="space-y-1 mb-4" action="#">
                                        <div>
                                            <label for="company_name" class="block mb-2 text-md font-medium text-gray-900 ">Company Name</label>
                                            <input type="company_name" name="company_name" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" placeholder="Company Name">
                                        </div>
                                    </form>
                                    <div class="h-80 overflow-y-auto mb-4 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100 scrollbar-rounded-full p-2">
                                        <a href="#1" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name asdasdasdas asdasdsadasdas asdas</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600 whitespace-nowrap">
                                                        <i class="fa-solid fa-plus"></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#2" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600">
                                                        <i class="fa-solid fa-plus "></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#3" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600">
                                                        <i class="fa-solid fa-plus "></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#4" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600">
                                                        <i class="fa-solid fa-plus "></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#5" class="group">
                                            <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                                                <img src="{{ asset('assets/company/logo/default.png') }}" class="h-16 w-16 mr-3" alt="">
                                                <div class="flex justify-between items-center w-full">
                                                    <div class="">
                                                        <h2 class="text-gray-700 text-md font-medium">Company Name</h2>
                                                        <span class="text-gray-600 text-sm font-poppins">Country</span>
                                                    </div>
                                                    <div class="text-right text-green-500 mr-3 group-hover:text-green-600">
                                                        <i class="fa-solid fa-plus "></i>
                                                        Add
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex justify-end divide-y-2 mb-2">
                                        <a href="{{ route('recruiter_createCompany') }}" class="bg-blue-500 text-gray-100 py-2 px-3 rounded-full font-medium hover:bg-blue-600">
                                            <i class="fa-solid fa-plus mr-2"></i>Add your Company
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        @include('partials.r_footer')
    </div>
</div>
</body>
</html>
