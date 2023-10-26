<ul class="inline-flex items-center font-medium">
    <li>
        @if (DB::table('companies')->join('recruiters', 'recruiters.id', '=', 'companies.company_uid')->where('companies.status', '=', '0')->where('recruiters.id', '=', Auth::id())->count() > 0)
            <a href="{{ route('recruiter_jobpost') }}" class="bg-indigo-600 text-lg px-4 py-1 mr-4 rounded-full text-gray-200 font-poppins font-medium hover:bg-indigo-700 hover:text-gray-300">
                Create Job a post
            </a>
        @else
            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="bg-indigo-600 text-lg px-4 py-1 mr-4 rounded-full text-gray-200 font-poppins font-medium hover:bg-indigo-700 hover:text-gray-300" type="button">
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
    </li>
    <li class="pr-1 ml-2">
        <button id="userDropDown" data-dropdown-toggle="userDropDownMenu" class="relative flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
            @foreach(App\Models\Recruiter::select('recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname', 'recruiters.email')->join('recruiter_information', 'recruiter_information.uid', '=', 'recruiters.id')->get(['recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname']); as $recruiter)                              
                <div class="inline-flex justify-center items-center text-gray-300">
                    <img class="h-8 w-8 rounded-full shadow-md" src="{{ asset('assets/profiles/'.$recruiter->img_profile)}}" alt="{{ Str::ucfirst($recruiter->firstname)}} {{ Str::ucfirst($recruiter->lastname)}}">
                    <div class="absolute inline-flex items-center justify-center w-3 h-3 text-xs font-normal text-white bg-gray-700 rounded-full top-6 left-6 mr-3">
                        <i class="fa-solid fa-chevron-down text-[8px]"></i>
                    </div>                
                </div>
            @endforeach
        </button>
        <div id="userDropDownMenu" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-md w-60 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3" role="none">
                @foreach(App\Models\Recruiter::select('recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname', 'recruiters.email')->join('recruiter_information', 'recruiter_information.uid', '=', 'recruiters.id')->get(['recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname']); as $recruiter)
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                    {{ Str::ucfirst($recruiter->firstname)}} {{ Str::ucfirst($recruiter->lastname)}}
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    {{ $recruiter->email }}
                </p>                                
                @endforeach
            </div>
            <ul class="py-1" role="none">
                <li>
                    <a href="#" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 inline-flex items-center w-full" role="menuitem">
                        <i class="fa-solid fa-address-card mr-3 text-md"></i> 
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 inline-flex items-center w-full" role="menuitem">
                        <i class="fa-solid fa-gear mr-3 text-md"></i>
                        Settings
                    </a>
                </li>
                <li>
                    <a href="{{ route('recruiter_logout') }}" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 inline-flex items-center w-full" role="menuitem">
                        <i class="fa-solid fa-arrow-right-from-bracket mr-3 text-md text-red-500"></i>
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </li>
</ul>