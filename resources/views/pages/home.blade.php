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
                                <td>{{ \Carbon\Carbon::parse($todo->due_date)->format('l, F jS, Y') }}</td>

                                <td>
                                    <a href="/edit/{{ $todo->id }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('delete', $todo->id) }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are You Sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
            @endif

            </tbody>
            </table>
            {{ $todos->links() }}
        </div>
    @else
        <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
            <h1 class="text-center">Todo List App</h1>
            <p>Repository : <span><a href="https://github.com/Alhaiza/Todo-App-Laravel-10" class="text-decoration-none fw-bold"
                        target="_blank">Here</a></span></p>
        </div>
    @endauth
@endsection
