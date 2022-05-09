@extends('app')

@section('content')
    <x-Jumbotron
        title='News'
        subtitle='Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.'
        button='Explore now'
        bg='/images/backgrounds/news.jpg'
    />

    <section class="py-40">
        <div class="container">
            <x-Title text="News" />

            <div class="grid grid-cols-3 gap-30 mt-40">
                @foreach ($news as $item)
                    <x-News :news="$item"/>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-40">
        <div class="container">
            <x-Title text="Announcements" />

            <div class="grid grid-cols-3 gap-30 mt-40">
                @foreach ($announcements as $announcement)
                    <x-News :news="$announcement"/>
                @endforeach
            </div>
        </div>
    </section>


    @include('partials.partners', array('partners'=>$partners))


    @include('partials.contacts')

@endsection