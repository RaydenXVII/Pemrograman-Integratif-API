@extends('layouts.template')

@section('title', 'Collection Registration')

@section('content')
    <div class="container py-5">
        <h1 class="mb-5">Regisrasi Koleksi</h1>
        <form action="{{ route('newCollection') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Koleksi</label>
                <input type="text" class="form-control" name="namaKoleksi">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Koleksi</label>
                <select class="form-select" aria-label="Default select example" name="jenisKoleksi">
                    <option selected disabled>Jenis Koleksi</option>
                    <option value="1" name="jenisKoleksi">Buku</option>
                    <option value="2" name="jenisKoleksi">Majalah</option>
                    <option value="3" name="jenisKoleksi">Cakram Digital</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Koleksi</label>
                <input type="number" class="form-control" name="jumlahKoleksi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('collection') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
