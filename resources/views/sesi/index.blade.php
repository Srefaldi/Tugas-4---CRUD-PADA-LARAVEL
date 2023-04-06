@extends('layout')

@section('content')
    <div class="w-50 center borde rounded px-3 py-3 mx-auto">

        <h1>Login Admin</h1>
        <img src="{{ asset('storage/images/login.png') }}" alt="Login" style="width: 700px;" width="500px">





        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" value="{{ Session::get('email') }}" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button class="btn btn-primary" name="submit" type="submit">Login</button><br>
                <a href="/" class="btn btn-success">Back to home</a>
            </div>
        </form>
    </div>
@endsection
