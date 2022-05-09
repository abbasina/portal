@if (session('failed'))
<div class="alert alert-danger">{{ session('failed') }}</div>
@endif
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
@if ($errors->any())

    
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{ $error }}</div>
    
        @endforeach
    

@endif