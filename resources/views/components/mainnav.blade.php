<header>
    <nav class="z-30 bg-gray-900 py-4 px-1 text-gray-300">
        <div class="flex flex-wrap justify-between items-center mx-auto container">
            <a href="/" class="flex items-center">
                <img src="" class="h-8 mr-3" alt="" />
                <span class="text-3xl font-bold whitespace-nowrap text-indigo-600">JobSearch</span>
            </a>
            <div class="flex md:order-2">
                @if(Auth::guard('recruiter')->check())
                    <ul class="inline-flex items-center font-medium">
                        <li>
                            <a href="#createpost" class="bg-indigo-600 p-3 rounded-full text-gray-200 hover:bg-indigo-700 hover:text-white">Create Post<a>
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
                                            <a href="#settings" class="inline-flex items-center text-lg px-4 text-gray-700 hover:text-gray-900 w-full hover:bg-gray-200 p-2 font-medium rounded-b-lg">
                                                <i class="fa-solid fa-gear mr-3 text-md"></i>
                                                Settings
                                            </a>
                                        </li>
                                        <hr class="my-0.5 p-0 m-0 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
                                        <li>
                                            <form action="{{ route('recruiter_logout') }}" method="POST">
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
                @elseif(Auth::guard('web')->check())
                    <x-usernav></x-usernav>
                @else
                    <ul class="inline-flex items-center font-medium">
                        <li class="mr-3"><a href="/recruitment" class="w-full text-lg hover:text-indigo-700">Post Job</a></li>
                        <li class="mr-3"><a href="/login" class="w-full text-lg hover:text-indigo-700">Sign In</a></li>
                    </ul>
                @endif
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