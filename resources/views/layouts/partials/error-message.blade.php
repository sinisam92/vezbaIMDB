@if($errors->has($field))
    <div class="alert alert-danger">
        @foreach($errors->get($field) as $error)
            {{ $error }}
        @endforeach
    </div>

@endif