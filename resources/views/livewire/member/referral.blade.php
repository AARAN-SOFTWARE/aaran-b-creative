<div class="font-lex">
    <x-slot name="header">My Referrals</x-slot>
    <div>
        <x-forms.m-panel>
            <x-forms.top-controls/>
            <div class="border-b space-y-5 p-5">
                <div class="text-xl font-merri text-blue-600  rounded-sm">Welcome, {{ $currentUser->name }}</div>
                <div class="text-xs text-gray-500 space-x-3">
                    <span><a href="{{route('dashboard')}}">Dashboard</a></span>
                    <span>>></span>
                    <span><a href="{{route('referrals.index')}}">Referrals</a></span>
                    <span>>></span>
                    <span><a href="{{route('member.index')}}">Team</a></span>
                </div>
            </div>
            <div class="py-8 space-y-5">
                <x-table.caption :caption="'Current User Referrals'">
                    {{$children->count()}}
                </x-table.caption>
                <x-table.form>
                    <x-slot:table_header name="table_header" class="bg-purple-100">
                        <x-table.header-serial></x-table.header-serial>
                        <x-table.header-text width="12%">profile_photo_path</x-table.header-text>
                        <x-table.header-text wire:click.prevent="sortBy('id')">username
                        </x-table.header-text>
                        <x-table.header-text wire:click.prevent="sortBy('id')">name
                        </x-table.header-text>
                        <x-table.header-text wire:click.prevent="sortBy('id')">email
                        </x-table.header-text>
                        <x-table.header-text>phone</x-table.header-text>
                        <x-table.header-text>Join Date</x-table.header-text>
                    </x-slot:table_header>

                    <x-slot:table_body name="table_body">
                        @foreach($children  as $index=>$row)
                            <x-table.row>
                                <x-table.cell-text>{{$index+1}}</x-table.cell-text>
                                <x-table.cell-text center>
                                    <div class="w-full flex justify-center">
                                        <img src="{{$row->profile_photo_url}}" alt="" class="w-12 h-12 rounded-full">
                                    </div>
                                </x-table.cell-text>
                                <x-table.cell-text>{{ $row->username }}</x-table.cell-text>
                                <x-table.cell-text>{{$row->name}}</x-table.cell-text>
                                <x-table.cell-text>{{$row->email}}</x-table.cell-text>
                                <x-table.cell-text>{{$row->phone}}</x-table.cell-text>
                                <x-table.cell-text>{{ date('d-M-Y', strtotime($row->created_at)) }}</x-table.cell-text>
                            </x-table.row>
                        @endforeach
                    </x-slot:table_body>
                </x-table.form>
                <x-modal.delete/>
            </div>
        </x-forms.m-panel>
    </div>
</div>
