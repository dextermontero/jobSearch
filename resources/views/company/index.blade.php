@include("partials.subhead", [$title])
<div class="container mx-auto mb-5">
    <div class="container mx-auto p-4">
        <div class="container mx-auto mb-10">
            <div class="grid grid-cols-6 sm:grid-cols-6 gap-1 items-start justify-start">
                <div class="p-2 text-center border-r-4 border-gray-500">
                    <h1 class="text-5xl font-bold text-indigo-600">A</h1>
                </div>
                <div class="p-2 ml-2 col-span-5 w-full mr-2">
                    <ul class="flex flex-wrap item-center justify-start">
                        <li class="p-2 text-2xl"><a href="#a" class="text-gray-600 p-1 font-medium hover:text-gray-700">A</a></li>
                        <li class="p-2 text-2xl"><a href="#b" class="text-gray-600 p-1 font-medium hover:text-gray-700">B</a></li>
                        <li class="p-2 text-2xl"><a href="#c" class="text-gray-600 p-1 font-medium hover:text-gray-700">C</a></li>
                        <li class="p-2 text-2xl"><a href="#d" class="text-gray-600 p-1 font-medium hover:text-gray-700">D</a></li>
                        <li class="p-2 text-2xl"><a href="#e" class="text-gray-600 p-1 font-medium hover:text-gray-700">E</a></li>
                        <li class="p-2 text-2xl"><a href="#f" class="text-gray-600 p-1 font-medium hover:text-gray-700">F</a></li>
                        <li class="p-2 text-2xl"><a href="#g" class="text-gray-600 p-1 font-medium hover:text-gray-700">G</a></li>
                        <li class="p-2 text-2xl"><a href="#h" class="text-gray-600 p-1 font-medium hover:text-gray-700">H</a></li>
                        <li class="p-2 text-2xl"><a href="#i" class="text-gray-600 p-1 font-medium hover:text-gray-700">I</a></li>
                        <li class="p-2 text-2xl"><a href="#j" class="text-gray-600 p-1 font-medium hover:text-gray-700">J</a></li>
                        <li class="p-2 text-2xl"><a href="#k" class="text-gray-600 p-1 font-medium hover:text-gray-700">K</a></li>
                        <li class="p-2 text-2xl"><a href="#l" class="text-gray-600 p-1 font-medium hover:text-gray-700">L</a></li>
                        <li class="p-2 text-2xl"><a href="#m" class="text-gray-600 p-1 font-medium hover:text-gray-700">M</a></li>
                        <li class="p-2 text-2xl"><a href="#n" class="text-gray-600 p-1 font-medium hover:text-gray-700">N</a></li>
                        <li class="p-2 text-2xl"><a href="#o" class="text-gray-600 p-1 font-medium hover:text-gray-700">O</a></li>
                        <li class="p-2 text-2xl"><a href="#p" class="text-gray-600 p-1 font-medium hover:text-gray-700">P</a></li>
                        <li class="p-2 text-2xl"><a href="#q" class="text-gray-600 p-1 font-medium hover:text-gray-700">Q</a></li>
                        <li class="p-2 text-2xl"><a href="#r" class="text-gray-600 p-1 font-medium hover:text-gray-700">R</a></li>
                        <li class="p-2 text-2xl"><a href="#s" class="text-gray-600 p-1 font-medium hover:text-gray-700">S</a></li>
                        <li class="p-2 text-2xl"><a href="#t" class="text-gray-600 p-1 font-medium hover:text-gray-700">T</a></li>
                        <li class="p-2 text-2xl"><a href="#u" class="text-gray-600 p-1 font-medium hover:text-gray-700">U</a></li>
                        <li class="p-2 text-2xl"><a href="#v" class="text-gray-600 p-1 font-medium hover:text-gray-700">V</a></li>
                        <li class="p-2 text-2xl"><a href="#w" class="text-gray-600 p-1 font-medium hover:text-gray-700">W</a></li>
                        <li class="p-2 text-2xl"><a href="#x" class="text-gray-600 p-1 font-medium hover:text-gray-700">X</a></li>
                        <li class="p-2 text-2xl"><a href="#y" class="text-gray-600 p-1 font-medium hover:text-gray-700">Y</a></li>
                        <li class="p-2 text-2xl"><a href="#z" class="text-gray-600 p-1 font-medium hover:text-gray-700">Z</a></li>
                        <li class="p-2 text-2xl"><a href="##" class="text-gray-600 p-1 font-medium hover:text-gray-700">#</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 items-center">
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 1</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 2</h2>
                        <p class="text-md text-gray-600 font-medium">United States</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 3</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 4</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 5</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 6</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 7</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 8</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 9</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 10</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 11</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="text-gray-600">{{ Illuminate\Support\Str::limit('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 82) }}<p>
                </div>
            </a>
            <a href="#" class="bg-white w-full shadow-md p-5 rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-start mb-2">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-20 w-20 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-2xl font-bold">Company Name 12</h2>
                        <p class="text-md text-gray-600 font-medium">Philippines</p>
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