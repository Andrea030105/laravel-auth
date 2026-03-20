@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col my-3">
            <a href="{{route('admin.projects.create')}}">
                <button class="btn btn-square btn-primary">
                    Add Project
                </button>
            </a>
        </div>
    </div>
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
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="ms-2 btn btn-square btn-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="ms-2 btn btn-square btn-warning">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                                <button class="ms-2 btn btn-square btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection