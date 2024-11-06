<div class="font-lex bg-gradient-to-tl from-blue-100 via-red-50 to-gray-50 py-16 bg-cover bg-center"
     style="background-image: url('../../../images/bg-8.jpg');">
    <x-slot name="header">Tree show</x-slot>
    {{-- border-t-2 border-blue-600 --}}
    <div
        class="bg-white/70 w-9/12 mx-auto h-[40rem] flex  justify-center  rounded-md shadow-md shadow-gray-300 bg-cover ">
        <div class="w-5/12  flex-col flex justify-center items-center px-5">

            <div class="w-11/12 my-12 flex ">
{{--                <div class="relative sm:w-8/12 ">--}}
{{--                    <input  type="Search" id="floating_outlined"--}}
{{--                           class="block px-2.5 pb-2.5 pt-4 sm:w-full w-[250px] text-sm text-gray-900 bg-white rounded-lg border-1 border-gray-300 appearance-none--}}
{{--           dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"--}}
{{--                           placeholder=" " autocomplete="off"/>--}}
{{--                    <label for="floating_outlined"--}}
{{--                           class="absolute text-sm text-gray-500 z-10 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0]--}}
{{--           bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100--}}
{{--           peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4--}}
{{--           rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Search here...</label>--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"--}}
{{--                         aria-hidden="true"--}}
{{--                         class="absolute right-3 bottom-0.5 size-5 -translate-y-1/2 text-slate-700/50 dark:text-slate-300/50">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
            </div>

            <div class="w-11/12 h-8 bg-red-600 flex text-white text-sm justify-evenly items-center font-semibold">
                <div>ID : USER001</div>
                <div>NAME : USERName1</div>
            </div>
            <div class="w-11/12 max-h-[25rem]  overflow-y-auto text-white">
                <x-table.form>
                    <x-slot:table_header name="table_header" class="">

                        <x-table.header-serial width="20%"/>

                        <x-table.header-text sortIcon="none">
                            Members
                        </x-table.header-text>

                        <x-table.header-text sortIcon="none">
                            Member ID
                        </x-table.header-text>

                        <x-table.header-text sortIcon="none">
                            Node
                        </x-table.header-text>


                        <x-table.header-text width="20%" sortIcon="none">
                            Amount
                        </x-table.header-text>


                    </x-slot:table_header>

                    <!-- Table Body ------------------------------------------------------------------------------------------->

                    <x-slot:table_body name="table_body">
                        @foreach($user_data as $index => $user)
                            <x-table.row>
                                <x-table.cell-text>{{ $index+1 }}</x-table.cell-text>
                                <x-table.cell-text>{{$user->name}}</x-table.cell-text>
                                <x-table.cell-text>{{$user->username}}</x-table.cell-text>
                                <x-table.cell-text>{{$user->position}}</x-table.cell-text>
                                <x-table.cell-text>{{1500}}</x-table.cell-text>
                            </x-table.row>
                        @endforeach

                    </x-slot:table_body>
                </x-table.form>

            </div>
            <div class="w-11/12 h-8 bg-blue-600 flex text-white text-sm justify-evenly items-center font-semibold">
                <div class="w-[80%] text-center">Total</div>
                <div class="w-[20%] text-center">50000</div>
            </div>
        </div>

        <div class="w-7/12 flex-col flex justify-center items-center rounded-md">
            <div class="flex justify-center items-center">
                <div class="tree">
                    <div class="text-xl pb-8 text-tangerine underline underline-offset-4 font-semibold ">Network Tree</div>
                    @foreach ($user_data as $user)
                        @include('livewire.tree-node', ['user' => $user])
                    @endforeach
                </div>
                {{--                <x-livewire.network.items.user-card :list="$user"/>--}}
            </div>
        </div>
    </div>

    <div>


        <style>
            .tree {
                margin: 20px;
            }
            .node {
                margin-left: 20px;
                position: relative;
            }
            .node::before {
                content: '';
                position: absolute;
                left: -10px;
                top: -1px;
                border-left: 2px solid darkorange;
                height: 100%;
            }
            .node::after {
                content: '';
                position: absolute;
                left: -9px;
                top: 24px;
                border-top: 1px solid #374151;
                width: 20px;
            }
        </style>

    </div>
</div>
