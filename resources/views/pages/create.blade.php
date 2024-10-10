@extends('layouts.main')
@section('container')
    <div class="container mt-3">
        <h1>Create Todo</h1>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="todo" class="form-label">Todo</label>
                <input type="text"
                    class="form-control @error('todo')
                    is-invalid
                @enderror"
                    id="todo" name="todo" value="{{ old('todo') }}"" autofocus>
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
                    id="due_date" name="due_date">
                @error('due_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
