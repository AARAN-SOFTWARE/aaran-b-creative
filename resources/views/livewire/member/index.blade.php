<div class="font-lex">
    <x-slot name="header">My Members</x-slot>
    <div>
        <x-forms.m-panel>

            <x-forms.top-controls/>

            <div class="border-b space-y-5 p-5">
                <div class="text-xl font-merri text-blue-600  rounded-sm">Welcome, {{ $currentUser->name }}</div>
                <div class="text-xs text-gray-500 space-x-3">
                    <span><a href="{{route('dashboard')}}">Dashboard</a></span>
                    <span>>></span>
                    <span><a href="{{route('member.index')}}">Team</a></span>
                    <span>>></span>
                    <span><a href="{{route('referrals.index')}}">Referrals</a></span>
                </div>
            </div>
            <div class="py-8 space-y-5">
                <x-table.caption :caption="'Current User Team'">
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

                        @foreach($currentUser->children as  $child)

                            <x-table.row class="bg-stone-50">
                                <x-table.cell-text colspan="2">
                                    <div class="w-full flex justify-center">
                                        <img src="{{$child->profile_photo_url}}" alt="" class="w-12 h-12 rounded-full">
                                    </div>
                                </x-table.cell-text>
                                <x-table.cell-text colspan="">{{ $child->username }}</x-table.cell-text>
                                <x-table.cell-text colspan="5"> Your Team members of <span
                                        class="font-merri text-blue-600 font-semibold text-md">{{ $child->name }}</span>
                                </x-table.cell-text>
                            </x-table.row>
                            @foreach ($child->children as $sl_no => $grandchild)
                                <x-table.row>
                                    <x-table.cell-text>{{$sl_no+1}}</x-table.cell-text>
                                    <x-table.cell-text center>
                                        <div class="w-full flex justify-center">
                                            <img src="{{$grandchild->profile_photo_url}}" alt=""
                                                 class="w-12 h-12 rounded-full">
                                        </div>
                                    </x-table.cell-text>
                                    <x-table.cell-text>{{ $grandchild->username }}</x-table.cell-text>
                                    <x-table.cell-text>{{$grandchild->name}}</x-table.cell-text>
                                    <x-table.cell-text>{{$grandchild->email}}</x-table.cell-text>
                                    <x-table.cell-text>{{$grandchild->phone}}</x-table.cell-text>
                                    <x-table.cell-text>{{ date('d-M-Y', strtotime($grandchild->created_at)) }}</x-table.cell-text>
                                </x-table.row>
                            @endforeach
                        @endforeach
                    </x-slot:table_body>

                </x-table.form>
            </div>


        </x-forms.m-panel>

    </div>
</div>
