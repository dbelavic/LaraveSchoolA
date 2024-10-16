<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <br>
                    <a href="{{ route('students.create') }}" class="btn btn-primary">Dodaj učenika</a>
                    <br>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Popis svih učenika</a>
                    <br>
                    <a href="{{ route('activities.create') }}" class="btn btn-primary">Dodaj novu aktivnost</a>
                    <br>
                    <a href="{{ route('activities.index') }}" class="btn btn-secondary">Pregled svih aktivnosti</a>
                    <br>
                    <a href="{{ route('attendance.create') }}" class="btn btn-primary">Dodaj prisutnost učenika</a>
                    <br>
                    <a href="{{ route('attendance.index') }}" class="btn btn-secondary">Pregled prisutnosti učenika</a>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
