@props([
    'list' => null,
])

<div class="rounded-2xl bg-white font-lex">
    <div class="font-roboto text-lg text-center py-5 border-b-4 border-stone-100 tracking-wider text-orange-700">
        Category
    </div>

    <div class="p-5 gap-5 flex flex-wrap justify-center h-44 overflow-y-auto" loading="lazy">
        @foreach($list as $blogcategory)
            <button wire:click="getCategory_id({{$blogcategory->id}})"
                    class="h-8 gap-2 p-2 text-xs border-orange-700 text-gray-700 rounded border hover:bg-orange-700 hover:text-white transition-all duration-300 ease-in-out">
                {{$blogcategory->vname}}
            </button>
        @endforeach
    </div>
</div>
