@extends('partials.layout')

@section('content')
    <h1>Notes list</h1>

    <ul>
        @foreach ($notes as $note)
        <li>{{ $note->note }}</li>
        @endforeach
    </ul>

    <a href="{{ url('notes/create') }}" class="badge badge-primary">Create a note</a>
@endsection