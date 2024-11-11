<div class="bg-gray-100 py-16">
    <x-slot name="header">Referral View</x-slot>
    <div class="w-10/12 mx-auto pt-16 px-6 bg-gray-50 rounded-md shadow space-y-10">
        <div class="w-full ">
            <h2 class="text-3xl font-bold mb-4">Down line Tree</h2>
            <h2 class="text-sm text-gray-400">The Network of your team</h2>
        </div>
        <div class="w-full mx-auto flex justify-center">
            <ul class="w-full list-none">
                @foreach ($userTree as $user)
                    @include('livewire.network.tree.user-tree', ['user' => $user])
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



