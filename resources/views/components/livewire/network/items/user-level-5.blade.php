@props([
    'list'=>null
])

@foreach($list as $row)
<div class="w-9 h-[60px] ">
    <div class="w-full h-full relative flex-col flex justify-end">
        <div class="absolute bottom-6 left-2 w-6 h-6 bg-gray-300 p-1 rounded-full">
            <div class="w-full h-full bg-orange-600 rounded-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-2.5 fill-white">
                    <path fill-rule="evenodd"
                          d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
        </div>
        <div class="border border-gray-300 w-10 text-center h-9 bg-white text-[6px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
            <div>{{ $row->name }}</div>
            <div>{{ $row->username }}</div>
        </div>
    </div>
</div>
@endforeach
@for($i = 0; $i < 32-$list->count(); $i++)
    <div class="w-9 h-[60px] ">
        <div class="w-full h-full relative flex-col flex justify-end">
            <div class="absolute bottom-6 left-2 w-6 h-6 bg-gray-300 p-1 rounded-full">
                <div class="w-full h-full bg-blue-600 rounded-full flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-2.5 fill-white">
                        <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                    </svg>
                </div>
            </div>
            <div class="border border-gray-300 w-10 text-center h-9 bg-white text-[6px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
                <div>Name</div>
                <div>Username</div>
            </div>
        </div>
    </div>
@endfor


