@include("partials.r_header", [$title])
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="bg-gray-50 rounded p-4">
                <div class="mb-4 p-2">
                    <h2 class="text-2xl font-poppins font-bold tracking-wider mb-4">Edit Job Post</h2>
                    <form action="{{ route('recruiter_updatepost') }}" method="POST" class="mb-10 mt-10">
                        @csrf
                        @foreach ($postInfo as $post)
                            <div class="grid grid-cols-1 md:grid-cols-[25%_73%] gap-4">
                                <div class="mb-4 flex justify-center">
                                    <img src="{{ asset('assets/company/logo/'. $post->company_logo) }}" id="company_logo" name="company_logo" class="h-36 w-36" alt="{{ $post->company_name }}">
                                </div>    
                                <div class="">
                                    <input type="text" id="id" name="id" value="{{ $post->id }}" hidden>
                                    <div class="">
                                        <label for="company_name" class="block text-lg font-medium text-gray-900">Company Name</label>
                                        <input type="text" id="company_name" name="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg border-transparent focus:border-transparent focus:ring-0 rounded-lg block w-full px-0 py-2" value="{{ $post->company_name }}" placeholder="Company Name" disabled>
                                    </div>
                                    <div class="">
                                        <label for="company_categories" class="block text-lg font-medium text-gray-900">Category</label>
                                        <input type="text" id="company_categories" name="company_categories" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg border-transparent focus:border-transparent focus:ring-0 rounded-lg block w-full px-0 py-2" value="{{ $post->company_categories }}" placeholder="Company Categories" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-4 mt-5">
                                <div class="p-0 md:px-4">
                                    <div class="mb-4">
                                        <label for="job_title" class="block mb-2 text-lg font-medium text-gray-900">Job Title</label>
                                        <input type="text" id="job_title" name="job_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" value="{{ $post->job_title }}" placeholder="Job title">
                                        <span id="jobmsg"></span>
                                    </div>
                                    <div id="editor" name="editor" ></div>
                                    <span id="editormsg"></span>
                                    <input type="hidden" name="quill_html" id="quill_html" value="{{ $post->description }}">
                                    <button type="submit" id="update_post" class="rounded-full py-2 px-3 bg-green-500 text-gray-50 mt-8 text-right hover:bg-green-700">Update Post</button>
                                </div>
                            </div>                            
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
        @include('partials.r_footer')
        <script src="{{ asset('assets/js/quill.min.js') }}"></script>
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
                    { 'color': [],  },
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
            var text = $('#quill_html').val();
            editor.pasteHTML(text);

            var customButton = document.querySelector('#update_post');
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
</body>
</html>