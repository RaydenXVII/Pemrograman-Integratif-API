@extends('layouts.template')

@section('title', 'User List')

@section('content')
    <div class="container py-5">
        <h1 class="mb-3 ">Daftar Pengguna</h1>
        <a href="{{ route('userRegistration') }}" class="mb-4 btn btn-primary">Tambah</a>
        <div>
            <table class="table rounded table-striped table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Email Pengguna</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <th class="align-items-center ">{{ $item->name }}</th>
                            <td>{{ $item->email }}</td>
                            <td class="justify-center"><a href="{{ route('userDetail', $item->id) }}"
                                    class="btn btn-success">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
