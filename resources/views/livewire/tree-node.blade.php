<div class="node">
    <a href="{{ route('tree.show') }}" class="bg-white ml-2.5 text-[9px] max-w-max flex items-center p-1 py-2 border border-gray-700 rounded-sm my-2 gap-x-2">
        <div class="w-6 h-6 bg-orange-700 rounded-full flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                 class="size-4 fill-white">
                <path fill-rule="evenodd"
                      d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                      clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="space-y-1.5">
            <div class="capitalize">{{ $user->name }}</div>
            <div class="text-gray-600">({{ $user->username }})</div>
        </div>
    </a>

    {{--    <strong>{{ $user->name }}</strong> ({{ $user->username }})--}}

    @if ($user->children->isNotEmpty())
        <div>
            @foreach ($user->children as $child)
                @include('livewire.tree-node', ['user' => $child])
            @endforeach
        </div>
    @endif
</div>
