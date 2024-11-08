<div class="text-center">
    {{--    <x-button.new-x />--}}

    {{--    <button wire:click="create" class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-md">Join Us Today!</button>--}}


    <x-jet.authentication-card>

        <x-slot name="logo">
            <x-jet.authentication-card-logo/>
        </x-slot>

        <div class="flex-col flex gap-y-5">
            <x-input.floating wire:model="referrer_id" disabled label="Referrer Id"/>
            <x-input.floating wire:model="username" disabled label="UserName"/>
            <x-input.floating wire:model="name" label="Name"/>
            <x-input.floating wire:model="email" label="Email"/>
            <x-input.floating wire:model="phone" label="Phone"/>
            <x-input.floating wire:model.live="password" type="password" label="Password"/>
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
            <x-input.floating wire:model.live="password_confirmation" type="password" label="Confirm Password"/>
            @error('password_confirmation') <span class="text-red-500">{{ $message }}</span> @enderror

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet.label for="terms">
                        <div class="flex items-center">
                            <x-jet.checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet.label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4 space-x-5">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-button.secondary wire:click.prevent="save">Register</x-button.secondary>
            </div>
        </div>
    </x-jet.authentication-card>

</div>
