@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul>
                    @foreach ($albums as $album)
                        <li>
                            <a href="/albums/{{ $album->url }}">
                            {{ $album->title }} by {{ $album->artist }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
