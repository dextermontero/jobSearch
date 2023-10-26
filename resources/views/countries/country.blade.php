@include("partials.subhead", [$title])
<div class="container mx-auto mb-5 min-h-[34rem]">
    <div class="container mx-auto p-4">
        <div class="container mx-auto mb-10">
            <div class="grid grid-cols-6 sm:grid-cols-6 gap-1 items-start justify-start">
                <div class="p-2 text-center border-r-4 border-gray-500">
                    <h1 class="text-5xl font-bold text-indigo-600">
                        @if(request()->get('id') == null)
                            #
                        @endif
                    </h1>
                </div>
                <div class="p-2 ml-2 col-span-5 w-full mr-2">
                    <ul class="flex flex-wrap item-center justify-start">
                        <li class="p-2 text-2xl"><a href="/countries/A" class="text-gray-600 p-1 font-medium hover:text-gray-700">A</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/B" class="text-gray-600 p-1 font-medium hover:text-gray-700">B</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/C" class="text-gray-600 p-1 font-medium hover:text-gray-700">C</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/D" class="text-gray-600 p-1 font-medium hover:text-gray-700">D</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/E" class="text-gray-600 p-1 font-medium hover:text-gray-700">E</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/F" class="text-gray-600 p-1 font-medium hover:text-gray-700">F</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/G" class="text-gray-600 p-1 font-medium hover:text-gray-700">G</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/H" class="text-gray-600 p-1 font-medium hover:text-gray-700">H</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/I" class="text-gray-600 p-1 font-medium hover:text-gray-700">I</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/J" class="text-gray-600 p-1 font-medium hover:text-gray-700">J</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/K" class="text-gray-600 p-1 font-medium hover:text-gray-700">K</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/L" class="text-gray-600 p-1 font-medium hover:text-gray-700">L</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/M" class="text-gray-600 p-1 font-medium hover:text-gray-700">M</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/N" class="text-gray-600 p-1 font-medium hover:text-gray-700">N</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/O" class="text-gray-600 p-1 font-medium hover:text-gray-700">O</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/P" class="text-gray-600 p-1 font-medium hover:text-gray-700">P</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/Q" class="text-gray-600 p-1 font-medium hover:text-gray-700">Q</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/R" class="text-gray-600 p-1 font-medium hover:text-gray-700">R</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/S" class="text-gray-600 p-1 font-medium hover:text-gray-700">S</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/T" class="text-gray-600 p-1 font-medium hover:text-gray-700">T</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/U" class="text-gray-600 p-1 font-medium hover:text-gray-700">U</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/V" class="text-gray-600 p-1 font-medium hover:text-gray-700">V</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/W" class="text-gray-600 p-1 font-medium hover:text-gray-700">W</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/X" class="text-gray-600 p-1 font-medium hover:text-gray-700">X</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/Y" class="text-gray-600 p-1 font-medium hover:text-gray-700">Y</a></li>
                        <li class="p-2 text-2xl"><a href="/countries/Z" class="text-gray-600 p-1 font-medium hover:text-gray-700">Z</a></li>
                    </ul>
                </div>
            </div>
        </div>

        @if (!$countries->isEmpty())
            <div class="grid grid-cols-1 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 items-center">
                @foreach ($countries as $country)
                    <a href="#" class="bg-white w-full shadow-md rounded-md text-gray-700 border-2 border-white hover:text-indigo-800  hover:border-indigo-800 transition duration-300">
                        <div class="inline-flex items-center p-2">
                            <img src="{{ asset('vendor/blade-flags/country-'.$country->code.'.svg') }}" class="h-20 w-20 mr-3 shadow-sm" alt="{{$country->name}} Flag">
                            <div class="" >
                                <h2 class="text-2xl font-bold">{{$country->name}}</h2>
                            </div>
                        </div>
                    </a>                
                @endforeach
            </div>
            <div class="mt-4">
                <?php echo $countries->links(); ?>
            </div>
        @else
            <div class="flex items-center justify-center h-[28rem] mb-4 rounded dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    No Country Data
                </p>
            </div>           
        @endif
    </div>
</div>
@include('partials.footer')
