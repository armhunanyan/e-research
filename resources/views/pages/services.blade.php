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

            <div class="md:w-8/12 mx-auto">
                <div class="grid md:grid-cols-3 gap-30 mt-40">
                    @foreach ($services as $service)
                        <x-Service :service="$service" />
                    @endforeach
                </div>
            </div>
            
        </div>
    </section>

    <section class="py-40 bg-gray">
        <div class="container">
            <x-Title text="Trainings" />
            <div class="grid md:grid-cols-4 gap-30 mt-30 md:mt-40">
                @foreach ($trainings as $training)
                    <x-Training :training="$training"/>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.consulting', array('bg'=> 'bg-white'))

    @include('partials.recent_news', array('news' => $news))

    @include('partials.partners', array('partners'=>$partners))

    @include('partials.contacts')

@endsection