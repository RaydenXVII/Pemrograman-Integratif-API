@extends('layouts.template')

@section('title', 'Collections List')

@section('content')
    <div class="container py-5">
        <h1 class="mb-3 ">Daftar Koleksi</h1>
        <a href="{{ route('registerCollection') }}" class="mb-4 btn btn-primary">Tambah</a>
        <div>
            <table class="table rounded table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Koleksi</th>
                        <th scope="col">Jenis Koleksi</th>
                        <th scope="col">Jumlah Koleksi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <th>{{ $item->namaKoleksi }}</th>
                            <th>
                                @if ($item->jenisKoleksi == 1)
                                    Buku
                                @elseif($item->jenisKoleksi == 2)
                                    Majalah
                                @elseif($item->jenisKoleksi == 3)
                                    Cakram Digital
                                @endif
                            </th>
                            <td>{{ $item->jumlahKoleksi }}</td>
                            <td class="justify-center"><a href="{{ route('collectionDetail', $item->id) }}"
                                    class="btn btn-success">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
