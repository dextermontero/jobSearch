@include("partials.r_header", [$title])   
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="rounded">
                @foreach ($companiesInfo as $info)
                    <div class="flex flex-col items-center justify-center rounded bg-gray-50 dark:bg-gray-800 relative">
                        <img src="{{ asset('assets/company/cover/'.$info->company_bg) }}" class="object-fill w-full h-32 md:h-36 z-20" alt="{{ $info->company_name }}">
                        <div class="absolute top-20 flex flex-col md:flex-row items-center justify-center bg-gray-50 p-4 w-full">
                            <img src="{{ asset('assets/company/logo/'.$info->company_logo) }}" class="rounded-full h-20 w-20 md:h-36 md:w-36 mr-3 shadow-lmd z-50" alt="{{ $info->company_name }}">
                            <h2 class="text-3xl font-bold tracking-wide font-poppins mt-5 md:mt-10">{{ $info->company_name }}</h2>
                        </div>
                        <div class="flex items-center justify-center mb-4 bg-gray-50 rounded mt-28 w-full z-30 px-2 py-1">
                            <ul class="inline-flex items-center justify-center divide-x-2">
                                <li><a href="#" class="py-2 px-4">Overview</a></li>
                                <li><a href="#" class="py-2 px-4">Photos</a></li>
                                <li><a href="#" class="py-2 px-4">Reviews</a></li>
                                <li><a href="#" class="py-2 px-4">Salaries</a></li>
                                <li><a href="#" class="py-2 px-4">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800 mt-4">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
        @include('partials.r_footer')
    </body>
</html>
