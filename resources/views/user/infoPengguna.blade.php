@extends('layouts.template')

@section('title', 'Info Pengguna')

@section('content')
    <div class="container py-5">
        <h1 class="mb-5">Info Pengguna</h1>
        <div class="mb-4">
            <h5>Nama Pengguna : {{ $user->name }}</h5>
            <h5>Email Pengguna : {{ $user->email }}</h2>
        </div>
        <a href="{{ route('user') }}" class="btn btn-danger">Back</a>
    </div>
@endsection
