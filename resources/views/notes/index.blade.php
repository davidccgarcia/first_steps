@extends('partials.layout')

@section('content')
    <h1>Notes list</h1>
    <a href="{{ url('notes/create') }}" class="btn btn-primary">Create a note</a>
    <br><br>
    <ul class="list-group">
        @foreach ($notes as $note)
        <li class="list-group-item">
            @if ($note->category)
                <span class="label label-info">{{ $note->category->name }}</span>:
            @else 
                <span class="label label-info">Other Category</span>:
            @endif

            {{ substr($note->note, 0, 50) }}...
            <a href="{{ url('notes', $note->id) }}">View note</a>
        </li>
        @endforeach
    </ul>

    {!! $notes->render() !!}
@endsection