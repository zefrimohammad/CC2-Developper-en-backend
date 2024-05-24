@extends('layout')
@section('title', 'Login ')
@section('content')
    <div class="container" style="margin-bottom: 7rem;">
        <div class="mt-5 w-50 m-auto">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <form action="{{ route('login.post') }}" method="POST" class="m-auto rounded p-5 shadow-lg" style="width: 400px">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
                <a class="text-decoration-none text d-block mt-3" style="text-align: right; cursor: pointer;">Forgot password?</a>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-secondary mb-3">Log In</button>
            <a class="text-decoration-none text mb-3 d-block" href="{{ route('registration') }}">Don't have account yet? Sign Up</a>
        </form>
    </div>
@endsection
