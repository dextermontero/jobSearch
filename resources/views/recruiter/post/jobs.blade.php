@include("partials.r_header", [$title])
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="min-h-screen mt-5">
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-[4.5rem]">
            <div class="bg-gray-50 rounded p-4">
                <div class="mb-4">
                    <h2 class="text-2xl font-poppins font-bold tracking-wider mb-4">Compose Job Hiring</h2>
                    <select class="js-example-basic-single" name="state">
                        <option value="AL">Alabama</option>
                          ...
                        <option value="WY">Wyoming</option>
                      </select>
                    <form class="mb-20">
                        <div class="grid grid-cols-1 md:grid-cols-[25%_75%] gap-4 p-2">
                            <div class="mb-4">
                                <div class="flex flex-col">
                                    <div class="mb-4 flex justify-center">
                                        <img src="{{ asset('assets/company/logo/default.png') }}" class="h-36 w-36">
                                    </div>
                                    <div class="col-span-2 w-full">
                                        <div class="mb-4">
                                            <label for="company_name" class="block mb-2 text-lg font-medium text-gray-900">Company Name</label>
                                            <input type="text" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Company Name" disabled>
                                        </div>
                                        <div class="mb-4">
                                            <label for="company_country" class="block mb-2 text-lg font-medium text-gray-900">Country</label>
                                            <input type="text" id="company_country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Company Country" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    </div>
</div>


<script src="{{ asset('assets/js/select2.full.min.js') }}"></script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
</body>
</html>