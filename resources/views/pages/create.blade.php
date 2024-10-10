@extends('layouts.main')
@section('container')
    <div class="container mt-3">
        <h1>Create Todo</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="todo" class="form-label">Todo</label>
                <input type="text" class="form-control" id="todo" autofocus>
            </div>
            <div class="mb-3">
                <label for="due_date" class="form-label">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
