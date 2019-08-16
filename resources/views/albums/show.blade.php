@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $album->title }}</h1>
            <h2>by {{ $album->artist }}</h1>
            <img src="https://i.scdn.co/image/3e9632a9123d77f5b11d93f1caeb86c0b8f620eb" alt="Album Cover" />
            <p>{{ $album->summary }}</p>
        </div>
    </div>
</div>
@endsection
