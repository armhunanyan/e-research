<section class="py-40">
    <div class="container">
        <x-Title text="Recent News" type="1" />
        <div class="grid md:grid-cols-3 gap-30 mt-30 md:mt-40">
            @foreach ($news as $item)
                <x-News :news="$item"/>
            @endforeach
        </div>
        <div class="mt-15 md:mt-30 text-center">
            <x-ButtonNative text="Explore Now" />
        </div>
    </div>
</section>