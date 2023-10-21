@include("partials.r_header", [$title])   
<link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" />
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="bg-gray-50 rounded p-4">
                <div class="mb-4">
                    <h2 class="text-2xl font-poppins  font-bold tracking-wider mb-4">Compose ads</h2>
                    <form class="" id="post_job">
                        <div class="flex flex-wrap items-center gap-4 mb-4">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('assets/job/company_logo/default.png') }}" class="h-36 w-36">
                            </div>
                            <div class="col-span-2 max-w-auto">
                                <div class="mb-4">
                                    <label for="company_name" class="block mb-2 text-sm font-medium text-gray-900">Company Name</label>
                                    <input type="text" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Name" required>
                                </div>
                                <div class="mb-4">
                                    <label for="company_country" class="block mb-2 text-sm font-medium text-gray-900">Company Name</label>
                                    <input type="text" id="company_country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-700 focus:border-indigo-700 block w-full p-2.5" placeholder="Company Name" required>
                                </div>
                            </div>
                        </div>
                        <div id="editor">
                        </div>
                        <input type="hidden" name="quill-html" id="quill-html">
                        <button type="submit"  id="post" class="rounded-full py-2 px-3 bg-blue-500 text-gray-50 mt-8">Post Hiring</button>
                    </form>
                </div>
            </div>
        </div>
        @include('partials.r_footer')
        <script src="https://cdn.quilljs.com/1.0.0/quill.min.js"></script>
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
    </div>
</div>
