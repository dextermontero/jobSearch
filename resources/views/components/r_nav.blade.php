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
                        <div>
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                @foreach(App\Models\Recruiter::select('recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname', 'recruiters.email')->join('recruiter_information', 'recruiter_information.uid', '=', 'recruiters.id')->get(['recruiter_information.img_profile', 'recruiter_information.firstname', 'recruiter_information.lastname']); as $recruiter)                              
                                <img class="w-8 h-8 rounded-full" src="{{ asset('assets/profiles/'.$recruiter->img_profile)}}" alt="{{ Str::ucfirst($recruiter->firstname)}} {{ Str::ucfirst($recruiter->lastname)}}">
                                @endforeach
                            </button>
                        </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
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
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                        </li>
                        <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                        </li>
                        <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
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
                    <li class="mr-4"><a href="/recruiter/login" class="w-full hover:text-indigo-800 text-lg">Sign In1</a></li>
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

