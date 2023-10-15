@include("partials.subhead", [$title]) 
<div class="container mx-auto p-4">
    <div class="flex justify-center  mt-10 mb-14">
        <div class="bg-gray-800 rounded-lg w-[40rem]">
            <div class="flex flex-col flex-wrap p-4">
                <div class="flex justify-center items-center mb-5">
                    <h2 class="text-indigo-800 text-4xl font-extrabold mt-3">JobSearch</h2>
                </div>
                <div class="ml-3 mr-3">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-200 mb-2">Welcome back</h2>
                    <span class="text-gray-300">Don't have an account? <a href="/register" class="text-indigo-600 font-bold hover:text-indigo-700">Sign up</a></span>
                    <div class="mt-3">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="text-gray-300 font-medium">Email Address<label>
                                <input type="text" id="email" name="email" class="w-full rounded-lg font-normal text-gray-900 bg-gray-100 mt-2 placeholder-gray-400" autocomplete="email" value="{{ old('email') }}" placeholder="Email address">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="text-gray-300 font-medium">Password<label>
                                <input type="password" id="password" name="password" class="w-full rounded-lg font-normal text-gray-900 bg-gray-100 mt-2 placeholder-gray-400" placeholder="••••••••">
                            </div>
                            <div class="flex justify-between items-center px-3 mb-3">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                      <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                    </div>
                                    <div class="ml-3 text-sm">
                                      <label for="remember" class="text-gray-500 dark:text-gray-300 font-medium">Remember me</label>
                                    </div>
                                </div>
                                <a href="#forgot" class="text-indigo-700 font-medium hover:underline">Forgot Password?</a>
                            </div>
                            
                            <button type="submit" class="text-center bg-indigo-800 w-full rounded-lg p-3 text-gray-200 hover:bg-indigo-600 hover:text-white">Sign in</button>
                            @if (Session::has('login_msg'))
                                {{Session::get('login_msg')}}
                            @endif

                            @error('loginErr')
                                <div class=" text-red-700 p-2 mt-3 rounded-md text-center">
                                    {{ $message }}
                                </div>                    
                            @enderror
                        </form>
                    </div>
                    <div class="relative flex py-5 items-center ml-5 mr-5">
                        <div class="flex-grow border-t border-gray-400"></div>
                        <span class="flex-shrink mx-4 text-gray-400">or</span>
                        <div class="flex-grow border-t border-gray-400"></div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 w-full mb-5">
                        <a href="#Google" class="inline-flex items-center border-2 justify-center border-indigo-600 p-2 rounded-lg text-gray-400 hover:bg-indigo-500 hover:text-white">
                            <img width="20" height="20" src="https://img.icons8.com/external-those-icons-flat-those-icons/24/external-Google-logos-and-brands-those-icons-flat-those-icons.png" alt="external-Google-logos-and-brands-those-icons-flat-those-icons"/>
                            {{-- <p class="text-md tracking-tighter font-semibold">Sign up with Google</p> --}}
                        </a>
                        <a href="#Apple" class="inline-flex items-center border-2 justify-center border-indigo-600 p-2 rounded-lg text-gray-400 hover:bg-indigo-500 hover:text-white">
                            <i class="fa-brands fa-apple mr-2 text-xl text-white opacity-100"></i> 
                            {{-- <p class="text-md tracking-tighter font-semibold">Sign up with Apple</p> --}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')