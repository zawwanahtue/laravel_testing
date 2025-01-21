@extends('layout')

@section('content')
    <br><br>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $info)
                    <tr>
                        <th scope="row">{{ $info->id }}</th>
                        <td>{{ $info->name }}</td>
                        <td>{{ $info->description }}</td>
                        <td>{{ $info->created_at }}</td>
                        <td>{{ $info->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
