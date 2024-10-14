@props([
'bg_image' => 'no image',
'title'=>'Check This',
'slogan' => 'Check This',
'title_text_colour'=> 'text-white',
'body_text_colour' => 'text-white',
'text_length' => 15
])

<li {{ $attributes->class(['flex flex-col items-center justify-center w-full sm:h-screen h-full shrink-0 snap-start relative']) }}>
    <div style="background-image: url({{$bg_image}});" class="w-full sm:h-screen h-full bg-cover bg-no-repeat mx-auto flex-col brightness-75 flex justify-center relative">
    </div>
    <div class="absolute top-[30%] w-8/12 space-y-5 mx-auto bg-black/10 p-5 font-lex">
        <div class="text-md text-white">The Best</div>
        <div class="text-6xl  text-white">
            {{$title}}
        </div>
        <div class="sm:text-2xl text-xs {{$body_text_colour}}">
            {{\Illuminate\Support\Str::words($slogan,$text_length)}}
        </div>

    </div>
