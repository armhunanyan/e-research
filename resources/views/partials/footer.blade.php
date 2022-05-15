<footer class="bg-blue-dark py-15">
    <div class="container">
        <div class="flex items-center">
            <div class="md:w-120">
                <a href="{{route('home')}}">
                    <img src="/images/logo-light.svg" />
                </a>
            </div>
            <nav class="w-full">
                <ul class="flex flex-col md:flex-row justify-evenly wide:justify-between">
                    @foreach ($navbar as $page)
                        <li class="mb-15 md:mb-0">
                            <a class="flex items-center text-white p-10 md:p-0 {{Route::getCurrentRoute()->getName() === $page['route'] ? 'active' : ''}} {{$page['class']}}" href="{{route($page['route'])}}">
                                <span class="inline-block md:hidden mr-10 w-20 h-20 bg-no-repeat bg-contain bg-center {{$page['icon']}}"></span>
                                <span>{{$page['name']}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</footer>