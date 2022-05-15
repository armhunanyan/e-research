<section class="py-40">
    <div class="container">
        <x-title text="Contact Us" type="5" />
        
        <p class="text-blue-dark text-sm md:text-2xl mt-10 md:mt-15 text-center">Any questions? Just write us a message!</p>

        <div class="py-15 bg-wihte rounded-md mt-20 md:mt-40">
            <div class="grid md:grid-cols-2">
                <div class="flex flex-col justify-between bg-blue-darker px-10 py-20 md:p-25 rounded-md">
                    <p class="text-white text-sm md:text-xl text-center md:text-left font-bold">Contact Information</p>
                    <div class="my-40 md:my-0 text-xs md:text-base">
                        <div class="flex flex-wrap items-center mb-25">
                            <span class="block w-20 h-20 bg-address bg-no-repeat bg-contain bg-center mr-10 md:mr-30"></span>
                            <p class="text-white flex-1">{{$settings->get('address')}}</p>
                        </div>
                        <div class="flex flex-wrap items-center mb-25">
                            <span class="block w-20 h-20 bg-phone bg-no-repeat bg-contain bg-center mr-10 md:mr-30"></span>
                            <p class="text-white flex-1">{{$settings->get('phone_1')}}</p>
                        </div>
                        <div class="flex flex-wrap items-center mb-25">
                            <span class="block w-20 h-20 bg-smartphone bg-no-repeat bg-contain bg-center mr-10 md:mr-30"></span>
                            <p class="text-white flex-1">{{$settings->get('phone_2')}}</p>
                        </div>
                        <div class="flex flex-wrap items-center">
                            <span class="block w-20 h-20 bg-email bg-no-repeat bg-contain bg-center mr-10 md:mr-30"></span>
                            <p class="text-white flex-1">{{$settings->get('email')}}</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center md:justify-start">
                        <p class="text-white text-xs md:text-lg font-bold mr-20 md:mr-65">Follow us</p>
        
                        <div class="flex">
                            <a href="{{$settings->get('facebook_url')}}" target="_blank" class="mr-10 md:mr-40">
                                <span class="block w-10 h-10 md:w-25 md:h-25 bg-fb bg-no-repeat bg-contain bg-center"></span>
                            </a>
                            <a href="{{$settings->get('instagram_url')}}" target="_blank" class="mr-10 md:mr-40">
                                <span class="block w-10 h-10 md:w-25 md:h-25 bg-insta bg-no-repeat bg-contain bg-center"></span>
                            </a>
                            <a href="{{$settings->get('linkedin_url')}}" target="_blank" class="">
                                <span class="block w-10 h-10 md:w-25 md:h-25 bg-ln bg-no-repeat bg-contain bg-center"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-md" style="box-shadow: 0px 20px 50px -10px rgba(0, 0, 0, 0.2);">
                    <form>
                        <div class="grid md:grid-cols-2 gap-x-50 gap-y-30 px-10 py-20 md:px-50 md:py-40">
                            <div>
                                <x-Input type="text" name='first_name' label="First Name" placeholder="Write your first name" />
                            </div>
                            <div>
                                <x-Input type="text" name='last_name' label="First Name" placeholder="Write your last name" />
                            </div>
                            <div>
                                <x-Input type="email" name='email' label="Email" placeholder="Write your email" />
                            </div>
                            <div>
                                <x-Input type="text" name='phone' label="Phone" placeholder="Write your phone" />
                            </div>
                            <div class="md:col-span-2">
                                <x-Input type="text" name='message' label="Message" placeholder="Write your message" />
                            </div>
                            <div class="md:col-span-2">
                                <div class="text-center">
                                    <x-ButtonNative text="Submit"></x-ButtonNative>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>

