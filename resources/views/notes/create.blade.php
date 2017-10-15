@extends('partials.layout')

@section('content')
    <h1>Create a note</h1>
    
    @include('partials.errors')

    <form action="{{ url('notes/store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="note">Note</label>
            <textarea name="note" class="form-control">{{ old('note') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="note" rows="3">Add a note</button>
    </form>
@endsection()