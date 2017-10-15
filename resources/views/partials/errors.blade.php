@if (! $errors->isEmpty()) 
    <div class="alert alert-danger" role="alert">
        <p><strong>Oppps! </strong>Please fix the following errors: </p>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif