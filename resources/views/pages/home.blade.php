@extends('layouts.main')

@section('container')
    @auth
        <div class="container mt-3">
            <h1 class="text-center">My Todo List</h1>
            <a href="{{ route('create') }}" class="btn btn-primary">Add Todo</a>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show my-2" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if ($todos->isEmpty())
                <div class="alert alert-danger mt-3" role="alert">
                    There's No Todos Been Added!
                </div>
            @else
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

                        @foreach ($todos as $todo)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $todo->todo }}</td>
                                <td>{{ $todo->due_date }}</td>
                                <td>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        @endforeach
            @endif

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
