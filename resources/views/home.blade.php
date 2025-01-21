@extends('layout')

@section('content')
<br><br>
    @foreach ($data as $num => $value)
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text"> {{ $num . '=' . $value }} </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <br>
    @endforeach
@endsection
