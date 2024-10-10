@extends('layouts.main')
@section('container')
    <main class="container form-signin container d-flex flex-column align-items-center justify-content-center min-vh-100">
        <form>
            <div class="card p-3">
                <h2 class="text-center">Please Login First</h2>
                <h1 class="h3 mb-3 fw-normal text-center"></h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </div>
        </form>
    </main>
@endsection
