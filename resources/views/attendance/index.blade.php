<x-guest-layout>
    <div class="container">
        <h1>Prisutnosti</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Linkovi iznad tablice -->
        <div class="mb-3">
            <a href="{{ route('attendance.create') }}" class="btn btn-primary">Dodaj još učenika</a>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Početna stranica</a>
        </div>

        <!-- Stilizirana tablica s rubovima -->
        <table class="table table-bordered" style="width: 100%; border-collapse: collapse;">
            <thead style="background-color: #f8f9fa;">
                <tr>
                    <th style="border: 1px solid #dee2e6; padding: 8px;">Učenik</th>
                    <th style="border: 1px solid #dee2e6; padding: 8px;">Aktivnost</th>
                    <th style="border: 1px solid #dee2e6; padding: 8px;">Datum prisustva</th>
                    <th style="border: 1px solid #dee2e6; padding: 8px;">Bilješke</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendance as $attend)
                    <tr>
                        <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $attend->student->nameStudent }} {{ $attend->student->surnameStudent }}</td>
                        <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $attend->activity->nameActivity }}</td>
                        <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $attend->dateAttendance }}</td>
                        <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $attend->notes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-guest-layout>
