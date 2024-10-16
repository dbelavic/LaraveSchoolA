<x-guest-layout>

    <form method="POST" action="{{ route('attendance.store') }}">
        @csrf

        <!-- Student (Dropdown) -->
          <div class="mt-4">
            <label for="student_id">Odaberi učenika</label>
            <select id="student_id" name="student_id" required class="block mt-1 w-full">
                <option value="">-- Odaberi učenika --</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->nameStudent }} {{ $student->surnameStudent }}</option>
                @endforeach
            </select>
        </div>

         <!-- Activity (Dropdown) -->
         <div class="mt-4">
            <label for="activity_id">Odaberi aktivnost</label>
            <select id="activity_id" name="activity_id" required class="block mt-1 w-full">
                <option value="">-- Odaberi aktivnost --</option>
                @foreach($activities as $activity)
                    <option value="{{ $activity->id }}">{{ $activity->nameActivity }}</option>
                @endforeach
            </select>
        </div>

         <!-- Date -->
         <div class="mt-4">
            <label for="dateAttendance">Datum prisustva</label>
            <input type="date" id="dateAttendance" name="dateAttendance" required class="block mt-1 w-full">
        </div>

        <!-- Bilješke -->
        <div class="mt-4">
            <label for="notes">Bilješke</label>
            <textarea id="notes" name="notes" class="block mt-1 w-full" rows="3"></textarea>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="ml-4 btn btn-primary">Spremi prisutnost</button>
        </div>
</div>
</form>

</x-guest-layout>
