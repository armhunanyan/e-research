@extends('app')

@section('content')
    <x-Jumbotron
        title='About us'
        subtitle='Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.'
        button='Contact Us'
        bg='/images/backgrounds/about.jpg'
    />



    <section class="py-40 bg-gray">
        <div class="container">
            <x-Title text="Our Mission" />

            <div class="grid grid-cols-3">
                <div>
                    <div class="relative mb-30">
                        <img class="relative z-10" src="/images/demo2.png"/>
                        <div class="absolute w-full h-full top-0 left-0 rounded-md" style="background-color: #D3D3D380; transform: rotate(-15deg);"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="py-40">
        <div class="container">
            <x-Title text="Meet Our Team" />

            <div class="grid grid-cols-3 gap-y-100 mt-40">
                @foreach ($members as $member)
                    <x-Member :member="$member"/>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.partners', array('partners'=>$partners))


    @include('partials.contacts')

@endsection