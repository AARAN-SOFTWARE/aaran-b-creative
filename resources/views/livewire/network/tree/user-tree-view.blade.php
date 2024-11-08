<div>
    <x-slot name="header">Referral View</x-slot>

    <div class="p-6">
        <h2 class="text-3xl font-bold mb-4">User Tree View</h2>
        <div class="flex justify-center">
            <ul class="list-none">
                @foreach ($userTree as $user)
                    <li class="relative mb-8">
                        <div class="flex flex-col items-center">
                            <div class="bg-blue-500 text-white rounded-full p-2 h-8 flex items-center justify-center w-8">
                                <img src="{{$user->profile_photo_path}}" alt="{{$user->username}}">
                            </div>
                            <span class="font-semibold">{{ $user->name }}</span> ({{ $user->username }})
                        </div>
                        @if ($user->children)
                            <ul class="flex justify-center mt-2 space-x-10">
                                @foreach ($user->children as $child)
                                    <li class="relative mb-4">
                                        <div class="flex flex-col items-center">
                                            <div class="bg-blue-500 text-white rounded-full p-2 h-8 flex items-center justify-center w-8">
                                                <img src="{{$child->profile_photo_path}}" alt="{{$child->username}}">
                                            </div>
                                            <span class="font-semibold">{{ $child->name }}</span> ({{ $child->username }})
                                        </div>
                                        @if ($child->children)
                                            <ul class="flex justify-center mt-2 space-x-10">
                                                @foreach ($child->children as $grandchild)
                                                    <li class="relative mb-4">
                                                        <div class="flex flex-col items-center">
                                                            <div class="bg-blue-500 text-white rounded-full p-2 h-8 flex items-center justify-center w-8">
                                                                <img src="{{$grandchild->profile_photo_path}}" alt="{{$grandchild->username}}">
                                                            </div>
                                                            <span class="font-semibold">{{ $grandchild->name }}</span> ({{ $grandchild->username }})
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>



    <style>
        /* Custom styles for connecting lines */
        .tree {
            position: relative;
        }

        .tree li {
            list-style-type: none;
            position: relative;
        }

        .tree li::before {
            content: '';
            position: absolute;
            top: -20px; /* Adjust based on your design */
            left: 50%;
            width: 1px;
            height: 20px; /* Height of the vertical line */
            background: #ccc; /* Line color */
            transform: translateX(-50%);
        }

        .tree li:first-child::before {
            display: none; /* Hide line for the first child */
        }

        .tree ul {
            padding-left: 0;
            margin-top: 20px; /* Space between parent and children */
        }
    </style>

</div>
