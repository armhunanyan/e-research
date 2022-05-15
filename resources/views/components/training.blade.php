<div>
    <div x-data="{show: false}" class="text-center">
        <div @click="show=true" class="cursor-pointer">
            <div class="relative flex justify-center mb-15">
                <div class="aspect-1 rounded-md overflow-hidden">
                    <img src="{{Storage::url($training->image)}}"/>
                </div>
                <div class="absolute -bottom-20 bg-white rounded-xl py-10 w-90p">
                    <p class="text-blue-dark text-sm font-bold">{{$training->title}}</p>
                </div>
            </div>            
        </div>
        <div class="text-blue-dark text-xs md:text-sm mt-30 md:mt-35">
            <div x-show="!show">
                {{ \Illuminate\Support\Str::of($training->content)->words(15); }}
                <div class="flex justify-center">
                    <x-ReadMore @click="show = true" />
                </div>
            </div>
            
            <div x-show="show">
                {!!$training->content!!}
                <div class="flex justify-center">
                    <x-ReturnBack @click="show = false"/>
                </div>
            </div>
        </div>
    </div>
</div>