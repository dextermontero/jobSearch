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