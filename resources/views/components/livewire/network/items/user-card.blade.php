@props([
    'list'=> null
])

<div class=" justify-center items-center bg-cyan-50 space-y-5 flex-col flex ">
    <div class="h-[100px]">
        @foreach($list as $index => $row)
            <div class="w-20 h-[88px] ">
                <div class="w-full h-full relative flex-col flex justify-end
                @if($index === 0) after:h-8 after:border-l after:absolute after:top-[88px] after:right-10
                 @endif">
                    <div class="absolute bottom-10 left-4 w-12 h-12 bg-gray-300 p-1.5 rounded-full">
                        <div class="w-full h-full bg-orange-600 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6 fill-white">
                                <path fill-rule="evenodd"
                                      d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="border border-gray-300 h-16 text-[10px] font-bold text-gray-500 bg-white flex-col flex items-center justify-end rounded-md py-1">
                        <div>{{$row->username}}</div>
                        <div>{{$row->name}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

