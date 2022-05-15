<div class="text-center">
    <div class="relative">
        <div class="relative aspect-1 rounded-full w-full max-w-200 mx-auto mb-30">
            <div class="absolute w-full h-full top-0 left-0 rounded-full bg-blue/10 z-10"></div>
            <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center" style="background-image: url({{Storage::url($member->image)}})"></div>
            <div class="absolute left-2/3 top-2/3 bg-team-matrix bg-no-repeat bg-contain w-2/5 aspect-1 z-20"></div>
        </div>
        
    </div>
    
    <p class="text-blue-dark text-sm md:text-xl">{{$member->title}}</p>
    <p class="text-gray-dark text-sm md:text-xl">{{$member->position}}</p>
</div>