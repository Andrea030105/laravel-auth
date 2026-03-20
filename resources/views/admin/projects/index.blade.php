@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <table class="table table-striped my-3">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{$project->title}}</td>
                        <td>{{$project->description}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection