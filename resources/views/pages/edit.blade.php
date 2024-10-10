@extends('layouts.main')
@section('container')
    <div class="container mt-3">
        <h1>Create Todo</h1>
        <form action="{{ route('update', $todo) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="todo" class="form-label">Todo</label>
                <input type="text"
                    class="form-control @error('todo')
                    is-invalid
                @enderror"
                    id="todo" name="todo" value="{{ old('todo', $todo->todo) }}" autofocus required>
                @error('todo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="due_date" class="form-label">Due Date</label>
                <input type="date"
                    class="form-control @error('due_date')
                    is-invalid
                @enderror"
                    id="due_date" name="due_date" value="{{ old('due_date', $todo->due_date) }}">
                @error('due_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
