@include("partials.r_header", [$title])   
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-[4.5rem]">
            <div class="rounded">
                <h2 class="mb-5 font-bold uppercase tracking-wider text-gray-600 text-xl font-poppins">Create Company Profile</h2>
                <div class="flex flex-col items-center mb-4 rounded bg-gray-50">
                    <div class="container mx-auto p-4 divide-y mt-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 justify-center mb-4">
                            <div class="flex flex-col items-start md:items-center justify-center">
                                <img id="logo_preview" src="{{ asset('assets/company/logo/default.png') }}" class="h-24 md:h-40 md:w-40 mb-4">
                                <div class="mb-2">
                                    <input type="file" onchange="loadLogo(event)" name="logo" id="logo">
                                </div>
                            </div>
                            <div class="flex flex-col items-start md:items-center justify-center">
                                <img id="cover_preview" src="{{ asset('assets/company/cover/default_cover.png') }}" class="h-24 md:h-40 w-full mb-4">
                                <div class="">
                                    <input type="file" onchange="loadCover(event)"  name="cover" id="cover">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h2 class="font-bold tracking-wider text-gray-700 text-xl mt-4 mb-8">Company Information</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="col-span-2 md:col-span-1">
                                    <label for="company_name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Company Name</label>
                                    <input type="text" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Name" required>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label for="company_name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Company Email</label>
                                    <input type="text" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Email" required>
                                </div>
                                <div class="col-span-2">
                                    <label for="company_about" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">About Company</label>
                                    <textarea id="company_about" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-700 focus:border-indigo-700" placeholder="Company Background"></textarea>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label for="company_number" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Phone Number</label>
                                    <input type="text" id="company_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Mobile Number" required>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label for="company_startdate" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Founded Date</label>
                                    <input type="text" id="company_startdate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Founded Date" required>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label for="company_categories" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Company Categories</label>
                                    <input type="text" id="company_categories" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Categories" required>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <label for="company_size" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Company Size</label>
                                    <input type="text" id="company_size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="50-100" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h2 class="font-bold tracking-wider text-gray-700 text-xl mt-4 mb-8">Social Network</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="">
                                    <label for="soc_website" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Website</label>
                                    <input type="text" id="soc_facebook" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Website Link">
                                </div>
                                <div class="">
                                    <label for="soc_facebook" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Facebook</label>
                                    <input type="text" id="soc_facebook" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Facebook URL">
                                </div>
                                <div class="">
                                    <label for="soc_linkedin" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">LinkedIn</label>
                                    <input type="text" id="soc_linkedin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="LinkedIn Username">
                                </div>
                                <div class="">
                                    <label for="soc_twitter" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Twitter</label>
                                    <input type="text" id="soc_twitter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Twitter Username">
                                </div>
                                <div class="">
                                    <label for="soc_instagram" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Instagram</label>
                                    <input type="text" id="soc_instagram" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Instagram Username">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <button class="bg-green-600 p-4 rounded text-white font-medium mb-6 ml-auto mr-8">Save Company</button>
                </div>
                
            </div>
        </div>
        @include('partials.r_footer')
    </div>
</div>
<script>
    var loadLogo = function(event) {
        
        var input = event.target;
        var file = input.files[0];
        var type = file.type;

        var logo = document.getElementById('logo_preview');

        logo.src = URL.createObjectURL(event.target.files[0]);
            logo.onload = function() {
            URL.revokeObjectURL(logo.src) // free memory
        }
    };

    var loadCover = function(event) {
        
        var input = event.target;
        var file = input.files[0];
        var type = file.type;

        var cover = document.getElementById('cover_preview');

        cover.src = URL.createObjectURL(event.target.files[0]);
        cover.onload = function() {
            URL.revokeObjectURL(cover.src) // free memory
        }
    };
</script>
</body>
</html>