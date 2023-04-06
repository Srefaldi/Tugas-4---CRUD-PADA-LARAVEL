@extends('layout')

@section('content')
    <div class="w-50 center borde rounded px-3 py-3 mx-auto">
        <h1>Register</h1>
        <img src="{{ asset('storage/images/regis.png') }}" alt="Login" style="heigth: 400px;" width="350px">

        <form action="/sesi/create" method="POST">
            @csrf
            <div class="mb-3">

                <label for="name" class="form-label">Nama </label>
                <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control">
            </div>
            <div class="mb-3">

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" value="{{ Session::get('email') }}" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button class="btn btn-primary" name="submit" type="submit">Register</button><br>
                <a href="/sesi" class="btn btn-success">Back to login</a>
            </div>
        </form>
    </div>
@endsection
