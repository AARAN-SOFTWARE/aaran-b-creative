<style>
    ::placeholder {
        color: orangered;
    }
</style>
<div class="font-lex min-h-screen bg-gradient-to-tl from-gray-50 via-gray-100 to-gray-400 py-16 bg-cover bg-center">
    <x-slot name="header">Tree view</x-slot>
    {{-- border-t-2 border-blue-600 --}}
    <div
        class="bg-white/70 w-10/12 mx-auto min-h-[40rem] flex  justify-center items-center rounded-md shadow-md shadow-gray-300 bg-cover ">

        <div class="w-full flex-col flex  justify-center items-center gap-y-5">
            {{--            <x-livewire.network.items.user-card :list="$user"/>--}}
            <div class="">
                <x-livewire.network.items.demo-user-card/>
            </div>
            <div class="w-1/12 flex space-x-10">
                <div class="w-1/2 border-t border-blue-700"></div>
                <div class="w-1/2 border-t border-blue-700"></div>
            </div>
            <div class="flex gap-x-10">
                <x-livewire.network.items.demo-user-card/>
                <x-livewire.network.items.demo-user-card/>
            </div>
            <div class="w-5/12 flex space-x-10">
                <div class="w-6/12 border-t border-blue-700"></div>
                <div class="w-6/12 border-t border-blue-700"></div>
            </div>

            <div class="flex gap-x-10">
                <div class="flex gap-x-44">
                    <x-livewire.network.items.demo-user-card/>
                    <x-livewire.network.items.demo-user-card/>
                </div>
                <div class="flex gap-x-44">
                    <x-livewire.network.items.demo-user-card/>
                    <x-livewire.network.items.demo-user-card/>
                </div>
            </div>
            <div class="w-9/12 flex space-x-10">
                <div class="w-1/2 flex">
                <div class="w-1/4 "></div>
                <div class="w-1/4 border-t border-blue-700"></div>
                <div class="w-1/4 "></div>
                <div class="w-1/4 border-t border-blue-700"></div>
                </div>
                <div class="w-1/2 flex">
                    <div class="w-1/4 border-t border-blue-700"></div>
                    <div class="w-1/4 "></div>
                    <div class="w-1/4 border-t border-blue-700"></div>
                    <div class="w-1/4 "></div>
                </div>
            </div>

            <div class="flex gap-x-10">
                <div class="flex gap-x-20">
                    <div class="flex gap-x-5">
                        <x-livewire.network.items.demo-user-card/>
                        <x-livewire.network.items.new-user-card/>
                    </div>
                    <div class="flex gap-x-5">
                        <x-livewire.network.items.new-user-card/>
                        <x-livewire.network.items.demo-user-card/>
                    </div>
                </div>
                <div class="flex gap-x-20">
                    <div class="flex gap-x-5">
                        <x-livewire.network.items.demo-user-card/>
                        <x-livewire.network.items.new-user-card/>
                    </div>
                    <div class="flex gap-x-5">
                        <x-livewire.network.items.demo-user-card/>
                        <x-livewire.network.items.new-user-card/>
                    </div>
                </div>

            </div>
        </div>


    </div>

</div>
