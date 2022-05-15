<div>
    <div x-data="{show: false}">

        <p class="text-blue-dark text-sm md:text-2xl">{{$project->title}}</p>

        <div x-show="!show">
            <p class="text-blue-dark text-xs md:text-sm mt-10 md:mt-15">
                {{ \Illuminate\Support\Str::of($project->content)->words(50); }}
            </p>
            <div @click="show = true" class="mt-20 md:mt-40">
                <x-ButtonNative text="Learn More" />
            </div>
        </div>

        <div x-show="show" class="text-blue-dark text-xs md:text-sm mt-10 md:mt-15">
            {!!$project->content!!}
            <div @click="show = false">
                <x-ReturnBack/>
            </div>
        </div>
    </div>
</div>