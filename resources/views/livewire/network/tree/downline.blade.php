<div class="space-y-10">
    <x-slot name="header">Tree view</x-slot>
    <div class="border-t-[4px] border-tangerine shadow-md bg-white rounded-md space-y-5 p-5">
        <div class="text-2xl font-merri">Down Line Tree</div>
        <div class="text-gray-500">The network of your Team</div>
    </div>

    <x-forms.m-panel>

        <div class="w-full flex-col flex items-center space-y-4">

            <!--  Level 0  -->
            <x-livewire.network.items.user-leaf-0/>
            <div class="w-[780px] mx-auto h-2 border-t-2 border-l-2 border-r-2 border-pink-600"></div>
            <div class="w-[850px] flex  justify-between">
                @for($i=1; $i<=2; $i++)
                    <x-livewire.network.items.user-leaf-0/>
                @endfor
            </div>

            <!--  Level 1  -->
            <div class="w-[1530px] flex justify-evenly">
                @for($i=1; $i<=2; $i++)
                    <div class="w-[400px] mx-auto h-4 border-t-2 border-l-2 border-r-2 border-lime-500"></div>
                @endfor
            </div>
            <div class="flex w-[1260px] justify-between">
                @for($i=1; $i<=4; $i++)
                    <x-livewire.network.items.user-leaf-0/>
                @endfor
            </div>
            <!--  Level 2  -->
            <div class="w-[1620px] flex justify-evenly">
                @for($i=1; $i<=4; $i++)
                    <div class="w-48 mx-auto h-4 border-t-2 border-l-2 border-r-2 border-violet-600"></div>
                @endfor
            </div>
            <div class="flex w-[1740px]  justify-evenly">
                @for($i=1; $i<=8; $i++)
                    <x-livewire.network.items.user-leaf-0/>
                @endfor
            </div>
            <!--  Level 3  -->
                        <div class="w-[1630px] flex justify-evenly">
                @for($i=1; $i<=8; $i++)
                    <div class="w-24 mx-auto h-4 border-t-2 border-l-2 border-r-2 border-amber-600"></div>
                @endfor
            </div>
            <div class="flex w-[1680px]  justify-evenly">
                @for($i=1; $i<=16; $i++)
                    <x-livewire.network.items.user-leaf-1/>

                @endfor
            </div>
            <!--  Level 4  -->
                        <div class="w-[1640px] flex justify-evenly">
                @for($i=1; $i<=16; $i++)
                    <div class="w-[75px] mx-auto h-4 border-t-2 border-l-2 border-r-2 border-teal-600"></div>
                @endfor
            </div>
            <div class="flex w-[1660px]  justify-evenly">
                @for($i=1; $i<=32; $i++)
                    <x-livewire.network.items.user-leaf-2/>

                @endfor
            </div>
            <!--  Level 5  -->

            <div class="w-[1660px] flex justify-evenly space-x-0.5">
                @for($i=1; $i<=32; $i++)
                    <div class="w-20 mx-auto h-4 border-t-2 border-l-2 border-r-2 border-red-600"></div>
                @endfor
            </div>
            <div class="flex w-[1660px] justify-evenly">
                @for($i=1; $i<=64; $i++)
                        <div class=" w-6 h-6 bg-gray-300 p-0.5 rounded-full">
                            <div class="w-full h-full bg-blue-600 rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3 fill-white">
                                    <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                                </svg>
                            </div>
                        </div>
                @endfor
            </div>
        </div>
    </x-forms.m-panel>

</div>
