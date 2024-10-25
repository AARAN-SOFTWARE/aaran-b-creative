<div class="rounded-2xl bg-white font-lex">
    <div class="font-roboto text-lg text-center py-5 border-b-4 border-stone-100 tracking-wider text-orange-700">
        LATEST POST
    </div>
    <div class="p-5 space-y-5">
        @for($i=1; $i<=4; $i++)
            <div class="flex gap-x-5">
                <div class="w-1/3">
                    <img src="../../../../images/wall1.webp" alt="" class="h-24 object-cover">
                </div>
                <div class="w-2/3 space-y-2">
                    <a class="text-md uppercase tracking-wider font-merri line-clamp-2 text-gray-700 hover:text-orange-700 transition-all duration-500 ease-in-out cursor-pointer">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Assumenda, quidem?
                    </a>
                    <div class="text-xs text-orange-700">09 JUNE 2024</div>
                </div>
            </div>
        @endfor
    </div>
</div>
