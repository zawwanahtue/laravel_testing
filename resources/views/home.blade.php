@extends('layout')

@section('content')
    <h3>Home Page</h3>
    <?php 
        foreach($data as $np => $num){
            echo $np. "=" . $num ."<br>";
        }
    ?>

    @foreach($data as $num => $value)
        {{$num . "=" . $value }} <br>
    @endforeach
@endsection