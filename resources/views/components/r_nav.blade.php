@if (Auth::guard('recruiter')->check())
<nav class="fixed top-0 z-50 w-full bg-gray-900 py-4 px-1 text-gray-300">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="recruiter-sidebar" data-drawer-toggle="recruiter-sidebar" aria-controls="recruiter-sidebar" type="button" class="inline-flex items-center p-3 text-sm text-gray-400 rounded-lg sm:hidden hover:bg-indigo-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-700 ">
                    <span class="sr-only">Open sidebar</span>
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
                <a href="/recruiter/dashboard" class="flex ml-2 md:mr-24">
                    <img src="/" class="h-8 mr-3" alt="" />
                    <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap text-indigo-600">JobSearch</span>
                </a>
            </div>
                <div class="flex items-center">
                    <div class="flex items-center ml-3">
                        <div class="inline-flex items-center">
                            @if (url()->current() != route('recruiter_post'))
                                @if (DB::table('companies')->join('recruiters', 'recruiters.id', '=', 'companies.recruiter_id')->where('companies.status', '=', '1')->where('recruiters.id', '=', Auth::id())->count() > 0)
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
                                                    <a href="{{ route('recruiter_companyAll') }}" data-modal-hide="popup-modal"  class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Update now
                                                    </a>
                                                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                @foreach(App\Models\Recruiter::select('recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname', 'recruiters.email')->join('recruiter_information', 'recruiter_information.uid', '=', 'recruiters.id')->where('recruiters.id', Auth::id())->get(['recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname']); as $recruiter)                              
                                    <img class="w-8 h-8 rounded-full" src="{{ asset('assets/profiles/'.$recruiter->img_profile)}}" alt="{{ Str::ucfirst($recruiter->firstname)}} {{ Str::ucfirst($recruiter->lastname)}}">
                                @endforeach
                            </button>
                        </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            @foreach(App\Models\Recruiter::select('recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname', 'recruiters.email')->join('recruiter_information', 'recruiter_information.uid', '=', 'recruiters.id')->where('recruiters.id', Auth::id())->get(['recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname']); as $recruiter)
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
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Profile</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                            </li>
                            <li>
                                <a href="{{ route('recruiter_logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="recruiter-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-900 border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto mt-8 bg-gray-900 dark:bg-gray-800">
        <div class="mb-5 flex flex-col items-center justify-center">
            @foreach(App\Models\Recruiter::select('recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname', 'recruiters.email')->join('recruiter_information', 'recruiter_information.uid', '=', 'recruiters.id')->where('recruiters.id', Auth::id())->get(['recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname']); as $recruiter)
                <img src="{{ asset('assets/profiles/'.$recruiter->img_profile)}}" class="h-24 w-24 shadow-md rounded-lg mb-2" alt="{{ Str::ucfirst($recruiter->firstname)}} {{ Str::ucfirst($recruiter->lastname)}}">
                <h2 class="text-xl text-gray-200 font-bold subpixel-antialiased font-poppins text-center">{{ Str::ucfirst($recruiter->firstname)}} {{ Str::ucfirst($recruiter->lastname)}}</h2>
                <span class="font-medium antialiased tracking-wide text-blue-500">Recruiter</span>
            @endforeach
        </div>
        <ul class="space-y-2 font-medium">
            @if (url()->current() === route('recruiter_dashboard'))
                <li class="bg-gray-700 rounded-lg border-r-2 border-l-2 border-indigo-700">
            @else
                <li class="border-r-2 border-l-2 border-gray-900">
            @endif
            
                <a href="{{ route('recruiter_dashboard') }}" class="flex items-center p-2 text-gray-200 rounded-lg hover:bg-gray-700 group">
                    <i class="fa-solid fa-table-columns flex-shrink-0 w-5 h-5 text-lg text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('recruiter_applicant') }}" class="flex items-center p-2 text-gray-200 rounded-lg hover:bg-gray-700 group">
                    <i class="fa-solid fa-users flex-shrink-0 w-5 h-5 text-lg text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Applicants</span>
                </a>
            </li>
            @if (url()->current() === route('recruiter_post'))
                <li class="bg-gray-700 rounded-lg border-r-2 border-l-2 border-indigo-700">
            @else
                <li class="border-r-2 border-l-2 border-gray-900">
            @endif
                <a href="{{ route('recruiter_post') }}" class="flex items-center p-2 text-gray-200 rounded-lg hover:bg-gray-700 group">
                    <i class="fa-solid fa-pencil flex-shrink-0 w-5 h-5 text-lg text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Job Post</span>
                    {{-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> --}}
                </a>
            </li>
            @if (url()->current() === route('recruiter_companyAll'))
                <li class="bg-gray-700 rounded-lg border-r-2 border-l-2 border-indigo-700">
            @else
                <li class="border-r-2 border-l-2 border-gray-900">
            @endif
                <a href="{{ route('recruiter_companyAll') }}" class="flex items-center p-2 text-gray-200 rounded-lg hover:bg-gray-700 group">
                    <i class="fa-solid fa-building flex-shrink-0 w-5 h-5 text-lg text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Company</span>
                    {{-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-200 rounded-lg hover:bg-gray-700 group">
                    <i class="fa-solid fa-gears flex-shrink-0 w-5 h-5 text-lg text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ route('recruiter_logout') }}" class="flex items-center p-2 text-gray-200 rounded-lg hover:bg-gray-700 group">
                    <i class="fa-solid fa-right-from-bracket flex-shrink-0 w-5 h-5 text-lg text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-red-600 dark:group-hover:text-white"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

@else 
    <nav class="bg-gray-900 py-4 px-1 text-gray-300 z-30">
        <div class="flex flex-wrap justify-between items-center mx-auto container">
            <a href="/recruitment" class="flex items-center mr-4">
                <img src="" class="h-8 mr-3" alt="" />
                <span class="text-3xl font-bold whitespace-nowrap text-indigo-600">JobSearch</span>
            </a>
            <div class="flex md:order-2">
                <ul class="inline-flex items-center font-medium">
                    <li class="mr-4"><a href="/careers" class="w-full hover:text-indigo-800 text-lg">Find jobs</a></li>
                    <li class="mr-4"><a href="/recruiter/login" class="w-full hover:text-indigo-800 text-lg">Sign In</a></li>
                </ul>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center mr-2 mt-1 p-4 w-10 h-10 justify-center text-sm text-indigo-600 rounded-lg md:hidden hover:bg-indigo-800 hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="mr-auto items-center justify-between hidden w-full mt-3 md:mt-0 md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col w-full rounded-md md:p-0 text-left md:flex-row sm:bg-inherit md:bg-inherit lg:bg-inherit xl:bg-inherit bg-gray-800 sm:bg-gray-800">
                    <li class=""><a href="#post" class="block pl-2 pt-3 pb-3 hover:text-indigo-800 text-lg">Post a Job</a></li>
                    <li class=""><a href="#resume" class="block pl-2 pt-3 pb-3 hover:text-indigo-800 text-lg">Find Resumes</a></li>
                </ul>            
            </div>
        </div>
    </nav>
@endif

