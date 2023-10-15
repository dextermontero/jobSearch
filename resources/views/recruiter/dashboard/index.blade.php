@include("partials.r_header", [$title])   
    <div class="min-h-screen">  
        <div class="container mx-auto py-4 px-3 mb-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-5 mb-10">
                <div class="md:order-2 flex items-start ">  
                    <lottie-player src="https://lottie.host/aac68962-4e66-45b4-9efe-9dd99fed7386/Cey7OElI1F.json" class="h-80" background="transparent" speed="2" loop autoplay></lottie-player>
                </div>  
                <div class="flex flex-col md:order-1">
                    <div class="mb-10">
                        <p class="font-normal text-3xl mt-0 md:mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <form>
                        <button type="submit" class="bg-indigo-700 text-white px-3 py-4 rounded-md font-medium w-full md:w-56">Post a job</button>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4">
                <div class="border-2 border-gray-600 w-full rounded-lg shadow-sm p-4">
                    <div class="py-3 px-6">
                        <h2 class="text-indigo-700 font-mono text-xl mb-6 text-center">STEP 1</h2>
                        <p class=" text-gray-700 font-semibold text-2xl mb-5">Make your account</p>
                        <p class=" text-gray-600 text-md">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="border-2 border-gray-600 w-full rounded-lg shadow-sm p-4">
                    <div class="py-3 px-6">
                        <h2 class="text-indigo-700 font-mono text-xl mb-6 text-center">STEP 2</h2>
                        <p class=" text-gray-700 font-semibold text-2xl mb-5">Setup your<br>Company Information</p>
                        <p class=" text-gray-600 text-md">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="border-2 border-gray-600 w-full rounded-lg shadow-sm p-4">
                    <div class="py-3 px-6">
                        <h2 class="text-indigo-700 font-mono text-xl mb-6 text-center">STEP 3</h2>
                        <p class=" text-gray-700 font-semibold text-2xl mb-5">Post your job</p>
                        <p class=" text-gray-600 text-md">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-400">
            <div class="container mx-auto py-4 px-3">
                <div class="p-4 mt-10 mb-20">
                    <h2 class="text-4xl font-poppins text-gray-800 mb-3 text-center">Why post a job on <span class="text-indigo-700 font-bold">JobSearch</span></h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 place-content-center">
                        <div class="text-center py-5 px-6 text-gray-800 font-poppins">
                            <div class="mb-5 flex flex-col justify-center place-items-center">
                                <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-20 w-20 rounded-full mb-5 shadow-sm" alt="Why Picture">
                                <h3 class="text-2xl">Lorem Ipsum</h3>
                            </div>
                            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="text-center py-5 px-6 text-gray-800 font-poppins">
                            <div class="mb-5 flex flex-col justify-center place-items-center">
                                <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-20 w-20 rounded-full mb-5 shadow-sm" alt="Why Picture">
                                <h3 class="text-2xl">Lorem Ipsum</h3>
                            </div>
                            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="text-center py-5 px-6 text-gray-800 font-poppins">
                            <div class="mb-5 flex flex-col justify-center place-items-center">
                                <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-20 w-20 rounded-full mb-5 shadow-sm" alt="Why Picture">
                                <h3 class="text-2xl">Lorem Ipsum</h3>
                            </div>
                            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-300">
            <div class="container mx-auto py-4 px-3">
                <div class="p-4 mt-10 mb-10">
                    <h2 class="text-4xl font-poppins text-gray-800 mb-3 text-center">Testimonials</h2>
                    <p class="text-center mb-10 text-gray-600 font-serif">Explore the employer's experience</p>
                    <div id="animation-carousel" class="relative w-full" data-carousel="slide">
                        <div class="relative overflow-hidden rounded-lg h-[26rem]">
                            <div class="grid grid-cols-1 place-items-center gap-8" data-carousel-item>
                                <div class="text-md font-medium md:w-1/2 text-center">
                                    <p class="font-poppins text-gray-700">
                                        <span class="text-2xl font-extrabold text-indigo-700">" </span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        <span class="text-2xl font-extrabold text-indigo-700"> "</span>
                                    </p>
                                </div>
                                <div class="inline-flex items-center">
                                    <div class="inline-flex items-center text-gray-700">
                                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-12 rounded-full shadowm-sm" alt="Profile Name">
                                        <p class="ml-3 mr-3 whitespace-nowrap font-medium">Lorem Ipsum</p>
                                        <div class="border-r-4 border-indigo-700">&nbsp;</div>
                                        <p class="ml-3 truncate">CEO at Microsoft</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 place-items-center gap-8" data-carousel-item>
                                <div class="text-md font-medium md:w-1/2 text-center">
                                    <p class="font-poppins text-gray-700">
                                        <span class="text-2xl font-extrabold text-indigo-700">" </span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        <span class="text-2xl font-extrabold text-indigo-700"> "</span>
                                    </p>
                                </div>
                                <div class="inline-flex items-center">
                                    <div class="inline-flex items-center text-gray-700">
                                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-12 rounded-full shadowm-sm" alt="Profile Name">
                                        <p class="ml-3 mr-3 whitespace-nowrap font-medium">Lorem Ipsum 2</p>
                                        <div class="border-r-4 border-indigo-700">&nbsp;</div>
                                        <p class="ml-3 truncate">CEO at Microsoft</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 place-items-center gap-8" data-carousel-item>
                                <div class="text-md font-medium md:w-1/2 text-center">
                                    <p class="font-poppins text-gray-700">
                                        <span class="text-2xl font-extrabold text-indigo-700">" </span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        <span class="text-2xl font-extrabold text-indigo-700"> "</span>
                                    </p>
                                </div>
                                <div class="inline-flex items-center">
                                    <div class="inline-flex items-center text-gray-700">
                                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-12 rounded-full shadowm-sm" alt="Profile Name">
                                        <p class="ml-3 mr-3 whitespace-nowrap font-medium">Lorem Ipsum 3</p>
                                        <div class="border-r-4 border-indigo-700">&nbsp;</div>
                                        <p class="ml-3 truncate">CEO at Microsoft</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 place-items-center gap-8" data-carousel-item>
                                <div class="text-md font-medium md:w-1/2 text-center">
                                    <p class="font-poppins text-gray-700">
                                        <span class="text-2xl font-extrabold text-indigo-700">" </span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        <span class="text-2xl font-extrabold text-indigo-700"> "</span>
                                    </p>
                                </div>
                                <div class="inline-flex items-center">
                                    <div class="inline-flex items-center text-gray-700">
                                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-12 rounded-full shadowm-sm" alt="Profile Name">
                                        <p class="ml-3 mr-3 whitespace-nowrap font-medium">Lorem Ipsum 4</p>
                                        <div class="border-r-4 border-indigo-700">&nbsp;</div>
                                        <p class="ml-3 truncate">CEO at Microsoft</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 place-items-center gap-8" data-carousel-item>
                                <div class="text-md font-medium md:w-1/2 text-center">
                                    <p class="font-poppins text-gray-700">
                                        <span class="text-2xl font-extrabold text-indigo-700">" </span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        <span class="text-2xl font-extrabold text-indigo-700"> "</span>
                                    </p>
                                </div>
                                <div class="inline-flex items-center">
                                    <div class="inline-flex items-center text-gray-700">
                                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-12 rounded-full shadowm-sm" alt="Profile Name">
                                        <p class="ml-3 mr-3 whitespace-nowrap font-medium">Lorem Ipsum 5</p>
                                        <div class="border-r-4 border-indigo-700">&nbsp;</div>
                                        <p class="ml-3 truncate">CEO at Microsoft</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-indigo-600 dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-indigo-600 dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('partials.footer')