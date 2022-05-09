@extends('app')

@section('content')
    <x-Jumbotron
        title='Services'
        subtitle='Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.'
        button='Explore now'
        bg='/images/backgrounds/services.jpg'
    />

    <section class="py-40">
        <div class="container">
            <x-Title text="We Provide The Best Services" />

            <div class="w-8/12 mx-auto">
                <div class="grid grid-cols-3 gap-30 mt-40">
                    @foreach ($services as $service)
                        <x-Service :service="$service" />
                    @endforeach
                </div>
            </div>
            
        </div>
    </section>

    <section class="py-40">
        <div class="container">
            <x-Title text="Trainings" />

            <div class="grid grid-cols-3 gap-30 mt-40">
                @foreach ($trainings as $training)
                    <x-News :news="$training"/>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.consulting')

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