<div class="font-lex">
    <x-slot name="header">Top Up</x-slot>

    <div class="bg-gray-50 min-h-screen rounded p-5 ">
        <div class="border-b space-y-5 p-5">
{{--            <div class="text-xl font-merri text-blue-600  rounded-sm">Welcome, {{ $currentUser->name }}</div>--}}
            <div class="text-xs text-gray-500 space-x-3">
                <span><a href="{{route('dashboard')}}">Dashboard</a></span>
                <span>>></span>
                <span><a href="{{route('topUp.index')}}">Top-up</a></span>
                <span>>></span>
                <span><a href="{{route('topUp.report')}}">Top-up Reports</a></span>
            </div>
        </div>

        <div class="w-full h-[30rem] flex-col flex justify-center items-center p-5 rounded ">
            <div class="w-5/12 mx-auto space-y-5 bg-white rounded p-5">
                <div>New TopUp</div>
                <div>Wallet Balance: 0</div>
                <div class="flex-col flex">
                    <x-input.floating wire:model="amount" label="Rupees"/>
                    <div class="text-xs text-orange-700">Amount Should be on Rupees(s)</div>
                </div>
                <x-input.floating wire:model="password" label="Transaction password" />
            <div>
                <button wire:click="getSave()" class="w-full py-3 bg-blue-600 text-white text-md text-center rounded">Proceed</button>
            </div>
            </div>
        </div>
    </div>
</div>
