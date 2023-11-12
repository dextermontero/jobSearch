@include("partials.r_header", [$title])   
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="rounded py-4">
                @if (DB::table('companies')->join('recruiters', 'recruiters.id', '=', 'companies.recruiter_id')->where('companies.status', '=', '1')->where('recruiters.id', '=', Auth::id())->count() > 0)
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
                                    <a href="{{ route('recruiter_companyAll') }}" data-modal-hide="popup-modal"  class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
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
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="repost-tabs" type="button" role="tab" aria-controls="repostTabs" aria-selected="false">Repost</button>
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
                        @if (count($allPost) === 0)
                            <div class="flex items-center justify-center h-[28rem] mb-4 rounded dark:bg-gray-800">
                                <p class="text-2xl text-gray-400 dark:text-gray-500">
                                    No All job post
                                </p>
                            </div>
                        @else
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                @foreach ($allPost as $all)
                                    <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                        <div class="flex flex-col items-start justify-start px-8 py-4">
                                            <div class="inline-flex items-start mb-2">
                                                <img src="{{ asset('assets/company/logo/'.$all->company_logo )}}"  class="h-16 w-16 mr-3" alt="{{ $all->company_name}}">
                                                <div class="mb-4">
                                                    <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">{{ Str::ucfirst($all->job_title)}}</h2>
                                                    <p class="text-sm font-medium text-gray-700">{{ $all->company_name }}</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col mb-2">
                                                <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                            </div>
                                            <div class="flex flex-col mb-2 h-28">
                                                <h3 class="text-medium font-semibold text-lg text-gray-600 h-20">Job Description</h3>
                                                <p class="text-gray-600">{!! Str::limit($all->description, 110) !!}<p>
                                            </div>
                                            <div class="flex justify-between items-center w-full">
                                                <div class="font-poppins ">
                                                    @if ($all->status === 1)
                                                        <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                                    @elseif($all->status === 2)
                                                        <span class="bg-blue-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Repost</span>
                                                    @elseif($all->status === 3)
                                                        <span class="bg-teal-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Archived</span>
                                                    @else
                                                        <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                                    @endif
                                                    @if ($all->updated_at == null)
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($all->created_at)->diffForHumans() }}</span>
                                                    @else
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($all->updated_at)->diffForHumans() }}</span>
                                                    @endif
                                                </div>
                                                <div class="inline-flex items-center">
                                                    @if ($all->status === 0)
                                                        <form action="/recruiter/post/repost/{{ $all->id }}" method="post">
                                                            @csrf
                                                            <button type="submit" data-tooltip-target="repost_{{ $all->id }}" id="status" name="status" class="text-blue-500 hover:text-teal-red-600 mr-3 text-xl">
                                                                <i class="fa-solid fa-rotate-left"></i>
                                                                <div id="repost_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    Click to repost post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </button>
                                                        </form>
                                                        <form action="/recruiter/post/archive/{{ $all->id }}" method="POST">    
                                                            @csrf
                                                            <button type="submit" data-tooltip-target="archive_{{ $all->id }}" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                                <i class="fa-solid fa-box-archive"></i>
                                                                <div id="archive_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    Click to archive post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    @elseif($all->status === 1)
                                                        <a href="/recruiter/post/edit/{{ $all->id }}" data-tooltip-target="edit_{{ $all->id }}" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                            <div id="edit_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to edit post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </a>
                                                        <form action="/recruiter/post/inactive/{{ $all->id }}" method="post">
                                                            @csrf
                                                            <button type="submit" data-tooltip-target="inactive_{{ $all->id }}" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                                <i class="fa-solid fa-eye-slash"></i>
                                                                <div id="inactive_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    Click to inactive post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </button>
                                                        </form>
                                                        <form action="/recruiter/post/archive/{{ $all->id }}" method="POST">    
                                                            @csrf
                                                            <button type="submit" data-tooltip-target="archive_{{ $all->id }}" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                                <i class="fa-solid fa-box-archive"></i>
                                                                <div id="archive_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    Click to archive post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    @elseif($all->status === 2)
                                                        <a href="/recruiter/post/edit/{{ $all->id }}" data-tooltip-target="edit_{{ $all->id }}" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                            <div id="edit_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to edit post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </a>
                                                        <form action="/recruiter/post/inactive/{{ $all->id }}" method="post">
                                                            @csrf
                                                            <button type="submit" data-tooltip-target="inactive_{{ $all->id }}" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                                <i class="fa-solid fa-eye-slash"></i>
                                                                <div id="inactive_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    Click to inactive post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </button>
                                                        </form>
                                                        <form action="/recruiter/post/archive/{{ $all->id }}" method="POST">    
                                                            @csrf
                                                            <button type="submit" data-tooltip-target="archive_{{ $all->id }}" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                                <i class="fa-solid fa-box-archive"></i>
                                                                <div id="archive_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    Click to archive post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form action="/recruiter/post/repost/{{ $all->id }}" method="post">
                                                            @csrf
                                                            <button type="submit" data-tooltip-target="repost_{{ $all->id }}" id="status" name="status" class="text-blue-500 hover:text-teal-red-600 mr-3 text-xl">
                                                                <i class="fa-solid fa-rotate-left"></i>
                                                                <div id="repost_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    Click to repost post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </button>
                                                        </form>
                                                        <form action="/recruiter/post/remove/{{ $all->id }}" method="POST">    
                                                            @csrf
                                                            <button type="submit" data-tooltip-target="delete_{{ $all->id }}" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                                <i class="fa-solid fa-trash"></i>
                                                                <div id="delete_{{ $all->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    Click to permanent remove post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </button>
                                                        </form>                                                        
                                                    @endif
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    {{-- Active --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="activeTabs" role="tabpanel" aria-labelledby="active-tabs">
                        @if (count($activePost) === 0)
                            <div class="flex items-center justify-center h-[28rem] mb-4 rounded dark:bg-gray-800">
                                <p class="text-2xl text-gray-400 dark:text-gray-500">
                                    No Active job post
                                </p>
                            </div>
                        @else
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                @foreach ($activePost as $active)
                                    <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                        <div class="flex flex-col items-start justify-start px-8 py-4">
                                            <div class="inline-flex items-start mb-2">
                                                <img src="{{ asset('assets/company/logo/'.$active->company_logo )}}"  class="h-16 w-16 mr-3" alt="{{ $active->company_name}}">
                                                <div class="mb-4">
                                                    <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">{{ Str::ucfirst($active->job_title)}}</h2>
                                                    <p class="text-sm font-medium text-gray-700">{{ $active->company_name }}</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col mb-2">
                                                <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                            </div>
                                            <div class="flex flex-col mb-2 h-28">
                                                <h3 class="text-medium font-semibold text-lg text-gray-600 h-20">Job Description</h3>
                                                <p class="text-gray-600">{!! Str::limit($active->description, 110) !!}<p>
                                            </div>
                                            <div class="flex justify-between items-center w-full">
                                                <div class="font-poppins ">
                                                    <span class="bg-green-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Active</span>
                                                    @if ($active->updated_at == null)
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($active->created_at)->diffForHumans() }}</span>
                                                    @else
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($active->updated_at)->diffForHumans() }}</span>
                                                    @endif
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <a href="/recruiter/post/edit/{{ $active->id }}" data-tooltip-target="edit_{{ $active->id }}" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                        <div id="edit_{{ $active->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                            Click to edit post
                                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                                        </div>
                                                    </a>
                                                    <form action="/recruiter/post/inactive/{{ $active->id }}" method="post">
                                                        @csrf
                                                        <button type="submit" data-tooltip-target="inactive_{{ $active->id }}" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                            <i class="fa-solid fa-eye-slash"></i>
                                                            <div id="inactive_{{ $active->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to inactive post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </button>
                                                    </form>
                                                    <form action="/recruiter/post/archive/{{ $active->id }}" method="POST">    
                                                        @csrf
                                                        <button type="submit" data-tooltip-target="archive_{{ $active->id }}" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                            <i class="fa-solid fa-box-archive"></i>
                                                            <div id="archive_{{ $active->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to archive post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    {{-- Repost --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="repostTabs" role="tabpanel" aria-labelledby="repost-tabs">
                        @if (count($rePost) === 0)
                            <div class="flex items-center justify-center h-[28rem] mb-4 rounded dark:bg-gray-800">
                                <p class="text-2xl text-gray-400 dark:text-gray-500">
                                    No Repost job post
                                </p>
                            </div>
                        @else
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                @foreach ($rePost as $repost)
                                    <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                        <div class="flex flex-col items-start justify-start px-8 py-4">
                                            <div class="inline-flex items-start mb-2">
                                                <img src="{{ asset('assets/company/logo/'.$repost->company_logo )}}"  class="h-16 w-16 mr-3" alt="{{ $repost->company_name}}">
                                                <div class="mb-4">
                                                    <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">{{ Str::ucfirst($repost->job_title)}}</h2>
                                                    <p class="text-sm font-medium text-gray-700">{{ $repost->company_name }}</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col mb-2">
                                                <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                            </div>
                                            <div class="flex flex-col mb-2 h-28">
                                                <h3 class="text-medium font-semibold text-lg text-gray-600 h-20">Job Description</h3>
                                                <p class="text-gray-600">{!! Str::limit($repost->description, 110) !!}<p>
                                            </div>
                                            <div class="flex justify-between items-center w-full">
                                                <div class="font-poppins ">
                                                    <span class="bg-blue-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Repost</span>
                                                    @if ($repost->updated_at == null)
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($repost->created_at)->diffForHumans() }}</span>
                                                    @else
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($repost->updated_at)->diffForHumans() }}</span>
                                                    @endif
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <a href="/recruiter/post/edit/{{ $repost->id }}" data-tooltip-target="edit_{{ $repost->id }}" class="text-blue-500 hover:text-blue-700 mr-3 text-xl">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                        <div id="edit_{{ $repost->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                            Click to edit post
                                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                                        </div>
                                                    </a>
                                                    <form action="/recruiter/post/inactive/{{ $repost->id }}" method="post">
                                                        @csrf
                                                        <button type="submit" data-tooltip-target="inactive_{{ $repost->id }}" id="status" name="status" class="text-teal-500 hover:text-teal-red-600 mr-3 text-xl">
                                                            <i class="fa-solid fa-eye-slash"></i>
                                                            <div id="inactive_{{ $repost->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to inactive post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </button>
                                                    </form>
                                                    <form action="/recruiter/post/archive/{{ $repost->id }}" method="POST">    
                                                        @csrf
                                                        <button type="submit" data-tooltip-target="archive_{{ $repost->id }}" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                            <i class="fa-solid fa-box-archive"></i>
                                                            <div id="archive_{{ $repost->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to archive post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    {{-- Inactive --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="inactiveTabs" role="tabpanel" aria-labelledby="inactive-tabs">
                        @if (count($inactivePost) === 0)
                            <div class="flex items-center justify-center h-[28rem] mb-4 rounded dark:bg-gray-800">
                                <p class="text-2xl text-gray-400 dark:text-gray-500">
                                    No Inactive job post
                                </p>
                            </div>
                        @else
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                @foreach ($inactivePost as $inactive)
                                    <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                        <div class="flex flex-col items-start justify-start px-8 py-4">
                                            <div class="inline-flex items-start mb-2">
                                                <img src="{{ asset('assets/company/logo/'.$inactive->company_logo )}}"  class="h-16 w-16 mr-3" alt="{{ $inactive->company_name}}">
                                                <div class="mb-4">
                                                    <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">{{ Str::ucfirst($inactive->job_title)}}</h2>
                                                    <p class="text-sm font-medium text-gray-700">{{ $inactive->company_name }}</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col mb-2">
                                                <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                            </div>
                                            <div class="flex flex-col mb-2 h-28">
                                                <h3 class="text-medium font-semibold text-lg text-gray-600 h-20">Job Description</h3>
                                                <p class="text-gray-600">{!! Str::limit($inactive->description, 110) !!}<p>
                                            </div>
                                            <div class="flex justify-between items-center w-full">
                                                <div class="font-poppins ">
                                                    <span class="bg-red-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Inactive</span>
                                                    @if ($inactive->updated_at == null)
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($inactive->created_at)->diffForHumans() }}</span>
                                                    @else
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($inactive->updated_at)->diffForHumans() }}</span>
                                                    @endif
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <form action="/recruiter/post/repost/{{ $inactive->id }}" method="post">
                                                        @csrf
                                                        <button type="submit" data-tooltip-target="repost_{{ $inactive->id }}" id="status" name="status" class="text-blue-500 hover:text-teal-red-600 mr-3 text-xl">
                                                            <i class="fa-solid fa-rotate-left"></i>
                                                            <div id="repost_{{ $inactive->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to repost post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </button>
                                                    </form>
                                                    <form action="/recruiter/post/archive/{{ $inactive->id }}" method="POST">    
                                                        @csrf
                                                        <button type="submit" data-tooltip-target="archive_{{ $inactive->id }}" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                            <i class="fa-solid fa-box-archive"></i>
                                                            <div id="archive_{{ $inactive->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to archive post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    {{-- Archived --}}
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="archiveTabs" role="tabpanel" aria-labelledby="archive-tabs">
                        @if (count($archivePost) === 0)
                            <div class="flex items-center justify-center h-[28rem] mb-4 rounded dark:bg-gray-800">
                                <p class="text-2xl text-gray-400 dark:text-gray-500">
                                    No Archive job post
                                </p>
                            </div>
                        @else
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                @foreach ($archivePost as $archive)
                                    <div class="bg-gray-50 rounded flex flex-col border-2 border-gray-200 shadow">
                                        <div class="flex flex-col items-start justify-start px-8 py-4">
                                            <div class="inline-flex items-start mb-2">
                                                <img src="{{ asset('assets/company/logo/'.$archive->company_logo )}}"  class="h-16 w-16 mr-3" alt="{{ $archive->company_name}}">
                                                <div class="mb-4">
                                                    <h2 class="text-2xl font-medium whitespace-wrap tracking-tight">{{ Str::ucfirst($archive->job_title)}}</h2>
                                                    <p class="text-sm font-medium text-gray-700">{{ $archive->company_name }}</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col mb-2">
                                                <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                                                <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                                            </div>
                                            <div class="flex flex-col mb-2 h-28">
                                                <h3 class="text-medium font-semibold text-lg text-gray-600 h-20">Job Description</h3>
                                                <p class="text-gray-600">{!! Str::limit($archive->description, 110) !!}<p>
                                            </div>
                                            <div class="flex justify-between items-center w-full">
                                                <div class="font-poppins ">
                                                    <span class="bg-teal-500 rounded-full px-3 py-[.18rem] text-sm text-gray-50 font-bold tracking-wider">Archived</span>
                                                    @if ($archive->updated_at == null)
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($archive->created_at)->diffForHumans() }}</span>
                                                    @else
                                                        <span class="ml-2 text-gray-600 text-sm">{{ Carbon\Carbon::parse($archive->updated_at)->diffForHumans() }}</span>
                                                    @endif
                                                </div>
                                                <div class="inline-flex items-center">
                                                    <form action="/recruiter/post/repost/{{ $archive->id }}" method="post">
                                                        @csrf
                                                        <button type="submit" data-tooltip-target="repost_{{ $archive->id }}" id="status" name="status" class="text-blue-500 hover:text-teal-red-600 mr-3 text-xl">
                                                            <i class="fa-solid fa-rotate-left"></i>
                                                            <div id="repost_{{ $archive->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to repost post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </button>
                                                    </form>
                                                    <form action="/recruiter/post/archive/{{ $archive->id }}" method="POST">    
                                                        @csrf
                                                        <button type="submit" data-tooltip-target="archive_{{ $archive->id }}" id="archive" name="archive" class="text-red-500 hover:text-red-600 text-xl">
                                                            <i class="fa-solid fa-box-archive"></i>
                                                            <div id="archive_{{ $archive->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Click to archive post
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @include('partials.r_footer')
</body>
</html>