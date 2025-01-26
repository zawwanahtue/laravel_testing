@extends('layout')

@section('content')
    <br><br>
    <br>
    <div class="container">
      <form action="/contact" method="post">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="textarea" class="form-control" name="description" placeholder="Enter description" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>        
        <a href="/contact" class="btn btn-success">back to contact form</a>
      </form>
    </div>
@endsection
