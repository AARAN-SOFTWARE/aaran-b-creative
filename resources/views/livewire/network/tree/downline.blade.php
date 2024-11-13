<div class="space-y-10">
    <x-slot name="header">Tree view</x-slot>
    <div class="border-t-[4px] border-tangerine shadow-md bg-white rounded-md space-y-5 p-5">
        <div class="text-2xl font-merri">Down Line Tree</div>
        <div class="text-gray-500">The network of your Team</div>
    </div>

    <x-forms.m-panel>

        <div class="w-full flex-col flex items-center space-y-5">
            <x-livewire.network.items.user-level-0/>
            <div class="w-[780px] mx-auto h-2 border-t-2 border-l-2 border-r-2 border-pink-600"></div>
            <div class="w-[850px] flex  justify-between">
                @for($i=1; $i<=2; $i++)
                    <x-livewire.network.items.user-level-0/>
                @endfor
            </div>
            <div class="w-[1530px] flex justify-evenly">
                @for($i=1; $i<=2; $i++)
                    <div class="w-[400px] mx-auto h-4 border-t-2 border-l-2 border-r-2 border-lime-500"></div>
                @endfor
            </div>
            <div class="flex w-[1260px] justify-between">
                @for($i=1; $i<=4; $i++)
                    <x-livewire.network.items.user-level-0/>
                @endfor
            </div>
            <div class="w-[1620px] flex justify-evenly">
                @for($i=1; $i<=4; $i++)
                    <div class="w-48 mx-auto h-4 border-t-2 border-l-2 border-r-2 border-violet-600"></div>
                @endfor
            </div>
            <div class="flex w-[1740px]  justify-evenly">
                @for($i=1; $i<=8; $i++)
                    <x-livewire.network.items.user-level-0/>
                @endfor
            </div>
            <div class="w-[1630px] flex justify-evenly">
                @for($i=1; $i<=8; $i++)
                    <div class="w-24 mx-auto h-4 border-t-2 border-l-2 border-r-2 border-amber-600"></div>
                @endfor
            </div>
            <div class="flex w-[1680px]  justify-evenly">
                @for($i=1; $i<=16; $i++)
                    <x-livewire.network.items.user-level-2/>

                @endfor
            </div>
            <div class="w-[1640px] flex justify-evenly">
                @for($i=1; $i<=16; $i++)
                    <div class="w-[75px] mx-auto h-4 border-t-2 border-l-2 border-r-2 border-teal-600"></div>
                @endfor
            </div>
            <div class="flex w-[1660px]  justify-evenly">
                @for($i=1; $i<=32; $i++)
                    <x-livewire.network.items.user-level-4/>

                @endfor
            </div>
            <div class="w-[1660px] flex justify-evenly space-x-0.5">
                @for($i=1; $i<=32; $i++)
                    <div class="w-20 mx-auto h-4 border-t-2 border-l-2 border-r-2 border-red-600"></div>
                @endfor
            </div>
            <div class="flex w-[1660px] justify-evenly">
                @for($i=1; $i<=64; $i++)
                        <div class=" w-6 h-6 bg-gray-300 p-1 rounded-full">
                            <div class="w-full h-full bg-blue-600 rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-2.5 fill-white">
                                    <path fill-rule="evenodd"
                                          d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
{{--                    <div class="w-6 h-6 rounded-full bg-green-600 text-xs text-white text-center">G1</div>--}}
                @endfor
            </div>
        </div>
    </x-forms.m-panel>

</div>
