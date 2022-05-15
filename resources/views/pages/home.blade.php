@extends('app')

@section('content')
    <x-Jumbotron
        title='Amet minim mollit non deserunt'
        subtitle='Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.'
        button='Explore Now'
        bg='/images/backgrounds/home.jpg'
    />
    <script>
        const services = @json($services);
    </script>
    <section class="py-50 md:py-100">
        <div class="relative flex items-center container">
            <div class="absolute -left-1/10 w-full h-2/3 md:h-120p bg-cover md:bg-contain bg-no-repeat" style="background-image: url(/images/decorations/spirals.svg);">
                
            </div>
            <div class="relative w-full z-10">
                <x-Title text="We Provide The Best Services" type="1" />
                <div x-data="{ showDetails: false, service: null }" class="mt-40" >
                    <div x-show="!showDetails" class="grid md:grid-cols-4 gap-30 mt-30 md:mt-40 px-20 md:px-0">
                        @foreach ($services as $service)
                            <x-Service :service="$service" />
                        @endforeach
                    </div>
                    <div x-show="showDetails">
                        <div class="grid md:grid-cols-5 gap-30 md:gap-80">
                            <div class="md:col-span-2">
                                <div class="relative mb-30">
                                    <img class="relative z-10" src="/images/covers/services.png"/>
                                    <div class="absolute w-full h-full top-0 left-0 rounded-md" style="background-color: #D3D3D380; transform: rotate(15deg);"></div>
                                </div>
                            </div>
                            <div class="md:col-span-3">
                                <p class="text-sm md:text-xl text-blue-dark mb-5 md:mb-10 font-bold" x-text="service?.title"></p>
                                <p class="text-xs md:text-sm text-blue-dark mb-15 md:mb-30" x-text="service?.content"></p>

                                <x-ButtonNative text="Get started"/> 

                                <div @click="showDetails = false">
                                    <x-ReturnBack/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-40 bg-gray">
        <div class="container">
            <x-Title text="Our Projects" type="2" />

            <div class="grid grid-cols-1 md:grid-cols-5 gap-40 md:gap-80">
                <div class="col-span-1 md:col-span-3">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($projects as $project)
                                <div class="swiper-slide">
                                    <x-Project :project="$project"/>
                                </div>
                            @endforeach
                        </div>

                        <div class="flex items-center justify-end mt-50">
                            <div class="flex swiper-button-prev cursor-pointer mr-15">
                                <span class="inline-block w-15 h-15 bg-arrow-prev bg-no-repeat bg-center"></span>
                            </div>
                            <div class="text-lg">
                                <span class="text-blue-dark swiper-index">1</span>
                                <span class="text-blue-dark">/</span>
                                <span class="text-gray-dark">{{count($projects)}}</span>
                            </div>
                            <div class="flex swiper-button-next cursor-pointer ml-15">
                                <span class="inline-block w-15 h-15 bg-arrow-next bg-no-repeat bg-center"></span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2">
                    <div class="relative mb-30 w-90p mx-auto">
                        <img class="relative z-10 w-full" src="/images/demo1.png"/>
                        <div class="absolute w-full h-full top-0 left-0 rounded-md" style="background-color: #D3D3D380; transform: rotate(-15deg);"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    @include('partials.recent_news', array('news' => $news))

    @include('partials.partners', array('partners'=>$partners))

    @include('partials.contacts')

@endsection