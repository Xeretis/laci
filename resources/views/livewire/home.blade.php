<?php

use Illuminate\Support\Facades\Auth;

$logout = function () {
    Auth::logout();
}

?>

<section class="min-h-screen flex flex-col items-center justify-center text-center">
    <div class="absolute top-0 right-0 flex gap-2 p-4">
        @guest
            <a href="{{ route('login') }}" wire:navigate>
                <x-button outline class="mr-0">
                    Belépés
                    <x-tabler-login class="ml-2"/>
                </x-button>
            </a>
            <a href="{{ route('register') }}" wire:navigate>
                <x-button outline class="mr-0">
                    Regisztrálás
                    <x-tabler-user-plus class="ml-2"/>
                </x-button>
            </a>
        @else
            <x-button outline class="mr-0" wire:click="logout">
                Kijelentkezés
                <x-tabler-logout class="ml-2"/>
            </x-button>
        @endguest
    </div>
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        Laci</h1>
    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400"> / A palacsinta
        kockajáték /</p>
    <div class="flex gap-4 flex-wrap justify-center">
        <div class="flex flex-col gap-4">
            <div
                class="w-96 p-6 bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:border text-left flex flex-col">
                <x-button class="w-full">Új játék létrehozása</x-button>
                <x-button class="w-full" outline>Belépés meglévő játékba</x-button>

            </div>
            <div
                class="w-96 p-6 bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:border text-left flex flex-col">
                <h2 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white leading-none">Publikus
                    játékok</h2>
                <div class="flex gap-2 items-center overflow-hidden">
                    <x-tabler-table-filled class="w-14 h-14 text-gray-500 flex-shrink-0"/>
                    <div class="overflow-hidden">
                        <p class="font-semibold text-gray-900 truncate">Test user, someone, adassdad asdasd asdad ada
                            dadsd</p>
                        <x-badge color="green">Játékosokra vár</x-badge>
                    </div>
                </div>
                <x-link class="text-center mt-4 w-full" href="{{ route('home') }}">Összes publikus játék</x-link>
            </div>
        </div>
        <div
            class="w-96 p-6 bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:border text-left flex flex-col">
            <h2 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white leading-none">
                Statisztikák</h2>
        </div>
        <div
            class="w-96 p-6 bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:border text-left flex flex-col">
            <h2 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white leading-none">
                Játékosok</h2>
        </div>
    </div>
</section>
