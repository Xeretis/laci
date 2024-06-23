<?php

use Illuminate\Support\Facades\Auth;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

state(['email', 'password']);

rules([
    'email' => ['required', 'string', 'email'],
    'password' => ['required', 'string'],
]);

$login = function () {
    $this->validate();

    if (Auth::attempt([
        'email' => $this->email,
        'password' => $this->password,
    ])) {
        session()->flash('success', 'Sikeres bejelentkezés!');

        return redirect()->route('home');
    }

    $this->addError('email', 'Helytelen e-mail cím vagy jelszó!');
}

?>

<div class="min-h-screen flex items-center justify-center">
    <div
        class="w-full bg-white md:rounded-lg shadow dark:border md:mt-0 sm:max-w-lg xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Belépés</h1>
            <form class="space-y-4 md:space-y-6" wire:submit.prevent="login">
                <x-text-input field="email" label="E-mail cím" type="email" wire:model="email"/>
                <x-text-input field="password" label="Jelszó" type="password" wire:model="password"/>
                <x-button type="submit" class="w-full">Bejelentkezés</x-button>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400 leading-none">
                    Még nincs fiókod?
                    <x-link href="{{ route('register') }}">
                        Regisztrálj!
                    </x-link>
                </p>
            </form>
        </div>
    </div>
</div>
