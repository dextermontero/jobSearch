@include("partials.subhead", [$title]) 
<div class="container mx-auto mb-5">
    <div class="container mx-auto mb-5 p-4">
        <h2 class="font-bold text-3xl mb-1 text-gray-700">Where salaries are rising</h2>
        <p class="text-gray-600 mb-5">Discover which careers have the highest job satisfaction, best salaries, and more</p>
        <form class="flex flex-col mb-5">   
            <label for="job-salary" class="text-xl font-medium mb-3 ">Industries</label>
            <select id="job-salary" class="w-full rounded-md ring-2 ring-indigo-600 focus:ring-indigo-700">
                <option>Adverising and Marketing</option>
                <option>Aerospace</option>
                <option>Agriculture</option>
                <option>Computer and Technology</option>
                <option>Construction</option>
                <option>Education</option>
                <option>Energy</option>
                <option>Entertainment</option>
                <option>Fashion</option>
                <option>Finance and Economic</option>
                <option>Food and Beverage</option>
                <option>Health care</option>
                <option>Manufacturing</option>
                <option>Media and news</option>
                <option>Mining</option>
                <option>Pharmaceutical</option>
                <option>Telecommunication</option>
                <option>Transportation</option>
            </select>
        </form>
        <div class="overflow-x-auto mb-5">
            <table class="w-full">
                <thead class="text-md text-left">
                    <tr class="text-md font-md bg-indigo-800 text-indigo-50 uppercase">
                        <th scope="col" class="py-3 px-5">Role title</th>
                        <th scope="col" class="py-3 px-5">Average Salary</th>
                        <th scope="col" class="py-3 px-5">Job Ads</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="dark:bg-gray-300 border-t border-gray-400 text-left hover:bg-gray-300">
                        <th scope="row" class="py-3 px-5 font-medium text-gray-900 whitespace-nowrap">Creative Director</th>
                        <td class="py-3 px-5">₱ 55,968</td>
                        <td class="py-3 px-5 whitespace-nowrap"><a href="#ads" class="font-medium text-indigo-600 hover:text-indigo-700">View jobs</a></td>
                    </tr>
                    <tr class="dark:bg-gray-300 border-t border-gray-400 text-left hover:bg-gray-300">
                        <th scope="row" class="py-3 px-5 font-medium text-gray-900 whitespace-nowrap">Copywriter</th>
                        <td class="py-3 px-5">₱ 28,000</td>
                        <td class="py-3 px-5 whitespace-nowrap"><a href="#ads" class="font-medium text-indigo-600 hover:text-indigo-700">View jobs</a></td>
                    </tr>
                    <tr class="dark:bg-gray-300 border-t border-gray-400 text-left hover:bg-gray-300">
                        <th scope="row" class="py-3 px-5 font-medium text-gray-900 whitespace-nowrap">Graphic Designer</th>
                        <td class="py-3 px-5">₱ 24,689</td>
                        <td class="py-3 px-5 whitespace-nowrap"><a href="#ads" class="font-medium text-indigo-600 hover:text-indigo-700">View jobs</a></td>
                    </tr>
                    <tr class="dark:bg-gray-300 border-t border-gray-400 text-left hover:bg-gray-300">
                        <th scope="row" class="py-3 px-5 font-medium text-gray-900 whitespace-nowrap">Marketing Coordinator</th>
                        <td class="py-3 px-5">₱ 40,952</td>
                        <td class="py-3 px-5 whitespace-nowrap"><a href="#ads" class="font-medium text-indigo-600 hover:text-indigo-700">View jobs</a></td>
                    </tr>
                    <tr class="dark:bg-gray-300 border-t border-gray-400 text-left hover:bg-gray-300">
                        <th scope="row" class="py-3 px-5 font-medium text-gray-900 whitespace-nowrap">Social Media Coordinator</th>
                        <td class="py-3 px-5">₱ 46,493</td>
                        <td class="py-3 px-5 whitespace-nowrap"><a href="#ads" class="font-medium text-indigo-600 hover:text-indigo-700">View jobs</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-8 items-center justify-center place-content-center">
            <div class="bg-white rounded-md shadow-sm p-4 border-2 hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-center justify-center">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-xl font-bold text-gray-600">Company Name 1</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-2 py-4">
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-sm p-4 border-2 hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-center justify-center">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-xl font-bold text-gray-600">Company Name 2</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-2 py-4">
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-sm p-4 border-2 hover:border-indigo-800 transition duration-300">
                <div class="inline-flex items-center justify-center">
                    <img src="{{ asset('assets/company/logo/default.png')}}"  class="h-16 w-16 mr-3 shadow-sm" alt="Company Logo">
                    <div class="mb-1">
                        <h2 class="text-xl font-bold text-gray-600">Company Name 3</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-2 py-4">
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                    <div class="flex justify-between px-2 text-nowrap mb-2 hover:bg-gray-100 hover:underline p-1 transition duration-300">
                        <p class="text-md truncate mr-2">Accountant asdasd asdasdsa</p>
                        <p class="font-medium whitespace-nowrap text-nowrap">₱ 35,106</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')