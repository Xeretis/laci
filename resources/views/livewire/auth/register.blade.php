<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Livewire\Volt\form;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

state(['name', 'email', 'password', 'password_confirmation']);

rules([
    'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    'password' => ['required', 'string', 'min:8', 'confirmed'],
]);

$register = function () {
    $this->validate();

    DB::transaction(function () {
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $user->profile()->create();
    });

    if (Auth::attempt([
        'email' => $this->email,
        'password' => $this->password,
    ])) {
        session()->flash('success', 'Sikeres regisztració!');

        return redirect()->route('home');
    }
}

?>

<div class="min-h-screen flex items-center justify-center">
    <div
        class="w-full bg-white md:rounded-lg shadow dark:border md:mt-0 sm:max-w-lg xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">Új fiók
                létrehozása</h1>
            <form class="space-y-4 md:space-y-6" wire:submit.prevent="register">
                <x-text-input field="name" label="Név" type="text" wire:model="name"/>
                <x-text-input field="email" label="E-mail cím" type="email" wire:model="email"/>
                <x-text-input field="password" label="Jelszó" type="password" wire:model="password"/>
                <x-text-input field="password_confirmation" label="Jelszó megerősítése" type="password"
                              wire:model="password_confirmation"/>
                <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Fiók létrehozása
                </button>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400 leading-none">
                    Már van fiókod?
                    <x-link href="{{ route('login') }}">
                        Lépj be!
                    </x-link>
                </p>
            </form>
        </div>
    </div>
</div>
