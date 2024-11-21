<div class="space-y-10">
    <x-slot name="header">Tree view</x-slot>
    <div class="border-t-2 border-orange-600 py-5 shadow-md rounded-md">
        <div class="w-full font-roboto flex items-end justify-between px-5">
            <div class="font-merri text-2xl capitalize">
                welcome <span class="text-orange-700">{{$currentUser->name}}</span>,
            </div>
            <table class="">
                <thead>
                <tr class=" text-sm text-white tracking-wider">
                    <th class="border-2 border-white border-collapse px-2 py-1 rounded-md bg-orange-600">Current
                        User
                    </th>
                    <th class="border-2 border-white border-collapse px-2 py-1 rounded-md bg-green-600">Active
                        User
                    </th>
                    <th class="border-2 border-white border-collapse px-2 py-1 rounded-md bg-red-600">Inactive
                        User
                    </th>
                    <th class="border-2 border-white border-collapse px-2 py-1 rounded-md bg-blue-600">Free Slot
                    </th>
                </tr>
                <tr class=" text-center text-xs text-white tracking-wider">
                    <td class="border-2 border-white border-collapse rounded-md py-1 bg-gray-600">{{$currentUser->name}}</td>
                    <td class="border-2 border-white border-collapse rounded-md py-1 bg-gray-600"></td>
                    <td class="border-2 border-white border-collapse rounded-md py-1 bg-gray-600"></td>
                    <td class="border-2 border-white border-collapse rounded-md py-1 bg-gray-600"></td>
                </tr>
                </thead>
            </table>
        </div>

        <div class="w-full flex flex-col items-center">
            <div class="w-20 h-[88px] ">
                <div class="w-full h-full relative flex-col flex justify-end">
                    <div class="absolute bottom-10 left-4 w-12 h-12 bg-orange-400 p-1.5 rounded-full">
                        <div class="w-full h-full rounded-full flex justify-center items-center border">
                            <img src="{{ $currentUser->profile_photo_url }}" alt="" class="rounded-full">
                        </div>
                    </div>
                    <div
                        class="border border-gray-300 h-16 bg-white text-[10px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
                        <div>{{$currentUser->name}}</div>
                        <div>{{$currentUser->username}}</div>
                    </div>
                </div>
            </div>
            @if($levelOne->isEmpty())
                @for($i = 0; $i < 2-count($levelOne); $i++)
                    <div class="w-20 h-[88px] ">
                        <div class="w-full h-full relative flex-col flex justify-end">
                            <div class="absolute bottom-10 left-4 w-12 h-12 bg-gray-300 p-1.5 rounded-full">
                                <div class="w-full h-full bg-blue-600 rounded-full flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                         class="size-6 fill-white">
                                        <path
                                            d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="border border-gray-300 h-16 bg-white text-[10px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
                                <div>Name</div>
                                <div>Username</div>
                            </div>
                        </div>
                    </div>
                @endfor
            @else
                <div class="w-[900px] flex-col flex items-center">
                    <div class="w-1 h-10 border-l-2 border-gray-400"></div>
                    <div
                        class="w-full mx-auto h-10 border-t-2 rounded-t-2xl border-l-2 border-r-2 border-gray-400"></div>
                </div>
                <div class="w-[950px] justify-between flex">
                    @foreach($levelOne as $child)
                        <div class="w-20 h-[88px] ">
                            <div class="w-full h-full relative flex-col flex justify-end">
                                <div class="absolute bottom-10 left-4 w-12 h-12 bg-green-500 p-1.5 rounded-full">
                                    <div class="w-full h-full rounded-full flex justify-center items-center border">
                                        <img src="{{ $child->profile_photo_url }}" alt="" class="rounded-full">
                                    </div>
                                </div>
                                <div
                                    class="border border-gray-300 h-16 bg-white text-[10px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
                                    <div>{{$child->name}}</div>
                                    <div>{{$child->username}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif
            @if($levelTwo->isEmpty())
                <div class="w-20 h-[88px] ">
                    <div class="w-full h-full relative flex-col flex justify-end">
                        <div class="absolute bottom-10 left-4 w-12 h-12 bg-gray-300 p-1.5 rounded-full">
                            <div class="w-full h-full bg-blue-600 rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="size-6 fill-white">
                                    <path
                                        d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z"/>
                                </svg>
                            </div>
                        </div>
                        <div
                            class="border border-gray-300 h-16 bg-white text-[10px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
                            <div>USER0001</div>
                            <div>USERName1</div>
                        </div>
                    </div>
                </div>
            @else
                <div class="w-[1300px] flex justify-between">
                    @for($i=1; $i<=2; $i++)
                        <div class="w-[430px] flex-col flex items-center">
                            <div class="w-1 h-10 border-l-2 border-gray-400"></div>
                            <div
                                class="w-full mx-auto h-10 border-t-2 rounded-t-2xl border-l-2 border-r-2 border-gray-400"></div>
                        </div>
                    @endfor
                </div>
                <div class="w-full justify-center flex ">
                    @foreach($levelTwo as $index => $grandChild)
                        <div class="w-full flex flex-col items-center  text-xs  ">
                            <div class="w-20 h-[88px] ">
                                <div class="w-full h-full relative flex-col flex justify-end">
                                    <div class="absolute bottom-10 left-4 w-12 h-12 bg-green-500 p-1.5 rounded-full">
                                        <div class="w-full h-full rounded-full flex justify-center items-center border">
                                            <img src="{{ $grandChild->profile_photo_url }}" alt="" class="rounded-full">
                                        </div>
                                    </div>
                                    <div
                                        class="border border-gray-300 h-16 bg-white text-[10px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
                                        <div>{{$grandChild->name}}</div>
                                        <div>{{$grandChild->username}}</div>
                                    </div>
                                </div>
                            </div>
                            @if(isset($levelTwoChildrenCollections[$index]))
                                <div class="w-[280px] flex-col flex items-center">
                                    <div class="w-1 h-4 border-l-2 border-gray-400"></div>
                                    <div
                                        class="w-full mx-auto h-4 border-t-2 border-l-2 border-r-2 border-gray-400"></div>
                                </div>
                                <div class="w-10/12 flex justify-between ">
                                    @foreach($levelTwoChildrenCollections[$index] as $child)
                                        <div class="w-20 h-[88px] ">
                                            <div class="w-full h-full relative flex-col flex justify-end">
                                                <div
                                                    class="absolute bottom-10 left-4 w-12 h-12 bg-green-500 p-1.5 rounded-full">
                                                    <div
                                                        class="w-full h-full rounded-full flex justify-center items-center border">
                                                        <img src="{{ $child->profile_photo_url }}" alt=""
                                                             class="rounded-full">
                                                    </div>
                                                </div>
                                                <div
                                                    class="border border-gray-300 h-16 bg-white text-[10px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
                                                    <div>{{$child->name}}</div>
                                                    <div>{{$child->username}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                {{--                                <div>no data</div>--}}

                            @endif

                            @if(isset($levelTwoChildChildrenCollections[$index]))

                                <div class="w-[350px] flex justify-between">
                                    @for($i=1; $i<=2; $i++)
                                        <div class="w-[125px] flex-col flex items-center">
                                            <div class="w-1 h-4 border-l-2 border-gray-400"></div>
                                            <div
                                                class="w-full mx-auto h-4 border-t-2 border-l-2 border-r-2 border-gray-400"></div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="w-11/12 justify-between flex mt-1">
                                    @foreach($levelTwoChildChildrenCollections[$index] as $childIndex => $greatGrandChildCollection)
                                        @foreach($greatGrandChildCollection as $greatGrandChild)
                                            <div class="w-16 h-[70px] ">
                                                <div class="w-full h-full relative flex-col flex justify-end">
                                                    <div
                                                        class="absolute bottom-8 left-3 w-10 h-10 bg-green-500 p-1.5 rounded-full">
                                                        <div
                                                            class="w-full h-full bg-blue-600 rounded-full flex justify-center items-center">
                                                            <img src="{{ $greatGrandChild->profile_photo_url }}" alt=""
                                                                 class="rounded-full">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="border border-gray-300 h-12 bg-white text-[8px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md">
                                                        <div>{{$greatGrandChild->name}}</div>
                                                        <div>{{$greatGrandChild->username}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @for($i = 0; $i < 2-$greatGrandChildCollection->count(); $i++)
                                            <div class="w-16 h-[70px] ">
                                                <div class="w-full h-full relative flex-col flex justify-end">
                                                    <div
                                                        class="absolute bottom-8 left-3 w-10 h-10 bg-gray-300 p-1.5 rounded-full">
                                                        <div
                                                            class="w-full h-full bg-blue-600 rounded-full flex justify-center items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                 fill="currentColor" class="size-6 fill-white">
                                                                <path
                                                                    d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="border border-gray-300 h-12 bg-white text-[10px] font-bold text-gray-500 flex-col flex items-center justify-end rounded-md py-1">
                                                        <div>Name</div>
                                                        <div>Username</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    @endforeach
                                </div>
                            @else
                                {{--                                <div>no data</div>--}}
                            @endif
                        </div>
                    @endforeach

                </div>
            @endif
        </div>

    </div>
</div>
