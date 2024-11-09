<div class="bg-stone-100 font-lex">
    <div>
        <x-web.items.banner title="Blog" tagline="Your Go-To Source for All Things
                    Business: Insights, Advice, and More!"/>
    </div>

    <div class="w-7/12 mx-auto">
        <input type="search" placeholder="Search and Hit Enter....."
               class="w-full h-16 my-3 mb-16 text-sm border-2 border-gray-200 rounded-2xl placeholder-gray-400 italic font-normal text-center focus:ring-0 focus:border focus:border-tangerine transition-all duration-300 ease-in-out">
    </div>

    <button wire:click="create" class="fixed bottom-4 right-4 w-16 h-16 fill-tangerine text-white">
        <svg fill="" height="" width="" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 0 32 32" xml:space="preserve">
        <path d="M24,4H8C5.2,4,3,6.2,3,9v19c0,0.4,0.2,0.7,0.6,0.9C3.7,29,3.9,29,4,29c0.2,0,0.5-0.1,0.7-0.2C9,25,14.5,23,20.2,23H24
            c2.8,0,5-2.2,5-5V9C29,6.2,26.8,4,24,4z M20,15h-3v3c0,0.6-0.4,1-1,1s-1-0.4-1-1v-3h-3c-0.6,0-1-0.4-1-1s0.4-1,1-1h3v-3
            c0-0.6,0.4-1,1-1s1,0.4,1,1v3h3c0.6,0,1,0.4,1,1S20.6,15,20,15z"/>
            </svg>
    </button>

    <div class="w-7/12 mx-auto flex gap-12">

        <div class="w-8/12 h-auto mb-32 space-y-12">
            <x-web.items.blog.card :list="$list" :firstPost="$firstPost"/>
        </div>

        <div class="w-4/12 h-auto rounded-2xl space-y-12">
            <x-web.items.blog.author/>
            <x-web.items.blog.latest :list="$topPost"/>
            <x-web.items.blog.social-media/>
            <x-web.items.blog.category :list="$BlogCategories"/>
            @if ($tags)
                <x-web.items.blog.tag :list="$tags"/>
            @endif

            <div class="flex flex-wrap gap-1">
                @if ($tagfilter)
                    @foreach ($tagfilter as $index => $i)

                        <div
                            class="h-8 p-2 w-auto flex justify-center items-center capitalize rounded text-white text-xs border border-orange-700 bg-orange-700
                            transition-all duration-300 ease-in-out hover:bg-white hover:text-gray-700 ">

                            {{ \Aaran\Blog\Models\BlogTag::find($i)->vname }}

                            <button wire:click="removeFilter({{ $index }})" class="flex justify-center">
                                <x-icons.icon :icon="'x-mark'" class="w-4 h-4"/>
                            </button>

                        </div>
                    @endforeach

                    <button wire:click="clearFilter()"
                            class="p-2 text-xs border border-orange-700 rounded hover:bg-orange-700 hover:text-white transition-all duration-300 ease-in-out">
                        Clear All
                    </button>
                @endif
            </div>
            <x-web.items.blog.newsletter/>
        </div>

    </div>

    <div class="w-7/12 mx-auto py-16">
        {{$list->links()}}
    </div>

    <x-web.home.footer-address/>
    <x-web.home.copyright/>


    <!-- Form create  ----------------------------------------------------------------------------------------->

    <x-forms.create :id="$common->vid" :max-width="'xl'">
        <div class="flex flex-col gap-4">

            {{-- <x-input.model-text wire:model="common.vname" :label="'Name'"/>--}}

            <div class="inline-flex gap-3">
                <input type="checkbox" wire:model="visibility">
                <label for="">Public</label>
            </div>

            <x-input.floating wire:model="common.vname" label="Name"/>
            @error('common.vname')
            <div class="text-xs text-red-500">
                {{$message}}
            </div>
            @enderror

            <x-input.textarea wire:model="body" label="Description"/>
            @error('body')
            <div class="text-xs text-red-500">
                {{$message}}
            </div>
            @enderror

            <x-dropdown.wrapper label="Blog Category" type="blogcategoryTyped">
                <div class="relative ">
                    <x-dropdown.input label="Blog Category" id="blogcategory_name" wire:model.live="blogcategory_name"
                                      wire:keydown.arrow-up="decrementBlogcategory"
                                      wire:keydown.arrow-down="incrementBlogcategory"
                                      wire:keydown.enter="enterBlogcategory"/>
                    <x-dropdown.select>
                        @if($blogcategoryCollection)
                            @forelse ($blogcategoryCollection as $i => $blogcategory)
                                <x-dropdown.option highlight="{{$highlightBlogCategory === $i  }}"
                                                   wire:click.prevent="setBlogcategory('{{$blogcategory->vname}}','{{$blogcategory->id}}')">
                                    {{ $blogcategory->vname }}
                                </x-dropdown.option>
                            @empty
                                <button wire:click.prevent="blogcategorySave('{{$blogcategory_name}}')"
                                        class="text-white bg-green-500 text-center w-full">
                                    create
                                </button>
                            @endforelse
                        @endif
                    </x-dropdown.select>
                </div>
            </x-dropdown.wrapper>

            <x-dropdown.wrapper label="Blog Tag" type="blogtagTyped">
                <div class="relative ">
                    <x-dropdown.input label="Blog Tag" id="blogtag_name" wire:model.live="blogtag_name"
                                      wire:keydown.arrow-up="decrementBlogtag"
                                      wire:keydown.arrow-down="incrementBlogtag" wire:keydown.enter="enterBlogtag"/>
                    <x-dropdown.select>
                        @if($blogtagCollection)
                            @forelse ($blogtagCollection as $i => $blogtag)
                                <x-dropdown.option highlight="{{$highlightBlogCategory === $i  }}"
                                                   wire:click.prevent="setBlogTag('{{$blogtag->vname}}','{{$blogtag->id}}')">
                                    {{ $blogtag->vname }}
                                </x-dropdown.option>
                            @empty
                                <button wire:click.prevent="blogtagSave('{{$blogtag_name}}')"
                                        class=" bg-blue-100 text-blue-600 text-center hover:font-bold w-full">
                                    create
                                </button>
                            @endforelse
                        @endif
                    </x-dropdown.select>
                </div>
            </x-dropdown.wrapper>

            <!-- Image  ----------------------------------------------------------------------------------------------->

            <div class="flex flex-col py-2">
                <label for="bg_image" class="w-full text-zinc-500 tracking-wide pb-4 px-2">Image</label>
                <div class="flex flex-wrap gap-2">
                    <div class="flex-shrink-0">
                        <div>
                            @if($image)
                                <div
                                    class=" flex-shrink-0 border-2 border-dashed border-gray-300 p-1 rounded-lg overflow-hidden">
                                    <img
                                        class="w-[156px] h-[89px] rounded-lg hover:brightness-110 hover:scale-105 duration-300 transition-all ease-out"
                                        src="{{ $image->temporaryUrl() }}" alt="{{$image?:''}}"/>
                                </div>
                            @endif

                            @if(!$image && isset($image))
                                <img class="h-24 w-full"
                                     src="{{URL(\Illuminate\Support\Facades\Storage::url('images/'.$old_image))}}"
                                     alt="">
                            @else
                                <x-icons.icon :icon="'logo'" class="w-auto h-auto block "/>
                            @endif
                        </div>
                    </div>
                    <div class="relative">
                        <div>
                            <label for="bg_image" class="text-gray-500 font-semibold text-base rounded flex flex-col items-center
                                   justify-center cursor-pointer border-2 border-gray-300 border-dashed p-2
                                   mx-auto font-[sans-serif]">
                                <x-icons.icon icon="cloud-upload" class="w-8 h-auto block text-gray-400"/>
                                Upload Photo
                                <input type="file" id='bg_image' wire:model="image" class="hidden"/>
                                <p class="text-xs font-light text-gray-400 mt-2">PNG and JPG are
                                    Allowed.</p>
                            </label>
                        </div>

                        <div wire:loading wire:target="image" class="z-10 absolute top-6 left-12">
                            <div class="w-14 h-14 rounded-full animate-spin
                                                        border-y-4 border-dashed border-green-500 border-t-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </x-forms.create>
</div>
