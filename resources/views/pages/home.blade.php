@extends('layouts.main')

@section('container')
    @auth

        <div class="container mt-3">
            <h1 class="text-center">My Todo List</h1>
            <a href="{{ route('create') }}" class="btn btn-primary">Add Todo</a>
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">1</th>
                        <td>Do Nothing</td>
                        <td>06/11/2023</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    @else
        <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
            <h1 class="text-center">Todo List App</h1>
            <p>Repository : <span><a href="https://github.com/Alhaiza/Todo-App-Laravel-10" class="text-decoration-none fw-bold"
                        target="_blank">Here</a></span></p>
        </div>
    @endauth
@endsection
