<header>
    <nav class="z-30 bg-gray-900 py-4 px-1 mb-10 text-gray-300">
        <div class="flex flex-wrap justify-between items-center mx-auto container">
            <a href="/" class="flex items-center">
                <img src="" class="h-8 mr-3" alt="" />
                <span class="text-3xl font-bold whitespace-nowrap text-indigo-600">JobSearch</span>
            </a>
            <div class="flex md:order-2">
                @guest
                    <ul class="inline-flex items-center font-medium">
                        <li class="mr-3"><a href="/recruitment" class="w-full text-lg hover:text-indigo-700">Post Job</a></li>
                        <li class="mr-3"><a href="/login" class="w-full text-lg hover:text-indigo-700">Sign In</a></li>
                    </ul>
                @endguest
                @auth
                <ul class="inline-flex">
                    <li class="ml-5">
                        <button id="msgDropDown" data-dropdown-toggle="msgDropDownMenu" class="relative text-left text-indigo-600 block hover:text-indigo-800 mt-2 p-2 w-full">
                            <i class="fa-solid fa-envelope text-xl text-gray-300"></i>
                            <span class="sr-only">Messages</span>
                            <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-normal text-white bg-red-700 rounded-full -top-1 -right-5 mr-3">
                                20
                            </div>
                        </button>
                        <div id="msgDropDownMenu" class="z-50 hidden font-normal bg-gray-200 divide-y divide-gray-100 rounded-lg shadow-md w-80 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="bg-gray-200 w-full rounded-lg">
                                <div class="flex justify-between border-2 border-b rounded-lg">
                                    <h2 class="p-2 font-medium text-gray-800">Messages</h2>
                                    <div class="p-2 mr-2">
                                        <button type="submit" class="text-blue-600 font-medium">Mark All</button>
                                    </div>
                                </div>
                                <div class="p-2 h-[27.5rem] overflow-y-auto scrollbar-thin scrollbar-thumb-gray-900 scrollbar-track-gray-100">
                                    <a href="#company/messages" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                    <a href="#company/messages" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                    <a href="#company/messages" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                    <a href="#company/messages" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                    <a href="#company/messages" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                </div>                                   
                            </div>
                        </div>
                    </li>
                    <li class="ml-2">
                        <button id="notifyDropDown" data-dropdown-toggle="notifyDropdownMenu" class="relative text-left text-indigo-600 block hover:text-indigo-800 mt-2 p-2 w-full">
                            <i class="fa-solid fa-bell text-xl text-gray-300"></i>
                            <span class="sr-only">Notifications</span>
                            <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-normal text-white bg-red-700 rounded-full -top-1 -right-5 mr-3">
                                20
                            </div>
                        </button>
                        <div id="notifyDropdownMenu" class="z-50 hidden font-normal bg-gray-200 divide-y divide-gray-100 rounded-lg shadow-md w-80 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="bg-gray-200 w-full rounded-lg">
                                <div class="flex justify-between border-2 border-b rounded-lg">
                                    <h2 class="p-2 font-medium text-gray-800">Notifications</h2>
                                    <div class="p-2 mr-2">
                                        <button type="submit" class="text-blue-600 font-medium">Mark all</button>
                                    </div>
                                </div>
                                <div class="p-2 h-[27.5rem] overflow-y-auto scrollbar-thin scrollbar-thumb-gray-900 scrollbar-track-gray-100">
                                    <a href="#notification" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                    <a href="#notification" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                    <a href="#notification" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                    <a href="#notification" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                    <a href="#notification" class="flex flex-1 items-center bg-white rounded-md shadow-sm border-2 border-white hover:border-indigo-700 mb-2">
                                        <div class="p-1 flex justify-between items-center">
                                            <img src="{{ asset('assets/job/company_logo/default.png')}}" class="w-14 h-16" alt="Company Logo">
                                            <div class="ml-2 order-1">
                                                <h2 class="font-medium text-md text-gray-700">Company Name</h2>
                                                <div class="flex justify-between items-center">
                                                    <div class="truncate w-40 text-gray-600">
                                                        asdasdaasdasdasdasasdasdas
                                                    </div>
                                                    <span class="text-gray-500 text-sm ">1 day</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-end order-2 text-blue-500 mr-2 text-[8px] font-thin">
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </a>
                                </div>                                   
                            </div>
                        </div>
                    </li>
                    <li class="pr-1 ml-2">
                        <button id="userDropDown" data-dropdown-toggle="userDropDownMenu" class="relative text-left text-indigo-600 block hover:text-indigo-800 mt-2 p-2 w-full">
                            <div class="inline-flex justify-center items-center text-gray-300">
                                <img src="{{ asset('assets/profiles/user_default.png')}}" class="h-6 w-6 rounded-full shadow-md">
                                <div class="absolute inline-flex items-center justify-center w-3 h-3 text-xs font-normal text-white bg-gray-700 rounded-full top-6 left-6 mr-3">
                                    <i class="fa-solid fa-chevron-down text-[8px]"></i>
                                </div>
                            </div>
                        </button>
                        <div id="userDropDownMenu" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-md w-80 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="bg-white w-full rounded-lg">
                                <ul>
                                    <li>
                                        <a href="#profile" class="inline-flex items-center text-lg px-4 text-gray-700 hover:text-gray-900 w-full hover:bg-gray-200 p-2 font-medium rounded-t-lg">
                                            <i class="fa-solid fa-address-card mr-3 text-md"></i> 
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#history" class="inline-flex items-center text-lg px-4 text-gray-700 hover:text-gray-900 w-full hover:bg-gray-200 p-2 font-medium">
                                            <i class="fa-solid fa-clock-rotate-left mr-3 text-md"></i>
                                            Application History
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#myreviews" class="inline-flex items-center text-lg px-4 text-gray-700 hover:text-gray-900 w-full hover:bg-gray-200 p-2 font-medium">
                                            <i class="fa-solid fa-star mr-3 text-md"></i>
                                            My Reviews
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings" class="inline-flex items-center text-lg px-4 text-gray-700 hover:text-gray-900 w-full hover:bg-gray-200 p-2 font-medium rounded-b-lg">
                                            <i class="fa-solid fa-gear mr-3 text-md"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <hr class="my-0.5 p-0 m-0 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="inline-flex items-center text-lg px-4 text-gray-700 hover:text-gray-900 w-full hover:bg-gray-200 p-2 font-medium rounded-b-lg">
                                                <i class="fa-solid fa-arrow-right-from-bracket mr-3 text-md text-red-500"></i>
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>                   
                @endauth
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center mr-2 mt-1 p-4 w-10 h-10 justify-center text-sm text-indigo-600 rounded-lg md:hidden hover:bg-indigo-800 hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col w-full rounded-md md:p-0 text-left md:flex-row sm:bg-inherit md:bg-inherit lg:bg-inherit xl:bg-inherit bg-gray-800 sm:bg-gray-800">
                    <li class="pr-3 ml-5"><a href="/companies/reviews" class="block pl-2 pt-3 pb-3 hover:text-indigo-800 text-lg">Company Reviews</a></li>
                    <li class="pr-3 ml-5"><a href="/companies/salaries" class="block pl-2 pt-3 pb-3 hover:text-indigo-800 text-lg">Find Salaries</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>