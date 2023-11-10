@include("partials.subhead", [$title]) 
<div class="container mx-auto mb-5">
    <div class="flex justify-center items-center">
        <form>
            <div class="flex">
                <button id="dropdown-button-2" data-dropdown-toggle="dropdown-search-city" class="flex-shrink-0 z-10 h-[70%] inline-flex items-center py-4 px-4 text-md font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
                    PH <i class="fa-solid fa-angle-down ml-2"></i>
                </button>
                <div id="dropdown-search-city" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button-2">
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512"><g fill-rule="evenodd"><g stroke-width="1pt"><path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/></g><path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/><path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/></g></svg>              
                                    United States
                                </div>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512"><path fill="#ffce00" d="M0 341.3h512V512H0z"/><path d="M0 0h512v170.7H0z"/><path fill="#d00" d="M0 170.7h512v170.6H0z"/></svg>
                                    Germany
                                </div>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512"><g fill-rule="evenodd" stroke-width="1pt"><path fill="#fff" d="M0 0h512v512H0z"/><path fill="#009246" d="M0 0h170.7v512H0z"/><path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/></g></svg>              
                                    Italy
                                </div>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512"><defs><path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/></defs><path fill="#de2910" d="M0 0h512v512H0z"/><use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/><use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/></svg>
                                    China
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="relative w-[22rem] xs:w-[20rem] sm:w-[32rem] md:w-[40rem] lg:w-[56rem] xl:w-[72rem]">
                    <input type="search" id="location-search" class="block p-4 w-full z-30 text-md text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-3 border border-gray-300 focus:ring-blue-500 focus:border-blue-700 dark:bg-gray-700 dark:border-l-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:border-blue-500" placeholder="Job Search ...">
                    <button type="submit">
                        <span class="sr-only">Search</span>
                    </button>
                    <button type="submit" class="absolute top-0 right-0 h-[70.5%] p-4 text-md font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="sr-only">Search</span>
                    </button>
                    <button type="submit" class="absolute top-0 right-0 h-full p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hidden ">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
            <div class="flex justify-start items-center place-items-center text-gray-700">

            </div>
        </form>
    </div>
    <div class="grid grid-cols-1 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-8 p-6">
        @foreach ($allPost as $post)
            <a href="/careers/view/{{ $post->id }}" class="bg-white w-full shadow-md rounded-md p-4 text-gray-700 border-2 border-white hover:border-indigo-700 hover:text-indigo-700">
                <div class="inline-flex items-start mb-5">
                    <img src="{{ asset('assets/company/logo/'.$post->company_logo)}}"  class="h-16 w-16 mr-3" alt="{{ $post->company_name }}">
                    <div class="mb-4">
                        <h2 class="text-2xl font-semibold">{{ $post->job_title }}</h2>
                        <p class="text-sm font-medium text-gray-700">{{ $post->company_name }}</p>
                    </div>
                </div>
                <div class="hover:text-gray-700 text-gray-700 text-justify">
                    <div class="flex flex-col mb-3">
                        <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                        <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                        <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 25,000 Monthly</span>
                    </div>
                    <div class="flex flex-col mb-3">
                        <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                        <p class="text-gray-500">{!! Str::limit($post->description, 293) !!}<p>
                    </div>
                    
                    @if ($post->updated_at == null)
                        <span class="text-gray-600 text-sm font-mono">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                    @else
                        <span class="text-gray-600 text-sm font-mono">{{ Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</span>
                    @endif
                </div>
            </a>            
        @endforeach
        <a href="#" class="bg-white w-full shadow-md rounded-md p-4 text-gray-700 border-2 border-white hover:border-indigo-700 hover:text-indigo-700">
            <div class="inline-flex items-start mb-5">
                <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                <div class="mb-4">
                    <h2 class="text-2xl font-semibold">IT Manager</h2>
                    <p class="text-sm font-medium text-gray-700">Company Name</p>
                </div>
            </div>
            <div class="hover:text-gray-700 text-gray-700 text-justify">
                <div class="flex flex-col mb-3">
                    <span class="font-medium text-gray-600 text-md">&bullet; Taguig City</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; Onsite</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; PHP 50,000 - 70,000 Monthly</span>
                </div>
                <div class="flex flex-col mb-3">
                    <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                    <p class="text-gray-500">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 293) }}<p>
                </div>
                <span class="text-gray-600 text-sm font-mono">Just posted</span>
            </div>
        </a>
        <a href="#" class="bg-white w-full shadow-md rounded-md p-4 text-gray-700 border-2 border-white hover:border-indigo-700 hover:text-indigo-700">
            <div class="inline-flex items-start mb-5">
                <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                <div class="mb-4">
                    <h2 class="text-2xl font-semibold">Sr. DevOps</h2>
                    <p class="text-sm font-medium text-gray-700">Company Name</p>
                </div>
            </div>
            <div class="hover:text-gray-700 text-gray-700 text-justify">
                <div class="flex flex-col mb-3">
                    <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; PHP 80,000 - 100,000 Monthly</span>
                </div>
                <div class="flex flex-col mb-3">
                    <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                    <p class="text-gray-500">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 293) }}<p>
                </div>
                <span class="text-gray-600 text-sm font-mono">2 days ago</span>
            </div>
        </a>
        <a href="#" class="bg-white w-full shadow-md rounded-md p-4 text-gray-700 border-2 border-white hover:border-indigo-700 hover:text-indigo-700">
            <div class="inline-flex items-start mb-5">
                <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                <div class="mb-4">
                    <h2 class="text-2xl font-semibold">Associate Software Engineer</h2>
                    <p class="text-sm font-medium text-gray-700">Company Name</p>
                </div>
            </div>
            <div class="hover:text-gray-700 text-gray-700 text-justify">
                <div class="flex flex-col mb-3">
                    <span class="font-medium text-gray-600 text-md">&bullet; Madaluyong City</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; PHP 20,000 - 27,000 Monthly</span>
                </div>
                <div class="flex flex-col mb-3">
                    <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                    <p class="text-gray-500">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 293) }}<p>
                </div>
                <span class="text-gray-600 text-sm font-mono">3 day ago</span>
            </div>
        </a>
        <a href="#" class="bg-white w-full shadow-md rounded-md p-4 text-gray-700 border-2 border-white hover:border-indigo-700 hover:text-indigo-700">
            <div class="inline-flex items-start mb-5">
                <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                <div class="mb-4">
                    <h2 class="text-2xl font-semibold">Data Engineer</h2>
                    <p class="text-sm font-medium text-gray-700">Company Name</p>
                </div>
            </div>
            <div class="hover:text-gray-700 text-gray-700 text-justify">
                <div class="flex flex-col mb-3">
                    <span class="font-medium text-gray-600 text-md">&bullet; Makati City</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; PHP 30,000 - 50,000 Monthly</span>
                </div>
                <div class="flex flex-col mb-3">
                    <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                    <p class="text-gray-500">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 293) }}<p>
                </div>
                <span class="text-gray-600 text-sm font-mono">1 day ago</span>
            </div>
        </a>
        <a href="#" class="bg-white w-full shadow-md rounded-md p-4 text-gray-700 border-2 border-white hover:border-indigo-700 hover:text-indigo-700">
            <div class="inline-flex items-start mb-5">
                <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3" alt="Company Logo">
                <div class="mb-4">
                    <h2 class="text-2xl font-semibold">SQL Developer</h2>
                    <p class="text-sm font-medium text-gray-700">Company Name</p>
                </div>
            </div>
            <div class="hover:text-gray-700 text-gray-700 text-justify">
                <div class="flex flex-col mb-3">
                    <span class="font-medium text-gray-600 text-md">&bullet; Quezon City</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; Hybrid</span>
                    <span class="font-medium text-gray-600 text-md">&bullet; PHP 25,000 - 35,000 Monthly</span>
                </div>
                <div class="flex flex-col mb-3">
                    <h3 class="text-medium font-semibold text-lg text-gray-600">Job Description</h3>
                    <p class="text-gray-500">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 293) }}<p>
                </div>
                <span class="text-gray-600 text-sm font-mono">1 day ago</span>
            </div>
        </a>
    </div>
</div>
@include('partials.footer')