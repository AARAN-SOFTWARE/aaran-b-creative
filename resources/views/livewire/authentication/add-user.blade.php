<div class="text-center">
{{--    <x-button.new-x />--}}

    <button wire:click="create" class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-md">Join Us Today!</button>


    <x-forms.create :id="$vid" class="space-y-5">
        <div class="flex-col flex gap-y-5">
            <x-input.floating wire:model="username" label="UserName"/>
            <x-input.floating wire:model="name" label="Name"/>
            <x-input.floating wire:model="email" label="Email"/>
            <x-input.floating wire:model="phone" label="Phone"/>
            <x-input.floating wire:model="password" type="password" label="Password"/>
            <x-input.floating wire:model="password_confirmation" type="password" label="Confirm Password"/>
        </div>
    </x-forms.create>


</div>
