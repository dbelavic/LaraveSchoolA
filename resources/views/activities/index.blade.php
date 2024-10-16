<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista aktivnosti</title>
</head>
<body>
    <h1>Aktivnosti:</h1>


        <div class="mb-4 text-center">
            <a href="{{ route('dashboard') }}" class="btn btn-primary">
                {{ __('Početna stranica') }}
            </a><br>

        </div>


    <table border="1">
        <thead>
            <tr>
                <th>Naziv aktivnosti</th>
                <th>Voditelj</th>
                <th>Datum kreiranja</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
                    <tr>
                        <td>{{ $activity->nameActivity }}</td>
                        <td>{{ $activity->user->name }}</td>
                        <td>{{ $activity->created_at->format('d.m.Y') }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

