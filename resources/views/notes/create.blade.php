@extends('partials.layout')

@section('content')
    <h1>Create a note</h1>

    <form action="{{ url('notes/store') }}" method="POST">
        {{ csrf_field() }}
        <textarea name="note"></textarea>
        <button type="submit">Add a note</button>
    </form>
@endsection()