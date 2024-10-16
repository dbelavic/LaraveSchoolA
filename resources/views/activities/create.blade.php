<x-guest-layout>

    <form method="POST" action="{{ route('activities.store') }}">
        @csrf

        <!-- Ime aktivnosti  -->
        <div>
            <x-input-label for="nameActivity" :value="__('nameActivity')" />
            <x-text-input id="nameActivity" class="block mt-1 w-full" type="text" name="nameActivity" :value="old('nameActivity')" required autofocus autocomplete="nameActivity" />
            <x-input-error :messages="$errors->get('nameActivity')" class="mt-2" />


            <x-primary-button class="ms-4">
                    {{ __('Dodaj aktivnost') }}
            </x-primary-button>
        </div>
    </form>




</x-guest-layout>
