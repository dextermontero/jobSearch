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
                            <select id="search_company" class="company_dropdown">
                            </select>
                        </div>
                    </form>
                    <form action="{{ route('recruiter_jobpost') }}" method="POST" class="mb-10 mt-10">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-[25%_73%] gap-4">
                            <div class="mb-4 flex justify-center">
                                <img src="{{ asset('assets/company/logo/default.png') }}" id="company_logo" name="company_logo" class="h-36 w-36">
                            </div>    
                            <div class="">
                                <input type="text" id="company_id" name="company_id" value="" hidden>
                                <div class="">
                                    <label for="company_name" class="block text-lg font-medium text-gray-900">Company Name</label>
                                    <input type="text" id="company_name" name="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg border-transparent focus:border-transparent focus:ring-0 rounded-lg block w-full px-0 py-2" value="" placeholder="Company Name" disabled>
                                </div>
                                <div class="">
                                    <label for="company_categories" class="block text-lg font-medium text-gray-900">Category</label>
                                    <input type="text" id="company_categories" name="company_categories" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg border-transparent focus:border-transparent focus:ring-0 rounded-lg block w-full px-0 py-2" value="" placeholder="Company Categories" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-4 mt-5">
                            <div class="p-0 md:px-4">
                                <div class="mb-4">
                                    <label for="job_title" class="block mb-2 text-lg font-medium text-gray-900">Job Title</label>
                                    <input type="text" id="job_title" name="job_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Job title" disabled>
                                    <span id="jobmsg"></span>
                                </div>
                                <div id="editor" name="editor"></div>
                                <span id="editormsg"></span>
                                <input type="hidden" name="quill_html" id="quill_html">
                                <button type="submit" id="post" class="rounded-full py-2 px-3 bg-blue-500 text-gray-50 mt-8 text-right hover:bg-blue-700" disabled>Post Hiring</button>
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
            customButton.addEventListener('click', function(e) {
                var html = editor.root.innerHTML;
                var check = editor.getLength();
                var job = $('#job_title').val();
                if(check > 1){
                    $('#editormsg').html('');
                    document.getElementById('quill_html').value = html;
                }else {
                    e.preventDefault();
                    $('#editormsg').html('<p class="pt-1 text-red-600 font-normal">The composer field must be not empty.</p>');
                }

                if(job == ''){
                    e.preventDefault();
                    $('#jobmsg').html('<p class="pt-1 text-red-600 font-normal">The job title field must be not empty.</p>');
                }else{
                    $('#jobmsg').html('');
                }
            });
          </script>
          <script>
            $(document).ready(function() {
                var token = $('input[name="_token"]').attr('value');
                var ql = document.getElementsByClassName("ql-editor");
                var pic = document.getElementById("company_logo");
                $(".ql-editor").attr('contenteditable', false);
                $( "#search_company" ).select2({
                    placeholder: 'Choice Company',
                    width: '100%',
                    allowClear: true,
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
                        },
                        cache: true
                    },
                    templateResult: function (response) {
                        if (response.loading){
                            return response.text;
                        }else{
                            var $span = $('<span><div class="inline-flex items-center justify-center px-2"><img src="{{ asset("assets/company/logo/") }}/'+ response.logo +'" class="h-12 w-12 rounded-full mr-4"><div class="flex flex-col items-start justify-center"><p class="text-gray-700 text-md font-medium tracking-wider">'+ response.name +'</p><h5 class="text-sm text-gray-600 tracking-wider">'+ response.category +'</h5></div></div></span>');
                        } 
                        return $span;
                    },
                    templateSelection: function (response) {
                        if (response.id.length > 0 ) {
                            var $span = $('<span><div class="inline-flex items-center justify-center px-2"><img src="{{ asset("assets/company/logo/") }}/'+ response.logo +'" class="h-12 w-12 rounded-full mr-4"><div class="flex flex-col items-start justify-center"><p class="text-gray-700 text-md font-medium tracking-wider">'+ response.name +'</p><h5 class="text-sm text-gray-600 tracking-wider">'+ response.category +'</h5></div></div></span>');
                        } else {
                            var $span = $('<span><div class="inline-flex items-center justify-center px-2"><img src="{{ asset("assets/company/logo/default.png") }}" class="h-12 w-12 rounded-full mr-4"><div class="flex flex-col items-start justify-center"><p class="text-gray-700 text-md font-medium tracking-wider">'+ response.text +'</p><h5 class="text-sm text-gray-600 tracking-wider">'+ response.text +'</h5></div></div></span>');
                        }
                        return $span;
                    }
                }).on("select2:select", function (e) {
                    var selected=e.params.data;
                    if (typeof selected!=="undefined") {
                        $("#company_id").val(selected.id);
                        pic.src = '{{ asset("assets/company/logo/") }}/'+ selected.logo;
                        $("#company_name").val(selected.name);
                        $("#company_categories").val(selected.category);
                        $('#job_title').removeAttr('disabled', 'disabled');
                        $(".ql-editor").attr('contenteditable', true);
                        $('#post').removeAttr('disabled', 'disabled');
                    }
                }).on("select2:unselecting", function (e) {
                    $("#company_id").val("");
                    $('#company_logo').src = 
                    pic.src = '{{ asset("assets/company/logo/default.png") }}';
                    $("#company_name").val("");
                    $("#company_categories").val("");
                    $('#job_title').attr('disabled', 'disabled');
                    $('#post').attr('disabled', 'disabled');
                    $(".ql-editor").attr('contenteditable', false);
                    ql[0].innerHTML = "";
                });
            });
          </script>
</body>
</html>