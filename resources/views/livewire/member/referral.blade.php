

<div class="font-lex space-y-5">
    <x-slot name="header">My Referrals</x-slot>
    <div class="text-xs text-gray-500 space-x-3">
        <span><a href="{{ route('dashboard') }}">Dashboard</a></span>
        <span>>></span>
        <span><a href="{{ route('referrals.index') }}">Referrals</a></span>
        <span>>></span>
        <span><a href="{{ route('down-line') }}">Tree</a></span>
    </div>
    <div class="p-5 shadow-md border-t-2 border-tangerine rounded-md space-y-5 min-h-screen">
        <div class="border-b space-y-5 p-5">
            <div class="text-xl font-merri text-blue-600 rounded-sm">Welcome, {{ $currentUser->name }}</div>
        </div>
        <div class="flex-col flex font-merri">
            @php
                $colors = ['bg-rose-300', 'bg-pink-300', 'bg-violet-300', 'bg-indigo-300', 'bg-blue-300','bg-sky-300', 'bg-teal-300', 'bg-green-300', 'bg-orange-300', 'bg-red-300'];
            @endphp
            @foreach ($level as $index => $rows)
                @php
                    $colorIndex = ($index - 1) % count($colors);
                    $headerColor = $colors[$colorIndex];
                @endphp
                <x-accordion-single.list header-color="{{ $headerColor }}" text-color="text-sky-700" heading="Level {{ $index }}">
                    <ul class="font-lex tracking-wider">
                        @forelse($rows as $row)
                            <li class="w-full hover:bg-gray-100 px-10 flex items-center py-2">
                                <div class="w-1/5 flex"><img src="{{ $row->profile_photo_url }}" alt="" class="w-9 h-9 rounded-full"></div>
                                <div class="w-1/5 flex">{{ $row->username }}</div>
                                <div class="w-1/5 flex">{{ $row->name }}</div>
                                <div class="w-1/5 flex">{{ date('d-M-Y', strtotime($row->created_at)) }}</div>
                                <div class="w-1/5 flex">Head: {{ optional($row->parent)->name }}</div>
                            </li>
                        @empty
                            <li class="w-full hover:bg-gray-100 px-10 flex items-center py-2">
                                "No Members? No Problem! Start Growing Your Network and Boost Your Income Now!"
                            </li>
                        @endforelse
                    </ul>
                </x-accordion-single.list>
            @endforeach
        </div>
    </div>
</div>


