@props([
'title' => null,
])
<div class="w-full h-[195px] p-3 border rounded-md">
    <div class="my-2">{{$title}}</div>
    <div class="flex flex-row">
        <div class="w-8/12 flex flex-col text-xs tracking-wider space-y-1.5">
            <span class="my-1">{{$totaluser}}</span>
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

        <div
            class="w-3/12">
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 16.3106 20.4627 18.6515 18.5549 19.8557L18.2395 18.878C17.9043 17.6699 17.2931 16.8681 16.262 16.3834C15.2532 15.9092 13.8644 15.75 12 15.75C10.134 15.75 8.74481 15.922 7.73554 16.4097C6.70593 16.9073 6.09582 17.7207 5.7608 18.927L5.45019 19.8589C3.53829 18.6556 3 16.3144 3 12ZM8.75 10C8.75 8.20507 10.2051 6.75 12 6.75C13.7949 6.75 15.25 8.20507 15.25 10C15.25 11.7949 13.7949 13.25 12 13.25C10.2051 13.25 8.75 11.7949 8.75 10Z" fill="#323232"/>
                <path d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 19.4115 19.4115 21 12 21C4.5885 21 3 19.4115 3 12Z" stroke="#323232" stroke-width="2"/>
                <path d="M15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10Z" stroke="#323232" stroke-width="2"/>
                <path d="M6 19C6.63819 16.6928 8.27998 16 12 16C15.72 16 17.3618 16.6425 18 18.9497" stroke="#323232" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
    </div>
</div>
