<div class="relative py-80 md:py-120">
    <div class="absolute w-full h-full top-0 left-0">
        <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{$bg}}');"></div>
        <div class="absolute w-full h-full top-0 left-0 bg-black/[.55]"></div>
    </div>
    <div class="relative z-5">
        <div class="container">
            @isset($title)
                <h2 class="text-white text-4xl font-bold">{{$title}}</h2>
            @endisset
            @isset($subtitle)
                <p class="text-white text-48 font-bold mt-10">{{$subtitle}}</p>
            @endisset
            @isset($button)
                <div class="mt-40">
                    <x-button
                        :text="$button"
                    />
                </div>
            @endisset
        </div>
    </div>
</div>