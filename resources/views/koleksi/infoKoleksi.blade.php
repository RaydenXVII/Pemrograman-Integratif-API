@extends('layouts.template')

@section('title', 'Collection Info')

@section('content')
    <div class="container py-5">
        <h1 class="mb-5">Info Koleksi</h1>
        <div class="mb-4">
            <h5>Nama Koleksi : {{ $collection->namaKoleksi }}</h5>
            <h5>Jenis Koleksi : {{ $collection->jenisKoleksi }}</h5>
            <h5>Jumlah Koleksi : {{ $collection->jumlahKoleksi }}</h5>
        </div>
        <a href="{{ route('collection') }}" class="btn btn-danger">Back</a>
    </div>
@endsection
