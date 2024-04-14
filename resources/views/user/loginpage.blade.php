@extends('layout.reg')

@section('main')

<div class="col-sm-4 mt-5 pt-5 mx-auto">
    <div class="card shadow">
        <div class="card-header fw-bold text-secondary">Login</div>
        <div class="card-body">
            <form action="{{ route('signin') }}" method="POST">
                    @csrf
                    @if($errors->has('email') || $errors->has('password'))
                            <div class="alert alert-danger alert-block">
                                <strong>Invalid credentials</strong>
                            </div>
                    @endif
                <div class="mt-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus/>
                    @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mt-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary px-4 mt-2 mb-3 fw-bold form-control bg-dark">Login</button>
                </div>
                <div class=" text-center">
                    <a class="text-decoration-none" href="{{ route('account') }}">Don't have an account yet? Register here.</a>
                </div>
                </form>
            </div>
    </div>
</div>

@endsection