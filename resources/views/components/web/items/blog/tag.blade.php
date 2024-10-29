@props([
    'list' => null,
])

<div class="rounded-2xl bg-white font-lex">

    <div class="font-roboto text-lg text-center py-5 border-b-4 border-stone-100 tracking-wider text-orange-700">
        TAGS
    </div>
    <div class="p-5 gap-5 flex flex-wrap  justify-center h-44 overflow-y-auto" loading="lazy">

            @foreach ($list as $tag)
                <button wire:click="getFilter({{ $tag->id }})"
                        class="h-8 gap-3 p-2 text-xs border-orange-700 text-gray-700 rounded border hover:bg-orange-700 hover:text-white transition-all duration-300 ease-in-out">
                    {{ $tag->vname }}
                </button>
            @endforeach
    </div>
</div>
