<div>
    <x-slot name="header">TopUp Reports</x-slot>

    <x-forms.m-panel>
        <div class="space-y-10">
            <div class="flex flex-row gap-x-5">

                <x-input.search-bar label="Search here.." />
                <x-input.floating label="Start date" type="date"/>
                <x-input.floating label="end date" type="date"/>
            </div>

            <div class="border-b space-y-5 p-5">
                <div class="text-xs text-gray-500 space-x-3">
                    <span><a href="{{route('dashboard')}}">Dashboard</a></span>
                    <span>>></span>
                    <span><a href="{{route('topUp.index')}}">Top-up</a></span>
                    <span>>></span>
                    <span><a href="{{route('topUp.report')}}">Top-up Reports</a></span>
                </div>
            </div>

            <div>
                <x-table.form>
                    <x-slot:table_header name="table_header">

                        <x-table.header-serial width="20%"/>

                        <x-table.header-text sortIcon="none">
                            Member ID
                        </x-table.header-text>

                        <x-table.header-text sortIcon="none">
                            Members Name
                        </x-table.header-text>


                        <x-table.header-text sortIcon="none">
                            Amount
                        </x-table.header-text>


                        <x-table.header-text width="20%" sortIcon="none">
                            Date
                        </x-table.header-text>


                    </x-slot:table_header>

                    <!-- Table Body ------------------------------------------------------------------------------------------->

                    <x-slot:table_body name="table_body">
                        @foreach($topups as $index => $topup)
                            <x-table.row>
                                <x-table.cell-text>{{$index+1}}</x-table.cell-text>
                                <x-table.cell-text>{{$topup->user->username}}</x-table.cell-text>
                                <x-table.cell-text>{{$topup->user->name}}</x-table.cell-text>
                                <x-table.cell-text>{{$topup->amount}}</x-table.cell-text>
                                <x-table.cell-text>{{$topup->created_at}}</x-table.cell-text>
                            </x-table.row>
                        @endforeach
                    </x-slot:table_body>
                </x-table.form>
            </div>

{{--            <div class="w-7/12 mx-auto py-16">--}}
{{--                {{ $topups->links() }}--}}
{{--            </div>--}}

{{--            <div class="text-gray-600">Pagination here.... 1 2 3 4 5 6 ....</div>--}}
        </div>
    </x-forms.m-panel>
</div>
