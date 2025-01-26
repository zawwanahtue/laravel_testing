@extends('layout')

@section('content')
<br><br>
    @foreach ($data as $post)
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <p class="card-text"> {{ 'name =' . $post->name }} </p>
                <p class="card-text"> {{ 'description =' . $post->description }} </p>
                <a href="/contact/{{$post->id}}" class="btn btn-primary">View</a>
            </div>
        </div>
        <br>    
    @endforeach
@endsection
