@include("partials.subhead", [$title]) 
<div class="container mx-auto mb-5">
    <div class="container mx-auto p-4">
        <div class="container mx-auto mb-5">
            <h2 class="font-bold text-3xl mb-5 text-gray-700">Discover a great places to work</h2>
            <form class="flex items-center">   
                <label for="voice-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-indigo-800 focus:border-indigo-800 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-800 dark:focus:border-indigo-800" placeholder="Search Company">
                </div>
                <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-md font-medium text-white bg-indigo-700 rounded-lg border border-ingido-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                    <i class="fa-solid fa-magnifying-glass mr-3"></i>
                    Search
                </button>
            </form>
        </div>
        <h2 class="text-3xl text-indigo-800 font-bold text-monospace mb-5">Popular Companies</h2>
        <div class="grid grid-cols-1 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 items-center">
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 1</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">4,849 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 2</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">5,949 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 3</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">3,849 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 4</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">3,549 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 5</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">4,849 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 6</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">4,149 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 7</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">9,000 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 8</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">2,349 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 9</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">6,749 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 10</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">6,449 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 11</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">7,249 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-600 hover:text-indigo-800 border-2 border-white hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 12</h2>
                        <p class="text-lg font-medium text-yellow-300 outline-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p>
                        <p class="hover:underline font-sm font-semibold text-gray-600">8,349 reviews</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
        </div>
    </div>
</div>
@include('partials.footer')