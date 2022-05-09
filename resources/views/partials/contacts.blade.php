<section class="py-40">
    <div class="container">
        <x-title text="Contact Us" />

        <p class="text-blue-dark text-2xl mt-15 text-center">Any questions? Just write us a message!</p>

        <div class="py-15 bg-wihte rounded-md mt-40">
            <div class="grid grid-cols-2">
                <div class="bg-blue-contacts p-25 rounded-md">
                    <p class="text-white text-xl font-bold">Contact Information</p>
                    <div class="my-65">
                        <div class="flex flex-wrap items-center mb-25">
                            <span class="block w-20 h-20 bg-address bg-no-repeat bg-contain bg-center md:mr-30"></span>
                            <p class="text-white flex-1">{{$settings->get('address')}}</p>
                        </div>
                        <div class="flex flex-wrap items-center mb-25">
                            <span class="block w-20 h-20 bg-phone bg-no-repeat bg-contain bg-center md:mr-30"></span>
                            <p class="text-white flex-1">{{$settings->get('phone_1')}}</p>
                        </div>
                        <div class="flex flex-wrap items-center mb-25">
                            <span class="block w-20 h-20 bg-smartphone bg-no-repeat bg-contain bg-center md:mr-30"></span>
                            <p class="text-white flex-1">{{$settings->get('phone_2')}}</p>
                        </div>
                        <div class="flex flex-wrap items-center mb-25">
                            <span class="block w-20 h-20 bg-email bg-no-repeat bg-contain bg-center md:mr-30"></span>
                            <p class="text-white flex-1">{{$settings->get('email')}}</p>
                        </div>
                    </div>
                    <div class="flex">
                        <p class="text-white text-lg font-bold mr-65">Follow us</p>
        
                        <div class="flex">
                            <a href="{{$settings->get('facebook_url')}}" target="_blank" class="mr-40">
                                <span class="block w-25 h-25 bg-fb bg-no-repeat bg-contain bg-center"></span>
                            </a>
                            <a href="{{$settings->get('instagram_url')}}" target="_blank" class="mr-40">
                                <span class="block w-25 h-25 bg-insta bg-no-repeat bg-contain bg-center"></span>
                            </a>
                            <a href="{{$settings->get('linkedin_url')}}" target="_blank" class="">
                                <span class="block w-25 h-25 bg-ln bg-no-repeat bg-contain bg-center"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-md" style="box-shadow: 0px 20px 50px -10px rgba(0, 0, 0, 0.2);">
        
                </div>
            </div>
        </div>
        
    </div>
</section>

