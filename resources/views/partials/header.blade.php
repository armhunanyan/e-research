<header class="relative flex flex-wrap justify-between items-center py-15 z-10 bg-white md:bg-transparent">
{{-- <div class="md:w-120">
    <p class="text-black">
        <a href="{{route('home')}}">
            <img src="/images/logo-dark.svg" />
        </a>
    </p>
</div> --}}
<div class="md:flex-1">
    <div class="md:container">
        <div id="mobile-menu" class="fixed md:relative flex flex-col md:flex-row items-center justify-center md:block w-screen h-screen md:w-auto md:h-auto left-full md:left-auto top-0 transition duration-500 transform px-25 py-50 md:p-0 bg-white md:bg-transparent z-20 ">
            <div class="w-full h-full flex flex-row items-center px-20 md:px-0">
                <div class="w-full flex justify-between md:hidden text-22">
                    <p>Logo</p>
                    <p id="close-mobile-menu">X</p>
                </div>
                <div class="md:w-120">
                    <p class="text-black">
                        <a href="{{route('home')}}">
                            <img src="/images/logo-dark.svg" />
                        </a>
                    </p>
                </div>
                <div class="flex w-full items-center">
                    <nav class="w-full">
                        <ul class="flex flex-col md:flex-row justify-evenly wide:justify-between">
                            @foreach ($navbar as $page)
                                <li class="mb-15 md:mb-0">
                                    <a class="flex items-center text-blue-dark p-10 md:p-0 {{Route::getCurrentRoute()->getName() === $page['route'] ? 'active' : ''}} {{$page['class']}}" href="{{route($page['route'])}}">
                                        <span class="inline-block md:hidden mr-10 w-20 h-20 bg-no-repeat bg-contain bg-center {{$page['icon']}}"></span>
                                        <span>{{$page['name']}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>     
        </div>
    </div>
</div>

{{-- <div class="md:w-120">
    <div class="w-25 md:hidden" id="open-mobile-menu">

        <div class="w-full h-3 bg-blue rounded-2"></div>

        <div class="w-9/12 h-3 mt-5 bg-blue rounded-2 ml-auto"></div>

        <div class="w-6/12 h-3 mt-5 bg-blue rounded-2 ml-auto"></div>

    </div>
</div> --}}
</header>