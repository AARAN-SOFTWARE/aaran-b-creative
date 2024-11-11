<li class="w-full relative mb-8 space-y-5 font-lex">
    <div class="w-full flex flex-col justify-center items-center mt-5">
        <a href="{{ route('tree.show', [$user->id]) }}"
           class="flex-col flex justify-center items-center rounded relative mt-5">
            <div
                class="absolute bottom-12 border-2 border-white text-white rounded-full h-12 w-12 flex items-center justify-center mb-2 p-1 bg-orange-600">
                <img src="{{ $user->profile_photo_url }}" alt="{{ $user->username }}"
                     class="rounded-full h-full w-full">
            </div>
            <div
                class="flex-col text-xs tracking-wider bg-gray-100 flex border border-gray-100 shadow-md shadow-gray-500 justify-end items-center h-20 p-3 rounded-md">
                <span class="font-semibold">{{ strtok($user->name, ' ') }}</span>
                <span class="text-gray-600">({{ $user->username }})</span>
            </div>
        </a>
    </div>

    @if (!empty($user->children))
        <div class="w-full flex justify-center mt-2 relative">
            <div class="w-full absolute top-0 left-0 right-0 h-4 border-t-2 border-gray-400"></div>
            <!-- Connecting line -->
            <ul class="w-full flex justify-center space-x-10">
                @foreach ($user->children as $child)
                    @include('livewire.network.tree.user-tree', ['user' => $child])
                @endforeach
            </ul>
        </div>
    @endif
</li>



