@extends('layout.user')

@section('main')

<div class="row">
    <div class="col-lg-5 ms-5">
        <h1 class="fw-bolder mt-5 pt-5 text-secondary display-3 fst-italic">Register</h1>
        <h1 class="display-3 text-primary">Account</h1>
        <pre>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat.</pre>
        <a class="btn text-white bg-secondary px-4 mt-3" href="{{ route('home') }}">READ MORE</a>
    </div>
    <div class="col float-end">
        <img class="ms-5" style="width: 560px;" src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/3229486/presentation-clipart-md.png" alt="People">
    </div>
</div>

@endsection