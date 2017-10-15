@extends('partials.layout')

@section('content')
    <h1>Notes list</h1>
    <a href="{{ url('notes/create') }}" class="btn btn-primary">Create a note</a>
    <br><br>
    <ul class="list-group">
        @foreach ($notes as $note)
        <li class="list-group-item">
            @if ($note->category)
                {{ $note->category->name }}: {{ $note->note }}
            @else 
                <span>Other Category</span>: {{ $note->note }}
            @endif
        </li>
        @endforeach
    </ul>

    {!! $notes->render() !!}
@endsection