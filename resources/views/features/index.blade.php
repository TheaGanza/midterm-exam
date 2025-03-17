@extends('template.main')

@section('title','Features Table')

@section('content')
<div class="container">
    <h2 class="mb-4">Laravel Features List</h2>
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Feature Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($features as $feature)
                <tr>
                    <td>{{ $feature->id }}</td>
                    <td>{{ $feature->name }}</td>
                    <td>{{ $feature->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection