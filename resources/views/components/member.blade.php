<div class="text-center">
    <div class="relative w-200 h-200 rounded-full overflow-hidden mx-auto mb-30">
        <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center" style="background-image: url({{Storage::url($member->image)}})"></div>
    </div>
    <p class="text-blue-dark text-xl">{{$member->title}}</p>
    <p class="text-gray-dark text-xl">{{$member->position}}</p>
</div>