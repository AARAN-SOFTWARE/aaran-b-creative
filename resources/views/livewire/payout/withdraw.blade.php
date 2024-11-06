<div class="font-lex">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <x-slot name="header">Withdraw Fund</x-slot>

    <x-forms.m-panel class="">

        <div class="bg-gray-50 text-xs h-screen flex-col flex justify-center items-center">
            <div class="bg-white w-5/12 mx-auto space-y-5 bg-white p-5 rounded shadow">
                <div class="text-xl ">WithDraw Your Funds Now.</div>
                <div>
                    Earning Wallet Balance: 0
                </div>
                <div>Total Withdraw: 0</div>
                <div>Total withdraw Amount: 0</div>
                <div class="flex-col flex gap-y-2">
                    <div>Transaction wallet Address:</div>
                    <button class="bg-cyan-700 text-white rounded max-w-max px-4 py-3">Update Now</button>
                </div>
                <div class="flex-col flex gap-y-2">
                    <div>UPI/Bank A/C:</div>
                    <button class="bg-cyan-700 text-white rounded max-w-max px-4 py-3">Update Now</button>
                </div>

                <x-input.floating label="Withdrawal amount"/>
                <x-input.floating label="Transaction password"/>
                <x-input.floating label="Withdrawal Type"/>

                <div>
                    <button class="bg-orange-700 text-white rounded w-full px-4 py-3">Withdraw</button>
                </div>
            </div>

        </div>
    </x-forms.m-panel>
</div>
