@extends('layout')

@section('content')
  <div class="container mt-4">
    <h2 class="mb-3">Simple Bootstrap Table</h2>
    <table class="table table-bordered table-hover">
      <thead class="table-primary">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>john.doe@example.com</td>
          <td>
            <a href="/view/1" class="btn btn-sm btn-primary">View</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>jane.smith@example.com</td>
          <td>
            <a href="/view/2" class="btn btn-sm btn-primary">View</a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>michael.brown@example.com</td>
          <td>
            <a href="/view/3" class="btn btn-sm btn-primary">View</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection