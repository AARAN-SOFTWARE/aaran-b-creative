<div class="font-lex">
    <x-slot name="header">Top Up</x-slot>

    <div class="bg-gray-50 min-h-screen rounded p-5 ">
        <div class="text-xs text-gray-600">
            Dashboard / Topup
        </div>

        <div class="w-full h-[30rem] flex-col flex justify-center items-center p-5 rounded ">
            <div class="w-5/12 mx-auto space-y-5 bg-white rounded p-5">
                <div>New TopUp</div>
                <div>Wallet Balance: 0</div>

                <x-input.floating label="Username"/>
                <div class="flex-col flex">
                    <x-input.floating label="Rupees"/>
                    <div class="text-xs text-orange-700">Amount Should be on Rupees(s)</div>
                </div>

                <x-input.floating label="Transaction password" />
            <div>
                <button class="w-full py-3 bg-blue-600 text-white text-md text-center rounded">Proceed</button>
            </div>
            </div>
        </div>
    </div>
</div>
