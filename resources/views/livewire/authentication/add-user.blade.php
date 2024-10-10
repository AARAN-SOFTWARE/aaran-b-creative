<div>
    <x-button.new-x wire:click="create"/>

    <x-forms.create :id="$vid">
        <x-input.floating wire:model="username" label="UserName"/>
        <x-input.floating wire:model="name" label="Name"/>
        <x-input.floating wire:model="email" label="Email"/>
        <x-input.floating wire:model="phone" label="Phone"/>

    </x-forms.create>


</div>
