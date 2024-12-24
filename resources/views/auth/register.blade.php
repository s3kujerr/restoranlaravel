@extends('layouts.app')

@section('title', 'Register') <!-- Set title halaman -->

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Register</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control">
        </div>

        <!-- Already Registered -->
        <div class="d-flex justify-content-between align-items-center mt-4">
            <a href="{{ route('login') }}" class="text-decoration-none">{{ __('Already registered?') }}</a>
            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
        </div>
    </form>
</div>
@endsection
