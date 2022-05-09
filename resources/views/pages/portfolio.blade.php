@extends('app')

@section('content')
    <x-Jumbotron
        title='Portfolio'
        subtitle='Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.'
        button='Explore now'
        bg='/images/backgrounds/portfolio.jpg'
    />

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


    @include('partials.partners', array('partners'=>$partners))


    @include('partials.contacts')

@endsection