<x-guest-layout>

    <form method="POST" action="{{ route('students.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nameStudent" :value="__('Name')" />
            <x-text-input id="nameStudent" class="block mt-1 w-full" type="text" name="nameStudent" :value="old('nameStudent')" required autofocus autocomplete="nameStudent" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

         <!-- Surname -->
         <div>
            <x-input-label for="surnameStudent" :value="__('surnameStudent')" />
            <x-text-input id="surnameStudent" class="block mt-1 w-full" type="text" name="surnameStudent" :value="old('surnameStudent')" required autofocus autocomplete="surnameStudent" />
            <x-input-error :messages="$errors->get('surnameStudent')" class="mt-2" />
        </div>

        <!-- EmailStudent -->
        <div class="mt-4">
            <x-input-label for="emailStudent" :value="__('emailStudent')" />
            <x-text-input id="emailStudent" class="block mt-1 w-full" type="email" name="emailStudent" :value="old('emailStudent')" required autocomplete="emailStudent" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- ClassNumber -->
          <div>
            <x-input-label for="classNumber" :value="__('classNumber')" />
            <x-text-input id="classNumber" class="block mt-1 w-full" type="number" name="classNumber" :value="old('classNumber')" required autofocus autocomplete="classNumber" />
            <x-input-error :messages="$errors->get('classNumber')" class="mt-2" />
        </div>


         <!-- ClassName -->
         <div>
            <x-input-label for="className" :value="__('className')" />
            <x-text-input id="className" class="block mt-1 w-full" type="text" name="className" :value="old('className')" required autofocus autocomplete="className" />
            <x-input-error :messages="$errors->get('className')" class="mt-2" />
        </div>


        <!-- School (Dropdown) -->
           <div class="mt-4">
            <x-input-label for="school_id" :value="__('School')" />
            <select id="school_id" name="school_id" class="block mt-1 w-full" required>
                <option value="">{{ __('Choose a school') }}</option>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}" {{ old('school_id') == $school->id ? 'selected' : '' }}>
                        {{ $school->nameSchool }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('school_id')" class="mt-2" />
        </div>

        <x-primary-button class="ms-4">
            {{ __('Dodaj učenika') }}
        </x-primary-button>


    </form>




</x-guest-layout>
