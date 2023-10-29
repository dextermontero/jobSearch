@include("partials.r_header", [$title])   
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="bg-gray-50 p-4 rounded">
                <div class="md:w-[80%] container mx-auto divide-y-4">
                    <div class="flex flex-col md:flex-row items-start md:items-center justify-start md:justify-center mb-4">
                        <div class="inline-flex items-center justify-center md:w-[30%]">
                            <img src="{{ asset('assets/profiles/images.png') }}" class="h-32 w-32 mb-4 mt-4 md:mr-3 rounded-full">
                        </div>
                        <div class="w-full md:w-[70%]">
                            <h2 class="uppercase text-3xl md:text-5xl font-bold font-poppins text-gray-700">D***** M******</h2>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 py-4">
                        <div class="divide-y-2">
                            <ul class="py-1 font-medium mb-4">
                                <li class="px-2 py-1 text-md text-gray-700 inline-flex items-center w-full tracking-widest">
                                    <i class="fa-solid fa-at mr-3 text-md"></i>
                                    mon***********@gmail.com
                                </li>
                                <li class="px-2 py-1 text-md text-gray-700 inline-flex items-center w-full tracking-widest">
                                    <i class="fa-solid fa-mobile-screen-button mr-4 text-md"></i>
                                    09xxxxxxxxx
                                </li>
                                <li class="px-2 py-1 text-md text-gray-700 inline-flex items-center w-full tracking-widest">
                                    <i class="fa-regular fa-address-card mr-3 text-md"></i>
                                    25/F, *************** Tower Condominium ***********
                                </li>
                            </ul>
                            <div class="py-4">
                                <h2 class="uppercase tracking-wider font-medium text-xl text-gray-700 mb-2">Skills</h2>
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
                        <div class="md:col-span-2 md:px-4 divide-y-2">
                            <div class="mb-4">
                                <h2 class="uppercase text-2xl font-bold tracking-wider font-poppins text-gray-800 mb-2">Experience</h2>
                                <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-3">
                                    <div class="w-full md:w-[80%]">
                                        <h2 class="font-medium tracking-wider text-xl font-poppins text-gray-700">JOB POSITION</h2>
                                        <span class="text-gray-600 font-mono font-normal tracking-wider text-lg">COMPANY</span>
                                    </div>
                                    <div class="w-full md:w-[20%] md:text-center">
                                        <p class="text-md text-gray-600 font-medium">2018 - 2022</p>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-3">
                                    <div class="w-full md:w-[80%]">
                                        <h2 class="font-medium tracking-wider text-xl font-poppins text-gray-700">JOB POSITION</h2>
                                        <span class="text-gray-600 font-mono font-normal tracking-wider text-lg">COMPANY</span>
                                    </div>
                                    <div class="w-full md:w-[20%] md:text-center">
                                        <p class="text-md text-gray-600 font-medium">2018 - 2022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 py-4">
                                <h2 class="uppercase text-2xl font-bold tracking-wider font-poppins text-gray-800 mb-2">Education</h2>
                                <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-3">
                                    <div class="w-full md:w-[80%]">
                                        <h2 class="font-medium tracking-wider text-xl font-poppins text-gray-700">SCHOOL EDUCATION</h2>
                                        <span class="text-gray-600 font-mono font-normal tracking-wider text-lg">SCHOOL ADDRESS</span>
                                    </div>
                                    <div class="w-full md:w-[20%] md:text-center">
                                        <p class="text-md text-gray-600 font-medium">2018 - 2022</p>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-3">
                                    <div class="w-full md:w-[80%]">
                                        <h2 class="font-medium tracking-wider text-xl font-poppins text-gray-700">SCHOOL EDUCATION</h2>
                                        <span class="text-gray-600 font-mono font-normal tracking-wider text-lg">SCHOOL ADDRESS</span>
                                    </div>
                                    <div class="w-full md:w-[20%] md:text-center">
                                        <p class="text-md text-gray-600 font-medium">2018 - 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.r_footer')
    </div>
</div>
</body>
</html>