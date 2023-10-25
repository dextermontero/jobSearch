@include("partials.r_header", [$title])   
<div class="min-h-screen mt-3">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-[4.5rem]">
            <div class="rounded">
                <h2 class="mb-5 font-bold uppercase tracking-wider text-gray-600 text-xl font-poppins">Create Company Profile</h2>
                <form action="{{ route('recruiter_addCompany') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col items-center mb-4 rounded bg-gray-50">
                        <div class="container mx-auto p-4 divide-y mt-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 justify-center mb-4">
                                <div class="flex flex-col items-start md:items-center justify-center">
                                    <img id="logo_preview" src="{{ asset('assets/company/logo/default.png') }}" class="h-24 md:h-40 md:w-40 mb-4">
                                    <div class="mb-2">
                                        <input type="file" onchange="loadLogo(event)" name="logo" id="logo">
                                    </div>
                                    @error('logo')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex flex-col items-start md:items-center justify-center">
                                    <img id="cover_preview" src="{{ asset('assets/company/cover/default_cover.png') }}" class="h-24 md:h-40 w-full mb-4">
                                    <div class="">
                                        <input type="file" onchange="loadCover(event)"  name="cover" id="cover">
                                    </div>
                                    @error('cover')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="font-bold tracking-wider text-gray-700 text-xl mt-4 mb-8">Company Information</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="col-span-2 md:col-span-1">
                                        <label for="company_name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Company Name</label>
                                        <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Name">
                                        @error('company_name')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 md:col-span-1">
                                        <label for="company_email" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Company Email</label>
                                        <input type="text" id="company_email" name="company_email" value="{{ old('company_email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Email">
                                        @error('company_email')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-span-2">
                                        <label for="company_about" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">About Company</label>
                                        <textarea id="company_about" name="company_about" rows="4" value="{{ old('company_about') }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-700 focus:border-indigo-700" placeholder="Company Background"></textarea>
                                        @error('company_about')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 md:col-span-1">
                                        <label for="company_phone" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Phone Number</label>
                                        <input type="text" id="company_phone" name="company_phone" value="{{ old('company_phone') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Mobile Number">
                                        @error('company_phone')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 md:col-span-1 relative">
                                        <label for="company_founded" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Founded Date</label>
                                        @if($errors->has('company_founded') || $errors->has('company_phone'))
                                            <div class="absolute inset-y-0 top-1 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="fa-solid fa-calendar-days w-4 h-4 text-gray-500"></i>
                                            </div>
                                        @else
                                            <div class="absolute inset-y-0 top-8 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="fa-solid fa-calendar-days w-4 h-4 text-gray-500"></i>
                                            </div>
                                        @endif
                                        <input datepicker-autohide datepicker type="text" id="company_founded" name="company_founded" value="{{ old('company_founded') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full pl-10 p-2.5" placeholder="Select Date">
                                        @error('company_founded')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 md:col-span-1">
                                        <label for="company_categories" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Company Categories</label>
                                        <input type="text" id="company_categories" name="company_categories" value="{{ old('company_categories') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Categories">
                                        @error('company_categories')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 md:col-span-1">
                                        <label for="company_size" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Company Size</label>
                                        <input type="text" id="company_size" name="company_size" value="{{ old('company_size') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="50-100">
                                        @error('company_size')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-span-2">
                                        <label for="company_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Address</label>
                                        <textarea id="company_address" name="company_address" rows="4" value="{{ old('company_address') }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-700 focus:border-indigo-700" placeholder="Company Address"></textarea>
                                        @error('company_address')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="font-bold tracking-wider text-gray-700 text-xl mt-4 mb-8">Social Network</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="">
                                        <label for="company_website" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Website</label>
                                        <input type="text" id="company_website" name="company_website" value="{{ old('company_website') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Website Link">
                                        @error('company_website')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <label for="company_facebook" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Facebook</label>
                                        <input type="text" id="company_facebook" name="company_facebook" value="{{ old('company_facebook') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Facebook link">
                                        @error('company_facebook')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <label for="company_linkedin" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">LinkedIn</label>
                                        <input type="text" id="company_linkedin" name="company_linkedin" value="{{ old('company_linkedin') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="LinkedIn Username">
                                        @error('company_linkedin')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <label for="company_twitter" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Twitter</label>
                                        <input type="text" id="company_twitter" name="company_twitter" value="{{ old('company_twitter') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Twitter Username">
                                        @error('company_twitter')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <label for="company_instagram" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Instagram</label>
                                        <input type="text" id="company_instagram" name="company_instagram" value="{{ old('company_instagram') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Instagram Username">
                                        @error('company_instagram')
                                            <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="bg-green-600 p-4 rounded text-white font-medium mb-6 ml-auto mr-8">Save Company</button>
                    </div>
                </form>
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