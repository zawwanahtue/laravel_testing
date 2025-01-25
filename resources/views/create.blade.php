@extends('layout')

@section('content')
    <br><br>
    <br>
    <div class="container">
      <form action="/contact/create" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="textarea" class="form-control" placeholder="Enter description">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>        
        <a href="/contact" class="btn btn-success">back to contact form</a>
      </form>
    </div>
@endsection
