@props([
    'list' => null,
])
<div class="rounded-2xl bg-white font-lex">
    <div class="font-roboto text-lg text-center py-5 border-b-4 border-stone-100 tracking-wider text-orange-700">
        LATEST POST
    </div>

    <div class="p-5 space-y-5">
        @foreach($list->skip(1) as $row)

            <div class="flex gap-x-5">
                <div class="w-1/3">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url('/images/'.$row->image) }}" alt=""
                         class=" w-full h-24 object-cover">
                </div>

                <div class="w-2/3 space-y-2">
                    <a href="{{ route('blog-post.show', $row->id) }}" class="text-md uppercase tracking-wider font-merri line-clamp-2 text-gray-700 hover:text-orange-700
                    transition-all duration-500 ease-in-out cursor-pointer">{{\Illuminate\Support\Str::words($row->vname,10)}}
                    </a>
                    <div class="text-xs text-orange-700">{{ $row->created_at->diffForHumans() }}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
