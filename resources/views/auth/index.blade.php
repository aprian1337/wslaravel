@extends('layouts.master')
@section('title', 'Halaman Login')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('auth.login')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @if(session('fail'))
        {{session('fail')}}
    @endif
@endsection