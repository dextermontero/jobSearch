<ul class="inline-flex items-center font-medium">
    <li>
        <a href="#createpost" class="bg-indigo-600 p-3 rounded-full text-gray-200 hover:bg-indigo-700 hover:text-white">Create Post<a>
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