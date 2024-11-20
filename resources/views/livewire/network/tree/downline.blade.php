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
        <div class="h-auto overflow-x-auto flex items-center  rounded-md font-lex">
            <div class=" flex-col flex items-center justify-center text-center py-10">
                <!--  Level 0  -->
                <x-livewire.network.items.user :current-user="$currentUser"/>
                <!--  Level 1  -->
                <div class="w-[780]  flex-col flex items-center">
                    <div class="w-1 h-4 border-l-2 border-gray-400"></div>
                    <div class="w-[780px] mx-auto h-4 border-t-2 border-l-2 border-r-2 border-gray-400"></div>
                </div>
                <div class="w-[850px] flex  justify-between">
                    <x-livewire.network.items.user-level-1 :list="$levelOne"/>
                </div>
                <!--  Level 2  -->
                <div class="w-[1180px] flex justify-between">
                    @for($i=1; $i<=2; $i++)
                        <div class="w-[400px] flex-col flex items-center">
                            <div class="w-1 h-4 border-l-2 border-gray-400"></div>
                            <div class="w-[400px] mx-auto h-4 border-t-2 border-l-2 border-r-2 border-gray-400"></div>
                        </div>
                    @endfor
                </div>
                <div class="flex w-[1260px] justify-between">
                    <x-livewire.network.items.user-level-2 :list="$levelTwo"/>
{{--                    <x-livewire.network.items.user-level-2 :list="$grandchildren"/>--}}
                </div>

                <div>
                    <h1>Welcome, {{ $currentUser->name }}</h1>

                    @if($levelOne->isEmpty())
                        <p>No Level One children found. Start building your team!</p>
                    @else
                        <h2>Your Level One Children:</h2>
                        <ul>
                            @foreach($levelOne as $child)
                                <li>
                                    <strong>{{ $child->name }}</strong> (Username: {{ $child->username }})
                                    <br/>
                                    Email: {{ $child->email }}
                                    <br/>
                                    Phone: {{ $child->phone }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @if($levelTwo->isEmpty())
                        <p>No Level Two children found.</p>
                    @else
                        <h2>Your Level Two Children:</h2>
                        <ul>
                            @foreach($levelTwo as $index => $grandChild)
                                <li>
                                    <strong>{{ $grandChild->name }}</strong> (Username: {{ $grandChild->username }})
                                    <br/>
                                    Email: {{ $grandChild->email }}
                                    <br/>
                                    Phone: {{ $grandChild->phone }}

                                    @if(isset($levelTwoChildrenCollections[$index]) && !$levelTwoChildrenCollections[$index]->isEmpty())
                                        <h3>First Two Children:</h3>
                                        <ul>
                                            @foreach($levelTwoChildrenCollections[$index] as $greatGrandChild)
                                                <li>
                                                    <strong>{{ $greatGrandChild->name }}</strong> (Username: {{ $greatGrandChild->username }})
                                                    <br/>
                                                    Email: {{ $greatGrandChild->email }}
                                                    <br/>
                                                    Phone: {{ $greatGrandChild->phone }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No children found for this level two child.</p>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

{{--                <!--  Level 3  -->--}}

{{--                <div class="w-[1420px] flex justify-between">--}}
{{--                    @for($i=1; $i<=4; $i++)--}}
{{--                        <div class="w-52 flex-col flex items-center">--}}
{{--                            <div class="w-1 h-4 border-l-2 border-gray-400"></div>--}}
{{--                            <div class="w-52 mx-auto h-4 border-t-2 border-l-2 border-r-2 border-gray-400"></div>--}}
{{--                        </div>--}}
{{--                    @endfor--}}
{{--                </div>--}}
{{--                <div class="flex w-[1740px]  justify-evenly">--}}
{{--                    <x-livewire.network.items.user-level-3 :list="$greatGrandchildren"/>--}}
{{--                </div>--}}
{{--                <!--  Level 4  -->--}}
{{--                <div class="w-[1530px] flex justify-between">--}}
{{--                    @for($i=1; $i<=8; $i++)--}}
{{--                        <div class="w-24 flex-col flex items-center">--}}
{{--                            <div class="w-1 h-4 border-l-2 border-gray-400"></div>--}}
{{--                            <div class="w-24 mx-auto h-4 border-t-2 border-l-2 border-r-2 border-gray-400"></div>--}}
{{--                        </div>--}}
{{--                    @endfor--}}
{{--                </div>--}}
{{--                <div class="flex w-[1680px]  justify-evenly">--}}
{{--                    <x-livewire.network.items.user-level-4 :list="$greatGreatGrandchildren"/>--}}
{{--                </div>--}}
{{--                <!--  Level 5  -->--}}
{{--                <div class="w-[1590px] flex justify-between">--}}
{{--                    @for($i=1; $i<=16; $i++)--}}
{{--                        <div class="w-[50px] flex-col flex items-center">--}}
{{--                            <div class="w-1 h-4 border-l-2 border-gray-400"></div>--}}
{{--                            <div class="w-[50px] mx-auto h-4 border-t-2 border-l-2 border-r-2 border-gray-400"></div>--}}
{{--                        </div>--}}
{{--                    @endfor--}}
{{--                </div>--}}
{{--                <div class="flex w-[1660px]  justify-evenly">--}}
{{--                    <x-livewire.network.items.user-level-5 :list="$greatGreatGreatGrandchildren"/>--}}
{{--                </div>--}}
{{--                <!--  Level 6  -->--}}

{{--                <div class="w-[1650px] flex justify-between space-x-0.5">--}}
{{--                    @for($i=1; $i<=32; $i++)--}}
{{--                        <div class="w-[52px] flex-col flex items-center">--}}
{{--                            <div class="w-1 h-4 border-l-2 border-gray-400"></div>--}}
{{--                            <div class="w-[22px] mx-auto h-4 border-t-2 border-l-2 border-r-2 border-gray-400"></div>--}}
{{--                        </div>--}}
{{--                    @endfor--}}
{{--                </div>--}}
{{--                <div class="flex w-[1660px] justify-evenly ">--}}
{{--                    @for($i=1; $i<=64; $i++)--}}
{{--                        <div class=" w-6 h-6 bg-gray-300 p-0.5 rounded-full">--}}
{{--                            <div class="w-full h-full bg-blue-600 rounded-full flex justify-center items-center">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"--}}
{{--                                     class="size-3 fill-white">--}}
{{--                                    <path--}}
{{--                                        d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endfor--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
