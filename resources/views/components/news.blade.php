<div>
    <div x-data="{show: false}">
        <div @click="show=true" class="cursor-pointer">
            <div class="rounded-md overflow-hidden mb-15">
                <img src="{{Storage::url($news->image)}}"/>
            </div>
            
            <p class="text-gray-dark text-xs mb-10">{{$news->updated_at}}</p>
    
            <p class="text-blue-dark text-sm md:text-lg">{{$news->title}}</p>
        </div>
        
        <div x-show="show" class="text-blue-dark text-xs md:text-sm mt-10 md:mt-15">
            {!!$news->content!!}
            <div @click="show = false">
                <x-ReturnBack/>
            </div>
        </div>
    </div>
</div>