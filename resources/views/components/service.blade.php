<div class="px-20 py-30 bg-white rounded-md overflow-hidden" style="box-shadow: 0px 20px 50px -10px rgba(0, 0, 0, 0.2);">
    <div class="mb-30">
        <img src="{{Storage::url($service->image)}}" />
    </div>

    <p class="text-blue-dark text-xl mb-10">{{$service->title}}</p>

    <div class="text-blue-dark text-sm">
        {!!$service->content!!}
    </div>

    <p class="text-blue font-bold mt-20">Read More</p>
</div>