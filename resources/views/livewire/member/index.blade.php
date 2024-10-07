<div>
    <x-slot name="header">Members</x-slot>
    <div>
        <x-forms.m-panel>

            <x-forms.top-controls/>

            <x-table.caption :caption="'Demo Request'">
                {{$list->count()}}
            </x-table.caption>

            <x-table.form>
                <x-slot:table_header name="table_header" class="bg-purple-100">

                    <x-table.header-serial></x-table.header-serial>

                    <x-table.header-text>profile_photo_path</x-table.header-text>
                    <x-table.header-text wire:click.prevent="sortBy('id')">username
                    </x-table.header-text>
                    <x-table.header-text wire:click.prevent="sortBy('id')">name
                    </x-table.header-text>
                    <x-table.header-text wire:click.prevent="sortBy('id')">email
                    </x-table.header-text>
                    <x-table.header-text>phone</x-table.header-text>
                    <x-table.header-text>usertype</x-table.header-text>


                </x-slot:table_header>

                <x-slot:table_body name="table_body">

                    @foreach($list as $index=>$row)

                        <x-table.row>
                            <x-table.cell-text>{{$index+1}}</x-table.cell-text>
                            <x-table.cell-text>{{$row->profile_photo_path}}</x-table.cell-text>
                            <x-table.cell-text>{{$row->username}}</x-table.cell-text>
                            <x-table.cell-text>{{$row->name}}</x-table.cell-text>
                            <x-table.cell-text>{{$row->email}}</x-table.cell-text>
                            <x-table.cell-text>{{$row->phone}}</x-table.cell-text>
                            <x-table.cell-text>{{$row->usertype}}</x-table.cell-text>
                        </x-table.row>
                    @endforeach
                </x-slot:table_body>

            </x-table.form>
            <x-modal.delete/>
        </x-forms.m-panel>

    </div>
</div>
