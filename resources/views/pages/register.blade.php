@extends('layouts.main')
@section('container')
    <main class="container form-signin container d-flex flex-column align-items-center justify-content-center min-vh-100">
        <form action="{{ route('storeAccount') }}" method="POST">
            @csrf
            <div class="card p-3">
                <h2 class="text-center">Account Registration</h2>
                <h1 class="h3 mb-3 fw-normal text-center"></h1>
                <div class="form-floating">
                    <input type="text"
                        class="form-control @error('name')
                            is-invalid
                        @enderror"
                        id="name" name="name" value="{{ old('name') }}" required>
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email"
                        class="form-control @error('email')
                            is-invalid
                        @enderror"
                        id="email" name="email" required>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password"
                        class="form-control @error('password')
                            is-invalid
                        @enderror"
                        id="password" name="password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
                <p class="mt-3 text-center">Already Have an Account? <a href="{{ route('login') }}"
                        class="text-decoration-none">Login</a></p>
            </div>
        </form>
    </main>
@endsection
