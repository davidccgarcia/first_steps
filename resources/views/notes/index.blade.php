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
</body>
</html>