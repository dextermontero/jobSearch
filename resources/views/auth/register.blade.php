
@include("partials.subhead", [$title]) 
<div class="container mx-auto p-4">
    <div class="flex justify-center  mt-10 mb-14">
        <div class="bg-gray-800 rounded-lg w-[40rem]">
            <div class="flex flex-col flex-wrap p-4">
                <div class="flex justify-center items-center mb-5">
                    <h2 class="text-indigo-800 text-4xl font-extrabold mt-3">JobSearch</h2>
                </div>
                <div class="ml-3 mr-3">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-200 mb-2">Registration</h2>
                    <div class="mt-3">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-4 mb-3">
                                <div>
                                    <label for="firstname" class="text-gray-300 font-medium">First Name<label>
                                    <input type="text" id="firstname" name="firstname" class="w-full rounded-lg font-normal text-gray-900 bg-gray-100 mt-2 placeholder-gray-400" value="{{ old('firstname') }}" placeholder="First Name">
                                    @error('firstname')
                                        <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="lastname" class="text-gray-300 font-medium">Last Name<label>
                                    <input type="text" id="lastname" name="lastname" class="w-full rounded-lg font-normal text-gray-900 bg-gray-100 mt-2 placeholder-gray-400" value="{{ old('lastname') }}" placeholder="Last Name">
                                    @error('lastname')
                                        <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="text-gray-300 font-medium">Email Address<label>
                                <input type="email" id="email" name="email" class="w-full rounded-lg font-normal text-gray-900 bg-gray-100 mt-2 placeholder-gray-400" value="{{ old('email') }}" autocomplete="email" placeholder="Email address">
                                @error('email')
                                    <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="text-gray-300 font-medium">Password<label>
                                <input type="password" id="password" name="password" class="w-full rounded-lg font-normal text-gray-900 bg-gray-100 mt-2 placeholder-gray-400" placeholder="••••••••">
                                @error('password')
                                    <p class="pt-1 text-red-600 font-normal">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="mb-3 text-center bg-indigo-800 w-full rounded-lg p-3 text-gray-200 hover:bg-indigo-600 hover:text-white">Sign Up</button>
                            <div class="flex justify-start items-center px-1">
                                <span class="text-gray-300">Already have an account? <a href="/login" class="text-indigo-600 font-bold hover:text-indigo-700">Sign In</a></span>
                            </div>
                        </form>
                    </div>
                    <div class="relative flex py-4 items-center ml-5 mr-5">
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