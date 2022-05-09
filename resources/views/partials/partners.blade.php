<section class="py-40">
    <div class="container">
        <x-title text="Our Trusted Partners" />
        <div class="flex justify-center align-center mt-40" style="background: radial-gradient(50% 50% at 50% 50%, rgba(0, 245, 216, 0.25) 0%, rgba(180, 249, 249, 0) 100%);">
            @foreach ($partners as $partner)
                <div class="relative w-100 h-100 rounded-full overflow-hidden mx-25">
                    <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat"
                        style="background-image: url('{{Storage::url($partner->image)}}')">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>