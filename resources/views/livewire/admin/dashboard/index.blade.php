<div>
    <div>
        <x-slot name="header">Dashboard</x-slot>

        <div class="w-full px-16 h-[20rem] mx-auto flex flex-row justify-between gap-x-5 p-3">

            <!-- card1 --------------------------------------------------------------------------------------->

            <div class="w-full h-[195px] p-3 border rounded-md">
                <div class="my-2">TOTAL USERS</div>
                <div class="flex flex-row">
                    <div class="w-8/12 flex flex-col text-xs tracking-wider space-y-1.5">
                        <span class="my-1">22</span>
                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>2 Active Users</span>
                        </div>

                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-down'" class="w-4 h-4"/>
                            <span>20 Inactive User</span>
                        </div>

                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'exclamation-circle'" class="w-4 h-4"/>
                            <span>0  blocked User</span>
                        </div>
                    </div>

                    <div class="w-3/12">
                        <svg width="100px" height="100px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9" cy="9" r="2" stroke="#1C274C" stroke-width="1.5"/>
                            <path
                                d="M13 15C13 16.1046 13 17 9 17C5 17 5 16.1046 5 15C5 13.8954 6.79086 13 9 13C11.2091 13 13 13.8954 13 15Z"
                                stroke="#1C274C" stroke-width="1.5"/>
                            <path
                                d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                stroke="#1C274C" stroke-width="1.5"/>
                            <path d="M19 12H15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M19 9H14" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M19 15H16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- card 2 --------------------------------------------------------------------------------------->

            <div class="w-full h-[195px] p-3 border rounded-md">
                <div class="my-2">TOTAL ACTIVATIONS</div>

                <div class="flex flex-row">
                    <div class="w-8/12 flex flex-col text-xs tracking-wider space-y-1.5">
                        <span class="font-semibold my-1">5099</span>
                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>00 Today's Activation</span></div>

                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>06 Current Weeks Activation</span></div>

                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>10 Current Months Activation</span></div>
                    </div>

                    <span class="w-3/12">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 512.001 512.001" xml:space="preserve">
                                <g>
                                    <rect y="304.846" style="fill:#939393;" width="132.858" height="169.763"/>
                                    <rect x="189.572" y="174.554" style="fill:#939393;" width="132.858"
                                          height="300.055"/>
                                    <rect x="379.143" y="37.391" style="fill:#939393;" width="132.858"
                                          height="437.218"/>
                                </g>
                            </svg>

                        </span>
                </div>
            </div>

            <!-- card 3 --------------------------------------------------------------------------------------->
            <div class="w-full h-[195px] p-3 border rounded-md">
                <div class="my-2">TOTAL EARNINGS</div>
                <div class="flex flex-row">
                    <div class="w-8/12 flex flex-col text-xs tracking-wider space-y-1.5">
                        <span class="my-1">499.9</span>
                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>00 Today's Earnings</span></div>

                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>06 Current Week's Earnings </span></div>

                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>10 Current Month's Earnings</span></div>
                    </div>
                    <span class="w-3/12"><svg width="100px" height="100px" viewBox="0 0 21 21"
                                              xmlns="http://www.w3.org/2000/svg">

                    <g fill="none" fill-rule="evenodd" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                       transform="translate(4 3)">

                    <path d="m.5.5v11c0 1.1045695.8954305 2 2 2h11"/>

                    <path d="m2.5 9.5 3-3 2 2 5-5"/>

                    <path d="m12.5 6.5v-3h-3"/>

                    </g>

                    </svg></span>
                </div>
            </div>

            <!-- card 4 --------------------------------------------------------------------------------------->
            <div class="w-full h-[195px] p-3 border rounded-md">
                <div class="my-2 ">PAYOUTS</div>
                <div class="flex flex-row">
                    <div class="w-8/12 flex flex-col text-xs tracking-wider space-y-1.5">
                        <span class="my-1">0</span>
                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>00 Unpaid Payouts</span></div>

                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>06 Paid Payouts</span></div>

                        <div class="inline-flex gap-2">
                            <x-icons.icon :icon="'chevrons-up'" class="w-4 h-4"/>
                            <span>10 Today's Payouts</span></div>
                    </div>
                    <span class="w-3/12"><svg width="100px" height="100px" viewBox="0 0 24 24" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M17.2779 13.8894C17.9527 13.8894 18.519 14.4462 18.4158 15.1125C17.8106 19.0325 14.4548 21.9431 10.4074 21.9431C5.92952 21.9431 2.30005 18.3136 2.30005 13.8368C2.30005 10.1483 5.10215 6.71255 8.25689 5.9357C8.93479 5.76834 9.62952 6.24518 9.62952 6.94307C9.62952 11.6715 9.78847 12.8947 10.6864 13.5599C11.5843 14.2252 12.64 13.8894 17.2779 13.8894Z"
                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                          d="M21.6926 9.9517C21.7463 6.9138 18.0147 2.01696 13.4674 2.10117C13.1137 2.10749 12.8305 2.40222 12.8147 2.75485C12.7 5.25275 12.8547 8.48959 12.9411 9.95696C12.9674 10.4138 13.3263 10.7727 13.7821 10.7991C15.2905 10.8854 18.6453 11.0033 21.1074 10.6306C21.4421 10.5801 21.6874 10.2896 21.6926 9.9517Z"
                          stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                </div>
            </div>

        </div>

        <div class="w-full px-16 h-[35rem] flex flex-row justify-between gap-8">

            <div class="w-8/12 border ">dsddsd</div>
            <div class="w-4/12 border">dsdsdsd</div>

        </div>
    </div>

</div>
