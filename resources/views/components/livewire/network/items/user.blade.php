<div class="w-20 h-[88px] ">
    <div class="w-full h-full relative flex-col flex justify-end">
        <div class="absolute bottom-10 left-4 w-12 h-12 bg-orange-400 p-1.5 rounded-full">
            <div class="w-full h-full rounded-full flex justify-center items-center border">
                <img src="{{ $currentUser->profile_photo_url }}" alt="" class="rounded-full">
            </div>
        </div>
        <div class="border border-gray-300 h-16 bg-white text-[10px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
            <div>{{$currentUser->name}}</div>
            <div>{{$currentUser->username}}</div>
        </div>
    </div>
</div>
