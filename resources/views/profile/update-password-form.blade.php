<x-form-section submit="updatePassword">
    <x-slot name="title">
        <div class="mt-3">
        {{ __('Update Password') }}
        </div>
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
        <br>    
        <x-label for="current_password" value="{{ __('Current Password') }}" />

            <x-input id="current_password" type="password"  class="form-control w-50 mt-3" wire:model="state.current_password"
             autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
        <br>    
        <x-label for="password" value="{{ __('New Password') }}" />
            
            <x-input id="password" type="password" class="form-control w-50 mt-3"  wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
        <br>    
        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            
            <x-input id="password_confirmation" type="password" class="form-control w-50 mt-3" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
        
        <x-action-message class="me-3 " on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button class="btn btn-success mt-3">
            {{ __('Save') }}
        </x-button>
    </x-slot>

   
</x-form-section>