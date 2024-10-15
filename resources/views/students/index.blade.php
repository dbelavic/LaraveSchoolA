<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Students</title>
</head>
<body>
    <h1>Students List</h1>

        <!-- Filter buttons -->
        <div class="mb-4 text-center">
            <a href="{{ route('students.filter', ['classNumber' => 5]) }}" class="btn btn-primary">
                {{ __('Show Class 5 Students') }}
            </a><br>
            <a href="{{ route('students.filter', ['classNumber' => 6]) }}" class="btn btn-secondary">
                {{ __('Show Class 6 Students') }}
            </a><br>
            <a href="{{ route('students.filter', ['classNumber' => 7]) }}" class="btn btn-secondary">
                {{ __('Show Class 7 Students') }}
            </a><br>
            <a href="{{ route('students.filter', ['classNumber' => 8]) }}" class="btn btn-secondary">
                {{ __('Show Class 8 Students') }}
            </a><br>
            <a href="{{ route('students.index') }}" class="btn btn-info">
                {{ __('Show All Students') }}
            </a><br>
        </div>


    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Class Number</th>
                <th>Class Name</th>
                <th>School</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nameStudent }}</td>
                    <td>{{ $student->surnameStudent }}</td>
                    <td>{{ $student->emailStudent }}</td>
                    <td>{{ $student->classNumber }}</td>
                    <td>{{ $student->className }}</td>
                    <td>{{ $student->school->nameSchool }}</td> <!-- assuming there is a relationship with School model -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
