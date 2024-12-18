<div>
    <x-slot name="header">Withdrawal History</x-slot>

    <x-forms.m-panel>
        <div class="space-y-10">
            <div class="flex flex-row gap-x-5">

                <x-input.search-bar label="Search here.." />
                <x-input.floating label="Start date" type="date"/>
                <x-input.floating label="end date" type="date"/>
            </div>

            <div>
                <x-table.form>
                    <x-slot:table_header name="table_header">

                        <x-table.header-serial width="20%"/>

                        <x-table.header-text sortIcon="none">
                            Payment Details
                        </x-table.header-text>

                        <x-table.header-text sortIcon="none">
                            Withdraw Type
                        </x-table.header-text>


                        <x-table.header-text sortIcon="none">
                            Amount
                        </x-table.header-text>


                        <x-table.header-text width="20%" sortIcon="none">
                            Withdraw date
                        </x-table.header-text>

                        <x-table.header-text width="20%" sortIcon="none">
                            Paid Date
                        </x-table.header-text>

                        <x-table.header-text width="20%" sortIcon="none">
                            Remark
                        </x-table.header-text>

                        <x-table.header-text width="20%" sortIcon="none">
                            Transaction Hash Key
                        </x-table.header-text>


                    </x-slot:table_header>

                    <!-- Table Body ------------------------------------------------------------------------------------------->

                    <x-slot:table_body name="table_body">
                        {{--                        @foreach($user_data as $index => $user)--}}
                        <x-table.row>
                            <x-table.cell-text>1</x-table.cell-text>
                            <x-table.cell-text>Demo001</x-table.cell-text>
                            <x-table.cell-text>UPI</x-table.cell-text>
                            <x-table.cell-text>Rs.1500</x-table.cell-text>
                            <x-table.cell-text>{{date('Y-m-d H:i:s')}}</x-table.cell-text>
                            <x-table.cell-text>{{date('Y-m-d H:i:s')}}</x-table.cell-text>
                            <x-table.cell-text>none</x-table.cell-text>
                            <x-table.cell-text>qwqewdasdasfd</x-table.cell-text>
                        </x-table.row>
                        {{--                        @endforeach--}}

                    </x-slot:table_body>
                </x-table.form>
            </div>
            <div class="text-gray-600">Pagination here.... 1 2 3 4 5 6 ....</div>
        </div>
    </x-forms.m-panel>
</div>

