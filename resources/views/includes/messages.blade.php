@if ($errors->any())
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
