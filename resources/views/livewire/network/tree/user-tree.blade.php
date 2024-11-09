{{-- resources/views/livewire/network/tree/user.blade.php --}}
{{--<li class="relative mb-8">--}}
{{--    <div class="flex flex-col items-center">--}}
{{--        <div class="text-white rounded-full  h-12 w-12 flex items-center justify-center mb-2">--}}
{{--            <img  src="{{ $user->profile_photo_url }}" alt="{{ $user->username }}" class="rounded-full h-full w-full">--}}
{{--        </div>--}}
{{--        <span class="font-semibold">{{ $user->name }}</span> ({{ $user->username }})--}}
{{--    </div>--}}

{{--    @if (!empty($user->children))--}}
{{--        <ul class="flex justify-center mt-2 space-x-10">--}}
{{--            @foreach ($user->children as $child)--}}
{{--                @include('livewire.network.tree.user-tree', ['user' => $child])--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endif--}}
{{--</li>--}}
<li class="relative mb-8 space-y-5">
        <div class="flex flex-col items-center mt-5">
            <div class="text-white rounded-full h-12 w-12 flex items-center justify-center mb-2">
                <img src="{{ $user->profile_photo_url }}" alt="{{ $user->username }}"
                     class="rounded-full h-full w-full">
            </div>
            <span class="font-semibold">{{ $user->name }}</span> ({{ $user->username }})
        </div>
        @if (!empty($user->children))
            <div class="flex justify-center mt-2 relative ">
                <div class="w-11/12 mx-auto absolute top-0 left-0 right-0 h-4 border-t border-orange-600"></div>
                <!-- Connecting line -->
                <ul class="flex justify-center space-x-10">
                    @foreach ($user->children as $child)
                        @include('livewire.network.tree.user-tree', ['user' => $child])
                    @endforeach
                </ul>
            </div>
        @endif
</li>
