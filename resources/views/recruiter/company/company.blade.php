@include("partials.r_header", [$title])   
<div class="min-h-screen">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="rounded">
                @if ($companyCount > 0)
                    <nav class="w-full rounded-md mt-2 mb-4">
                        <ol class="list-reset flex items-center justify-end">
                            <li>
                                <button type="button" data-modal-target="add-more-company" data-modal-toggle="add-more-company" class="bg-blue-500 px-3 py-2 text-white rounded-lg hover:bg-blue-700">
                                    <i class="fa-solid fa-plus"></i>
                                    Add Company
                                </button>
                            </li>
                            <li>
                                <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
                            </li>
                            <li class="text-neutral-500 dark:text-neutral-400 font-medium">
                                <a href="#" class="hover:text-blue-700">Archived</a>
                            </li>
                        </ol>
                    </nav>
                    @foreach ($companies as $company)
                    <div class="group">
                        <div class="flex flex-col md:flex-row items-start md:items-center justify-between min-h-min mb-4 rounded bg-gray-50 p-4 group-hover:bg-gray-100 transition duration-100">
                            <div class="">
                                <div class="inline-flex items-center">
                                    <img src="{{ asset('assets/company/logo/'. $company->company_logo) }}" class="h-32 w-32 mr-3 rounded-md" alt="{{ $company->company_name}}">
                                    <div class="flex flex-col">
                                        <h2 class="text-2xl font-bold font-poppins text-gray-700">{{ $company->company_name}}</h2>
                                        <p class="text-sm">{{ $company->company_categories }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-1 md:px-3 md:py-4 mb-2 flex items-center justify-end w-full md:w-[20%]">
                                <a href="/recruiter/company/{{ $company->id }}" data-tooltip-target="view_{{ $company->id }}" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-teal-500 group-hover:bg-white">
                                    <i class="fa-solid fa-eye"></i>
                                    <div id="view_{{ $company->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        View Details
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="/recruiter/company/edit/{{ $company->id }}" data-tooltip-target="edit_{{ $company->id }}"class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-blue-500 group-hover:bg-white">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    <div id="edit_{{ $company->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Edit Details
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <form action="/recruiter/company/{{ $company->id }}" method="POST">
                                    @csrf
                                    <button type="submit" id="archive" name="archive" data-tooltip-target="archive_{{ $company->id }}" class="p-3 bg-gray-200 mr-2 rounded w-12 h-12 text-center text-gray-600 hover:text-red-500 group-hover:bg-white"><i class="fa-solid fa-box-archive"></i></button>
                                    <div id="archive_{{ $company->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        <span class="text-red-500">Archive Company</span>
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- Main modal -->
                    <div id="add-more-company" tabindex="-1" data-modal-backdrop="static" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-more-company">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-5 py-2 lg:px-5">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Search Company</h3>
                                    <form method="POST" class="space-y-1 mb-4" action="">
                                        @csrf
                                        <div>
                                            <label for="search_company" class="block mb-2 text-md font-medium text-gray-900 ">Company Name</label>
                                            <input type="text" name="search_company" id="search_company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" placeholder="Search company name">
                                        </div>
                                    </form>
                                    <div class="h-80 overflow-y-auto mb-4 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100 scrollbar-rounded-full p-2">
                                        <span id="showCompany"></span>
                                    </div>
                                    <div class="flex justify-end divide-y-2 mb-2">
                                        <a href="{{ route('recruiter_createCompany') }}" class="bg-blue-500 text-gray-100 py-2 px-3 rounded-full font-medium hover:bg-blue-600">
                                            <i class="fa-solid fa-plus mr-2"></i>Add other Company
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                {{-- NO DATA START HERE --}}
                    <nav class="w-full rounded-md mt-2 mb-4">
                        <ol class="list-reset flex items-center justify-end">
                            <li>
                                <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-green-500 px-3 py-2 text-white rounded-lg hover:bg-green-700">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    Search Company
                                </button>
                            </li>
                            <li>
                                <span class="mx-2 text-neutral-500 dark:text-neutral-400">/</span>
                            </li>
                            <li class="text-neutral-500 dark:text-neutral-400 font-medium">
                                <a href="#" class="hover:text-blue-700">Archived</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="flex items-center justify-center h-[28rem] mb-4 rounded dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            No Company Data
                        </p>
                    </div>
                    {{-- Modal --}}
                    <!-- Main modal -->
                    <div id="authentication-modal" tabindex="-1" data-modal-backdrop="static" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-5 py-2 lg:px-5">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Search Company</h3>
                                    <form method="POST" class="space-y-1 mb-4" action="">
                                        @csrf
                                        <div>
                                            <label for="search_company" class="block mb-2 text-md font-medium text-gray-900 ">Company Name</label>
                                            <input type="text" name="search_company" id="search_company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" placeholder="Company Name">
                                        </div>
                                    </form>
                                    <div class="h-80 overflow-y-auto mb-4 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100 scrollbar-rounded-full p-2">
                                        <span id="showCompany"></span>
                                    </div>
                                    <div class="flex justify-end divide-y-2 mb-2">
                                        <a href="{{ route('recruiter_createCompany') }}" class="bg-blue-500 text-gray-100 py-2 px-3 rounded-full font-medium hover:bg-blue-600">
                                            <i class="fa-solid fa-plus mr-2"></i>Add your Company
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        @include('partials.r_footer')
<script>
    $(document).ready(function() {
        $('#search_company').on('keyup', function(){
            search();
        });

        search();

        function search(){
            var keyword = $('#search_company').val();
            var token = $('input[name="_token"]').attr('value');
            $.post('{{ route("recruiter_searchCompany") }}',
            {
                _token: token,
                keyword:keyword
            },
            function(data){
                displayCompanies(data);
            });
        }

        function displayCompanies(res){
            let data = '';
            if(res.companies.length <= 0){
                data+= `
                <div class="flex items-center justify-center h-56 mb-4 rounded  dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        No Company Data
                    </p>
                </div>`;
            }

            res.companies.forEach(function(cl) {
                cl.action = res.getCompany.some(c => c.company_id === cl.id)
            });

            for(let i = 0; i < res.companies.length; i++){
                if(res.companies[i].action){
                    data += `
                    <div class="group">
                        <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                            <img src="{{ asset('assets/company/logo') }}/`+res.companies[i].company_logo+`" class="h-16 w-16 mr-3 rounded-md" alt="`+res.companies[i].company_name+`">
                            <div class="flex justify-between items-center w-full">
                                <div class="">
                                    <h2 class="text-gray-700 text-md font-medium">`+res.companies[i].company_name+`</h2>
                                    <span class="text-gray-600 text-sm font-poppins">`+res.companies[i].company_categories+`</span>
                                </div>
                                <div class="text-right text-blue-500 mr-3 p-2 whitespace-nowrap">
                                    Added
                                </div>
                            </div>
                        </div>
                    </div>`;
                }else{
                    data += `
                    <a href="/recruiter/company/add/`+res.companies[i].id+`" class="group">
                        <div class="inline-flex items-center w-full group-hover:bg-gray-300 rounded-md p-1">
                            <img src="{{ asset('assets/company/logo') }}/`+res.companies[i].company_logo+`" class="h-16 w-16 mr-3 rounded-md" alt="`+res.companies[i].company_name+`">
                            <div class="flex justify-between items-center w-full">
                                <div class="">
                                    <h2 class="text-gray-700 text-md font-medium">`+res.companies[i].company_name+`</h2>
                                    <span class="text-gray-600 text-sm font-poppins">`+res.companies[i].company_categories+`</span>
                                </div>
                                <div class="text-right text-green-500 mr-3 rounded-lg p-2 hover:bg-green-500 hover:text-white whitespace-nowrap">
                                    <i class="fa-solid fa-plus"></i>
                                    Add
                                </div>
                            </div>
                        </div>
                    </a>`;
                }
            }
            
            $('#showCompany').html(data);
        }
    });
    </script>
</body>
</html>