@extends('app')

@section('content')
    <x-Jumbotron
        title='Amet minim mollit non deserunt'
        subtitle='Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.'
        button='Explore Now'
        bg='/images/backgrounds/home.jpg'
    />

    <section class="py-40">
        <div class="container">
            <x-Title text="We Provide The Best Services" />
            <div class="grid grid-cols-4 gap-30 mt-40">
                @foreach ($services as $service)
                    <x-Service :service="$service" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-40 bg-gray">
        <div class="container">
            <x-Title text="Our Projects" />

            <div class="grid grid-cols-3">
                <div class="col-span-2">
                    Projects here
                </div>
                <div>
                    <div class="relative mb-30">
                        <img class="relative z-10" src="/images/demo1.png"/>
                        <div class="absolute w-full h-full top-0 left-0 rounded-md" style="background-color: #D3D3D380; transform: rotate(-15deg);"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="py-40">
        <div class="container">
            <x-Title text="Recent News" />

            <div class="grid grid-cols-3 gap-30 mt-40">
                @foreach ($news as $item)
                    <x-News :news="$item"/>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.partners', array('partners'=>$partners))


    @include('partials.contacts')

@endsection