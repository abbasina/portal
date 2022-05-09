@if (session('failed'))
<div class="alert alert-danger w-lg-50 mb-4">{{ session('failed') }}</div>
@endif
@if (session('success'))
<div class="alert alert-success w-lg-50 mb-4">{{ session('success') }}</div>
@endif
@if ($errors->any())
<div class="alert alert-danger w-lg-50 mb-4">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif