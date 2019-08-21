@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form method="POST" action="/add-cert">
                    @csrf
                    <div class="form-group">
                        <label for="key">Cert key</label>
                        <input type="text" class="form-control" name="key" placeholder="Enter key">
                    </div>
                    <div class="form-group">
                        <label for="response">Cert response</label>
                        <input type="text" class="form-control" name="response" placeholder="Enter response">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
