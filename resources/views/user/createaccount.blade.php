@extends('layout.app')

@section('main')

<div class="col-sm-6 pt-5 pb-5 mx-auto">
    <div class="card shadow">
        <div class="card-header fw-bold text-secondary">Create Account</div>
        <div class="card-body">
            <form action="{{ route('user') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="name">Name</label>
                    <input type="text" class="form-control mt-2" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control mt-2" id="username" name="username" placeholder="Username" value="{{ old('username') }}" required>
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mt-2" id="password" name="password" placeholder="Password" required>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control mt-2" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="age">Age</label>
                    <input type="number" class="form-control mt-2" id="age" name="age" placeholder="Age" value="{{ old('age') }}" required>
                    @error('age')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="gender">Gender</label>
                    <select class="form-select mt-2" id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') === 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="address">Address</label>
                    <textarea class="form-control mt-2" id="address" name="address" rows="3" placeholder="Address" required>{{ old('address') }}</textarea>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="phone">Mobile Number</label>
                    <input type="tel" class="form-control mt-2" id="phone" name="phone" placeholder="Mobile Number" pattern="[0-9]{11}" value="{{ old('phone') }}" required>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3 form-check">
                    <input type="checkbox" class="form-check-input mt-2" id="terms" name="terms" required>
                    <label class="form-check-label" for="terms">I agree to the Terms and Conditions</label>
                    @error('terms')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-dark px-4">Register</button>
                </div>
                <hr>
                <div class="mt-3 text-center">
                    <a href="{{ route('log') }}" class="text-decoration-none">Already have an account? Login here</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
