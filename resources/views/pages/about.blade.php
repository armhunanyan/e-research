@extends('app')

@section('content')
    <x-Jumbotron
        title='About us'
        subtitle='Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.'
        button='Contact Us'
        bg='/images/backgrounds/about.jpg'
    />

    @php
        $mission_title = 'Elit aute irure tempor cupidatat incididunt sint';
        $mission_content = 'Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. ';

        $choose_title = 'The best solutions for our clients';
        $choose_content = 'Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi';
    @endphp

    <section class="py-50 md:py-100 bg-white">
        <div class="container">
            <x-Title text="Our Mission" type="1" />

            <div class="grid md:grid-cols-5 gap-30 md:gap-80 items-center mt-30">
                <div class="md:col-span-2">
                    <div class="relative mb-30 w-90p mx-auto">
                        <img class="relative z-10 w-full" src="/images/demo2.png"/>
                        <div class="absolute w-full h-full top-0 left-0 rounded-md" style="background-color: #D3D3D380; transform: rotate(-15deg);"></div>
                    </div>
                </div>
                <div x-data="{show: false}" class="md:col-span-3">
                    <p class="text-blue-dark text-sm md:text-2xl mb-10">{{$mission_title}}</p>
                    <div x-show="!show">
                        <p class="text-xs md:text-base mb-30">{{\Illuminate\Support\Str::of($mission_content)->words(30)}}</p>
                        <x-ButtonNative text="Learn More" @click="show = true" />
                    </div>
                    <div x-show="show">
                        <p class="text-xs md:text-base mb-30">{{$mission_content}}</p>
                        <x-ButtonNative text="Contact Us" />
                        <x-ReturnBack @click="show = false" />
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="py-40 md:py-100 bg-gray">
        <div class="container">
            <x-Title text="Why Choose Us" type="50" />

            <div class="grid md:grid-cols-2 gap-30 md:gap-80 items-center mt-30">
                <div x-data="{show: false}" class="text-center md:text-left">
                    <p class="text-blue-dark md:text-2xl md:font-bold mb-10">{{$choose_title}}</p>
                    <div x-show="!show">
                        <p class="text-xs md:text-base mb-30">{{\Illuminate\Support\Str::of($choose_content)->words(30)}}</p>
                        <x-ButtonNative text="Read More" @click="show = true" />
                    </div>
                    <div x-show="show">
                        <p class="text-xs md:text-base mb-30">{{$choose_content}}</p>
                        <x-ReturnBack @click="show = false" />
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-10 gap-y-30 items-center">
                        @foreach ($statistics as $statistic)
                            <div class="col-span-4 md:col-span-3">
                                <p class="md:text-2xl text-blue font-bold">{{$statistic->metric}}</p>
                                <p class="text-sm md:text-lg text-blue-dark">{{$statistic->title}}</p>
                            </div>
                            <div class="col-span-6 md:col-span-7 h-full">
                                <div class="flex items-center h-full pl-20 md:pl-30 border-l-4 border-white">
                                    <p class="text-xs md:text-sm text-blue-dark ">{{$statistic->content}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-40">
        <div class="container">
            <x-Title text="Meet Our Team" type="6" />
            <p class="text-blue-dark text-xs md:text-sm mt-10 text-center max-w-[300px] mx-auto">Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim.</p>
            
            <div class="relative flex items-center justify-center">
                <div class="hidden md:block absolute h-4/5 aspect-1 bg-decoration-circle bg-cover bg-no-repeat">
                    
                </div>
                <div class="relative grid grid-cols-2 md:grid-cols-3 gap-x-30 gap-y-30 md:gap-x-0 md:gap-y-100 mt-30 md:mt-40 z-10">
                    @foreach ($members as $member)
                        <x-Member :member="$member"/>
                    @endforeach
                </div>
            </div>
            
        </div>
    </section>

    @include('partials.partners', array('partners'=>$partners))


    @include('partials.contacts')

@endsection