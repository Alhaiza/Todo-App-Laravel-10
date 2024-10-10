@extends('layouts.main')
@section('container')
    <main class="container form-signin container d-flex flex-column align-items-center justify-content-center min-vh-100">
        <form action="/login" method="POST">
            @csrf
            <div class="card p-3">
                <h2 class="text-center">Please Login First</h2>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h1 class="h3 mb-3 fw-normal text-center"></h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                <p class="mt-3 text-center">Not Have an Account? <a href="{{ route('register') }}"
                        class="text-decoration-none">Register</a></p>
            </div>
        </form>
    </main>
@endsection
