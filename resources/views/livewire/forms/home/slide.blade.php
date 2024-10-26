<div class="z-20">
{{--    <x-button.new-x wire:click="create"/>--}}
    <button class=" w-16 h-16 fill-tangerine text-white" wire:click="create">
        <svg fill="" width="" height="" viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg"
             class="cf-icon-svg">
            <path
                d="M16.417 9.579A7.917 7.917 0 1 1 8.5 1.662a7.917 7.917 0 0 1 7.917 7.917zM4.63 8.182l2.45-2.449-.966-.966a.794.794 0 0 0-1.12 0l-1.329 1.33a.794.794 0 0 0 0 1.12zm8.23 5.961c.13 0 .206-.1.173-.247l-.573-2.542a1.289 1.289 0 0 0-.292-.532l-4.53-4.53-.634.636 4.529 4.529.252-.252a.793.793 0 0 1 .147.268l.253 1.124-.69.69-1.125-.252a.799.799 0 0 1-.268-.148l.871-.87-4.53-4.53L5.19 8.742l4.53 4.528a1.294 1.294 0 0 0 .533.293l2.542.573a.3.3 0 0 0 .066.008z"/>
        </svg>
    </button>
    <x-forms.create :id="$common->vid">

        <div class="flex flex-col  gap-3">
            <x-input.floating wire:model="common.vname" label="Title"/>
            {{--                <x-input.model-text wire:model="common.vname" :label="'Title'"/>--}}
            @error('common.vname')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
            <x-input.floating wire:model="description" label="Description"/>
            {{--                <x-input.model-text wire:model="description" :label="'Description'"/>--}}
            <x-input.floating wire:model="link" label="Link"/>
            {{--                <x-input.model-text wire:model="link" :label="'Link'"/>--}}
            <!-- Bg Image --------------------------------------------------------------------------------->

            <div class="flex flex-col py-2">
                <label for="bg_image"
                       class="w-full text-zinc-500 tracking-wide pb-4 px-2">Background Image</label>
                <div class="flex flex-wrap gap-2">
                    <div class="flex-shrink-0">
                        <div>
                            @if($bg_image)
                                <div
                                    class=" flex-shrink-0 border-2 border-dashed border-gray-300 p-1 rounded-lg overflow-hidden">
                                    <img
                                        class="w-[156px] h-[89px] rounded-lg hover:brightness-110 hover:scale-105 duration-300 transition-all ease-out"
                                        src="{{ $bg_image->temporaryUrl() }}"
                                        alt="{{$bg_image?:''}}"/>
                                </div>
                            @endif

                            @if(!$bg_image && isset($bg_image))
                                <img class="h-24 w-full"
                                     src="{{URL(\Illuminate\Support\Facades\Storage::url('images/'.$old_bg_image))}}"
                                     alt="">
                            @else
                                <x-icons.icon :icon="'logo'" class="w-auto h-auto block "/>
                            @endif
                        </div>
                    </div>
                    <div class="relative">
                        <div>
                            <label for="bg_image"
                                   class="text-gray-500 font-semibold text-base rounded flex flex-col items-center
                                   justify-center cursor-pointer border-2 border-gray-300 border-dashed p-2
                                   mx-auto font-[sans-serif]">
                                <x-icons.icon icon="cloud-upload" class="w-8 h-auto block text-gray-400"/>
                                Upload Photo
                                <input type="file" id='bg_image' wire:model="bg_image" class="hidden"/>
                                <p class="text-xs font-light text-gray-400 mt-2">PNG and JPG are
                                    Allowed.</p>
                            </label>
                        </div>

                        <div wire:loading wire:target="bg_image" class="z-10 absolute top-6 left-12">
                            <div class="w-14 h-14 rounded-full animate-spin
                                                         border-y-4 border-dashed border-green-500 border-t-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Image------------------------------------------------------------------------->

                                <div class="flex flex-row gap-6">
                                    <div class="flex">

                                        <label for="bg_image"
                                               class="w-[10rem] text-zinc-500 tracking-wide py-2">Image</label>

                                        <div class="flex-shrink-0">

                                            <div>
                                                @if($cont_image)
                                                    <div class="flex-shrink-0 ">
                                                        <img class="h-24 w-full" src="{{ $cont_image->temporaryUrl() }}"
                                                             alt="{{$cont_image?:''}}"/>
                                                    </div>
                                                @endif

                                                @if(!$cont_image && isset($cont_image))
                                                    <img class="h-24 w-full"
                                                         src="{{URL(\Illuminate\Support\Facades\Storage::url('images/'.$old_cont_image))}}"
                                                         alt="">

                                                @else
                                                    <x-icons.icon :icon="'logo'" class="w-auto h-auto block "/>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="relative">

                                        <div>
                                            <label for="cont_image"
                                                   class="text-gray-500 font-semibold text-base rounded flex flex-col items-center
                                               justify-center cursor-pointer border-2 border-gray-300 border-dashed p-2
                                               mx-auto font-[sans-serif]">
                                                <x-icons.icon icon="cloud-upload"
                                                              class="w-8 h-auto block text-gray-400"/>
                                                Upload Photo

                                                <input type="file" id='cont_image' wire:model="cont_image" class="hidden"/>
                                                <p class="text-xs font-light text-gray-400 mt-2">PNG and JPG are
                                                    Allowed.</p>
                                            </label>
                                        </div>

                                        <div wire:loading wire:target="cont_image" class="z-10 absolute top-6 left-12">
                                            <div class="w-14 h-14 rounded-full animate-spin
                                                                    border-y-4 border-dashed border-green-500 border-t-transparent"></div>
                                        </div>
                                    </div>
                                </div>
        </div>
    </x-forms.create>
</div>
