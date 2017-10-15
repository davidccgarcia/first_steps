<!DOCTYPE html>
<html>
<head>
    <title>Notes list</title>
</head>
<body>
    <h1>Notes list</h1>

    <ul>
        @foreach ($notes as $note)
        <li>{{ $note->note }}</li>
        @endforeach
    </ul>

    <a href="{{ url('notes/create') }}">Create a note</a>
</body>
</html>