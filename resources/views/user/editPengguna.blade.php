@extends('layouts.template')

@section('title', 'Edit Pengguna')

@section('content')
    <div class="container py-5">
        <h1 class="mb-5">Edit User</h1>
        <form action="{{ route('updateUser') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" id="" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('user') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
