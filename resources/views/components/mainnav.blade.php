<header>
    <nav class="z-30 bg-gray-900 py-4 px-1 text-gray-300">
        <div class="flex flex-wrap justify-between items-center mx-auto container">
            <a href="/" class="flex items-center">
                <img src="" class="h-8 mr-3" alt="" />
                <span class="text-3xl font-bold whitespace-nowrap text-indigo-600">JobSearch</span>
            </a>
            <div class="flex md:order-2">
                @guest
                    <ul class="inline-flex items-center font-medium">
                        <li class="mr-3"><a href="/recruitment" class="w-full text-lg hover:text-indigo-700">Post Job</a></li>
                        <li class="mr-3"><a href="/login" class="w-full text-lg hover:text-indigo-700">Sign In</a></li>
                    </ul>
                @endguest
                @auth
                    <x-usernav></x-usernav>
                @endauth
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center mr-2 mt-1 p-4 w-10 h-10 justify-center text-sm text-indigo-600 rounded-lg md:hidden hover:bg-indigo-800 hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col w-full rounded-md md:p-0 text-left md:flex-row sm:bg-inherit md:bg-inherit lg:bg-inherit xl:bg-inherit bg-gray-800 sm:bg-gray-800">
                    <li class="pr-3 ml-5"><a href="/companies/reviews" class="block pl-2 pt-3 pb-3 hover:text-indigo-800 text-lg">Company Reviews</a></li>
                    <li class="pr-3 ml-5"><a href="/companies/salaries" class="block pl-2 pt-3 pb-3 hover:text-indigo-800 text-lg">Find Salaries</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>