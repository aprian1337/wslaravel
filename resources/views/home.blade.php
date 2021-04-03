@extends('layouts.master')

@section('title', 'Halaman Home')
@section('content')
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <p class="text-center">Halaman home</p>
    </div>
@endsection
