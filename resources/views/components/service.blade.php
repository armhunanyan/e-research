<div class="px-15 md:px-20 py-30 bg-white rounded-md overflow-hidden" style="box-shadow: 0px 20px 50px -10px rgba(0, 0, 0, 0.2);">
    <div class="mb-30">
        <img src="{{Storage::url($service->image)}}" />
    </div>

    <p class="text-blue-dark font-bold text-sm md:text-xl mb-10">{{$service->title}}</p>

    <div class="text-blue-dark text-xs md:text-sm">
        {{ \Illuminate\Support\Str::of($service->content)->words(20); }}
    </div>

    <div @click="showDetails = true; service = {{$service}}">
        <x-ReadMore />
    </div>

</div>