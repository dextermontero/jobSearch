@include("partials.r_header", [$title])   
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="bg-gray-50 p-4 rounded">
                <div class="container xl:px-20 px-2 divide-y-2">
                    <div class="flex flex-col xl:flex-row justify-start xl:justify-between xl:items-center xl:mt-5">
                        <div class="mb-5">
                            <h2 class="text-3xl font-bold text-indigo-700">Applying for</h2>
                            <p class="text-4xl font-semibold font-poppins text-gray-700">Social Media Marketing</p>
                        </div>
                        <div class="inline-flex items-center">
                            <a href="#" data-tooltip-target="approve_5" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-teal-500 group-hover:bg-white">
                                <i class="fa-solid fa-check"></i>
                                <div id="approve_5" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    <span class="text-teal-400">Approve Application</span>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </a>
                            <a href="#" data-tooltip-target="reject_1"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-400 group-hover:bg-white">
                                <i class="fa-solid fa-rotate"></i>
                                <div id="reject_1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    <span class="text-red-400">Reject Application</span>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </a>
                            <a href="#" data-tooltip-target="download_5" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-500 group-hover:bg-white">
                                <i class="fa-solid fa-download"></i>
                                <div id="download_5" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    <span class="text-blue-400">Download CV</span>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </a>
                            <form>
                                @csrf
                                <button type="submit" id="archive" name="archive" data-tooltip-target="archive_3" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-500 group-hover:bg-white">
                                    <i class="fa-solid fa-x"></i>
                                </button>
                                <div id="archive_3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    <span class="text-red-500">Remove</span>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 xl:grid-cols-3 gap-1 xl:gap-4 mt-5">
                        <div class="flex flex-col justify-center">
                            <div class="mb-5 flex flex-col items-center p-2">
                                <img src="{{ asset('assets/profiles/images.png') }}" class="h-32 w-32 mb-8 mt-4 rounded-full">
                                <h2 class="uppercase text-3xl xl:text-4xl font-bold font-poppins text-gray-700">DEXTER *******</h2>
                            </div>
                            <div class="mb-5">
                                <h2 class="uppercase tracking-wider font-bold text-xl text-gray-700 mb-2">Basic Information</h2>
                                <ul class="flex flex-col items-start justify-start">
                                    <li class="py-1 text-md text-gray-700 inline-flex items-center tracking-widest">
                                        <i class="fa-solid fa-at mr-3 text-md"></i>
                                        *****xxxxxx***@gmail.com
                                    </li>
                                    <li class="py-1 text-md text-gray-700 inline-flex items-center tracking-widest">
                                        <i class="fa-solid fa-mobile-screen-button mr-4 text-md"></i>
                                        09xxxxxxxxx
                                    </li>
                                    <li class="py-1 text-md text-gray-700 inline-flex items-center tracking-widest">
                                        <i class="fa-regular fa-address-card mr-3 text-md"></i>
                                        25/F, *************** Tower Condominium ***********
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-5">
                                <h2 class="uppercase tracking-wider font-bold text-xl text-gray-700 mb-2">Skills</h2>
                                <div class="grid grid-cols-2 gap-1">
                                    <span>Technical support</span>
                                    <span>Network support</span>
                                    <span>HTML5</span>
                                    <span>CSS</span>
                                    <span>PHP</span>
                                    <span>SQL</span>
                                    <span>Visual Basic</span>
                                    <span>AJAX</span>
                                    <span>Tailwind CSS</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 mt-5">
                            <div class="mb-5">
                                <h2 class="uppercase tracking-wider font-bold text-xl text-gray-700 mb-4">Summary</h2>
                                <p class="text-justify text-gray-700 text-md">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="mb-5">
                                <h2 class="uppercase tracking-wider font-bold text-xl text-gray-700 mb-4">Work Experience</h2>
                                <div class="mb-5">
                                    <div class="flex flex-col xl:flex-row justify-between mb-4">
                                        <div>
                                            <h2 class="font-medium tracking-wider text-xl font-poppins text-gray-700">JOB POSITION</h2>
                                            <span class="text-gray-600 font-medium tracking-wider text-lg">COMPANY</span>
                                        </div>
                                        <div class="flex flex-row items-center">
                                            <p class="text-md text-gray-600 font-medium">2018 - 2022</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col xl:flex-row justify-between mb-4">
                                        <div>
                                            <h2 class="font-medium tracking-wider text-xl font-poppins text-gray-700">JOB POSITION</h2>
                                            <span class="text-gray-600 font-medium tracking-wider text-lg">COMPANY</span>
                                        </div>
                                        <div class="flex flex-row items-center">
                                            <p class="text-md text-gray-600 font-medium">2018 - 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h2 class="uppercase tracking-wider font-bold text-xl text-gray-700 mb-4">Academic Background</h2>
                                <div class="mb-5">
                                    <div class="flex flex-col xl:flex-row justify-between mb-4">
                                        <div>
                                            <h2 class="font-medium tracking-wider text-xl text-gray-700">SCHOOL EDUCATION</h2>
                                            <span class="text-gray-600 font-normal tracking-wider text-lg">Graduated &bullet; School Address</span>
                                        </div>
                                        <div class="flex flex-row items-center">
                                            <p class="text-md text-gray-600 font-medium">2018 - 2022</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col xl:flex-row justify-between mb-4">
                                        <div>
                                            <h2 class="font-medium tracking-wider text-xl text-gray-700">SCHOOL EDUCATION</h2>
                                            <span class="text-gray-600 font-normal tracking-wider text-lg">Under Graduate &bullet; School Address</span>
                                        </div>
                                        <div class="flex flex-row items-center">
                                            <p class="text-md text-gray-600 font-medium">2018 - 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.r_footer')
    </body>
</html>