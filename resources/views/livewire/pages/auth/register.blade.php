<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $surname = '';
    public string $address = '';
    public string $city = '';
    public string $zip = '';
    public string $province = '';
    public string $country = '';
    public string $privacy = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'integer'],
            'province' => ['required', 'string', 'max:3'],
            'country' => ['required', 'string', 'max:255'],
            'privacy' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $validated['role'] = 0;

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('inizio', absolute: false), navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register">

        <div class="flex flex-col lg:flex-row lg:justify-between gap-x-2">
            <!-- Name -->
            <div class="mt-4 lg:w-[48%]">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Surname -->
            <div class="mt-4 lg:w-[48%]">
                <x-input-label for="surname" :value="__('Surname')" />
                <x-text-input wire:model="surname" id="surname" class="block mt-1 w-full" type="text" name="surname" required autofocus autocomplete="surname" />
                <x-input-error :messages="$errors->get('surname')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row lg:justify-between gap-x-2">
            <!-- address -->
            <div class="mt-4 lg:w-[48%]">
                <x-input-label for="address" :value="__('Address')" />
                <x-text-input wire:model="address" id="address" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="address" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- city -->
            <div class="mt-4 lg:w-[48%]">
                <x-input-label for="city" :value="__('City')" />
                <x-text-input wire:model="city" id="city" class="block mt-1 w-full" type="text" name="city" required autofocus autocomplete="city" />
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row lg:justify-between gap-x-2">
            <!-- province -->
            <div class="mt-4 lg:w-[18%]">
                <x-input-label for="province" :value="__('province')" />
                <x-text-input wire:model="province" id="province" class="block mt-1 w-full" type="text" name="province" required autofocus autocomplete="province" />
                <x-input-error :messages="$errors->get('province')" class="mt-2" />
            </div>

            <!-- zip -->
            <div class="mt-4 lg:w-[28%]">
                <x-input-label for="zip" :value="__('zip code')" />
                <x-text-input wire:model="zip" id="zip" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="zip" />
                <x-input-error :messages="$errors->get('zip')" class="mt-2" />
            </div>

            <!-- country -->
            <div class="mt-4 lg:w-[48%]">
                <x-input-label for="country" :value="__('Country')" />
                <x-text-input wire:model="country" id="country" class="block mt-1 w-full" type="text" name="country" required autofocus autocomplete="country" />
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <div>
                <div class="flex">
                    <x-input-label for="privacy" :value="__('privacy')" />
                    <input type="checkbox" wire:model="privacy" id="privacy" class="mx-6 rounded-sm" name="privacy" required />
                </div>

                <x-input-error :messages="$errors->get('privacy')" class="mt-2" />
            </div>

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
