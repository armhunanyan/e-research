<div>
    <div>
        <div class="rounded-md overflow-hidden mb-15">
            <img src="{{Storage::url($news->image)}}"/>
        </div>
        
        <p class="text-gray-dark text-xs mb-10">{{$news->updated_at}}</p>

        <p class="text-blue-dark text-sm">{{$news->title}}</p>

        {{-- <div class="text-blue-dark text-sm mt-30">
            {!!$news->content!!}
        </div> --}}
    </div>
</div>