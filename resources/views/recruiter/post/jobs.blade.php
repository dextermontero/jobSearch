@include("partials.r_header", [$title])
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="bg-gray-50 rounded p-4">
                <div class="mb-4 p-2">
                    <h2 class="text-2xl font-poppins font-bold tracking-wider mb-4">Compose Job Hiring</h2>
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="search_company" class="block mb-2 text-lg font-medium text-gray-900">Select Company</label>
                            <select id="search_company" class="company_dropdown"></select>
                        </div>
                    </form>
                    <form action="{{ route('recruiter_jobpost') }}" method="POST" class="mb-10 mt-10">
                        @csrf
                        <span id="displayCompany"></span>
                        <div class="grid grid-cols-1 gap-4 mt-5">
                            <div class="p-0 md:px-4">
                                <div class="mb-4">
                                    <label for="job_title" class="block mb-2 text-lg font-medium text-gray-900">Job Title</label>
                                    <input type="text" id="job_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Job title" required>
                                </div>
                                <div id="editor" style="min-height:px; important!" ></div>
                                <input type="hidden" name="quill-html" id="quill-html">
                                <button type="submit"  id="post" class="rounded-full py-2 px-3 bg-blue-500 text-gray-50 mt-8 text-right">Post Hiring</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        @include('partials.r_footer')
        <script>
            var toolbarOptions = [
                [
                    { header: [1, 2, 3, false] }
                ],
                [
                    { 'font': [] }
                ],
                ['bold', 'italic', 'underline'], 
                ['image'],
                [
                    { 'list': 'ordered'}, 
                    { 'list': 'bullet' }, 
                    { 'align': [] }
                ],
                [
                    { 'indent': '-1'}, 
                    { 'indent': '+1' }
                ],
                [
                    { 'color': [] }, 
                    /* { 'background': [] } */
                ],
            ];

            var editor = new Quill('#editor', {
                modules: { 
                    toolbar: toolbarOptions 
                },
                placeholder: 'Compose an Job post',
                theme: 'snow',
            });
            var customButton = document.querySelector('#post');
            customButton.addEventListener('click', function() {
                var html = editor.root.innerHTML;
                document.getElementById('quill-html').value = html;
                console.log(editor.getContents());
                /* post_job.submit(); */
            });
          </script>
          <script>
            $(document).ready(function() {
                var token = $('input[name="_token"]').attr('value');
                $( "#search_company" ).select2({
                    placeholder: {
                        id: '', // the value of the option
                        text: 'None Selected'
                    },
                    width: '100%',
                    ajax: { 
                        url: "{{route('recruiter_showcompany')}}",
                        type: "post",
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return {
                                _token: token,
                                search: params.term // search term
                            };
                        },
                        processResults: function (response) {
                            return {
                                results: response
                            };
                            console.log(response);
                        },
                        cache: true
                    },
                    templateResult: function (response) {
                        var $span = $('<span><div class="inline-flex items-center justify-center px-2"><img src="{{ asset("assets/company/logo/") }}/'+ response.logo +'" class="h-12 w-12 rounded-full mr-4"><div class="flex flex-col items-start justify-center"><p class="text-gray-700 text-md font-medium tracking-wider">'+ response.name +'</p><h5 class="text-sm text-gray-600 tracking-wider">'+ response.category +'</h5></div></div></span>');
                        return $span;
                    },
                    templateSelection: function (response) {
                        var $span = "";
                        if (response.id.length > 0 ) {
                            return $span = $('<span><div class="inline-flex items-center justify-center px-2"><img src="{{ asset("assets/company/logo/") }}/'+ response.logo +'" class="h-12 w-12 rounded-full mr-4"><div class="flex flex-col items-start justify-center"><p class="text-gray-700 text-md font-medium tracking-wider">'+ response.name +'</p><h5 class="text-sm text-gray-600 tracking-wider">'+ response.category +'</h5></div></div></span>');
                        } else {
                            return $span = $('<span><div class="inline-flex items-center justify-center px-2"><img src="{{ asset("assets/company/logo/default.png") }}" class="h-12 w-12 rounded-full mr-4"><div class="flex flex-col items-start justify-center"><p class="text-gray-700 text-md font-medium tracking-wider">'+ response.text +'</p><h5 class="text-sm text-gray-600 tracking-wider">'+ response.text +'</h5></div></div></span>');t;
                        }
                        return $span;
                    }

                });

                $('#search_company').on('change', function() {
                    var getID = $(this).find('option:selected');
                    var storeID = '';
                    
                    getID.each(function() {
                        storeID = $(this).val();
                    });
                    console.log(storeID);
                    $.post('{{ route("recruiter_getCompanyID") }}',
                    {
                        _token: token,
                        id:storeID
                    },
                    function(data){
                        displayCompany(data);
                    });

                    function displayCompany(data){
                        let display = '';
                        if(data.dispCompany.length <= 0){
                        }else{
                            display += `<div class="grid grid-cols-1 md:grid-cols-[25%_73%] gap-4">
                            <div class="mb-4 flex justify-center">
                                <img src="{{ asset('assets/company/logo') }}/`+ data.dispCompany[0].company_logo +`" class="h-36 w-36">
                            </div>    
                            <div class="">
                                <input type="text" id="company_id" name="company_id" value="`+ data.dispCompany[0].id +`" hidden>
                                <div class="">
                                    <label for="company_name" class="block mb-2 text-lg font-medium text-gray-900">Company Name</label>
                                    <input type="text" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 border-transparent focus:border-transparent focus:ring-0 text-sm rounded-lg block w-full px-0 py-2" value="`+ data.dispCompany[0].company_name +`" placeholder="Company Name" disabled>
                                </div>
                                <div class="">
                                    <label for="company_country" class="block mb-2 text-lg font-medium text-gray-900">Country</label>
                                    <input type="text" id="company_country" class="bg-gray-50 border border-gray-300 text-gray-900 border-transparent focus:border-transparent focus:ring-0 text-sm rounded-lg block w-full px-0 py-2" value="`+ data.dispCompany[0].company_categories +`" placeholder="Company Categories" disabled>
                                </div>
                            </div>
                        </div>`;
                        }
                        $('#displayCompany').html(display);
                    }
                    
                });
            });
          </script>
    </div>
</div>
</body>
</html>