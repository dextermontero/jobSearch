
@if (Auth::guard('recruiter')->check())
    <script>window.location = "{{ route('recruiter_dashboard') }}";</script>
@else
    @include("partials.r_header", [$title])
    <div class="container mx-auto py-4 px-3 mt-10 mb-14">
        <div class="flex items-center justify-center mx-auto bg-white mt-10 rounded-lg shadow-md w-full md:w-9/12">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-full items-center">
                <div class="hidden lg:block">
                    <div class="text-center p-10">
                        <lottie-player src="https://lottie.host/d4789964-51df-4bca-ac9c-ab0b6fa8da1b/I8UhM5lxJ9.json" class="h-80" background="transparent" speed="2" loop autoplay></lottie-player>
                    </div>
                </div>
                <div class="p-10">
                    <div class="mb-3">
                        <h2 class="font-poppins text-4xl font-extrabold text-indigo-600 mb-2">Log In</h2>
                        <span class="text-gray-700">Don't have an account? <a href="/recruiter/register" class="text-indigo-600 font-bold hover:text-indigo-700">Sign up</a></span>
                    </div>
                    <form action="{{ route('recruiter_account') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="text-gray-700 font-medium">Email Address<label>
                            <input type="text" id="email" name="email" class="w-full rounded-lg mt-3 ring-2 ring-gray-600 focus:ring-indigo-700 text-gray-700 focus:placeholder-gray-400" autocomplete="email" value="{{ old('email') }}" placeholder="Email address">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="text-gray-700 font-medium">Password<label>
                            <input type="password" id="password" name="password" class="w-full rounded-lg mt-3 ring-2 ring-gray-600 focus:ring-indigo-700 text-gray-700 focus:placeholder-gray-400" value="{{ old('password') }}" placeholder="Password">
                        </div>
                        <div class="flex justify-between items-center px-1 mb-2">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-2 focus:ring-indigo-700">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-700 font-medium">Remember me</label>
                                </div>
                            </div>
                            <a href="#forgot" class="text-indigo-700 font-medium hover:underline">Forgot Password?</a>
                        </div>
                        <button type="submit" class="text-center bg-indigo-600 w-full rounded-lg p-3 mb-1 text-white hover:bg-indigo-700 hover:text-white">Sign in</button>
                        @if (Session::has('msg'))
                        <div class=" text-red-700 p-2 rounded-md text-center">
                            {{ session::get('msg') }}
                        </div>
                        @endif
                        <div class="grid grid-cols-2 gap-4 w-full mt-1 mb-5">
                            <a href="#Google" class="inline-flex items-center border-2 justify-center border-indigo-600 p-2 rounded-lg text-gray-600 hover:bg-indigo-500 hover:text-white hover:border-indigo-700">
                                <img width="20" height="20" src="https://img.icons8.com/external-those-icons-flat-those-icons/24/external-Google-logos-and-brands-those-icons-flat-those-icons.png" alt="external-Google-logos-and-brands-those-icons-flat-those-icons" clas="shadow-md outline-2" />
                            </a>
                            <a href="#Apple" class="inline-flex items-center border-2 justify-center border-indigo-600 p-2 rounded-lg text-gray-600 hover:bg-indigo-500 hover:text-white hover:border-indigo-700">
                                <i class="fa-brands fa-apple mr-2 text-xl opacity-100 shadow-sm"></i> 
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')        
@endif     
